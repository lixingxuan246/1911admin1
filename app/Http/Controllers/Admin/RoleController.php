<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\PowerNodeModel;
use App\Models\RoleModel;
use App\Models\RolePowerNodeModel;
class RoleController extends  Controller

{
    private function getAllPowerNode( )
    {
        $power_node_model = new PowerNodeModel();

        $where = [
            [ 'status' , '=' , 1 ]
        ];
        $obj = $power_node_model -> where( $where ) -> get();

        $power_node_list = collect( $obj ) -> toArray();

        $all_node = [];
        foreach( $power_node_list as $k => $v ){
            if( $v['power_node_pid'] == 0 ){
                $all_node[$v['power_node_id']] = $v;
            }else{
                $all_node[$v['power_node_pid']]['son'][] = $v;
            }
        }
        return $all_node;
    }
    //角色添加
    public function add( Request $request)
    {
//        var_dump(111);exit;
        $power_node = $this ->getAllPowerNode();
        return view('role.add',[
            'all_node' => $power_node
        ]);
    }

    public function store(Request $request){
        $data=$request->except('_token');

        $data['ctime'] = time();
//
       // $res = DB::table('rbac_role')->insert($data);
        $model = new RoleModel();
        $res = $model -> save($data);
//        dd($res);exit;
        if($res){
            return redirect('/role/index');
        }
    }
    public function index( ){
        $res=RoleModel::leftjoin('rbac_power_node','rbac_role.power_node_id','=','rbac_power_node.power_node_id')
            ->paginate(3);
        return view('role.index',['res'=>$res]);
    }
    public function detal( $role_id ){
        $res= DB::table('rbac_role')->where('role_id',$role_id)->delete();
        // dd($res);
        if($res){
            return redirect('/role/index');
        }
    }
    public function edit($role_id)
    {
        $res= DB::table('rbac_role')->where('role_id',$role_id)->first();
        // dd($res);
        return view('role.edit',['res'=>$res]);
    }
    public function update(Request $request, $role_id)
    {
        $data = $request->except('_token');
        // dd($res);
        $res1= DB::table('rbac_role')->where('role_id',$role_id)->update($data);
        // dd($res1);
        if($res1!==false){
            return redirect('/role/index');
        }
    }
}
