<?php

namespace Database\Seeders;

use App\Models\RecruitementMails;
use Illuminate\Database\Seeder;

class RecruitementMailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        RecruitementMails::factory()
            ->count(50)
            ->create();
    }
}
