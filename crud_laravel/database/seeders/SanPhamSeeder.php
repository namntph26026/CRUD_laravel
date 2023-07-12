<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('san_pham')->insert([
            "ten_sp"=>"Áo nam đẹp 1",
            "gia_sp"=>10023,
            "id_loai"=>10
        ]);
        DB::table('san_pham')->insert([
            "ten_sp"=>"Áo nam đẹp 2",
            "gia_sp"=>10023,
            "id_loai"=>23
        ]);
        DB::table('san_pham')->insert([
            "ten_sp"=>"Áo nam đẹp 3",
            "gia_sp"=>10023,
            "id_loai"=>24
        ]);
        DB::table('san_pham')->insert([
            "ten_sp"=>"Áo nam đẹp 4",
            "gia_sp"=>10023,
            "id_loai"=>23
        ]);
    }
}
