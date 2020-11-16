var steuer = "19,00";

function O(id) {
    return document.getElementById(id)
}

function insertPos() {
    pos = '<table><tr>';
    pos += '<td valign=top style="width:100px;"><input type=text name="anz[]" value="1" size=4 onKeyUp="calculate()" /></td>';
    pos += '<td valign=top style="width:100px;"><select name="einheit[]"><option value="Lfm.">Lfm.</option><option value="Pal.">Pal.</option><option value="pschl.">pschl.</option><option value="Pkg.">Pkg.</option><option value="Std.">Std.</option><option value="Stk.">Stk.</option> size=4 onKeyUp="calculate()" /></td>';
    pos += '<td valign=top><textarea style="width:900px;" rows=7 name=dsc[] onKeyUp="typeAhead(event, this)"></textarea></td>';
    pos += '<td valign=top style="width:100px;"><input type=text name="ep[]" value="" size=4 onKeyUp="calculate()" /></td>';
    pos += '<td valign=top style="width:100px;"><input type=text name="poserab[]" value="0" size=4 onKeyUp="calculate()" /></td>';
    pos += '<td valign=top style="width:100px;"><input type=text name="posprab[]" value="1" size=4 onKeyUp="calculate()" /></td>';
    pos += '<td valign=top><input style="color:red;" type=button name="del[]" value=" X " onclick="deletePos(this);"/></td>';
    pos += '</tr></table>';
    obj = document.createElement("DIV");
    obj.innerHTML = pos;
    O("docpos").appendChild(obj);
    a_anz = document.getElementsByName("anz[]");
    a_anz[a_anz.length - 1].focus()
}

function Rabatt() {
    return '<div class="column">Gesamtrabatt &euro;<input type=text name="geserab" value="0" size=4 onKeyUp="calculate()"></div><div class="column">Gesamtrabatt %<input type=text name="gesprab" value="1" size=4 onKeyUp="calculate()"></div>';
}

function deletePos(obj) {
    O("docpos").removeChild(obj.parentNode.parentNode.parentNode.parentNode.parentNode);
    calculate()
}

function calculate() {
    a_anz = document.getElementsByName("anz[]");
    a_ep = document.getElementsByName("ep[]");
    a_poserab = document.getElementsByName("poserab[]");
    a_posprab = document.getElementsByName("posprab[]");
    b_geserab = document.getElementsByName("geserab");
    b_gesprab = document.getElementsByName("gesprab");
    sum = 0;
    for (f = 0; f < a_anz.length; f++) {
        menge = parseFloat(a_anz[f].value.replace(/,/, "."));
        preis = parseFloat(a_ep[f].value.replace(/,/, "."));
	postenrabatteuro = parseFloat(a_poserab[f].value.replace(/,/, "."));
	postenrabattprozent = parseFloat(a_posprab[f].value.replace(/,/, "."));
        if (!(isNaN(menge) || isNaN(preis))) sum = sum + (((menge * preis) - (menge * postenrabatteuro)) * postenrabattprozent)
    }
    gesamtrabatteuro = parseFloat(b_geserab[0].value.replace(/,/, "."));
    gesamtrabattprozent = parseFloat(b_gesprab[0].value.replace(/,/, "."));
    mwst = parseFloat(steuer.replace(/,/, "."));
    st = sum * mwst / 100;
    gr = (sum * gesamtrabattprozent - gesamtrabatteuro) - sum;
    nettoabzug = sum + gr;
    total = sum + st;
    O("netto").value = sum.toFixed(2).toString().replace(/\./, ",") + " â‚¬";
    O("gr").value = gr.toFixed(2).toString().replace(/\./, ",") + " â‚¬";
    O("nettoabzug").value = nettoabzug.toFixed(2).toString().replace(/\./, ",") + " â‚¬";
    O("steuer").value = st.toFixed(2).toString().replace(/\./, ",") + " â‚¬";
    O("brutto").value = total.toFixed(2).toString().replace(/\./, ",") + " â‚¬"
}
