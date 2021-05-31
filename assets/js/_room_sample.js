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
// ENd

// Zoom image

// mediumZoom('.zoom', {
//     margin: 50,
//     background: '#000'
//     // background: '#BADA55',
//     // scrollOffset: 0,
//     // container: '#zoom-container',
//     // template: '#zoom-template',
// })

// // mediumZoom('.zoom-dark', {
//     // background: '#000'
// // })