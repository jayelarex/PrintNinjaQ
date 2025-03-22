<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Banks;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Banks::create([
            'BankId' => '1001',
            'BankName' => 'Bank One',
        ]);

        Banks::create([
            'BankId' => '1001',
            'BankName' => 'Bank One',
        ]);
    }
}
