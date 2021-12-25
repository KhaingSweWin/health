<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Passport;

class PassportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Passport::create([
            
            "user_id" => \App\Models\User::factory()->create()->id,
            'passport_no'=>'OM0988876'
        ]);
    }
}
