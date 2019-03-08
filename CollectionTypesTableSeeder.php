<?php

use Illuminate\Database\Seeder;

class CollectionTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datetime = date('Y-m-d H:i:s');
        DB::table('collection_types')->insert([
            [
                'fund_id' => 1,
                'fund'    => 'Dana Zakat',
                'code'    => 'IN01-01',
                'name'    => 'Zakat Fitrah',
                'tag'     => NULL,
                'created_at' => $datetime,
                'updated_at' => $datetime,
            ],      
        ]);
    }
}
