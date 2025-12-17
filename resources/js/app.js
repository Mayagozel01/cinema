import './bootstrap';

// Add click event to all custom buttons
document.addEventListener('DOMContentLoaded', function() {
    const buttons = document.querySelectorAll('.my-custom-button');
    
    buttons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Get the button text
            const buttonText = this.textContent;
            
            // Show alert with button text
            alert(`You clicked: ${buttonText}`);
        });
    });
    
    // Add form submission handler
    const contactForm = document.querySelector('form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form values
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            
            if (name && email) {
                alert(`Thank you, ${name}! We'll contact you at ${email} soon.`);
                contactForm.reset();
            } else {
                alert('Please fill in all required fields.');
            }
        });
    }
});