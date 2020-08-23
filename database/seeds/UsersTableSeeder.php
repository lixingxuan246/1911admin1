<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        $rand =  rand();
        $model = new App\Models\NewsUserModel();
        $model ->nick_name = 'nick_'.$rand;
        $model ->user_name = 'user_'.$rand;
        $model ->phone = '13012345678';
        $model ->email = '13012345678@qq.com';
        $model ->password = md5('123456'.$rand);
        $model ->rand_code = $rand;
        $model ->reg_type = rand(1 ,2);
        $model ->ctime = time();
        $model->save();
    }
}
