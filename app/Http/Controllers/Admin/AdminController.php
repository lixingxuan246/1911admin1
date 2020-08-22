<?php

namespace App\Http\Controllers\Admin;

//use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RbacAdminModel;
use App\Models\PowerNodeModel;
use App\Http\Controllers\CommonController;
use App\Models\AdminRoleModel;

class AdminController extends CommonController
{
    public function index(){
        return view('shou.index');
    }
    public function tianjia(){
        return view('category.tianjia');
    }
    public function zhan(){
        $admin_model = new RbacAdminModel();
        $where = [
          ['status' ,'=',3]
        ];
        $res = $admin_model -> where($where) ->get();



        return view('category.zhan',['res' => $res]);
    }
    /*
     * 管理员添加
     * */
    public function create(){
//    $model = new PowerNodeModel();
//        $role_list = $model ->get();
//        $role_where = [
//            [
//                'r.status' , '=' , 1
//            ]
//        ];
//        $role_list = DB::table('rbac_role as r')
//            -> where( $role_where )
//            -> join( 'rbac_role_power_relation as rpnr', 'r.role_id' , '=' , 'rpnr.role_id' )
//            -> join( 'rbac_power_node as rpn', 'rpnr.power_node_id' , '=' , 'rpn.power_node_id' )
//            -> get()
//            -> toArray();
//        $role_list = json_decode(json_encode( $role_list ) , true  );
//
//        $role_new = [];
//
//        foreach( $role_list as $k => $v ){
//            if( $v['power_node_level'] == 1 )
//            {
//                if( !isset($role_new[$v['role_id']])){
//                    $role_new[$v['role_id']] = $v;
//                }else{
//                    $role_new[$v['role_id']]['power_list'][] = $v;
//                }
//            }else{
//                $role_new[$v['role_id']]['power_list'][] = $v;
//            }
//        }
        return view('category/create');
    }

    /*
     * 管理员登录
     *
     * */
    public function login(Request $request){
        $admin_name = $request -> post('admin_name')??'';
        $admin_pwd = $request -> post('admin_pwd')??'';
//return md5($admin_pwd);die;
        $admin_model = new RbacAdminModel();
        $where = [
            ['admin_name','=',$admin_name]
        ];
        $admin_obj =  $admin_model -> where($where) -> first();
        if(empty($admin_obj)){
              return  $this->fail("没有该用户，请重试");
        }
        if(md5($admin_pwd) != $admin_obj -> admin_pwd){
            return $this -> fail("密码不正确");
        }

        $check = $this ->checkAdminStatus($admin_obj);
        if($check['status'] != 200 )
        {
            return $check;
        }

        # 记录成功，记录用户信息
        $request -> session() -> put( 'admin_info' , $admin_obj -> toArray() );

//        return $this -> success();
        return $this->zhan();
    }


    /*
     * 管理员添加
     * */
    public function createadmin(Request $request){
        # 对参数进行校验
        $admin_name = $request -> post('admin_name')??'';
        if( empty( $admin_name ) ){
            return $this -> fail('管理员名字不能为空');
        }
        $real_name = $request -> post('real_name')??'';
        if( empty( $real_name ) ){
            return $this -> fail('管理员真实名字不能为空');
        }
        $pwd = $request -> post('pwd')??'';
        if( empty( $pwd ) ){
            return $this -> fail('密码不能为空');
        }
        $phone = $request -> post('phone')??'';
        if( empty( $phone ) ){
            return $this -> fail('手机号不能为空');
        }
        $email = $request -> post('email')??'';
        if( empty( $email ) ){
            return $this -> fail('管理员邮箱不能为空');
        }
        $admin_type = $request -> post('admin_type')??2;

        $role = $request ->post('role')??[];
//        if( $admin_type  == 2 ){
//            if( empty( $role ) ){
//                return $this -> fail('请选择管理员对应的角色');
//            }
//        }
        # 判断管理员密码不能为空
        $where = [
            [ 'admin_name' , '=' ,$admin_name  ]
        ];

        $admin_model = new RbacAdminModel();

        if( $admin_model -> where( $where ) -> count() > 0 )
        {

            return $this -> fail('管理员名字重复，请确认～');
        }

        $salt = rand(1000,9999);
        $now = time();

        $admin_new_model = new RbacAdminModel();
        $admin_new_model -> admin_name = $admin_name;
        $admin_new_model -> admin_phone = $phone;
        $admin_new_model -> admin_email = $email;
        $admin_new_model -> admin_pwd = md5($pwd.$salt);
        $admin_new_model -> salt = $salt;
        $admin_new_model -> status = 1;
        $admin_new_model -> ctime = $now;
        $admin_new_model -> admin_type = $admin_type;

        # 保存管理员
        $admin_new_model -> save();
        $admin_id = $admin_new_model -> admin_id;
        if( !$admin_id  )
        {
            return $this->fail("用户表写入失败");
        }
# 写入管理员和角色的关联关系
        if( $admin_type == 2 ){
            foreach( $role as $k => $v )
            {
                $admin_role_model = new AdminRoleModel();
                $admin_role_model -> admin_id = $admin_id;
                $admin_role_model -> role_id = $v;
                if( !$admin_role_model -> save() ){
                    return $this->fail("关联表写入失败");
                }
            }
        }
return $this->zhan();

    }

    /**
     * 退出登陆
     */
    public function logout( Request $request )
    {
        $request -> session() -> forget('admin_info');

        return redirect('login');

    }

    public function ok(){
        echo md5(123456);
    }
}
