<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            'project_id' => '1015',
            'name' => 'Les Allées Vertes',
        ]);
        DB::table('projects')->insert([
            'project_id' => '1071',
            'name' => 'L2A',
        ]);
        DB::table('projects')->insert([
            'project_id' => '1089',
            'name' => 'Omnia',
        ]);
    }
}
