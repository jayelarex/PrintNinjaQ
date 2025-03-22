<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Transactions;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Transactions::create([
            'Id' => 'T000000000000001336',
            'TransactionType' => 'N',
            'PostDate' => '2024-04-04',
            'Memo' => 'Cornerstone',
            'BankId' => '1001'
        ]);

        Transactions::create([
            'Id' => 'T000000000000005648',
            'TransactionType' => 'N',
            'PostDate' => '2025-05-23',
            'Memo' => 'Merriweather',
            'BankId' => '1001'
        ]);
    }
}
