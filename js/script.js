// Buttons
const userButton = document.querySelector('#user-btn')
const deleteButton = document.querySelector('#delete-btn');

// Exit Buttons
const messageExitButton = document.querySelector('#exit-message');

// Messages
const message = document.querySelector('.message');

// Modals
const deleteModal = document.querySelector('.delete');

// Menus
const userMenu = document.querySelector('.user');

// Exit Toggle
messageExitButton.addEventListener('click', () => {
 message.classList.toggle('active');
});

// Pop up
userButton.addEventListener('click', () => {
 userMenu.classList.toggle('active');
});

deleteButton.addEventListener('click', () => {
 deleteModal.classList.toggle('active');
});
