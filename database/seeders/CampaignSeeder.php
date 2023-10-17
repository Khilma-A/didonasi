<?php

namespace Database\Seeders;

use App\Models\Campaign;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CampaignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Campaign::create([
            'thumbnail' => 'campaigns/1.jpg',
            'title' => 'Ayo Donasi Cepat Cepat Cepat',
            'slug' => 'ayo-donasi-cepat-cepat-cepat',
            'story' => 'Halo! saya mengajak anda untuk berdonasi sebanyak-banyaknya',
            'target' => 10000000,
            'end_date' => '2023-12-12'
        ]);

        Campaign::create([
            'thumbnail' => 'campaigns/2.jpg',
            'title' => 'Ayo Makan Makanan Sehat',
            'slug' => 'ayo-makan-makanan-sehat',
            'story' => 'Halo! saya mengajak anda untuk memakan makanan sehat',
            'target' => 10000000,
            'end_date' => '2023-12-12'
        ]);
    }
}
