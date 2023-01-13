<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
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
        // \App\Models\User::factory(10)->create();
        $aUsers = [
            [
            'name' => 'John',
            'email' => 'john@test.com',
            'ip_address' => '127.0.0.1',
            'referrer' => 'google.com',
            'user_agent' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:47.0) Gecko/20100101 Firefox/47.3',
            'path' => 'www.test.com/img/sample1.png'
        ],
        [
            'name' => 'Jane',
            'email' => 'jane@test.com',
            'ip_address' => '192.168.1.1',
            'referrer' => 'bing.com',
            'user_agent' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36',
            'path' => 'www.test.com/img/sample4.png'
        ]
        ];
        // foreach ($aUsers as $aUser) {
        //     User::create($aUser);
        // }
        $this->call([
            UserSeeder::class
        ]);
  
    }
}
