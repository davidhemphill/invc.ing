<!-- Header -->
<div class="bg-gray-50 print:hidden py-4">
    <div class="container flex md:flex-row gap-4 items-center justify-between screen:px-10">
        <h1 class="flex items-baseline gap-4 text-xl font-bold">
            <a href="{{ route('home') }}" class="flex items-center gap-3 hover:text-purple-600 active:text-purple-600">
                invc.ing
            </a>
            <span class="text-xs text-gray-500">free online invoice PDF generator</span>
        </h1>

        <!-- Generate Button -->
        <div class="print:hidden text-right">
            <button wire:click="save" type="button" class="button button-primary">Download PDF</button>
        </div>
    </div>
</div>
