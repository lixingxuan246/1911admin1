<?php

namespace App\Http\Controllers;

use App\models\AdminModel;
use App\models\BrandModel;
use App\models\CategoryModel;
use Illuminate\Routing\Controller as BaseController;

class CommonController extends BaseController
{
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


    /**
     * 失败的返回
     */
    public function success( $data = [] , $status = 200 , $msg = 'success'   )
    {
        return [
            'status' => $status ,
            'msg' => $msg,
            'data' => $data
        ];
    }
}










