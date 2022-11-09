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

    if (nama.value && ucapan.value) {
        xhttp.open("POST", "tes.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("nama=" + nama.value + "&ucapan=" + ucapan.value);
    } else {
        alert("Tolong isi terlebih dahulu nama dan ucapan :)");
    }


});

tombol.addEventListener('click', function handleClick(event) {
    event.preventDefault();

    const inputs = document.querySelectorAll('#fnama, #ucap');

    inputs.forEach(input => {
        input.value = '';
    });
});

function validateForm() {
    var x = document.forms["ucapForm"]["fnama"]["ucap"].value;
    if (x == "") {
        alert("Kotak Harus Terisi");
        return false;
    }
}