function calculateBMI() {
    name = document.getElementById("name").value;
    length = document.getElementById("length").value;
    weight = document.getElementById("weight").value;

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("bmiResult").innerHTML = this.responseText;
        }
    };

    xmlhttp.open("GET", "getresult.php?n=" + name + "&l=" + length + "&w=" + weight, true);
    xmlhttp.send();
}
