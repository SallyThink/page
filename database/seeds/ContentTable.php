<?php

use Illuminate\Database\Seeder;

class ContentTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for($i=0;$i<20;++$i)
        {
            DB::table('contents')->insert([
                'mains_id' => mt_rand(1,5),
                'content_name' => $faker->Company,
                'content' => $faker->Text,
                'width' => mt_rand(1,12),
                'positionX'=>mt_rand(1,12),
                'positionY'=>mt_rand(1,10)

            ]);
        }
    }
}
