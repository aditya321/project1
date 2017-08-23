<?php

use Illuminate\Database\Seeder;

class User_applied_jobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = ['name' => 'name','department' => 'frontend','user_id' => '1'];
		    $db = DB::table('user_applied_jobs')->insert($user);
        $user1 = ['name' => 'name','department' => 'backend','user_id' => '2'];
		    $db = DB::table('user_applied_jobs')->insert($user1);
        $user2 = ['name' => 'name','department' => 'frontend','user_id' => '3'];
		    $db = DB::table('user_applied_jobs')->insert($user2);
    }
}
