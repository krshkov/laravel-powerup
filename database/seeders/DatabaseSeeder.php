<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $tester = new User();
        $tester->name = "Test";
        $tester->email = "test@tester.co";
        $tester->phone = "+38979999999";
        $tester->password = Hash::make('sekakov');
        $tester->subscriber = true;
        $tester->accepted_terms_and_conditions = true;
        $tester->save();
    }
}
