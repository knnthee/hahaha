// Open the modal
function openLogin() {
    document.getElementById('loginModal').style.display = 'flex'; // Make modal visible
    document.body.classList.add('modal-open'); // Disable body scroll
}

// Close the modal
function closeLogin() {
    document.getElementById('loginModal').style.display = 'none'; // Hide modal
    document.body.classList.remove('modal-open'); // Enable body scroll
}