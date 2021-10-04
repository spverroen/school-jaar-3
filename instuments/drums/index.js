function onstart() {
    document.body.style.backgroundColor = "#4B5563";
}

function background() {
    let color = document.getElementById("color").value;

    document.body.style.backgroundColor = color;
}

document.addEventListener('keypress', function(event) {
    switch (event.keyCode) {
        case 49:
            playAudio('1');
            break;
        case 50:
            playAudio('2');
            break;
        case 51:
            playAudio('3');
            break;
        case 52:
            playAudio('4');
            break;
        case 53:
            playAudio('5');
            break;
        case 54:
            playAudio('6');
            break;
        default:
            break;
    }
});

function playAudio(note) {
    let mp3 = './notes/' + note + '.mp3';
    let audio = new Audio(mp3);
    audio.play();
}
