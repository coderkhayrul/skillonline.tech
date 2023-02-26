<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\SocialMedia;
use App\Models\BasicAnalytic;
use App\Models\BasicSetting;
use Illuminate\Database\Seeder;

class SetupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        SocialMedia::create([
            'sm_facebook' => 'https://www.facebook.com/',
        ]);
        BasicAnalytic::create([
            'google_analytic' => '',
        ]);
        BasicSetting::create([
            'bs_company' => 'skillonline',
        ]);

    }
}
