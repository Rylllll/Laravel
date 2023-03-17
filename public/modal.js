const showModalButton = document.querySelector('#show-modal');
const closeModalButton = document.querySelector('#close-modal');
const modal = document.querySelector('#modal');

showModalButton.addEventListener('click', () => {
    modal.classList.remove('hidden');
});

closeModalButton.addEventListener('click', () => {
    modal.classList.add('hidden');
});

const showModalButton1 = document.querySelector('#show-modal1');
const closeModalButton1 = document.querySelector('#close-modal1');
const modal1 = document.querySelector('#modal1');

// showModalButton1.addEventListener('click', () => {
//     modal1.classList.remove('hidden');
// });