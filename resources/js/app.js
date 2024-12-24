import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const dropdownButton = document.querySelector('.drop-down');
    const dropdownMenu = document.querySelector('.drop-down-menu');

    dropdownButton.addEventListener('click', function() {
        dropdownMenu.classList.toggle('hidden');
    });
});