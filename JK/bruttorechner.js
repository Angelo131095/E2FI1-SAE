
// let netto = document.getElementsByTagName('netto')
document.addEventListener("DOMContentLoaded", function (event) {
    let form = document.getElementById("form");

    form.onsubmit = function() {
        calcBrutto();
    };
});

function calcBrutto() {
    let netto = Number.parseInt(document.getElementById('netto').value)
    let percent = Number.parseInt(document.getElementById('percent').value)
    let brutto = netto + (netto * (percent/100))
    alert(brutto);
}
