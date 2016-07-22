<?php

use Illuminate\Database\Seeder;

class ChangesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('changes')->insert([
            'slider_image_1' => 'images/1.jpg',
            'slider_image_2' => 'images/2.jpg',
            'slider_image_3' => 'images/3.jpg',
            'footer_1' => 'fa fa-facebook',
            'footer_2' => 'fa fa-twitter',
            'footer_3' => 'fa fa-google-plus',
            'footer_4' => 'fa fa-instagram',
            'footer_5' => 'fa fa-youtube',
            'footer_6' =>'fa fa-pinterest',
            'footer_7' => 'fa fa-behance',
            'footer_8' => 'fa fa-vimeo',
            'contact-mail' => 'Info@pmstu.com',
            'contact-phone' => '0123456789',


          
        ]);
    }
    
 }

