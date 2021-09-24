<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     'name'=>Str::random(10),
        //     'email'=> Str::random(15).'@gmail.com',
        //     'password' => Hash::make(Str::random(10)),
        // ]);
        foreach (range(1,100)as $value){
            DB::table('users')->insert([
                'name'=>Str::random(10),
                'email'=> Str::random(15).'@gmail.com',
                'password' => Hash::make(Str::random(10)),
            ]);    

        }
    }


    
}

