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
        // Create three supplier instances
        $s1 = new Supplier();
        $s1->name = 'Woodies';
        $s1->address = 'Tallaght';
        $s1->email = 'woodies@gmail.com';
        $s1->save();

        $s2 = new Supplier();
        $s2->name = 'B&Q';
        $s2->address = 'Belgard';
        $s2->email = 'b&q@gmail.com';
        $s2->save();

        $s3 = new Supplier();
        $s3->name = 'Landscape Depot';
        $s3->address = 'Tallaght';
        $s3->email = 'landscapedepot@gmail.com';
        $s3->save();

        // Associate suppliers with plants
        foreach(Plant::all() as $plant){
            $suppliers = Supplier::inRandomOrder()->take(rand(1, 3))->pluck('id');
            $plant->suppliers()->attach($suppliers);
        }
    }
}