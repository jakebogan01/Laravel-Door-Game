<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrizesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prizes')->insert([ 'name' => 'Hair Clip', 'message' => 'That Stinks!' ]);
        DB::table('prizes')->insert([ 'name' => 'Box of Crackers', 'message' => 'That Stinks!' ]);
        DB::table('prizes')->insert([ 'name' => 'Novelty Keychain', 'message' => 'That Stinks!' ]);
        DB::table('prizes')->insert([ 'name' => 'Rubber Band', 'message' => 'That Stinks!' ]);
        DB::table('prizes')->insert([ 'name' => 'A Goat', 'message' => 'That Stinks!' ]);
        DB::table('prizes')->insert([ 'name' => 'New Car', 'good_prize' => true, 'message' => 'Winner!' ]);
        DB::table('prizes')->insert([ 'name' => 'Luxury Cruise', 'good_prize' => true, 'message' => 'Winner!' ]);
        DB::table('prizes')->insert([ 'name' => '$10,000 Cash', 'good_prize' => true, 'message' => 'Winner!' ]);
    }
}
