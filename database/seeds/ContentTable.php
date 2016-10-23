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
        $color = [0=>'red',1=>'white',2=>'blue',3=>'green',4=>'grey'];
        $faker = \Faker\Factory::create();
        for($i=0;$i<5;++$i)
        {
            DB::table('mains')->insert([
                'name' => $faker->Company,
                'page_name' => $faker->Company,
                'background' => $color[mt_rand(0,4)],
                'published' => 1
            ]);
        }
    }
}
