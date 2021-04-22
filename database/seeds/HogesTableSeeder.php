<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HogesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'hoge',
            'age' => 10,
        ];
        DB::table('hoges')->insert($param);

        $param = [
            'name' => 'piyo',
            'age' => 15,
        ];
        DB::table('hoges')->insert($param);

        $param = [
            'name' => 'fuga',
            'age' => 20,
        ];
        DB::table('hoges')->insert($param);
    }
}
