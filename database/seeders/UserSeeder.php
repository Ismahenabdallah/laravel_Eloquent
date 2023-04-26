<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {   /*
        *  User::truncate();
        * kif tefsa5 m database donner  wta3mil ta3mil seed el id yebdaw 3 et 4
        *houwa yefsa5 w y3awed min jdid
         */
        User::truncate();
      User::create(['name' => 'ismahen', 'email' => 'ismahen@gmail.com', 'password' => Hash::make('123123')]);
      User::create(['name' => 'ikram', 'email' => 'ikram@gmail.com', 'password' => Hash::make('123123')]);
      /** y na3mlou PostSeeder wa7dou ya najma3hom kol ema kan 3malt wa7dou nzid f database\seeders\DatabaseSeeder.php
       * el PostSeeder zeda bech command line tji ashel  */
      //Post::create(['title' => 'Flight 10', 'description' => 'Flight Flight']);
    }
}
