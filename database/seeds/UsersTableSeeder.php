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
        DB::table('users')->insert([
            'name' => 'Julien Gascard',
            'email' => 'jgascard@qbuild.lu',
            'password' => bcrypt('secret'),
            'organisation_id' => 1,
            'active' => 1,
        ]);
        DB::table('users')->insert([
            'name' => 'Grégoire Poncelet',
            'email' => 'gponcelet@qbuild.lu',
            'password' => bcrypt('secret'),
            'organisation_id' => 1,
            'active' => 1,
        ]);
        DB::table('users')->insert([
            'name' => 'Jonathan D\'Hondt',
            'email' => 'jdhondt@qbuild.lu',
            'password' => bcrypt('secret'),
            'organisation_id' => 1,
            'active' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'Alex Kieffer',
            'email' => 'alex.kieffer@gabbana.lu',
            'password' => bcrypt('secret'),
            'organisation_id' => 2,
            'active' => 0,
        ]);

    }
}
