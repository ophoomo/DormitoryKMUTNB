window.onload = function() {
    const areaPrint = this.document.getElementById("areaPrint");
    console.log(areaPrint);
    console.log(window);
    var opt = {
        margin: 0,
        filename: 'dorm_kmutnb_bookroom.pdf',
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 4 },
        jsPDF: { unit: 'px', format: 'A4', orientation: 'portrait' }
    };
    html2pdf().from(areaPrint).set(opt).save();
}