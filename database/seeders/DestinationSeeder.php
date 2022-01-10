<?php

namespace Database\Seeders;

use App\Models\Destination;
use Illuminate\Database\Seeder;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Destination::create([
            "name" => "Tanah Lot",
            "image_path" => "Beaches1 (Tanah Lot).jpg"
        ]);

        Destination::create([
            "name" => "Pink Beach",
            "image_path" => "Beaches2 (Pink Beach).jpg"
        ]);

        Destination::create([
            "name" => "Tanjung Benoa",
            "image_path" => "Sports1 (Bali Tanjung Benoa).jpg"
        ]);
        
        Destination::create([
            "name" => "Rafting Alas River",
            "image_path" => "Sports2 (Aceh, Sungai Alas, Arung jeram).jpg"
        ]);
        
        Destination::create([
            "name" => "Kragilan Pine Forest",
            "image_path" => "Wild-Life1 (Hutan Pinus Kragilan).jpg"
        ]);
         
        Destination::create([
            "name" => "Juanda Forest Park",
            "image_path" => "Wild-Life2 (Taman Hutan Juanda).jpg"
        ]);
         
        Destination::create([
            "name" => "Single Fin, Bali",
            "image_path" => "Night-Life1 (Single Fin Bali).jpg"
        ]);
         
        Destination::create([
            "name" => "Colosseum Night Club",
            "image_path" => "Night-Life2 (Colosseum Jakarta).jpg"
        ]);
         
        Destination::create([
            "name" => "Grand Indonesia Plaza",
            "image_path" => "Shopping1 (Grand Indonesia).jpg"
        ]);
         
        Destination::create([
            "name" => "Pasar Gede Solo",
            "image_path" => "Shopping2 (Pasar Gede Solo).jpg"
        ]);
         
        Destination::create([
            "name" => "Trans Studio, Bandung",
            "image_path" => "Theme-Park1 (Trans studio, Bandung).jpeg"
        ]);
         
        Destination::create([
            "name" => "Bali Safari and Marine Park",
            "image_path" => "Theme-Park2 (Bali safari and marine park).jpg"
        ]);
         
        Destination::create([
            "name" => "Lake Toba Festivals",
            "image_path" => "Festivals1 (Lake Toba Festival).jpg"
        ]);
        
        Destination::create([
            "name" => "Jakarta Fashion Week",
            "image_path" => "Festivals2 (Jakarta Fashion Week).jpg"
        ]);
        
        Destination::create([
            "name" => "Istiqlal Mosque",
            "image_path" => "Religion1 (Istiqlal Mosque).jpg"
        ]);
        
        Destination::create([
            "name" => "The Blenduk Church",
            "image_path" => "Religion2 (The Blenduk Church).jpg"
        ]);
        
        Destination::create([
            "name" => "Borobudur Temple",
            "image_path" => "Historical1 (Borobudur).jpg"
        ]);
        
        Destination::create([
            "name" => "Sari Garden, Yogyakarta",
            "image_path" => "Historical2 (Taman Sari, Yogyakarta).jpg"
        ]);
        
        Destination::create([
            "name" => "Merah Putih Restaurant, Bali",
            "image_path" => "Culinary1 (Merah Putih Restaurant, Bali).png"
        ]);
        
        Destination::create([
            "name" => "Kesuma Restaurant, Yogyakarta",
            "image_path" => "Culinary2 (Kesuma Restaurant, Yogyakarta).jpg"
        ]);
        
        Destination::create([
            "name" => "Komodo National Park",
            "image_path" => "National-Park1 (Komodo National Park).jpg"
        ]);
        
        Destination::create([
            "name" => "Ujung Kulon National Park",
            "image_path" => "National-Park2 (Ujung kulon national park).jpg"
        ]);

        Destination::create([
            "name" => "Tanjung Puting Nature Reserve",
            "image_path" => "Conservation1 (Cagar Alam Tanjung Puting, Kalimantan Tengah).jpg"
        ]);
        
        Destination::create([
            "name" => "Bukit Barisan Selatan Nature Reserve",
            "image_path" => "Conservation2 (Cagar Alam Bukit Barisan Selatan, Lampung).jpg"
        ]);
        
        Destination::create([
            "name" => "Tana Toraja",
            "image_path" => "Cultural1 (Tana Toraja).jpg"
        ]);
        
        Destination::create([
            "name" => "Prambanan Temple",
            "image_path" => "Cultural2 (Prambanan).jpg"
        ]);
        
        Destination::create([
            "name" => "Sacred Monkey Forest, Ubud",
            "image_path" => "Hot1 (Sacred Monkey Forest, Ubud).jpg"
        ]);
        
        Destination::create([
            "name" => "Bromo Mountain",
            "image_path" => "Hot2 (Bromo).jpg"
        ]);
        
        Destination::create([
            "name" => "Berastagi",
            "image_path" => "Cold1 (Berastagi).jpg"
        ]);
        
        Destination::create([
            "name" => "Dieng Plateau",
            "image_path" => "Cold2 (Dieng Plateau).jpg"
        ]);
        
        Destination::create([
            "name" => "Tuktuk Village, North Sumatra",
            "image_path" => "Countryside1 (Tuktuk Village, North Sumatra).jpg"
        ]);
        
        Destination::create([
            "name" => "Mas Ubud Village, Bali",
            "image_path" => "Countryside2 (Mas Ubud Village, Gianyar, Bali).jpg"
        ]);
        
        Destination::create([
            "name" => "Jakarta City",
            "image_path" => "Urban1 (Jakarta).jfif"
        ]);
        
        Destination::create([
            "name" => "Bandung City",
            "image_path" => "Urban2 (Bandung).jfif"
        ]);
        
    }
}
