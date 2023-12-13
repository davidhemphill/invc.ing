<!-- Header -->
<div class="bg-gray-50 dark:bg-gray-900 print:hidden py-4">
    <div class="max-w-[8.5in] mx-auto flex flex-col md:justify-between md:flex-row gap-4 px-2 screen:md:px-10">
        <div class="flex flex-col md:flex-row md:gap-4 items-baseline">
            <h1 class="flex flex-col md:flex-row items-baseline gap-1 md:gap-4 text-xl font-bold">
                <a href="{{ route('home') }}"
                   class="flex items-center gap-3 hover:text-purple-600 active:text-purple-600">
                    invc.ing
                </a>
            </h1>
            <span class="text-xs text-gray-500">free online invoice PDF generator</span>

        </div>

        <!-- Generate Button -->
        <div class="print:hidden md:text-right">
            <button wire:click="save" type="button" class="button button-primary">Download PDF</button>
        </div>
    </div>
</div>
