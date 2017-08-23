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
        //
        $user = ['name' => 'name','email' => 'name@gmail.com','password' => bcrypt('123456')];
		   $db = DB::table('users')->insert($user);
       $user1 = ['name' => 'name1','email' => 'name1@gmail.com','password' => bcrypt('123456')];
		$db = DB::table('users')->insert($user1);
    $user2 = ['name' => 'name2','email' => 'name2@gmail.com','password' => bcrypt('123456')];
		$db = DB::table('users')->insert($user2);
    }
}
