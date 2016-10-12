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
        for($i=0;$i<7;++$i)
        {
            DB::table('contents')->insert([
                'mains_id' => 5,
                'content_name' => $faker->Company,
                'content' => $faker->Text,
                'positionX'=>mt_rand(1,12),
                'positionY'=>mt_rand(1,10)

            ]);
        }
    }
}
