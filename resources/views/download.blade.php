<x-layout>
    <div class="mx-auto bg-white dark:bg-gray-950 rounded-lg max-w-sm p-8 flex flex-col gap-6">
        <div class="flex flex-col gap-3">
            <h1 class="text-xl font-bold">Downloading your invoice...</h1>
            <p>Made some mistakes? You can keep editing this invoice for the next 3 days...</p>
        </div>

        <p>
            <a class="button button-primary inline-flex items-center gap-2"
               href="{{ route('invoices.show', $invoice) }}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                    <path fill-rule="evenodd"
                          d="M17 10a.75.75 0 01-.75.75H5.612l4.158 3.96a.75.75 0 11-1.04 1.08l-5.5-5.25a.75.75 0 010-1.08l5.5-5.25a.75.75 0 111.04 1.08L5.612 9.25H16.25A.75.75 0 0117 10z"
                          clip-rule="evenodd"/>
                </svg>
                <span>Keep Editing</span>
            </a>
        </p>
    </div>

    @env('production')
        @push('scripts')
            <script defer>
                let link = document.createElement('a')
                link.href = '{{ route('invoices.download', $invoice->getKey()) }}'
                link.download = 'Download'
                document.body.appendChild(link)
                link.click()
                document.body.removeChild(link)
            </script>
        @endpush
    @endenv
</x-layout>


