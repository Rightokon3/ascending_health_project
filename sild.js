let slideIndex = 0;
let slides = document.querySelectorAll('.slide');
let pause = false;
let timer;

showSlides();

function showSlides() {
    if (!pause) {
        let i;
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) { slideIndex = 1 }
        slides[slideIndex - 1].style.display = "block";
        timer = setTimeout(showSlides, 2000); // Change image every 2 seconds
    } else {
        clearTimeout(timer);
    }
}

function togglePause() {
    pause = !pause;
    let pauseBtn = document.querySelector('.pause-btn');
    if (pause) {
        pauseBtn.textContent = "Play";
    } else {
        pauseBtn.textContent = "Pause";
        showSlides();
    }
}
