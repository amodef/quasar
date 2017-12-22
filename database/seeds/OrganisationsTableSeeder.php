<?php

use Illuminate\Database\Seeder;

class OrganisationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('organisations')->insert([
            'name' => 'QBuild SÀRL',
        ]);
        DB::table('organisations')->insert([
            'name' => 'Gabbana SÀRL',
        ]);
    }
}
