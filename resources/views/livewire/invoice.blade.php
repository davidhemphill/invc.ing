<form class="screen:px-2 screen:pb-8 flex flex-col gap-8">
    <x-header/>
    <div class="flex flex-col gap-8 divide-y divide-gray-200 dark:divide-gray-700 mx-auto max-w-[8.5in]">
        <div class="flex flex-col gap-8">
            <div class="flex flex-col gap-[0.25in]">
                <div class="grid grid-cols-2 gap-8 pb-[0.5in]">
                    <!-- Left Side -->
                    <div
                        class="print:order-1 order-2 md:order-1 print:col-span-1 col-span-2 md:col-span-1 flex flex-col gap-[0.25in]">
                        <!-- Your Company Name -->
                        <div class="screen:md:pl-10 print:col-span-1 col-span-2 md:col-span-1 md:mb-[0.6in]">
                            <input class="form-control form-text text-xl font-bold" type="text"
                                   wire:model.blur="form.companyName"
                                   placeholder="ACME LLC"
                                   aria-label="Company"
                            />
                        </div>

                        <!-- Primary Meta -->
                        <x-fieldset>
                            <div class="flex flex-col mt-[-4px]">
{{--                                <button type="button"--}}
{{--                                        aria-label="Add Row"--}}
{{--                                        wire:click="addMetaAfterIndex('primaryMeta', '-1')"--}}
{{--                                        x-on:click="await $wire.addMetaAfterIndex('primaryMeta', '-1')"--}}
{{--                                        class="print-hidden h-1 focus:outline-none rounded-full bg-white hover:bg-purple-600/50 focus:bg-purple-600/50 dark:bg-gray-950"--}}
{{--                                />--}}
                            </div>
                            @foreach ($form->primaryMeta as $index => $item)
                                <div class="flex flex-col mt-[-4px]">
                                    <div class="screen:md:pl-10 relative flex items-center">
                                        <x-input
                                            wire:model.blur="form.primaryMeta.{{ $index }}.value"
                                            placeholder="{{ $item['label'] }}"
                                        />

                                        <x-trash-button
                                            class="absolute top-0 right-[15px] md:left-[15px]"
                                            wire:click="removeMeta('primaryMeta', {{ $index }})"
                                        />
                                    </div>

                                    <button type="button"
                                            aria-label="Add Row"
                                            wire:click="addMetaAfterIndex('primaryMeta', '{{ $index }}')"
                                            class="print-hidden h-1 focus:outline-none rounded-full bg-white hover:bg-purple-600/50 focus:bg-purple-600/50 dark:bg-gray-950"
                                    />
                                </div>
                            @endforeach
                        </x-fieldset>

                        <!-- Secondary Meta -->
                        <x-fieldset>
                            @foreach ($form->secondaryMeta as $index => $item)
                                <div class="flex flex-col mt-[-4px]">
                                    <div class="screen:md:pl-10 relative flex items-center">
                                        <x-input
                                            wire:model.blur="form.secondaryMeta.{{ $index }}.value"
                                            placeholder="{{ $item['label'] }}"
                                        />

                                        <x-trash-button
                                            class="absolute top-0 right-[15px] md:left-[15px]"
                                            wire:click="removeMeta('secondaryMeta', {{ $index }})"
                                        />
                                    </div>

                                    <button type="button"
                                            aria-label="Add Row"
                                            wire:click="addMetaAfterIndex('secondaryMeta', '{{ $index }}')"
                                            class="print-hidden h-1 focus:outline-none rounded-full bg-white hover:bg-purple-600/50 focus:bg-purple-600/50 dark:bg-gray-950"
                                    />
                                </div>
                            @endforeach
                        </x-fieldset>
                    </div>

                    <!-- Right Side -->
                    <div
                        class="print:order-1 order-1 md:order-2 print:col-span-1 col-span-2 md:col-span-1 flex flex-col gap-[0.25in] print:[&_input]:text-right md:[&_input]:text-right">
                        <div class="screen:pr-10 print:[&_input]:text-right md:[&_input]:text-right md:mb-[0.5in]">
                            <!-- Invoice Title -->
                            <input class="form-control form-text text-3xl font-bold" type="text"
                                   wire:model.blur="form.invoiceTitle"
                                   placeholder="INVOICE"
                                   aria-label="Invoice Title"
                            />
                        </div>

                        <x-fieldset>
                            @foreach ($form->tertiaryMeta as $index => $item)
                                <div class="flex flex-col mt-[-4px]">
                                    <div class="screen:pr-10 relative flex items-center">
                                        <x-input
                                            wire:model.blur="form.tertiaryMeta.{{ $index }}.value"
                                            placeholder="{{ $item['label'] }}"
                                        />


                                        <x-trash-button
                                            class="absolute top-[1px] right-[15px]"
                                            wire:click="removeMeta('tertiaryMeta', {{ $index }})"
                                        />
                                    </div>

                                    <button type="button"
                                            aria-label="Add Row"
                                            wire:click="addMetaAfterIndex('tertiaryMeta', '{{ $index }}')"
                                            class="print-hidden h-1 focus:outline-none rounded-full bg-white hover:bg-purple-600/50 focus:bg-purple-600/50 dark:bg-gray-950"
                                    />
                                </div>
                            @endforeach
                        </x-fieldset>

                        <x-fieldset>
                            @foreach ($form->quaternaryMeta as $index => $item)
                                <div class="flex flex-col mt-[-4px]">
                                    <div class="screen:pr-10 relative flex items-center">
                                        <x-input class="font-bold text-base" type="text"
                                                 wire:model.blur="form.quaternaryMeta.{{ $index }}.value"
                                                 placeholder="{{ $item['label'] }}"/>

                                        <x-trash-button
                                            class="absolute top-[2px] right-[15px]"
                                            wire:click="removeMeta('quaternaryMeta', {{ $index }})"
                                        />
                                    </div>

                                    <button type="button"
                                            aria-label="Add Row"
                                            wire:click="addMetaAfterIndex('quaternaryMeta', '{{ $index }}')"
                                            class="print-hidden h-1 focus:outline-none rounded-full bg-white hover:bg-purple-600/50 focus:bg-purple-600/50 dark:bg-gray-950"
                                    />
                                </div>
                            @endforeach
                        </x-fieldset>
                    </div>
                </div>

                <!-- Invoice Items -->
                <div class="overflow-hidden overflow-x-auto relative">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class=" dark:text-gray-200">
                        <tr>
                            <th class="screen:pl-10 text-left text-xs py-2 w-20">Quantity</th>
                            <th class="text-left text-xs py-2 px-3">Description</th>
                            <th class="screen:pr-10 text-right text-xs py-2 w-20">Price</th>
                        </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                        @foreach($form->items as $index => $item)
                            <tr x-ref="rows">
                                <td class="screen:pl-10 text-sm py-2 align-top w-20">
                                    <input data-quantity class="form-control form-text block w-full" type="text"
                                           min="1"
                                           wire:model.blur="form.items.{{ $index }}.quantity" placeholder="69"
                                    />
                                </td>
                                <td class="px-3 text-sm py-2 align-top">
                                    <input class="form-control form-textarea block w-full" type="text"
                                           wire:model.blur="form.items.{{ $index }}.description"
                                           placeholder="Widgets"/>
                                </td>
                                <td class="screen:pr-10 text-sm py-2 align-top w-20 relative text-right">
                                    <input class="form-control form-text block w-full text-right"
                                           type="text"
                                           min="0"
                                           wire:model.blur="form.items.{{ $index }}.amount" placeholder="420.00"/>

                                    <x-trash-button
                                        class="absolute top-[9px] right-[15px]"
                                        wire:click="removeMeta('items', {{ $index }})"
                                    />
                                </td>
                            </tr>
                        @endforeach

                        <!-- Add Line Item Button -->
                        <tr class="print:hidden">
                            <td colspan="3">
                                <button
                                    type="button"
                                    class="print:hidden hover:bg-purple-50 dark:hover:bg-purple-950 focus:bg-purple-50 dark:focus:bg-purple-950 w-full py-2 flex items-center justify-center text-purple-600 dark:text-purple-400 focus:outline-none"
                                    x-on:click="await $wire.addItem(); let els = $refs.rows.querySelectorAll('input'); els[els.length-3]?.focus();"
                                >
                                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                         fill="currentColor"
                                         aria-hidden="true">
                                        <path fill-rule="evenodd"
                                              d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14Zm.75-10.25v2.5h2.5a.75.75 0 0 1 0 1.5h-2.5v2.5a.75.75 0 0 1-1.5 0v-2.5h-2.5a.75.75 0 0 1 0-1.5h2.5v-2.5a.75.75 0 0 1 1.5 0Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                </button>
                            </td>
                        </tr>

                        <!-- Enable Taxes Checkbox -->
                        <tr class="print:hidden">
                            <td class="screen:pl-10 text-sm" colspan="2">
                                <label class="inline-flex items-center gap-2 h-9">
                                    <input type="checkbox" wire:model.live="form.enableTaxes">
                                    <span>Enable Taxes</span>
                                </label>
                            </td>

                            <td class="screen:pr-10 text-sm text-right">
                                <label class="inline-flex items-center justify-end gap-2 h-9">
                                    <select class="dark:bg-purple-950 w-[70px]" wire:model.live="form.currency">
                                        @foreach (app('currencies') as $group)
                                            <optgroup label="{{ $group['label'] }}">
                                                @foreach ($group['values'] as $currency => $label)
                                                    <option value="{{ $currency }}">{{ $currency }}</option>
                                                @endforeach
                                            </optgroup>
                                        @endforeach
                                    </select>
                                </label>
                            </td>
                        </tr>

                        <!-- Sub Total -->
                        @if ($form->enableTaxes)
                            <tr>
                                <td class="screen:pl-10 pr-3 text-sm py-2 w-24 text-right font-bold" colspan="2">
                                    <span>Sub Total</span>
                                </td>
                                <td class="screen:pr-10 text-sm py-2 w-12 text-right">
                                    <span>{{ $this->subtotalFormatted }}</span>
                                </td>
                            </tr>
                        @endif

                        <!-- Tax 1 -->
                        @if ($form->enableTaxes)
                            <tr>
                                <td class="screen:pl-10 pr-3 text-sm py-2 text-right" colspan="2">
                                    <div class="w-[150px] inline-flex items-center">
                                            <span class="print:hidden inline-flex items-center space-x-2">
                                                <input class="form-control form-text w-12 text-right"
                                                       placeholder="0"
                                                       type="text" wire:model.blur="form.tax1"
                                                       aria-label="Tax 1 Label"
                                                />
                                                <span
                                                    class="text-gray-600 dark:text-gray-200 text-base font-bold">%</span>
                                            </span>

                                        <input class="form-control form-text font-bold text-right"
                                               placeholder="Tax 1"
                                               type="text"
                                               wire:model.blur="form.tax1Name"
                                               aria-label="Tax 1 Label"
                                        />
                                    </div>
                                </td>
                                <td class="screen:pr-10 text-sm py-2 text-right">{{ $this->tax1Formatted }}</td>
                            </tr>
                        @endif

                        <!-- Tax 2 -->
                        @if ($form->enableTaxes)
                            <tr>
                                <td class="screen:pl-10 pr-3 text-sm py-2 text-right" colspan="2">
                                    <div class="w-[150px] inline-flex items-center">
                                                        <span class="print:hidden inline-flex items-center space-x-2">
                                                            <input class="form-control form-text w-12 text-right"
                                                                   placeholder="0"
                                                                   type="text" wire:model.blur="form.tax2"
                                                                   aria-label="Tax 2 Percentage"
                                                            >
                                                            <span
                                                                class="text-gray-600 dark:text-gray-200 text-base font-bold">%</span>
                                                        </span>

                                        <input class="form-control form-text font-bold text-right"
                                               placeholder="Tax 2"
                                               type="text"
                                               wire:model.blur="form.tax2Name"
                                               aria-label="Tax 2 Name"
                                        />
                                    </div>
                                </td>
                                <td class="screen:pr-10 text-sm py-2 text-right">{{ $this->tax2Formatted }}</td>
                            </tr>
                        @endif

                        <!-- Total -->
                        <tr>
                            <td class="screen:pl-10 pr-3 text-sm py-2 text-right font-bold" colspan="2">
                                <span>Total</span>
                            </td>
                            <td class="screen:pr-10 text-sm py-2 w-12 text-right">{{ $this->totalFormatted }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Notes -->
                <div class="screen:px-10">
                    <div
                        class="form-control"
                        contenteditable="plaintext-only"
                        wire:ignore
                        x-data
                        x-on:input.debounce.500="$wire.set('form.notes', $event.target.innerText)"
                        placeholder="Write a note to your client..."
                        class="cursor-text mt-2 w-full form-control form-textarea whitespace-pre-wrap select-text break-words p-2"
                        style="min-height: 40px; -webkit-user-modify: read-write-plaintext-only;">{!! $form->notes !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="print:hidden py-8">
            <p class="text-xs text-gray-400 leading-normal">Tip: Blank items are automatically removed</p>
        </div>

    </div>
</form>
