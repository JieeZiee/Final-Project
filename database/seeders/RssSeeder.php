<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rss;

class RssSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rss::create([
            'name' => 'CNBC Indonesia',
            'url' => "https://www.cnbcindonesia.com/rss/"
        ]);

        Rss::create([
           'name' => 'Anime Global',
           'url' => 'https://animeanime.global/feed'
        ]);

        Rss::create([
            'name' => 'Anime News Network',
            'url' => "https://www.animenewsnetwork.com/all/rss.xml/"   
        ]);
    }
}
