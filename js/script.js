const images = [
    "../images/skull_and_bones.jpg",
    "../images/red_dead_slide.jpg",
    "../images/spider_man.jpg",
    "../images/fortnite.jpg",
    "../images/far_cry.jpg"
];
const popup = document.getElementById('popup');
const openPopupBtn = document.getElementById('image-game-cover');
const closePopupBtn = document.getElementById('closePopupBtn');
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

const button = document.getElementById('close');
const container = document.getElementById('popup2');

 if (localStorage.getItem('isHidden') === 'true') {
     container.style.display = 'none';
}

button.addEventListener('click', function() {
    container.style.display = 'none';

    localStorage.setItem('isHidden', 'true');
});



openPopupBtn.addEventListener('click', function() {
    popup.style.display = 'flex';
});

closePopupBtn.addEventListener('click', function() {
    popup.style.display = 'none';
});

window.addEventListener('click', function(event) {
    if (event.target === popup) {
        popup.style.display = 'none';
    }
});


let element = document.getElementById("image-game-cover");
let backgroundImage = window.getComputedStyle(element).backgroundImage;
let img0 = "none"
// Extract de URL uit de backgroundImage
if (backgroundImage !== "none") {
    img0 = backgroundImage.slice(5, -2); // Verwijdert 'url("")' rondom de URL
} else {
    console.log("Geen achtergrondafbeelding ingesteld.");
}
let img1 = document.getElementById("image1").src
let img2 = document.getElementById("image2").src

console.log(img0, img1, img2,)

document.querySelectorAll(".optielink").forEach(optielink => {
    optielink.addEventListener("click", function(event) {
        let data = event.target.getAttribute("data");

        
        if (data == 0) {
            document.getElementById("image1").src = img1
            document.getElementById("image2").src = img2
            document.getElementById("image-game-cover").style.backgroundImage = `url(${img0})`
        }

        else if (data == 1) {
            document.getElementById("image1").src = img0
            document.getElementById("image2").src = img2
            document.getElementById("image-game-cover").style.backgroundImage = `url(${img1})`
        }

        else if (data == 2) {
            document.getElementById("image1").src = img0
            document.getElementById("image2").src = img1
            document.getElementById("image-game-cover").style.backgroundImage = `url(${img2})`
        }


        
        console.log("Geklikte optie:", data);
    });
});