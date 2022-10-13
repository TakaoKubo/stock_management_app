<?php


namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
        'item_name' => '花子の冒険',
        'item_number' => '100',
        'item_amount' =>  '1500',
        'published' => '2022-10-13 12:00:00',
        ];
    DB::table('books')->insert($param);

    $param = [
        'item_name' => '花子の冒険2',
        'item_number' => '100',
        'item_amount' =>  '3000',
        'published' => '2022-10-13 12:00:00',
        ];
    DB::table('books')->insert($param);

    $param = [
        'item_name' => '花子の冒険3',
        'item_number' => '100',
        'item_amount' =>  '6000',
        'published' => '2022-10-13 12:00:00',
        ];
    DB::table('books')->insert($param);

    $param = [
        'item_name' => '花子の冒険3',
        'item_number' => '100',
        'item_amount' =>  '12000',
        'published' => '2022-10-13 12:00:00',
        ];
    DB::table('books')->insert($param);
    }
}
