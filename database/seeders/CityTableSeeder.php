<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('cities')->insert([
            [
                "name" => "Beira",
                "created_at" => now(),
                "updated_at" => now()
            ],
        ]);

        DB::table('districts')->insert([
            [
                "city_id" => 1,
                "name" => "Chaimite",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "city_id" => 1,
                "name" => "Chipangara",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "city_id" => 1,
                "name" => "Esturro",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "city_id" => 1,
                "name" => "Matacuane",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "city_id" => 1,
                "name" => "Macurungo",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "city_id" => 1,
                "name" => "Macuti",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "city_id" => 1,
                "name" => "Pioneiros",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "city_id" => 1,
                "name" => "Ponta‑Gêa",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "city_id" => 1,
                "name" => "Chota",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "city_id" => 1,
                "name" => "Mananga",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "city_id" => 1,
                "name" => "Maraza",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "city_id" => 1,
                "name" => "Munhava‑Central",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "city_id" => 1,
                "name" => "Vaz",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "city_id" => 1,
                "name" => "Alto da Manga",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "city_id" => 1,
                "name" => "Chingussura",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "city_id" => 1,
                "name" => "Inhamízua",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "city_id" => 1,
                "name" => "Matadouro",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "city_id" => 1,
                "name" => "Nhaconjo",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "city_id" => 1,
                "name" => "Vila Massane",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "city_id" => 1,
                "name" => "Manga Mascarenhas",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "city_id" => 1,
                "name" => "Muave",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "city_id" => 1,
                "name" => "Mungassa",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "city_id" => 1,
                "name" => "Ndunda",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "city_id" => 1,
                "name" => "Nhangau",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "city_id" => 1,
                "name" => "Nhangoma",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "city_id" => 1,
                "name" => "Tchonja",
                "created_at" => now(),
                "updated_at" => now()
            ]
        ]);
    }
}
