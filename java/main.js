// Wait for the page to load fully before running the code
document.addEventListener("DOMContentLoaded", () => {

    //Type writer 
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

    // Gets rid of text before starting
    introElement.textContent = "";
    portfolioElement.textContent = "";

    // Start the typewriter effect for <h1>
    typeIntroText();

});

// Nav bar slider
const toggleButton = document.querySelector('.menu-toggle');
const sidebarMenu = document.querySelector('.sidebar');

// Function to update sidebar visibility based on screen width
const adjustSidebarVisibility = () => {
    if (window.innerWidth <= 768) {
        sidebarMenu.classList.add('hidden');  // Hide sidebar on small screens
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

// Set initial sidebar visibility based on the current window size
adjustSidebarVisibility();








document.forms["contactForm"].onsubmit = function (event) {
    event.preventDefault(); // Prevent default submission

    let firstNameField = document.forms["contactForm"]["firstName"];
    let firstName = firstNameField.value.trim();
    let lastNameField = document.forms["contactForm"]["lastName"];
    let lastName = lastNameField.value.trim();
    let emailField = document.forms["contactForm"]["email"];
    let email = emailField.value.trim();
    let subjectField = document.forms["contactForm"]["subject"];
    let subject = subjectField.value.trim();
    let messageField = document.forms["contactForm"]["message"];
    let message = messageField.value.trim();

    const nameRegex = /^[A-Za-z]+$/;
    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

    let isValid = true;

    // Reset previous styles
    firstNameField.style.border = "";
    lastNameField.style.border = "";
    emailField.style.border = "";
    subjectField.style.border = "";
    messageField.style.border = "";

    // Validate fields
    if (firstName === "" || !nameRegex.test(firstName)) {
        firstNameField.style.border = "2px solid red";
        isValid = false;
    }
    if (lastName === "" || !nameRegex.test(lastName)) {
        lastNameField.style.border = "2px solid red";
        isValid = false;
    }
    if (email === "" || !emailRegex.test(email)) {
        emailField.style.border = "2px solid red";
        isValid = false;
    }
    if (subject === "") {
        subjectField.style.border = "2px solid red";
        isValid = false;
    }
    if (message === "") {
        messageField.style.border = "2px solid red";
        isValid = false;
    }

    // If validation fails, stop submission
    if (!isValid) return;

    // Prepare form data
    let formData = new FormData(document.forms["contactForm"]);

    // Send data via AJAX (fetch)
    fetch("inc/process_contact.php", {
        method: "POST",
        body: formData,
    })
    .then(response => response.text())
    .then(data => {
        if (data.trim() === "success") {
            // Show success banner
            const successBanner = document.getElementById("success-banner");
            successBanner.style.display = "block";

            // Hide success message after 5 seconds
            setTimeout(() => successBanner.style.display = "none", 5000);

            // Reset form
            document.forms["contactForm"].reset();
        }
    })
    .catch(error => console.error("Something went wrong!", error));
};
