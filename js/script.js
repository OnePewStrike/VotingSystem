// Modal Buttons
const userButton = document.querySelector('#user-btn')

// Modals
const userModal = document.querySelector('.modal');

// Pop up Modals
userButton.addEventListener('click', () => {
 userModal.classList.toggle('active');
});
