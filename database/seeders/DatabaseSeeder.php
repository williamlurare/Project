<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(5)->create();
        
        // $user = User::factory()->create([
        //     'name' => 'John Cena',
        //     'email' => 'cena@gmail.com'
        // ]);
        // Listing::factory(6)->create([
        //     'user_id' => $user->id
        // ]);
        
        // Listing::create(
        //     [
        //         'title' => 'Follow God', 
        //         'artist' => 'Kanye West',
        //         'label' => 'GOOD',
        //         'genre' => 'Boston, MA',
        //         'email' => 'email1@email.com',
        //         'website' => 'https://www.acme.com',
        //         'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
        //     ],
        // );
        // Listing::create(
        //     [
        //         'title' => 'Water', 
        //         'artist' => 'Kanye West',
        //         'label' => 'GOOD',
        //         'genre' => 'Boston, MA',
        //         'email' => 'email1@email.com',
        //         'website' => 'https://www.acme.com',
        //         'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
        //     ],
        // );


    }
}
