document.addEventListener("DOMContentLoaded", () => {
    // Typewriter Effect
    const introText = "Hello, I am Jordan English.";  // Text to type into the <h1>
    const portfolioDesc = "This is my Portfolio.";   // Text to type into the <p>

    const introElement = document.getElementById("greeting-text");   // <h1> element
    const portfolioElement = document.getElementById("portfolio-text"); // <p> element

    let introIndex = 0;  // Index tracker for <h1>
    let portfolioIndex = 0;  // Index tracker for <p>

    // Function to type text into <h1>
    function typeIntroText() {
        if (introIndex < introText.length) {
            introElement.textContent += introText.charAt(introIndex);
            introIndex++;
            setTimeout(typeIntroText, 100);  // Continue typing after 100ms
        } else {
            typePortfolioText();  // Start typing <p> after <h1> is done
        }
    }

    // Function to type text into <p>
    function typePortfolioText() {
        if (portfolioIndex < portfolioDesc.length) {
            portfolioElement.textContent += portfolioDesc.charAt(portfolioIndex);
            portfolioIndex++;
            setTimeout(typePortfolioText, 100);  // Continue typing after 100ms
        }
    }

    // Clear existing content before starting
    introElement.textContent = "";
    portfolioElement.textContent = "";

    // Start the typewriter effect for <h1>
    typeIntroText();
});



// Sidebar active link handling
document.addEventListener("DOMContentLoaded", () => {
    const sidebarLinks = document.querySelectorAll('.sidebar .sidebar-text, .sidebar-present');
    const sidebarMenu = document.querySelector('.sidebar');  // Moved inside for scope clarity

    // Function to handle adding/removing the active class
    function setActiveClass() {
        sidebarLinks.forEach(item => item.classList.remove('active'));
        this.classList.add('active');
    }

    // Add event listeners to sidebar links for active state
    sidebarLinks.forEach(link => link.addEventListener('click', setActiveClass));

    // Set active class based on current URL pathname and hash
    const currentPath = window.location.pathname;
    const currentHash = window.location.hash;

    sidebarLinks.forEach(link => {
        const linkURL = new URL(link.href);
        if (linkURL.pathname === currentPath && linkURL.hash === currentHash) {
            link.classList.add('active');
        }
    });

    // Close sidebar when a sidebar link is clicked on mobile
    sidebarLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (window.innerWidth <= 768) {
                sidebarMenu.classList.add('hidden'); // hide sidebar on mobile after clicking
            }
        });
    });
});

// Sidebar toggle functionality (for mobile view)
const toggleButton = document.querySelector('.menu-toggle');
const sidebarMenu = document.querySelector('.sidebar');

// Function to adjust sidebar visibility based on screen size
const adjustSidebarVisibility = () => {
    if (window.innerWidth <= 768) {
        sidebarMenu.classList.add('hidden');  // Hide sidebar on small screens by default
    } else {
        sidebarMenu.classList.remove('hidden');  // Show sidebar on larger screens
    }
};

// Toggle sidebar visibility when the menu icon is clicked
toggleButton.addEventListener('click', () => {
    sidebarMenu.classList.toggle('hidden');
});

// Update sidebar visibility on window resize
window.addEventListener('resize', adjustSidebarVisibility);

// Initialize sidebar visibility based on the current window size
adjustSidebarVisibility();






// Form validation for contact page
document.forms["contactForm"].onsubmit = function (event) {
    event.preventDefault(); // Prevent default form submission

    const firstNameField = document.forms["contactForm"]["firstName"];
    const firstName = firstNameField.value.trim();
    const lastNameField = document.forms["contactForm"]["lastName"];
    const lastName = lastNameField.value.trim();
    const emailField = document.forms["contactForm"]["email"];
    const email = emailField.value.trim();
    const subjectField = document.forms["contactForm"]["subject"];
    const subject = subjectField.value.trim();
    const messageField = document.forms["contactForm"]["message"];
    const message = messageField.value.trim();

    const nameRegex = /^[A-Za-z]+$/;
    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

    let isValid = true;

    // Reset previous styles
    [firstNameField, lastNameField, emailField, subjectField, messageField].forEach(field => {
        field.style.border = "";
    });

    // Validate fields
    if (!firstName || !nameRegex.test(firstName)) {
        firstNameField.style.border = "2px solid red";
        isValid = false;
    }
    if (!lastName || !nameRegex.test(lastName)) {
        lastNameField.style.border = "2px solid red";
        isValid = false;
    }
    if (!email || !emailRegex.test(email)) {
        emailField.style.border = "2px solid red";
        isValid = false;
    }
    if (!subject) {
        subjectField.style.border = "2px solid red";
        isValid = false;
    }
    if (!message) {
        messageField.style.border = "2px solid red";
        isValid = false;
    }

    // If validation fails, stop submission
    if (!isValid) return;

    // Prepare form data to send
    const formData = new FormData(document.forms["contactForm"]);

    // Show success banner immediately
    const successBanner = document.getElementById("success-banner");
    successBanner.style.display = "block";

    // Send data via AJAX (fetch) to process_contact.php
    fetch("inc/process_contact.php", {
        method: "POST",
        body: formData,
    })
    .then(response => response.text())
    .then(data => {
        // Handle success response
        if (data.trim() === "success") {
            // Reset form after sending
            document.forms["contactForm"].reset();

            // Hide success message after 5 seconds
            setTimeout(() => successBanner.style.display = "none", 5000);
        } else {
            console.error("There was an issue processing the form: " + data);
        }
    })
    .catch(error => {
        console.error("Something went wrong with the form submission:", error);
    });
};
