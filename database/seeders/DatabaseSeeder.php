<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         //\App\Models\User::factory(10)->create();

         $user = User::factory()->create(
            [
                'name' => 'Spooner',
                'email'=> 'spooner@gmail.com',
            ]
         );
         $user2 = User::factory()->create(
            [
                'name' => 'Jeels',
                'email'=> 'wowow@gmail.com',
            ]
         );

         Listing::factory(50)->create(
            ['user_id' => $user->id]
         );
         Listing::factory(30)->create(
            ['user_id' => 2]
         );
/*
         Listing::create([
             'description' => 'You think you can skadube with us?',
             'tags' => 'skada, uba',
             'company name' => 'SKADUBA',
             'email' => 'skaduba@gmaeil.com',
             'website' => 'www.skaduba.com',
             'location' => 'Ohio',
             'title' => 'Part time Skadubing',
         ]);
         Listing::create([
             'description' => 'You think you can more skadube with us?',
             'tags' => 'skada, extra',
             'company name' => 'SKADUBA',
             'email' => 'skaduba@gmaeil.com',
             'website' => 'www.skadubamore.com',
             'location' => 'Greenland',
             'title' => 'Full time Skadubing',
         ]);*/
    }
}
