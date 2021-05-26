// Change ImgSlide firstPage (index)
// Variable chageImgSlide
let indexImageSlide = 0; 			
let images = [];	
images[0] = "url('./assets/img/dorm/dorm_women_01.jpg')";
images[1] = "url('./assets/img/dorm/dorm_women_02.jpg')";

function changeImg(){
    let bannerChageImage = document.getElementById("slide");
    bannerChageImage.style.background = images[indexImageSlide];
    (indexImageSlide < images.length - 1) ? indexImageSlide++ : indexImageSlide = 0;
    setTimeout("changeImg()", 4000);
}
window.onload=changeImg;
// End



// Close news
document.getElementById('btnClose').onclick = () => {
    document.getElementById('announce').classList.add('deactive');
}
// End



// Loading web
setTimeout("loading()", 500);
function loading() {
    document.getElementById('loading').style.background = "transparent";
    setTimeout("destroyLoading()", 1000);
}
function destroyLoading() {
    document.getElementById('loading').classList.add('deactive');
}
// End