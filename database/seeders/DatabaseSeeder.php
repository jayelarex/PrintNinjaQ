<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    
        Model::unguard();

        $this->call(BankSeeder::class);
        $this->call(TransactionSeeder::class);

        Model::reguard();
    }
}
