<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $music = new \App\Music([
            'file_name' => 'Yellow_Hearts.mp3',
            'file_img' => '',
        ]);


    }
}
