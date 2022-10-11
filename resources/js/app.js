import './bootstrap';

import * as Turbo from "@hotwired/turbo"
import Swal from 'sweetalert2';

window.Swal = Swal;
Turbo.start();

document.addEventListener('livewire:load', () => {
    window.livewire.on('redirect', url => Turbolinks.visit(url))
})
