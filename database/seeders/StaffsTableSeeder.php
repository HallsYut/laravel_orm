<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StaffsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('staffs')->insert(
            array(
                [
                    'name'=>'สมชาย',
                    'position'=>'ผู้จัดการสาขา',
                    'branch'=>'บางบอน',
                ],
                [
                    'name'=>'สมศรี',
                    'position'=>'พนักงาน',
                    'branch'=>'บางบอน',
                ],
                [
                    'name'=>'สุชาติ',
                    'position'=>'พนักงาน',
                    'branch'=>'บางแค',
                ],
                [
                    'name'=>'สุนทร',
                    'position'=>'ผู้จัดการสาขา',
                    'branch'=>'บางแค',
                ],
                [
                    'name'=>'สรพงษ์',
                    'position'=>'ผู้จัดการสาขา',
                    'branch'=>'บางกะปิ',
                ],
            )
        );
    }
}
