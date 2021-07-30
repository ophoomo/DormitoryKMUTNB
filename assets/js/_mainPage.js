// app.disable('x-powered-by');
// Variable chageImgSlide
let indexImageSlide = 0;
let images = [];
images[0] = "url('./assets/img/dorm/women_01.webp')";
images[1] = "url('./assets/img/dorm/women_02.webp')";

function changeImg() {
    let bannerChageImage = document.getElementById("slideBanner");
    bannerChageImage.style.background = images[indexImageSlide];
    (indexImageSlide < images.length - 1) ? indexImageSlide++ : indexImageSlide = 0;
    setTimeout("changeImg()", 4000);
}
window.onload = changeImg;
// End


// Close popup  
var popup = document.getElementsByClassName('container_popupNews')[0];

document.getElementById('popupNews').onclick = () => {
    popup.classList.remove('deactive');

}

document.getElementById('closeBtn').onclick = () => {
    popup.classList.add('deactive');
}

document.getElementById('overlayPopup').onclick = () => {
    popup.classList.add('deactive');
}

document.onkeydown = function(evt) {
    evt = evt || window.event;
    if (evt.keyCode === 27) {
        popup.classList.add('deactive');
    }
};
// End