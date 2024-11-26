const images = [
    "../images/skull_and_bones.jpg",
    "../images/red_dead_slide.jpg",
    "../images/spider_man.jpg",
    "../images/fortnite.jpg",
    "../images/far_cry.jpg"
];

let currentImageIndex = 0;

function changeBackground() {
    const nextImageIndex = (currentImageIndex + 1) % images.length;
    const slideshow = document.querySelector('.content-slideshow');

    slideshow.style.setProperty('--next-slideshow-bg', `url("${images[nextImageIndex]}")`);

    slideshow.classList.add('fade-in');

    setTimeout(() => {
        slideshow.style.setProperty('--slideshow-bg', `url("${images[nextImageIndex]}")`);
        slideshow.classList.remove('fade-in');
        currentImageIndex = nextImageIndex;
    }, 1500);
}


setInterval(changeBackground, 5000);
