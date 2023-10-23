<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
            'name'=>'Apple Iphone 15 Pro Max',
            'price'=>'1922',
            'category'=>"mobile",
            'description'=>"Iphone with great camera and much more features",
            'gallery'=>"https://imagineonline.store/cdn/shop/files/iPhone_15_Pro_Black_Titanium_PDP_Image_Position-1__en-IN_1445x.jpg?v=1694757924",
        ],
            [
            'name'=>'One Plus 11 5G',
            'price'=>'1200',
            'category'=>"mobile",
            'description'=>"One Plus Mobile with great gaming graphics and much more features",
            'gallery'=>"https://image01.oneplus.net/ebp/202306/02/1-m00-45-8d-ckvtlmr6ww6ataogaai4bn6-vsk935.png?x-amz-process=image/format",
        ],
            [
            'name'=>'Sony Bravia 139 4K Ultra HD',
            'price'=>'625',
            'category'=>"tv",
            'description'=>"Sony Bravia with big screen and ultra hd anti glare display and much more features",
            'gallery'=>"https://m.media-amazon.com/images/I/81wxS8abrgL._SL1500_.jpg",
        ],
            [
            'name'=>'LG 139 Ultra HD with OLED',
            'price'=>'1609',
            'category'=>"tv",
            'description'=>'LG Tv with OLED display and much more features',
            'gallery'=>"https://m.media-amazon.com/images/I/716uL0DAr4L._SL1500_.jpg",
        ],
            [
            'name'=>'Haier 531 side by side Refrigerator',
            'price'=>'1000',
            'category'=>"fridge",
            'description'=>"Haier fridge with much more features",
            'gallery'=>"https://m.media-amazon.com/images/I/513Fzyfyn7L._SL1251_.jpg",
        ],
          ]);
    }
}
