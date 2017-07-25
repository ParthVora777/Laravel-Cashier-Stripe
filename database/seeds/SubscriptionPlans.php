<?php

use App\SubscriptionPlan;
use Illuminate\Database\Seeder;

class SubscriptionPlans extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	SubscriptionPlan::truncate();

        SubscriptionPlan::create([
        	'stripe_id' => 'daily',
        	'name' => 'Daily',
        	'description' => 'Daily plan',
        	'amount' => '100.00'
    	]);

    	SubscriptionPlan::create([
        	'stripe_id' => 'weekly',
        	'name' => 'Weekly',
        	'description' => 'Weekly plan',
        	'amount' => '700.00'
    	]);
    }
}
