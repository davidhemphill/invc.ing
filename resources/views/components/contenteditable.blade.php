<!-- Editor -->
<div class="relative max-w-sm"
     x-data="{
            showPlaceholder: true,

            init() {
                if (this.$refs.editor.innerText !== '') {
                    this.removePlaceholder()
                }
            },

            updateContent(e) {
                this.$wire.set('{{ $key }}', e.target.innerText)
            },

            clearField() {
                this.removePlaceholder()
                this.$refs.editor.focus()
            },

            handleBlur() {
                if (this.$refs.editor.innerText === '') {
                    this.addPlaceholder()
                }

                this.updateContent()
            },

            handleFocus() {
                this.removePlaceholder()
            },

            addPlaceholder() {
                this.showPlaceholder = true
            },

            removePlaceholder() {
                this.showPlaceholder = false
            },
     }"
     x-on:input.debounce.500="$wire.set('{{ $key }}', $event.target.innerText)"
>
    <!-- Placeholder -->
    <template x-if="showPlaceholder">
        <div class="pointer-events-none absolute top-0 left-0 text-gray-300">{{ $placeholder }}</div>
    </template>

    <!-- Content -->
    <div
        x-ref="editor"
        x-on:click="clearField"
        x-on:blur="handleBlur"
        x-on:focus="handleFocus"
        class="form-control"
        contenteditable="plaintext-only"
        placeholder="Write a note to your client..."
        class="cursor-text w-full form-control form-textarea whitespace-pre-wrap select-text break-words"
        style="-webkit-user-modify: read-write-plaintext-only;">{!! $value !!}</div>
</div>
