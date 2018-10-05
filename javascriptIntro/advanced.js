function countN() {
var from = document.getElementById("fromNumber").value;
var to = document.getElementById("toNumber").value;
var text = "";
for (x=from; x<=to; x++){
   text += (x + "<br>");
}

var myarea = document.getElementById("numbers");
myarea.innerHTML = text;
myarea.classList.remove("hidden");
myarea.classList.add("visible");

}
