{{--

Usage:

<x-contenteditable
    placeholder="Write a note to your client..."
    key="form.notes"
    wire:model="form.notes"
>
--}}

<!-- Editor -->
<div class="relative max-w-sm"
     x-cloak
     x-modelable="content"
     x-data="{ focused: false, showPlaceholder: true, content: 'For some reason have to have content in here' }"
     x-init="showPlaceholder = content.trim() == ''"
     {{ $attributes->except('placeholder') }}
>
    <!-- Placeholder -->
    <template x-if="showPlaceholder">
        <div class="pointer-events-none absolute top-0 left-0 text-gray-300 dark:text-gray-600">{{ $placeholder }}</div>
    </template>

    <!-- Content -->
<div
    x-ref="editor"
    x-on:input="showPlaceholder = $event.target.innerText.trim() === ''"
    x-on:click="focused = true"
    x-on:blur="$wire.set('{{ $key }}', $event.target.innerText); content = $event.target.innerText; focused = false"
    x-on:focus="focused = true"
    x-text="content"
    contenteditable="plaintext-only"
    placeholder="Write a note to your client..."
    class="cursor-text w-full form-control form-textarea whitespace-pre-wrap select-text break-words"
    style="-webkit-user-modify: read-write-plaintext-only;"
></div>
</div>
