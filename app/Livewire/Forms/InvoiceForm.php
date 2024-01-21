<?php

namespace App\Livewire\Forms;

use App\Models\Invoice;
use Livewire\Attributes\Validate;
use Livewire\Form;

class InvoiceForm extends Form
{
    public ?Invoice $invoice;

    #[Validate('string')]
    public string $companyName = '';

    #[Validate('string')]
    public string $invoiceTitle = 'Invoice';

    // Left Column Details
    #[Validate('array')]
    public array $primaryMeta = [
        ['label' => 'Address 1', 'value' => ''],
        ['label' => 'Address 2', 'value' => ''],
        ['label' => 'City, State Zip', 'value' => ''],
        ['label' => 'Country', 'value' => ''],
    ];

    #[Validate('array')]
    public array $secondaryMeta = [
        ['label' => 'Tax ID', 'value' => ''],
        ['label' => 'Phone', 'value' => ''],
        ['label' => 'Email', 'value' => ''],
    ];

    #[Validate('array')]
    public array $tertiaryMeta = [
        ['label' => 'Invoice Number', 'value' => ''],
        ['label' => 'Issue Date', 'value' => ''],
        ['label' => 'Due Date', 'value' => ''],
        ['label' => 'PO Number', 'value' => ''],
    ];

    #[Validate('array')]
    public array $quaternaryMeta = [
        ['label' => 'Client Name', 'value' => ''],
        ['label' => 'Attn', 'value' => ''],
    ];

    #[Validate('array')]
    public array $items = [
        [
            'quantity' => '1',
            'description' => 'Example Item',
            'amount' => '1'
        ]
    ];

    #[Validate(['string'])]
    public string $tax1Name = 'Tax 1';

    #[Validate('string')]
    public string $tax1 = '5';

    #[Validate('string')]
    public string $tax2Name = 'Tax 2';

    #[Validate('string')]
    public string $tax2 = '10';

    #[Validate('boolean')]
    public bool $enableTaxes = false;

    #[Validate('string')]
    public string $currency = 'USD';

    #[Validate('string')]
    public string $notes = '';

    public function setInvoice(Invoice $invoice)
    {
        $this->invoice = $invoice;

        $this->fill($invoice->data ?? []);
    }

    public function create()
    {
        $this->validate();

        $this->invoice->fill(['data' => $this->data()]);

        return $this->invoice->save();
    }

    /**
     * @return array
     */
    public function data(): array
    {
        return $this->except('invoice');
    }

    public function save()
    {
        if (!$this->invoice->locked) {
            $this->validate();
            $this->invoice->update(['data' => $this->data()]);
        }
    }
}
