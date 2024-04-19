<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plant;

class PlantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Plant::factory(10)->create();
        $p1 = new Plant();
        $p1->scientific_name = 'Digitalis purpurea';
        $p1->common_name = 'Foxglove';
        $p1->family = 'Plantaginaceae';
        $p1->description = 'Foxgloves, scientifically known as Digitalis purpurea, are biennial flowering plants native to Europe. They are characterized by their tall spikes of tubular flowers that range in color from purple to pink, white, and occasionally yellow. The flowers have speckled throats and bloom in early to mid-summer. Foxgloves are beloved for their striking appearance and are commonly grown in gardens for their ornamental value. However, they contain digitalis glycosides, which are toxic if ingested, making them unsuitable for consumption by humans and pets. Despite their toxicity, foxgloves have historical medicinal uses and are a significant source of cardiac medications like digoxin.';
        $p1->care = 'Plant foxgloves in spring or autumn, directly into the garden. Foxgloves can also be planted in large, sturdy containers in loam-based compost. Water in well and continue to water foxgloves in pots regularly, especially in hot weather. Foxgloves require very little care, and will flower and seed without any intervention from the gardener.';
        $p1->height = '2 meters';
        $p1->plant_image = '/storage/plants/1710504880.jpg';
        $p1->supplier = '';
        $p1->save();
    }

    
}
