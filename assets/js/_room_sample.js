console.log("enable");
// Check event on click button
var txtStatus = document.getElementsByClassName('statusTxt')[0];
document.getElementsByClassName('btn')[0].onclick = () => {
    chageStatus("หอพักชาย");
    document.getElementsByClassName('textDescript')[0].classList.remove('deactive');
    document.getElementsByClassName('textDescript')[1].classList.add('deactive');
    document.getElementsByClassName('textDescript')[2].classList.add('deactive');
    document.getElementsByClassName('dorm')[0].classList.remove('deactive');
    document.getElementsByClassName('dorm')[1].classList.add('deactive');
    document.getElementsByClassName('dorm')[2].classList.add('deactive');
}
document.getElementsByClassName('btn')[1].onclick = () => {
    chageStatus("หอพักหญิง 1");
    document.getElementsByClassName('textDescript')[0].classList.add('deactive');
    document.getElementsByClassName('textDescript')[1].classList.remove('deactive');
    document.getElementsByClassName('textDescript')[2].classList.add('deactive');
    document.getElementsByClassName('dorm')[0].classList.add('deactive');
    document.getElementsByClassName('dorm')[1].classList.remove('deactive');
    document.getElementsByClassName('dorm')[2].classList.add('deactive');
}
document.getElementsByClassName('btn')[2].onclick = () => {
    chageStatus("หอพักหญิง 2");
    document.getElementsByClassName('textDescript')[0].classList.add('deactive');
    document.getElementsByClassName('textDescript')[1].classList.add('deactive');
    document.getElementsByClassName('textDescript')[2].classList.remove('deactive');
    document.getElementsByClassName('dorm')[0].classList.add('deactive');
    document.getElementsByClassName('dorm')[1].classList.add('deactive');
    document.getElementsByClassName('dorm')[2].classList.remove('deactive');
}

function chageStatus(status) {
    txtStatus.innerHTML = status;
}
// End

// loadImage for Zoom Image
var showImage = document.getElementById("test");
window.onload = getImgName;

function getImgName(strImgPath) {
    let strPath = "url('./assets/img/dorm/room_" + strImgPath + ".webp')";
    console.log(strPath);
    showImage.style.background = strPath;
}

function clickZoom(group, item) {
    switch (group) {
        case 1:
            switch (item) {
                case 1:
                    console.log("Hit : 1, 1");
                    getImgName("male_01");
                    break;
                case 2:
                    console.log("Hit : 1, 2");
                    getImgName("male_02");
                    break;
                case 3:
                    console.log("Hit : 1, 3");
                    getImgName("male_03");
                    break;
                case 4:
                    console.log("Hit : 1, 4");
                    getImgName("male_04");
                    break;
                case 5:
                    console.log("Hit : 1, 5");
                    getImgName("male_05");
                    break;
                case 6:
                    console.log("Hit : 1, 6");
                    getImgName("male_06");
                    break;
                case 7:
                    console.log("Hit : 1, 7");
                    getImgName("male_07");
                    break;
                case 8:
                    console.log("Hit : 1, 8");
                    getImgName("male_08");
                    break;
                case 9:
                    console.log("Hit : 1, 9");
                    getImgName("male_09");
                    break;
                    // 10
            }
            break;
        case 2:
            switch (item) {
                case 1:
                    console.log("Hit : 2, 1");
                    getImgName("female_1_01");
                    break;
                case 2:
                    console.log("Hit : 2, 2");
                    getImgName("female_1_02");
                    break;
                case 3:
                    console.log("Hit : 2, 3");
                    getImgName("female_1_03");
                    break;
                    // 4, 5, 6, 7, 8, 9, 10
            }
            break;
        case 3:
            switch (item) {
                case 1:
                    console.log("Hit : 3, 1");
                    getImgName("female_2_01");
                    break;
                case 2:
                    console.log("Hit : 3, 2");
                    getImgName("female_2_02");
                    break;
                case 3:
                    console.log("Hit : 3, 3");
                    getImgName("female_2_03");
                    break;
                case 4:
                    console.log("Hit : 3, 4");
                    getImgName("female_2_04");
                    break;
                case 5:
                    console.log("Hit : 3, 5");
                    getImgName("female_2_05");
                    break;
                    // 6, 7, 8, 9, 10
            }
            break;
        default:
            console.log("non click image switch case !check");
    }
}