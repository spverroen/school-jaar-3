function loadPage(href, callback) {
    var xhr = new XMLHttpRequest();
    xhr.onload = function() {
        if (this.readyState == 4 && this.status == 200) {
            callback(this);
        }
    };
    xhr.open("GET", href, true);
    xhr.send();
}

function submitForm(form, href, callback) {
    var formData = new FormData(document.getElementById(form));
    var xhr = new XMLHttpRequest();
    xhr.onload = function() {
        if (this.readyState == 4 && this.status == 200) {
            callback(this);
        }
    };
    xhr.open("POST", href, true);
    xhr.send(formData);
}

function sendToContent(result){
    console.log(result);
    return document.getElementById("content").innerHTML = result.response;
}