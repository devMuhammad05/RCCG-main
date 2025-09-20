<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Event;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 8 future events
        for ($i = 1; $i <= 8; $i++) {
            Event::create([
                'thumbnail' => "thumbnails/event{$i}.jpg",
                'title' => "Future Event {$i}",
                'sub-title' => "Exciting Future Event {$i}",
                'description' => "This is the description for future event {$i}.",
                'category' => 'Conference',
                'date' => Carbon::now()->addDays($i * 3), // future dates
                'location' => "City {$i}",
                'venue' => "Venue {$i}",
            ]);
        }

        // 2 past events
        for ($i = 1; $i <= 2; $i++) {
            Event::create([
                'thumbnail' => "thumbnails/pastevent{$i}.jpg",
                'title' => "Past Event {$i}",
                'sub-title' => "Memorable Past Event {$i}",
                'description' => "This is the description for past event {$i}.",
                'category' => 'Workshop',
                'date' => Carbon::now()->subDays($i * 5), // past dates
                'location' => "Past City {$i}",
                'venue' => "Past Venue {$i}",
            ]);
        }
    }
}
