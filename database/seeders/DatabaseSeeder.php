<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Occasion;
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
    }
}
