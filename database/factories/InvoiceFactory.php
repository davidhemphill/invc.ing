<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'data' => [
                'companyName' => 'Monarkee, LLC',
                'invoiceTitle' => 'Invoice',

                'primaryMeta' => [
                    ['label' => 'Address 1', 'value' => '6117 S Maryland Ave'],
                    ['label' => 'Address 2', 'value' => ''],
                    ['label' => 'City, State Zip', 'value' => 'Springfield, MO 65810'],
                    ['label' => 'Country', 'value' => 'USA'],
                ],

                'secondaryMeta' => [
                    ['label' => 'Phone', 'value' => '+1 417-718-2886'],
                    ['label' => 'Email', 'value' => 'hemp@hey.com'],
                ],

                'tertiaryMeta' => [
                    ['label' => 'Invoice Number', 'value' => 'LARAVEL-0001'],
                    ['label' => 'Issue Date', 'value' => 'Issued on: 2023-12-08'],
                    ['label' => 'Due Date', 'value' => 'Due at: 2024-01-07'],
//                    ['label' => 'PO Number', 'value' => ''],
                ],

                'quaternaryMeta' => [
                    ['label' => 'Client Name', 'value' => 'Laravel LLC'],
                    ['label' => 'Attn', 'value' => 'Attn: Taylor Otwell'],
                ],

                'items' => [
                    [
                        'quantity' => '1',
                        'description' => 'Laravel Nova IP Acquisition',
                        'amount' => '1500000',
                    ],
                ],

                'tax1Name' => 'State',
                'tax1' => '0',
                'tax2Name' => 'Federal',
                'tax2' => '0',
                'enableTaxes' => false,
                'notes' => 'Laravel Forever!',

                'currency' => 'USD',
            ]
        ];
    }
}
