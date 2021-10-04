function onstart() {
    document.body.style.backgroundColor = "#4B5563";
}

function background() {
    let color = document.getElementById("color").value;

    document.body.style.backgroundColor = color;
}

function playAudio(note) {
    let mp3 = './notes/' + note + '.mp3';
    let audio = new Audio(mp3);
    audio.play();
}

