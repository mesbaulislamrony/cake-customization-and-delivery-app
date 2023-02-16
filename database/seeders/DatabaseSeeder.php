<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Flavour;
use App\Models\Occasion;
use App\Models\Type;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $toDateTimeString = Carbon::now();
        User::factory(1)->create();

        Occasion::insert(
            [
                [
                    'name' => 'Birthday',
                    'logo' => null,
                    'created_at' => $toDateTimeString,
                    'updated_at' => $toDateTimeString
                ],
                [
                    'name' => 'Anniversary',
                    'logo' => null,
                    'created_at' => $toDateTimeString,
                    'updated_at' => $toDateTimeString
                ]
            ]
        );

        Type::insert(
            [
                [
                    'name' => 'Eggless',
                    'logo' => null,
                    'created_at' => $toDateTimeString,
                    'updated_at' => $toDateTimeString
                ],
                [
                    'name' => 'Dry',
                    'logo' => null,
                    'created_at' => $toDateTimeString,
                    'updated_at' => $toDateTimeString
                ],
                [
                'name' => 'Cup',
                'logo' => null,
                'created_at' => $toDateTimeString,
                'updated_at' => $toDateTimeString
            ]
            ]
        );

        Flavour::insert(
            [
                [
                    'name' => 'Chocolate',
                    'logo' => null,
                    'created_at' => $toDateTimeString,
                    'updated_at' => $toDateTimeString
                ],
                [
                    'name' => 'Vanilla',
                    'logo' => null,
                    'created_at' => $toDateTimeString,
                    'updated_at' => $toDateTimeString
                ],
                [
                    'name' => 'Truffle',
                    'logo' => null,
                    'created_at' => $toDateTimeString,
                    'updated_at' => $toDateTimeString
                ]
            ]
        );
    }
}
