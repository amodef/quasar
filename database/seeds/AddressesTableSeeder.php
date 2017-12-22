<?php

use Illuminate\Database\Seeder;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('addresses')->insert([
            'organisation_id' => 1,
            'street' => '8A, rue des Carrières',
            'postcode' => 'L-8411',
            'city' => 'Steinfort',
            'country' => 'Luxembourg',
        ]);
        DB::table('addresses')->insert([
            'organisation_id' => 2,
            'street' => '12, rue Nicolas Glesener',
            'postcode' => 'L-6131',
            'city' => 'Junglinster',
            'country' => 'Luxembourg',
        ]);
    }
}
