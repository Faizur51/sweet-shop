<?php

namespace Database\Seeders;

use App\Models\Owner;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Owner::create([
            'name'=>'Owner',
            'email'=>'owner@gmail.com',
            'password'=>Hash::make(12345678),
        ]);


        User::create([
            'name'=>'User',
            'email'=>'user@gmail.com',
            'password'=>Hash::make(12345678),
        ]);



        $faker=Factory::create();
        foreach (range(1,10) as $item){
            Owner::create([
                'name'=>$faker->name,
                'email'=>$faker->unique()->email,
                'password'=>Hash::make(12345678),
            ]);
        }
    }
}
