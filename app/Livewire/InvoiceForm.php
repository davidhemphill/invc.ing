<?php

namespace App\Livewire;

use App\Livewire\Forms\InvoiceForm as InvoiceFormObject;
use App\Models\Invoice as InvoiceModel;
use Illuminate\Support\Number;
use Livewire\Attributes\Computed;
use Livewire\Component;

class InvoiceForm extends Component
{
    public InvoiceFormObject $form;

    #[Computed]
    public function subtotalFormatted(): string
    {
        return Number::currency($this->subTotal(), $this->form->currency);
    }

    public function subtotal(): int
    {
        return collect($this->form->items)->sum(function ($item) {
            return (int) $item['quantity'] * (int) $item['amount'];
        });
    }

    #[Computed]
    public function tax1Formatted(): string
    {
        return Number::currency($this->tax1Total(), $this->form->currency);
    }

    public function tax1Total(): int
    {
        return
            $this->taxesAreEnabled()
                ? round($this->subTotal() * ($this->form->tax1 / 100))
                : 0;
    }

    public function taxesAreEnabled()
    {
        return $this->form->enableTaxes;
    }

    #[Computed]
    public function tax2Formatted(): string
    {
        return Number::currency($this->tax2Total(), $this->form->currency);
    }

    public function tax2Total(): int
    {
        return $this->taxesAreEnabled()
            ? round($this->subTotal() * ($this->form->tax2 / 100))
            : 0;
    }

    #[Computed]
    public function totalFormatted(): string
    {
        return Number::currency($this->total(), $this->form->currency);
    }

    public function total(): int
    {
        return $this->subTotal() + $this->taxes();
    }

    public function taxes(): int
    {
        if ($this->taxesAreEnabled()) {
            return $this->tax1Total() + $this->tax2Total();
        }

        return 0;
    }

    #[Computed]
    public function sortedMeta()
    {
        return collect($this->form->primaryMeta)
            ->ksort()
            ->toArray();
    }

    public function addItem(): void
    {
        $this->form->items[] = [
            'quantity' => 1,
            'description' => '',
            'amount' => 0,
        ];
    }

    public function addMeta(string $type): void
    {
        $this->form->{$type}[] = [
            'label' => 'New Item',
            'value' => '',
        ];
    }

    public function addMetaAfterIndex(string $type, int $index): void
    {
        $old = $this->form->{$type};

        array_splice($old, $index + 1, 0,
            [['label' => 'New Item', 'value' => '']]
        );

        $this->form->{$type} = $old;
    }

    public function removeMeta($type, $index): void
    {
        unset($this->form->{$type}[$index]);

        $this->form->{$type} = array_values($this->form->{$type});

        $this->form->save();
    }

    public function save()
    {
        if ($this->form->invoice->exists) {
                $this->form->save();
            return $this->visitDownloadPage();
        } else {
            $this->form->create();
            return $this->visitDownloadPage();
        }
    }

    public function visitDownloadPage()
    {
        return redirect()->route('invoices.start-download', $this->form->invoice);
    }

    public function mount(InvoiceModel $invoice)
    {
        $this->form->setInvoice($invoice);

        if (!$invoice->exists && empty($this->form->items)) {
            $this->form->items = [['quantity' => '', 'description' => '', 'amount' => '',],];
        }
    }

    public function updated(string $name, string $value): void
    {
        $this->form->save();
    }

    public function render()
    {
        return view('livewire.invoice');
    }
}
