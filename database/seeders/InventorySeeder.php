<?php

namespace Database\Seeders;

use App\Imports\InventoriesImport;
use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Excel::import(new InventoriesImport, storage_path('seed_data/inventory.csv'));
    }
}
