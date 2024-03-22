<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Supplier;
use App\Models\Plant;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Supplier::factory(3)->create();

        foreach(Plant::all() as $plant){
            $suppliers = Supplier::inRandomOrder()->take(rand(1,3))->pluck('id');
            $plant->suppliers()->attach($suppliers);
        }
    }
}
