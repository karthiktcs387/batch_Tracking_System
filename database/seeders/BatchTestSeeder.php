<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BatchTestSeeder extends Seeder
{
    public function run()
    {
        $data = [];

        for ($i = 0; $i < 1000; $i++) {

            $data[] = [
                'file_name' => 'File_'.$i,
                'status' => 'pending',
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('jobs')->insert($data);
    }
}