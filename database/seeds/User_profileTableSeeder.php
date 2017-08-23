<?php

use Illuminate\Database\Seeder;

class User_profileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = ['name' => 'name','job_experience' => '2 years','college_name' => 'bpit','user_id'=>'1'];
		    $db = DB::table('user_profile')->insert($user);
        $user1 = ['name' => 'name1','job_experience' => '1 years','college_name' => 'iit','user_id'=>'2'];
		    $db = DB::table('user_profile')->insert($user1);
        $user2 = ['name' => 'name2','job_experience' => '3 years','college_name' => 'bpit','user_id'=>'3'];
		    $db = DB::table('user_profile')->insert($user2);
    }
}
