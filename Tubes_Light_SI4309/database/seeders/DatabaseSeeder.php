<?php

namespace Database\Seeders;

use App\Models\Stock;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // Buat Akun 
        User::create([
            'name' => 'ANDI ROBBY AWALUDDIN',
            'phone' => '1202194287',
            'address' => 'Bandung',
            'password' => Hash::make('robby')
        ]);
        User::create([
            'name' => 'NADYA QORIA AUDRINA',
            'phone' => '1202190164',
            'address' => 'Bandung',
            'password' => Hash::make('nadya')
        ]);
        User::create([
            'name' => 'PUTRI UTAMI RUKMANA',
            'phone' => '1202193308',
            'address' => 'Bandung',
            'password' => Hash::make('putri')
        ]);
        User::create([
            'name' => 'ASRIANA',
            'phone' => '1202194219',
            'address' => 'Bandung',
            'password' => Hash::make('asriana')
        ]);
        User::create([
            'name' => 'SATRIA ADHY NAYOGA',
            'phone' => '1202194226',
            'address' => 'Bandung',
            'password' => Hash::make('satria')
        ]);

        // Buat Lpg
        $values =  [
            [
                'name' => '3 Kg',
                'image' => 'foto/gas3Kg.png'
            ],
            [
                'name' => '5,5 Kg',
                'image' => 'foto/gas5kg.png'
            ],
            [
                'name' => '12 Kg',
                'image' => 'foto/gas12kg.png'
            ],
        ];
        foreach($values as $value) {
            Stock::create([
                'name' => $value['name'],
                'image' => $value['image']
            ]);
        }
    }
}
