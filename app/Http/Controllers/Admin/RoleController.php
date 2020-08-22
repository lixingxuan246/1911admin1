<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\CommonController;
use Illuminate\Http\Request;
use DB;
use App\Models\PowerNodeModel;
use App\Models\RoleModel;
use App\Models\RolePowerNodeModel;
class RoleController extends CommonController
{
    //角色添加
    public function add( Request $request){
        return view('role.add');
    }
    public function store(Request $request){
        $data=$request->except('_token');
        $data['ctime'] = time();
        $res = DB::table('rbac_role')->insert($data);
        if($res){
            return redirect('/role/index');
        }
    }
    public function index( ){
        $res = DB::table('rbac_role')->select('*')->get();
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
