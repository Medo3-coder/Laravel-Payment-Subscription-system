<?php

namespace Database\Seeders;

use App\Models\PaymentPlatform;
use Illuminate\Database\Seeder;

class PaymentPlatformsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentPlatform::create([
            'name' => 'PayPal',
            'image' => 'img/payment_platforms/paypal.jpg',
        ]);

        paymentPlatform::create([
            'name' => 'stripe',
            'image' => 'img/payment_platforms/stripe.jpg',
        ]);
    }
}
