var isPlayed;
var x = document.getElementById("audio"); 
var buttonAudio = document.getElementById("button-audio");


function KeatasSampeIlang() {
  console.log("clicked");
  document.getElementById("awal").classList.add("sampul_terpencet");
  scrollToTop();
  playAudio();
  isPlayed = true;
}

function scrollToTop() {
  document.getElementById("isi").scrollIntoView(true);
}



function playAudio() { 
  x.play(); 
  buttonAudio.classList.add('play-music');
  buttonAudio.classList.remove('pause-music');
  isPlayed = true;
} 

function pauseAudio() { 
  x.pause();
  buttonAudio.classList.remove('play-music');
  buttonAudio.classList.add('pause-music');
  isPlayed = false;
}

function clickAudio() {
    if (!isPlayed) {
        playAudio();
    } else {
        pauseAudio();
    }
}



