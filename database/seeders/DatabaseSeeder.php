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
//        Info::factory()->count(10)->create();
        Info::create([
            'name' => "Domaine Politique"
        ]);
        Info::create([
            'name' => "Domaine Administraf"
        ]);
        Info::create([
            'name' => "Domaine Economique"
        ]);
        Info::create([
            'name' => "Domaine Socioculturel"
        ]);
        Info::create([
            'name' => "Domaine Sécuritaire"
        ]);
        Info::create([
            'name' => "Garde Statique"
        ]);
        Info::create([
            'name' => "Domaine Militaire"
        ]);
        Info::create([
            'name' => "Situation Poste Frontalier de Sona à la Frontière Mali-Burkina "
        ]);
        Info::create([
            'name' => "Enregistrement des personnalités Nationales"
        ]);
        Info::create([
            'name' => "Enregistrement des personnalités Etrangères "
        ]);
        Info::create([
            'name' => "Mouvement des véhicules "
        ]);
        Info::create([
            'name' => "Accidents de la Circulation Routière "
        ]);
        Info::create([
            'name' => "Patrouille "
        ]);
        Info::create([
            'name' => "Autres "
        ]);
        SousInfo::factory()->create();

    }
}
