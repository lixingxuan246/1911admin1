<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PowerNodeModel;
use DB;

class PowerNodeController extends Controller
{
    public function powerNodeAdd(Request $request){

        # 判断是否是post，如果是post 说明是提交数据

        $power_node_model = new PowerNodeModel();

        if( $request -> method() == "POST"  )
        {
            $power_node_model -> power_node_name =  $request -> post('node_name');
            if( empty( $request -> post('pid') ) ){
                $power_node_model -> power_node_level =  1;
            }else{
                $power_node_model -> power_node_level =  2;
            }
            $power_node_model -> power_node_pid = $request -> post('pid');
            $power_node_model -> power_node_url= $request -> post('path');

            $power_node_model -> status = $request -> post('status');
            $power_node_model -> ctime = time();

            if( $power_node_model -> save() ){
                return [
                    'status' => 200,
                    'msg' => 'success'
                ];
            }else{
                return [
                    'status' => 1,
                    'msg' => 'fail'
                ];
            }
        }

        # 查询出系统现有的父级节点

        # 查询所有一级的节点
        $where = [
            [ 'power_node_level' , '=' , 1],
            [ 'status'  , '=' , 1 ]
        ];


        $power_node_list = $power_node_model -> where( $where ) -> get();

      //dd( $power_node_list );
        return view('powernode/add' , [
            'power_list' => $power_node_list
        ]);
    }

    public function powerNodeList(){
//        echo 31231;
        $where = [
            [ 'power_node_level' , '=' , 1],
            [ 'status'  , '=' , 1 ]
        ];
        $power_node_model = new PowerNodeModel();
        $power_node_list = $power_node_model -> where( $where ) ->paginate(2);
    return view('powernode.list', [
        'power_info' => $power_node_list
    ]);
    }
    public function destroy( $power_node_id ){
        $res= DB::table('rbac_power_node')->where('power_node_id',$power_node_id)->delete();
        // dd($res);
        if($res){
            return redirect('/admin/powerNodeList');
        }
    }
    public function auth($power_node_id){
        $data=PowerNodeModel::where('power_node_id',$power_node_id)->first();
        return view('powernode.auth',['data'=>$data]);
    }

}
