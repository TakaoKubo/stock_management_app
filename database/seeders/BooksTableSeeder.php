<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'item_name' => 'キングダメ！',
            'item_number' => '30000',
            'item_amount' => '645',
            'published' => '2022-12-04',
        ];
        DB::table('books')->insert($param);
    }
}
