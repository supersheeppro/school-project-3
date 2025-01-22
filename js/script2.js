
const popup = document.getElementById('popup');
const popup3 = document.getElementById('popup3');
const openPopupBtn = document.querySelector('.game-detail-img');
const closePopupBtn = document.getElementById('closePopupBtn');

try {
    document.getElementById("svg1").addEventListener("click", function () {
        try {
            document.getElementById("svg2").style.display = "block";
            document.getElementById("svg1").style.display = "none";
        } catch (error) {
            console.error("Fout bij het wijzigen van de display-stijl voor svg1 of svg2:", error);
        }
    });

    document.getElementById("svg2").addEventListener("click", function () {
        try {
            document.getElementById("svg2").style.display = "none";
            document.getElementById("svg1").style.display = "block";
        } catch (error) {
            console.error("Fout bij het wijzigen van de display-stijl voor svg1 of svg2:", error);
        }
    });
} catch (error) {
    console.error("Fout bij het toevoegen van event listeners:", error);
}

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

/*
if (localStorage.getItem('isHidden') === 'true') {
     container.style.display = 'block';
}
 */
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

document.getElementById("reviewaddbutton").addEventListener("click", function() {
    document.getElementById("popup3").style.display = "flex"
})

document.getElementById("close-popup-button").addEventListener("click", function() {
    document.getElementById("popup3").style.display = "none"
})
window.addEventListener('click', function(event) {
    if (event.target === popup3) {
        popup3.style.display = 'none';
    }
});