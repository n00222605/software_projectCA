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

        $p6 = new Plant();
        $p6->scientific_name = 'Crataegus';
        $p6->common_name = 'Hawthorn';
        $p6->family = 'Rosaceae';
        $p6->description = 'Hawthorn, scientifically known as Crataegus, is a genus of shrubs and small trees native to temperate regions of Europe, Asia, and North America. It is characterized by its dense clusters of white or pink flowers and red, berry-like fruits. Hawthorn is valued for its ornamental beauty, as well as its medicinal properties. It has a long history of use in traditional medicine for promoting heart health and treating cardiovascular ailments.';
        $p6->care = 'Plant hawthorn in well-drained soil in full sun to partial shade, ensuring it receives adequate air circulation. Prune regularly to maintain shape and encourage flowering. Hawthorn is relatively low-maintenance once established, but may benefit from occasional fertilization.';
        $p6->height = '3 to 15 meters';
        $p6->plant_image = '/storage/plants/hawthorn.jpg';
        $p6->supplier = '';
        $p6->save();

        $p7 = new Plant();
        $p7->scientific_name = 'Ranunculus';
        $p7->common_name = 'Buttercup';
        $p7->family = 'Ranunculaceae';
        $p7->description = 'Buttercups, scientifically known as Ranunculus, are herbaceous flowering plants found in various habitats across the world. They are characterized by their bright yellow, cup-shaped flowers and deeply lobed leaves. Buttercups typically bloom in spring and early summer, adding vibrant color to meadows, fields, and gardens. While considered ornamental, some species of buttercups are toxic if ingested by humans or animals.';
        $p7->care = 'Plant buttercups in well-drained soil in full sun to partial shade, ensuring they receive adequate moisture during the growing season. Buttercups are relatively low-maintenance and can naturalize in suitable environments. However, they may require occasional division to control their spread.';
        $p7->height = '5 to 80 centimeters';
        $p7->plant_image = '/storage/plants/buttercup.jpg';
        $p7->supplier = '';
        $p7->save();

        $p8 = new Plant();
        $p8->scientific_name = 'Tussilago farfara';
        $p8->common_name = 'Coltsfoot';
        $p8->family = 'Asteraceae';
        $p8->description = 'Coltsfoot, scientifically known as Tussilago farfara, is a perennial herb native to Europe and Asia. It is characterized by its distinctive yellow, daisy-like flowers and large, heart-shaped leaves. Coltsfoot blooms in early spring, often appearing before the leaves emerge. Historically, coltsfoot has been used in traditional medicine for its expectorant properties, primarily to relieve coughs and respiratory ailments.';
        $p8->care = 'Plant coltsfoot in well-drained soil in full sun to partial shade, preferably in moist, fertile conditions. This resilient plant is adaptable to various soil types and can thrive in both sunny and partially shaded areas. Once established, coltsfoot requires minimal maintenance, although it may benefit from occasional watering during dry spells.';
        $p8->height = '10 to 30 centimeters';
        $p8->plant_image = '/storage/plants/coltsfoot.jpg';
        $p8->supplier = '';
        $p8->save();

        $p9 = new Plant();
        $p9->scientific_name = 'Rubus fruticosus';
        $p9->common_name = 'Bramble';
        $p9->family = 'Rosaceae';
        $p9->description = 'Brambles, scientifically known as Rubus fruticosus, are a group of thorny shrubs belonging to the rose family. They are characterized by their arching stems, prickly thorns, and clusters of white or pink flowers followed by blackberries or raspberries. Brambles are native to Europe, Asia, and North America and are commonly found in hedgerows, woodlands, and disturbed areas. While considered invasive in some regions, brambles provide valuable habitat and food for wildlife.';
        $p9->care = 'Plant brambles in well-drained soil in full sun to partial shade, ensuring they have sufficient space to spread. Brambles are relatively low-maintenance once established, requiring occasional pruning to control growth and promote fruit production. Harvest ripe berries in summer for culinary use or leave them for wildlife to enjoy.';
        $p9->height = '1 to 3 meters';
        $p9->plant_image = '/storage/plants/bramble.jpg';
        $p9->supplier = '';
        $p9->save();

        $p10 = new Plant();
        $p10->scientific_name = 'Calluna vulgaris';
        $p10->common_name = 'Heather';
        $p10->family = 'Ericaceae';
        $p10->description = 'Heather, scientifically known as Calluna vulgaris, is a low-growing shrub native to Europe and parts of Asia. It is characterized by its dense clusters of small, bell-shaped flowers in shades of pink, purple, or white. Heather typically blooms in late summer and autumn, providing valuable nectar for bees and other pollinators. Often found in moorlands, heathlands, and acidic soils, heather is cherished for its ornamental beauty and cultural significance.';
        $p10->care = 'Plant heather in well-drained, acidic soil in full sun to partial shade, ensuring it receives adequate moisture during dry periods. Heather is relatively low-maintenance once established, requiring minimal pruning to maintain shape and encourage flowering. Consider incorporating heather into rock gardens, borders, or containers for year-round interest.';
        $p10->height = '10 to 50 centimeters';
        $p10->plant_image = '/storage/plants/heather.jpg';
        $p10->supplier = '';
        $p10->save();

        $p11 = new Plant();
        $p11->scientific_name = 'Prunus spinosa';
        $p11->common_name = 'Blackthorn';
        $p11->family = 'Rosaceae';
        $p11->description = 'Blackthorn, scientifically known as Prunus spinosa, is a deciduous shrub or small tree native to Europe, western Asia, and northwest Africa. It is characterized by its dense, thorny branches, white flowers, and dark blue-black fruits known as sloes. Blackthorn typically blooms in early spring, signaling the end of winter. Revered for its ornamental value and culinary uses, blackthorn is also valued for its dense, thorny growth, making it suitable for hedgerows and wildlife habitats.';
        $p11->care = 'Plant blackthorn in well-drained soil in full sun, preferably in a sheltered location. Prune regularly to maintain shape and control growth, but avoid cutting into old wood to prevent disease. Blackthorn is relatively low-maintenance once established, requiring minimal watering and fertilization.';
        $p11->height = '1.5 to 6 meters';
        $p11->plant_image = '/storage/plants/blackthorn.jpg';
        $p11->supplier = '';
        $p11->save();

        $p12 = new Plant();
        $p12->scientific_name = 'Ulex europaeus';
        $p12->common_name = 'Gorse';
        $p12->family = 'Fabaceae';
        $p12->description = 'Gorse, scientifically known as Ulex europaeus, is a spiny, evergreen shrub native to Europe, North Africa, and parts of Asia. It is characterized by its dense clusters of bright yellow, pea-like flowers and sharp, needle-like leaves. Gorse typically blooms year-round, with peak flowering occurring in spring and summer. Despite its thorny appearance, gorse is valued for its ornamental beauty and ecosystem services, providing habitat and food for wildlife.';
        $p12->care = 'Plant gorse in well-drained soil in full sun, preferably in a sheltered location to protect from strong winds. Prune regularly to maintain shape and control growth, but beware of the sharp thorns. Gorse is relatively low-maintenance once established, requiring minimal watering and fertilization.';
        $p12->height = '1 to 3 meters';
        $p12->plant_image = '/storage/plants/gorse.jpg';
        $p12->supplier = '';
        $p12->save();

    }

    
}
