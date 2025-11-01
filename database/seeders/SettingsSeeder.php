<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting;
class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $settings = [
            // General
            ['key' => 'app_name', 'value' => 'FinTrack', 'group' => 'general'],
            ['key' => 'timezone', 'value' => 'Asia/Karachi', 'group' => 'general'],
            ['key' => 'date_format', 'value' => 'd-m-Y', 'group' => 'general'],

            // Finance
            ['key' => 'base_currency', 'value' => 'USD', 'group' => 'finance'],
            ['key' => 'currency_symbol', 'value' => '$', 'group' => 'finance'],
            ['key' => 'tax_percentage', 'value' => '15', 'group' => 'finance'],

            // Subscription & Billing
            ['key' => 'trial_days', 'value' => '7', 'group' => 'billing'],
            ['key' => 'grace_period_days', 'value' => '3', 'group' => 'billing'],
            ['key' => 'auto_renew', 'value' => '1', 'group' => 'billing'],

            // Stripe (env later)
            ['key' => 'stripe_enabled', 'value' => '1', 'group' => 'integrations'],
        ];

        foreach ($settings as $setting) {
            Setting::updateOrCreate(['key' => $setting['key']], $setting);
        }
    }

}
