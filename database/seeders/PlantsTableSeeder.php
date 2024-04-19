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
        $p1->plant_image = '/storage/plants/foxglove.jpg';
        $p1->supplier = '';
        $p1->save();

        $p2 = new Plant();
        $p2->scientific_name = 'Primula Veris';
        $p2->common_name = 'Cowslip';
        $p2->family = 'Primulaceae';
        $p2->description = "Cowslips, scientifically known as Primula veris, are perennial flowering plants native to Europe and parts of Asia. They are characterized by their clusters of small, fragrant, yellow flowers that bloom in early spring. Cowslips often grow in grasslands, meadows, and woodland edges. These charming flowers are cherished for their delicate appearance and sweet scent, making them popular in gardens and wildflower displays. However, it's worth noting that while cowslips are not as toxic as some other plants in the Primula genus, they still contain toxic compounds and should not be consumed. Despite their toxicity, cowslips have been used in traditional herbal medicine for various purposes, including treating respiratory ailments and promoting relaxation.";
        $p2->care = "Cowslips thrive when planted in well-drained soil during spring or autumn. Opt for partially shaded areas or full sun for optimal growth. Keep the soil consistently moist, especially during dry spells, and consider mulching to retain moisture and suppress weeds. These resilient plants require minimal care once established, with occasional watering and fertilization promoting healthier growth and abundant flowering.";
        $p2->height = '50 centimeters';
        $p2->plant_image = '/storage/plants/cowslip.jpg';
        $p2->supplier = '';
        $p2->save();

        $p3 = new Plant();
        $p3->scientific_name = 'Achillea Millefolium';
        $p3->common_name = 'Yarrow';
        $p3->family = 'Asteraceae';
        $p3->description = "Yarrow, scientifically known as Achillea millefolium, is a hardy perennial herb native to temperate regions of the Northern Hemisphere. It is characterized by its feathery, fern-like leaves and flat clusters of tiny, tightly packed flowers that come in various colors including white, yellow, pink, and red. Yarrow thrives in well-drained soil and full sun, making it a versatile addition to gardens, borders, and wildflower meadows. It requires minimal maintenance once established and is valued for its ornamental beauty as well as its medicinal and culinary uses, with a long history of traditional herbal remedies.";
        $p3->care = "Yarrow thrives in well-drained soil and full sun, perfect for gardens and wildflower meadows. Once established, it needs minimal maintenance, just occasional watering and fertilization. With its feathery leaves and colorful flowers, yarrow adds charm to any landscape. Plus, it boasts a rich history of medicinal and culinary uses, making it a versatile plant for any garden.";
        $p3->height = '90 centimeters';
        $p3->plant_image = '/storage/plants/yarrow.jpg';
        $p3->supplier = '';
        $p3->save();

        $p4 = new Plant();
        $p4->scientific_name = 'Hyacinthoides non-scripta';
        $p4->common_name = 'Bluebell';
        $p4->family = 'Asparagaceae';
        $p4->description = 'Bluebells, scientifically known as Hyacinthoides non-scripta, are perennial flowering plants native to Europe. They are characterized by their graceful, arching stems adorned with delicate, bell-shaped flowers in shades of blue, violet, or white. Blooming in spring, bluebells create stunning carpets in woodlands and shaded areas. Loved for their natural beauty, bluebells are commonly found in gardens and protected woodland areas. While not toxic, bluebells are protected in some regions due to habitat loss.';
        $p4->care = 'Plant bluebells in well-drained soil in partial shade, ideally beneath trees or in woodland areas. They require minimal maintenance once established, only needing occasional watering during dry spells. Avoid disturbing established clumps, as bluebells naturalize easily. Enjoy their enchanting blooms in spring, providing a beautiful display year after year.';
        $p4->height = '30 to 50 centimeters';
        $p4->plant_image = '/storage/plants/bluebell.jpg';
        $p4->supplier = '';
        $p4->save();

        $p5 = new Plant();
        $p5->scientific_name = 'Euphrasia officinalis';
        $p5->common_name = 'Eyebright';
        $p5->family = 'Orobanchaceae';
        $p5->description = 'Eyebright, scientifically known as Euphrasia officinalis, is a small herbaceous plant native to Europe and Asia. It is characterized by its tiny, white or pale lilac flowers with yellow markings and serrated leaves. Eyebright blooms from late spring to early summer, often found in grasslands, meadows, and heathlands. Revered for its traditional medicinal uses in treating eye ailments, such as conjunctivitis and eyestrain, eyebright is commonly used in herbal remedies and teas.';
        $p5->care = 'Plant eyebright in well-drained soil in full sun to partial shade, ensuring it receives adequate moisture during dry periods. Eyebright requires minimal maintenance once established, thriving in naturalized settings. Harvest leaves and flowers for herbal preparations, but be mindful of its delicate nature and protect it from overharvesting.';
        $p5->height = '10 to 30 centimeters';
        $p5->plant_image = '/storage/plants/eyebright.jpg';
        $p5->supplier = '';
        $p5->save();
    }

    
}
