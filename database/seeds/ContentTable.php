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
        for($i=0;$i<10000;++$i)
        {
            DB::table('contents')->insert([
                'mains_id' => rand(1,10),
                'content_name' => $faker->Company,
                'background_color' => $color[mt_rand(0,4)],
               // 'published' => 1
            ]);
        }
    }
}
