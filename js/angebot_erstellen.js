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
    pos += '<td valign=top><input style="color:red;" type=button name="del[]" value=" X " onclick="deletePos(this);"/></td>';
    pos += '</tr></table>';
    obj = document.createElement("DIV");
    obj.innerHTML = pos;
    O("docpos").appendChild(obj);
    a_anz = document.getElementsByName("anz[]");
    a_anz[a_anz.length - 1].focus()
}

function deletePos(obj) {
    O("docpos").removeChild(obj.parentNode.parentNode.parentNode.parentNode.parentNode);
    calculate()
}

function calculate() {
    a_anz = document.getElementsByName("anz[]");
    a_ep = document.getElementsByName("ep[]");
    sum = 0;
    for (f = 0; f < a_anz.length; f++) {
        menge = parseFloat(a_anz[f].value.replace(/,/, "."));
        preis = parseFloat(a_ep[f].value.replace(/,/, "."));
        if (!isNaN(menge) && !isNaN(preis)) sum = sum + (menge * preis)
    }
    mwst = parseFloat(steuer.replace(/,/, "."));
    st = sum * mwst / 100;
    total = sum + st;
    O("netto").value = sum.toFixed(2).toString().replace(/\./, ",") + " €";
    O("steuer").value = st.toFixed(2).toString().replace(/\./, ",") + " €";
    O("brutto").value = total.toFixed(2).toString().replace(/\./, ",") + " €"
}
var typeAheadDsp = false;
var curAheadString = false;
var curAheadArray = Array();
var curAnz = Array();
var curEp = Array();
var curIndex = 0;

function typeAhead(e, q) {
    if (q.length > 10) return;
    if (!typeAheadDsp) {
        typeAheadDsp = document.createElement("div");
        typeAheadDsp.className = "typeAheadDsp";
        document.body.appendChild(typeAheadDsp);
        typeAheadDsp.style.zIndex = 0
    }
    wert = q.name.replace(/\[\]/ig, "");
    e = ((!e) ? window.event : e);
    target = ((!e.target) ? e.srcElement : e.target);
    if (target.nodeType == 3) target = target.parentNode;
    code = ((e.charCode) ? e.charCode : ((e.keyCode) ? e.keyCode : ((e.which) ? e.which : 0)));
    if (curAheadString != false && code == 39) {
        q.value = curAheadArray[curIndex];
        curAheadString = false;
        if (wert == "dsc") {
            q.parentNode.previousSibling.firstChild.value = curAnz[curIndex];
            q.parentNode.nextSibling.firstChild.value = curEp[curIndex]
        }
        typeAheadDsp.innerHTML = "";
        calculate();
        return false
    }
    if (curAheadString != false && (code == 40 || code == 38)) {
        if (curIndex > 0 && code == 38) curIndex--;
        if (curIndex < (curAheadArray.length - 1) && code == 40) curIndex++;
        typeAheadDsp.innerHTML = curAheadArray[curIndex].replace(/\r\n/ig, "<br />");
        if (q.type.toLowerCase() == "textarea") {
            typeAheadDsp.innerHTML = "<br />" + typeAheadDsp.innerHTML;
            if (wert == "dsc") typeAheadDsp.innerHTML += " <i style='color:red;'>(" + curAnz[curIndex] + (curAnz[curIndex].replace(/[0-9,\. ]/ig, "") == "" ? "x" : "") + " zu " + curEp[curIndex] + "€" + (curAnz[curIndex].replace(/[0-9,\. ]/ig, "") != "" ? "/" + curAnz[curIndex].replace(/[0-9,\. ]/ig, "") : "") + ")</i>";
            q.style.height = (typeAheadDsp.offsetHeight + 30) + "px"
        }
        return false
    }
    found = false;
    curAheadArray = Array();
    curAnz = Array();
    curEp = Array();
    check = typeAheadData[wert];
    for (f = 0; f < check.length; f++) {
        if (check[f].toLowerCase().indexOf(q.value.toLowerCase()) != -1 && q.value.length > 0) {
            if (!found) {
                typeAheadDsp.innerHTML = check[f].replace(/\r\n/ig, "<br />");
                typeAheadDsp.style.left = getposOffset(q, "left") + "px";
                typeAheadDsp.style.top = getposOffset(q, "top") + "px";
                typeAheadDsp.style.width = q.offsetWidth + "px";
                if (q.type.toLowerCase() == "textarea") {
                    typeAheadDsp.innerHTML = "<br />" + typeAheadDsp.innerHTML;
                    if (wert == "dsc") typeAheadDsp.innerHTML += " <i style='color:red;'>(" + typeAheadData["anz"][f] + (typeAheadData["anz"][f].replace(/[0-9,\. ]/ig, "") == "" ? "x" : "") + " zu " + typeAheadData["ep"][f] + "€" + (typeAheadData["anz"][f].replace(/[0-9,\. ]/ig, "") != "" ? "/" + typeAheadData["anz"][f].replace(/[0-9,\. ]/ig, "") : "") + ")</i>";
                    q.style.height = (typeAheadDsp.offsetHeight + 30) + "px"
                }
                curAheadString = check[f];
                found = true;
                curIndex = 0
            }
            curAheadArray[curAheadArray.length] = check[f];
            if (wert == "dsc") {
                curAnz[curAnz.length] = typeAheadData["anz"][f];
                curEp[curEp.length] = typeAheadData["ep"][f]
            }
        }
    }
    if (!found) {
        typeAheadDsp.innerHTML = "";
        q.style.height = "";
        curAheadString = false
    }
}

function getposOffset(what, offsettype) {
    var totaloffset = (offsettype == "left") ? what.offsetLeft : what.offsetTop;
    var parentEl = what.offsetParent;
    while (parentEl != null) {
        totaloffset = (offsettype == "left") ? totaloffset + parentEl.offsetLeft : totaloffset + parentEl.offsetTop;
        parentEl = parentEl.offsetParent
    }
    return totaloffset
}
