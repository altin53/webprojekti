// Get all the slide images
var slides = document.querySelectorAll('.slide');

// Set the index of the current slide
var currentSlide = 0;

// Set the time interval for the slide transition
var slideInterval = setInterval(nextSlide, 3000);

// Function to display the next slide
function nextSlide() {
    console.log('Next slide called'); // add this line
    // Hide the current slide
    slides[currentSlide].className = 'slide';
    // Move to the next slide
    currentSlide = (currentSlide + 1) % slides.length;
    // Show the next slide
    slides[currentSlide].className = 'slide active';

    // Clear the previous interval and set a new one
    clearInterval(slideInterval);
    slideInterval = setInterval(nextSlide, 3000);
}
