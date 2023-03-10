<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Flavour;
use App\Models\Occasion;
use App\Models\Shape;
use App\Models\Theme;
use App\Models\Topping;
use App\Models\Type;
use App\Models\User;
use App\Models\Weight;
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
        Shape::insert(
            [
                [
                    'name' => 'Round',
                    'logo' => null,
                    'created_at' => $toDateTimeString,
                    'updated_at' => $toDateTimeString
                ],
                [
                    'name' => 'Square',
                    'logo' => null,
                    'created_at' => $toDateTimeString,
                    'updated_at' => $toDateTimeString
                ],
                [
                    'name' => 'Heard',
                    'logo' => null,
                    'created_at' => $toDateTimeString,
                    'updated_at' => $toDateTimeString
                ],
                [
                    'name' => 'Triangle',
                    'logo' => null,
                    'created_at' => $toDateTimeString,
                    'updated_at' => $toDateTimeString
                ]
            ]
        );
        Weight::insert(
            [
                [
                    'size' => 'Small',
                    'volume' => 300,
                    'unit' => 'gm',
                    'logo' => null,
                    'created_at' => $toDateTimeString,
                    'updated_at' => $toDateTimeString
                ],
                [
                    'size' => 'Medium',
                    'volume' => 600,
                    'unit' => 'gm',
                    'logo' => null,
                    'created_at' => $toDateTimeString,
                    'updated_at' => $toDateTimeString
                ],
                [
                    'size' => 'Large',
                    'volume' => 1,
                    'unit' => 'kg',
                    'logo' => null,
                    'created_at' => $toDateTimeString,
                    'updated_at' => $toDateTimeString
                ],
            ]
        );
        Theme::insert(
            [
                [
                    'name' => 'Unicorn',
                    'logo' => null,
                    'created_at' => $toDateTimeString,
                    'updated_at' => $toDateTimeString
                ],
                [
                    'name' => 'Car',
                    'logo' => null,
                    'created_at' => $toDateTimeString,
                    'updated_at' => $toDateTimeString
                ],
                [
                    'name' => 'Cartoon',
                    'logo' => null,
                    'created_at' => $toDateTimeString,
                    'updated_at' => $toDateTimeString
                ],
                [
                    'name' => 'Marvel',
                    'logo' => null,
                    'created_at' => $toDateTimeString,
                    'updated_at' => $toDateTimeString
                ]
            ]
        );
        Topping::insert(
            [
                [
                    'name' => 'Nuts',
                    'logo' => null,
                    'created_at' => $toDateTimeString,
                    'updated_at' => $toDateTimeString
                ],
                [
                    'name' => 'Gems',
                    'logo' => null,
                    'created_at' => $toDateTimeString,
                    'updated_at' => $toDateTimeString
                ],
                [
                    'name' => 'Fruits',
                    'logo' => null,
                    'created_at' => $toDateTimeString,
                    'updated_at' => $toDateTimeString
                ],
                [
                    'name' => 'Candles',
                    'logo' => null,
                    'created_at' => $toDateTimeString,
                    'updated_at' => $toDateTimeString
                ]
            ]
        );
    }
}
