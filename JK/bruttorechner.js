
function calcBrutto(e) {
    let netto = Number.parseInt(document.getElementById('netto').value)
    let percent = Number.parseInt(document.getElementById('percent').value)
    let brutto = netto + (netto * (percent/100))
    document.getElementById('brutto').value = brutto
}
