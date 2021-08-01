<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategorySeeder::class);
        $this->call(UserSeeder::class);
        $this->call(EmployeeSeeder::class);
        $this->call(JobSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(SupplierSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(TransactionSeeder::class);
        $this->call(TypesSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(LocationSeeder::class);
        $this->call(ManagerSeeder::class);

    }
}
