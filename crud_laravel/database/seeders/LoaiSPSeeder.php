<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class LoaiSPSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('loai_sp')->insert([
            "ten_loai"=>"Quần Nam"
        ]);
        DB::table('loai_sp')->insert([
            "ten_loai"=>"Quần Nam1"
        ]);
        DB::table('loai_sp')->insert([
            "ten_loai"=>"Quần Nam2"
        ]);
        DB::table('loai_sp')->insert([
            "ten_loai"=>"Quần Nam3"
        ]);
        DB::table('loai_sp')->insert([
            "ten_loai"=>"Quần Nam4"
        ]);
        DB::table('loai_sp')->insert([
            "ten_loai"=>"Quần Nam5"
        ]);
        DB::table('loai_sp')->insert([
            "ten_loai"=>"Quần Nam6"
        ]);
        DB::table('loai_sp')->insert([
            "ten_loai"=>"Quần Nam7"
        ]);
        DB::table('loai_sp')->insert([
            "ten_loai"=>"Quần Nam8"
        ]);

    }
}
