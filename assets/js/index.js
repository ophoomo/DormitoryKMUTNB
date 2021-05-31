// Change ImgSlide firstPage (index)
// Variable chageImgSlide
    let indexImageSlide = 0; 			
    let images = [];	
    images[0] = "url('../img/dorm/women_01.jpg')";
    images[1] = "url('../img/dorm/women_02.jpg')";
    
    function changeImg(){
        let bannerChageImage = document.getElementById("slide");
        bannerChageImage.style.background = images[indexImageSlide];
        (indexImageSlide < images.length - 1) ? indexImageSlide++ : indexImageSlide = 0;
        setTimeout("changeImg()", 4000);
    }
    window.onload=changeImg;
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


// Close popup
    var popup = document.getElementById('container_popup');
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