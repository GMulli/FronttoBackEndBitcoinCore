function loadDoc() {

    op = document.getElementById("dropdown").innerHTML;
    num = document.getElementById("num").value;

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("demo").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "result.php?operation=" + op + "&num=" + num, true);
    xhttp.send();
    document.getElementById("demo").innerHTML = "request sent to server...";
}

function change(x) {
    document.getElementById("dropdown").innerHTML = document.getElementById(x).innerHTML
}
