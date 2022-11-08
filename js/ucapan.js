// function tulisUcapan() {

// }

var tombol = document.getElementById("buton-ucapan");
var nama = document.getElementById('fnama');
var ucapan = document.getElementById('ucap');
var container = document.getElementById("container-ucapan");

var xhttp;
xhttp = new XMLHttpRequest();

xhttp.onload = function () {
    container.innerHTML = this.responseText;
}

xhttp.open("POST", "load.php", true);
xhttp.send();


tombol.addEventListener('click', function () {

    xhttp.onload = function () {
        container.innerHTML = this.responseText;
    }

    xhttp.open("POST", "tes.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("nama=" + nama.value + "&ucapan=" + ucapan.value);
});


