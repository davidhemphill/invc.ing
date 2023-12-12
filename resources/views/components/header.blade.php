<!-- Header -->
<div class="print:hidden flex md:flex-row gap-4 items-center justify-between py-8">
    <h1 class="text-xl font-bold">
        <a href="{{ route('home') }}" class="flex items-center gap-3 hover:text-purple-600 active:text-purple-600">
            invc.ing
        </a>
    </h1>

    <!-- Generate Button -->
    <div class="print:hidden text-right">
        <button wire:click="save" type="button" class="button button-primary">Download PDF</button>
    </div>
</div>
