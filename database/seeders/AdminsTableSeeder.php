<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->delete();
        $adminRecords = [
            ['id' => 1,
            'email' => 'band@admin.com',
            'type' => 'admin',
            'password' => '$2y$10$6/EprypaIIxBMzonCGRsvuCxfzn/ryT2DG54sQ4dTXlUKLclnU8zm'
            ],

        ];
        DB::table('admins')->insert($adminRecords);
    }
}
