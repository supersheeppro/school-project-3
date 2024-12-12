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

document.getElementById("svg1").addEventListener("click", function () {
    document.getElementById("svg2").style.display = "block"
    document.getElementById("svg1").style.display = "none"
});
document.getElementById("svg2").addEventListener("click", function () {
    document.getElementById("svg2").style.display = "none"
    document.getElementById("svg1").style.display = "block"
});

document.addEventListener('DOMContentLoaded', () => {

})
document.getElementById("dropdownbtn").addEventListener("click", function (){
    document.getElementById("dropdowncnt").style.display =
        document.getElementById("dropdowncnt").style.display === 'block' ? 'none' : 'block';
})


document.addEventListener('click', (event) => {
    if (!document.getElementById("dropdownbtn").contains(event.target) && !document.getElementById("dropdowncnt").contains(event.target)) {
        document.getElementById("dropdowncnt").style.display = 'none';
    }
});