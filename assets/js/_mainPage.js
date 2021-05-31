// Variable chageImgSlide
let indexImageSlide = 0; 			
let images = [];	
images[0] = "url('../img/dorm/women_01.jpg')";
images[1] = "url('../img/dorm/women_02.jpg')";

function changeImg(){
    let bannerChageImage = document.getElementById("slideBanner");
    bannerChageImage.style.background = images[indexImageSlide];
    (indexImageSlide < images.length - 1) ? indexImageSlide++ : indexImageSlide = 0;
    setTimeout("changeImg()", 4000);
}
window.onload=changeImg;
// End
