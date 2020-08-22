<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RbacAdminModel;

class CommonController extends Controller
{
    //
    /*
     *检查管理员的账号状态
     * */
    public function checkAdminStatus( RbacAdminModel $admin_obj)
    {
        if(empty($admin_obj)){
            return $this -> fail("该账号不存在");
        }

//        $map = [
//            '0' => '账号状态不正常，请联系超级管理员处理',
//            '1' => '账号还没有审核通过',
//            '2' => '账号被锁定，请联系超级管理员解锁'
//        ];

        #状态是3的时候，是正常
        if( $admin_obj -> status == 2 )
        {
            return $this -> fail('账号被锁定，请联系超级管理员解锁' );
        }
        if( $admin_obj -> status == 1 )
        {
            return $this -> fail('账号还没有审核通过' );
        }
        if( $admin_obj -> status == 0)
        {
            return $this -> fail('账号状态不正常，请联系超级管理员处理' );
        }

        return $this -> success();
    }

    /**
     * 成功的返回
     */
    public function success( $data = [] , $status = 200 , $msg = 'success'   )
    {
        return [
            'status' => $status ,
            'msg' => $msg,
            'data' => $data
        ];
    }

    /**
     * 失败的返回
     */
    public function fail( $msg = '' , $status = 1 , $data = [] )
    {
        return [
            'status' => $status ,
            'msg' => $msg,
            'data' => $data
        ];
    }
}
