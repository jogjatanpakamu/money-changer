<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\MataUang;
use App\Models\Transaction;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        Transaction::create(
            [
                'form' => 'IDR',
                'to' => 'USD',
                 'amout' => 0.9,
                 'status' => 1
            ]
        );
       
        Transaction::create(
            [
                'form' => 'USD',
                'to' => 'IDR',
                 'amout' => 14000,
                 'status' => 1
            ]
        );
    }
}
