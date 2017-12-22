<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AddressesTableSeeder::class,
            OrganisationsTableSeeder::class,
            ProjectsTableSeeder::class,
            UsersTableSeeder::class,
        ]);;
    }
}