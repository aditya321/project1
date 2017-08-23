<?php

use Illuminate\Database\Seeder;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = ['department' => 'frontend','salary' => '4lpa','experience_required' => 'six months'];
		    $db = DB::table('jobs')->insert($user);
        $user1 = ['department' => 'backend','salary' => '4.5lpa','experience_required' => 'six months'];
		    $db = DB::table('jobs')->insert($user1);
        $user2 = ['department' => 'product owner','salary' => '6lpa','experience_required' => 'one year'];
		    $db = DB::table('jobs')->insert($user2);
        $user3 = ['department' => 'scrum master','salary' => '6.5lpa','experience_required' => 'two years'];
		    $db = DB::table('jobs')->insert($user3);
        $user4 = ['department' => 'project manager','salary' => '7lpa','experience_required' => 'two years'];
		    $db = DB::table('jobs')->insert($user4);
    }
}
