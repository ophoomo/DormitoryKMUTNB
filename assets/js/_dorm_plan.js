document.getElementsByClassName('btn')[0].onclick = () => {
    chageText("แผนผัง : หอพักชาย");
    document.getElementsByClassName('plan')[0].classList.remove('deactive');
    document.getElementsByClassName('plan')[1].classList.add('deactive');
    document.getElementsByClassName('plan')[2].classList.add('deactive');
}
document.getElementsByClassName('btn')[1].onclick = () => {
    chageText("แผนผัง : หอพักหญิง 1");
    document.getElementsByClassName('plan')[0].classList.add('deactive');
    document.getElementsByClassName('plan')[1].classList.remove('deactive');
    document.getElementsByClassName('plan')[2].classList.add('deactive');
}
document.getElementsByClassName('btn')[2].onclick = () => {
    chageText("แผนผัง : หอพักหญิง 2");
    document.getElementsByClassName('plan')[0].classList.add('deactive');
    document.getElementsByClassName('plan')[1].classList.add('deactive');
    document.getElementsByClassName('plan')[2].classList.remove('deactive');
}

function chageText(status) {
    document.getElementById('txtStatus').innerHTML = status;
}