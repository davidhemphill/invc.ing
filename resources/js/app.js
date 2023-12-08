import './bootstrap';

import { Livewire, Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm';
import mask from '@alpinejs/mask'

// Register any Alpine directives, components, or plugins here...
Alpine.plugin(mask)

Livewire.start()
