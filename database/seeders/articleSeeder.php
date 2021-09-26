<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

//Nama : Alvira Dewi Septyan
//NIM  : 2031710035
//No   : 02
//Kelas: MI 2E

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Article::factory()->count(25)->create();
    }
}