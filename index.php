<html>
    <head>
        <script>
            function showBook(str){
                if(str == "") {
                    document.getElementById("txthint").innerHTML = ""
                    return;
                } else {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function (){
                        if (this.readystate == 4 && this.state == 200){
                            docyment.getElementById("txthint").innerHTML =
                            this.responseText;
                        }
                    }
                }
                xhttp.open("GET", "books.php?q=" + str, true);
                xhttp.send();
            }
        </script>
    </head>
    <body>
        <select name='fname' onchange="showBook(this.value)">
            <option value="">Selecione uma pessoa</option>
            <option value=1>Alice</option>
            <option value=2>Joao</option>
            <option value=3>Samuel</option>
            <option value=4>Pedro</option>
            <option value=5>Alberto</option>
        </select>
    </body>
</html>