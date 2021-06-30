function typeAhead(e,tgt) { console.log(tgt.value) }; // missing function

const toNum = str => {
  let num = str.replace(/,/, ".");
  return isNaN(num) || num.trim() === "" ? 0 : +num;
}
const toAmount = num => num.toLocaleString('de-DE', {
  style: 'currency',
  currency: 'EUR'
})

const steuer = '19';
const mwst = toNum(steuer);
let container, nettoField, grField, nettoabzugField, steuerField, bruttoField, geserabField, gesprabField;


window.addEventListener("load", function() {
  container = document.getElementById("docpos");
  nettoField = document.getElementById("netto");
  grField = document.getElementById("gr");
  nettoabzugField = document.getElementById("nettoabzug");
  steuerField = document.getElementById("steuer");
  bruttoField = document.getElementById("brutto");
  geserabField = document.querySelector("[name=geserab]");
  gesprabField = document.querySelector("[name=gesprab]");

container.addEventListener("click", function(e) {
    const tgt = e.target;
    const parent = tgt.closest("tr");
    if (tgt.classList.contains("button3")) {
      const x = parent.querySelector("[name=artikelsuche]").value;
      parent.querySelector(".artikelbeschreibung").value = x;
    } else if (tgt.classList.contains("del")) {
      tgt.closest("tr").remove();
      calculate()
    }
  })
  container.addEventListener("input", calculate);
  geserabField.addEventListener("input", calculate);
  gesprabField.addEventListener("input", calculate);
  container.addEventListener("keyup", function(e) {
    const tgt = e.target;
    if (tgt.classList.contains("artikelbeschreibung")) {
      typeAhead(e, tgt);
    }
  })
  document.querySelector(".button2").addEventListener("click", insertPos);
})

function insertPos() {
  const newTr = container.querySelector("tr").cloneNode(true);
  [...newTr.querySelectorAll("input, textarea")].forEach(inp => inp.value="");
  newTr.querySelector(".pos").value=('<?php echo $posno++ ;?>');
  newTr.querySelector(".anz").value=1;
  newTr.querySelector(".poserab").value=0;
  newTr.querySelector(".posprab").value=1;
  newTr.querySelector(".del").value='X';
  container.appendChild(newTr);
  newTr.querySelector(".anz").focus();
}

function calculate() {
  const gesamtrabatteuro = toNum(document.querySelector("[name=geserab]").value);
  const gesamtrabattprozent = toNum(document.querySelector("[name=gesprab]").value);

  let sum = 0;
  [...container.querySelectorAll("tr")].forEach(row => {
    const postenrabatteuro = toNum(row.querySelector(".poserab").value);
    const postenrabattprozent = toNum(row.querySelector(".posprab").value);
    const preis = toNum(row.querySelector(".ep").value);
    const menge = toNum(row.querySelector(".anz").value);
    sum += (((menge * preis) - (menge * postenrabatteuro)) * postenrabattprozent)
  });
  let gr = (sum * gesamtrabattprozent - gesamtrabatteuro) - sum;
  let st = (sum + gr) * mwst / 100;
  let nettoabzug = sum + gr;
  total = sum + gr + st;

  nettoField.value = toAmount(sum);
  grField.value = toAmount(gr);
  nettoabzugField.value = toAmount(nettoabzug);
  steuerField.value = toAmount(st);
  bruttoField.value = toAmount(total);
}