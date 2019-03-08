<?php

use Illuminate\Database\Seeder;

class AssetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datetime = date('Y-m-d H:i:s');
        DB::table('assets')->insert([
            [
                'name'       => NULL,
		    	'type'       => NULL,
				'address'    => NULL,
				'location'   => NULL,
				'city'       => NULL,
				'postcode'   => NULL,
				'state'      => NULL,
				'country'    => NULL,
				'latitude'   => NULL,
				'longitude'  => NULL,
                'created_at' => $datetime,
                'updated_at' => $datetime,
            ],     
        ]);
    }
}
