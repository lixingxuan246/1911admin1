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
        for($i=1 ;$i<100000;$i++){
        $rand =  rand(1000,9999);
//            $phone ='165441'.str_repeat('0', 5  - strlen('',$i)).$i;
        $model = new App\Models\NewsUserModel();
        $model ->nick_name = 'nick_'.$rand;
        $model ->user_name = 'user_'.$rand;
        $model ->phone = '1268265'.$rand;
        $model ->email = '1594589'.$rand.'@qq.com';
        $model ->password = md5('123456'.$rand);
        $model ->rand_code = $rand;
        $model ->reg_type = rand(1 ,2);
        $model ->ctime = time();
        $model->save();
        }
    }
}
