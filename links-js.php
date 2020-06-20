<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script>
    function recupVilleTableau(str) {
        var xhttp;  
        if (str == "") {
            document.getElementById("listVille").innerHTML = "";
            return;
        }
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            document.getElementById("listVille").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "traitement/ajax/list-ville.php?id="+str, true);
        xhttp.send();
        }
        
        function recupQuartierTableau(str) {
        var xhttp;  
        if (str == "") {
            document.getElementById("listquartier").innerHTML = "";
            return;
        }
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            document.getElementById("listquartier").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "traitement/ajax/list-quartier.php?id="+str, true);
        xhttp.send();
        }

        function recupVilleCombo(str) {
        var xhttp;  
        if (str == "") {
            document.getElementById("comboville").innerHTML = "";
            return;
        }
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            document.getElementById("comboville").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "traitement/ajax/combo-ville.php?id="+str, true);
        xhttp.send();
        }


        function zRecupVilleCombo(str) {
        var xhttp;  
        if (str == "") {
            document.getElementById("Zcomboville").innerHTML = "";
            return;
        }
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            document.getElementById("Zcomboville").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "traitement/ajax/combo-ville.php?id="+str, true);
        xhttp.send();
        }


        function zRecupQuartierCombo(str) {
        var xhttp;  
        if (str == "") {
            document.getElementById("Zcomboquartier").innerHTML = "";
            return;
        }
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            document.getElementById("Zcomboquartier").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "traitement/ajax/combo-quartier.php?id="+str, true);
        xhttp.send();
        }

        function recupZoneTableau(str) {
        var xhttp;  
        if (str == "") {
            document.getElementById("listzone").innerHTML = "";
            return;
        }
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            document.getElementById("listzone").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "traitement/ajax/list-zone.php?id="+str, true);
        xhttp.send();
        }
    </script>