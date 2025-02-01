<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
class SeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // x for row from zero
        // y for coulmns from zero
        for($x=1;$x<=18;$x++){
            
            for($y=1;$y<=39;$y++){
                DB::table('seats')->insert([
                    'ref_no' => $x.'-'.$y. Str::random(10),
                    'x_factor' => $x,
                    'y_factor' => $y,
                    'status_g' => '0',
                    'status_f' => '0',

                ]);

        }
        }
      
    }
}
