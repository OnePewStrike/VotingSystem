// Buttons
const userButton = document.querySelector('#user-btn')
const deleteButton = document.querySelector('#delete-btn');
const verifyButton = document.querySelector('#verify-btn');
const denyButton = document.querySelector('#deny-btn');
const accountDeleteButton = document.querySelector('#account-delete-btn');

// Exit Buttons
const messageExitButton = document.querySelector('#exit-message');
const deleteExitButton = document.querySelector('#delete-exit-btn');
const verifyExitButton = document.querySelector('#verify-exit-btn');
const denyExitButton = document.querySelector('#deny-exit-btn');
const modalExitButton = document.querySelector('#modal-exit-btn');
const accountDeleteExitButton = document.querySelector('#account-delete-exit-btn');

// Messages
const message = document.querySelector('.message');

// Modals
const modal = document.querySelector('.modal');
const deleteModal = document.querySelector('.delete');
const verifyModal = document.querySelector('.verify');
const denyModal = document.querySelector('.deny');
const accountDeleteModal = document.querySelector('.account-delete');

// Menus
const userMenu = document.querySelector('.user');

// Exit Toggle
messageExitButton.addEventListener('click', () => {
 message.classList.toggle('active');
});

deleteExitButton.addEventListener('click', () => {
 deleteModal.classList.remove('active');
});

verifyExitButton.addEventListener('click', () => {
 verifyModal.classList.remove('active');
});

denyExitButton.addEventListener('click', () => {
 denyModal.classList.remove('active');
});

modalExitButton.addEventListener('click', () => {
 modal.classList.remove('active');
});

accountDeleteExitButton.addEventListener('click', () => {
 accountDeleteModal.classList.remove('active');
});

// Pop up
userButton.addEventListener('click', () => {
 userMenu.classList.toggle('active');
});

verifyButton.addEventListener('click', () => {
 verifyModal.classList.toggle('active');
});

denyButton.addEventListener('click', () => {
 denyModal.classList.toggle('active');
 verifyModal.classList.remove('active');
});

deleteButton.addEventListener('click', () => {
 deleteModal.classList.toggle('active');
});

accountDeleteButton.addEventListener('click', () => {
 accountDeleteModal.classList.toggle('active');
});