function generate() {
  let lotto = new Array();
  let result = "";
  let identifier = "ball";
  for (let j = 0; j < 6; j++) {
    let number = Math.trunc(Math.random() * 49 + 1);
    if (!lotto.includes(number)) {
      lotto.push(number);
    } else {
      j--;
    }
  }

  // lotto.sort sortiert alphabetisch => 10 ist vor 5
  // By default, the sort method sorts elements alphabetically. 
  // To sort numerically just add a new method which handles numeric sorts (sortNumber, shown below)
  // https://www.w3schools.com/jsref/jsref_sort.asp 
  lotto.sort(function (a, b) {
    return a - b;
  });
  for (let j = 0; j < lotto.length; j++) {
    document.getElementById(identifier + j).innerHTML = lotto[j];
  }
}
