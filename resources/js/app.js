import './bootstrap';

import { Livewire, Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm';
import mask from '@alpinejs/mask'

Alpine.magic('clipboard', () => subject => {
    navigator.clipboard.writeText(subject)
})

// Register any Alpine directives, components, or plugins here...
Alpine.plugin(mask)

Livewire.start()
