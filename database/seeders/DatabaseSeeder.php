<?php

namespace Database\Seeders;

use App\Models\Info;
use App\Models\Localite;
use App\Models\Profile;
use App\Models\Region;
use App\Models\Service;
use App\Models\SousInfo;
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
        Profile::create([
            'name' => 'admin'
        ]);
        Profile::create([
            'name' => 'intermediaire'
        ]);
        Profile::create([
            'name' => 'user'
        ]);
        User::factory()->count(1)->create();
        Region::factory()->count(10)->create();
        Localite::factory()->count(10)->create();
        Service::factory()->count(10)->create();
        Info::factory()->count(10)->create();
        SousInfo::factory()->create();

    }
}
