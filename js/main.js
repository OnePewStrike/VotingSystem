// Buttons
const userButton = document.querySelector('#user-btn')
const deleteButton = document.querySelector('#delete-btn');

// Modals
const deleteModal = document.querySelector('.delete');

// Menus
const userMenu = document.querySelector('.user');

// Pop up
userButton.addEventListener('click', () => {
 userMenu.classList.toggle('active');
});

deleteButton.addEventListener('click', () => {
 deleteModal.classList.toggle('active');
});
