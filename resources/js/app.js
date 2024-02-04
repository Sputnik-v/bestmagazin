import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


function destroyModal() {
    const modal = document.getElementById('modal-window');
    if (modal){
        modal.classList.add('destroy_modal');
        setTimeout(function (){
            modal.remove();
        }, 2000)
    }
}

destroyModal();

