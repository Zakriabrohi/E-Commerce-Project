<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Productseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    //    DB::table('products')->insert([
    //          'name' => 'laptop',
    //          'price' => '12999',
    //          'Category' => 'Electronics',
    //          'Discription' => '7 GN ram',
    //          'Gallery' => 'C:\Users\Zakria\OneDrive\Pictures\laptop_017.jpg'
    //    ]);


    // multiple Data

    DB::table('products')->insert([
         [
             'name' => 'Dell 2',
             'price' => '29999',
             'Category' => 'Electronics',
             'Discription' => '7 GB ram',
             'Gallery' => 'images/Dell2.jpg'
         ],
         [
             'name' => 'HP',
             'price' => '31000',
             'Category' => 'Electronics',
             'Discription' => '8 GB ram',
             'Gallery' => 'images/HP.jpg'
         ],         [
             'name' => 'PC laptop',
             'price' => '39000',
             'Category' => 'Electronics',
             'Discription' => '10 GB ram',
             'Gallery' => 'images/PC_laptop.jpg'
         ],
         [
             'name' => 'iPhone',
             'price' => '115999',
             'Category' => 'Electronics',
             'Discription' => 'this is iphone 13',
             'Gallery' => 'images/iphone.jpg'
         ]

        ]);
    }
}
