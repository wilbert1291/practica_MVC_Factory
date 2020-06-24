function tipo_triangulo(tipo) {
    if (tipo == 1) {
        document.getElementById('campos').style.display = "block";
        document.getElementById('botones').style.display = "block";
        document.getElementById('campo_3').style.display = "none";
        document.getElementById('etiqueta_1').innerHTML = "Tamaño de la base:";
        document.getElementById('etiqueta_2').innerHTML = "Tamaño de la altura:";
        document.getElementById('nota').style.display = "none";
    } else if (tipo == 2) {
        document.getElementById('campos').style.display = "block";
        document.getElementById('botones').style.display = "block";
        document.getElementById('campo_3').style.display = "block";
        document.getElementById('etiqueta_1').innerHTML = "Tamaño del lado 1:";
        document.getElementById('etiqueta_2').innerHTML = "Tamaño del lado 2:";
        document.getElementById('nota').style.display = "block";
    } else if (tipo == 0) {
        document.getElementById('campos').style.display = "none";
        document.getElementById('botones').style.display = "none";
        document.getElementById('nota').style.display = "none";
    }
}


function operacion(opc) {
    var figura = document.getElementById('figura').value;
    if (validar(figura)) {
        var a = document.getElementById('campo_a').value;
        if (figura != "circulo") {
            var b = document.getElementById('campo_b').value;
        }
        if (figura == "triangulo") {
            var c = document.getElementById('campo_c').value;
        }

        ajax(opc, a, b, c, figura);
    } else {
        alert("Existen campos vacios");
    }
}


function ajax(opc, a, b, c, figura) {
    if (window.XMLHttpRequest) {
        connection = new XMLHttpRequest();
    } else if (window.ActiveXObject) {
        connection = new ActiveXObject("Microsoft.XMLHTTP");
    }

    connection.onreadystatechange = respuesta;
    connection.open('POST', 'fabrica.php');
    connection.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    connection.send("figura=" + figura + "&operacion=" + opc + "&a=" + a + "&b=" + b + "&c=" + c + "&nocache=" + Math.random());
}

function respuesta() {
    if (connection.readyState == 4) {
        let datos = JSON.parse(connection.responseText);
        var area = "";
        var perimetro = "";
        var descripcion = "";
        var error = "";
        var figura = "";
        for (let item of datos) {
            area = item.area;
            perimetro = item.perimetro;
            descripcion = item.descripcion;
            error = item.error;
            figura = item.figura;
        }

        if (area == "") {
            document.getElementById("area").style.display = "none";
            document.getElementById("area").innerHTML = "";
        } else {
            document.getElementById("area").style.display = "block";
            document.getElementById("area").innerHTML = "<p>" + area + "</p>";
        }

        if (perimetro == "") {
            document.getElementById("perimetro").style.display = "none";
            document.getElementById("perimetro").innerHTML = "";
        } else {
            document.getElementById("perimetro").style.display = "block";
            document.getElementById("perimetro").innerHTML = "<p>" + perimetro + "</p>";
        }

        if (descripcion == "") {
            document.getElementById("descripcion").style.display = "none";
            document.getElementById("text_descripcion").innerHTML = "";
            document.getElementById("img").src = "";
        } else {
            document.getElementById("descripcion").style.display = "block";
            document.getElementById("text_descripcion").innerHTML = "<p>" + descripcion + "</p>";
            if (figura == "circulo") {
                document.getElementById("img").src = "https://4.bp.blogspot.com/-PjQgq_lLwaY/T0ROFSwIPaI/AAAAAAAAAAw/F80pDtP6_9c/s1600/CIRCULO.png";
            } else if (figura == "triangulo") {
                document.getElementById("img").src = "https://image.slidesharecdn.com/triangulosysuclasificacin-140616202240-phpapp02/95/triangulos-y-su-clasificacin-1-638.jpg?cb=1402950200";
            } else if (figura == "cuadrilatero") {
                document.getElementById("img").src = "https://es-static.z-dn.net/files/d86/4f6856863481a6f64c52f737c69d561b.gif";
            }

        }
    }
}

function validar(fig) {
    var a = document.getElementById('campo_a').value;
    if (fig == "circulo") {
        if (a == "") {
            return false;
        }
    } else if (fig == "cuadrilatero") {
        var b = document.getElementById('campo_b').value;
        if (a == "" || b == "") {
            return false;
        }
    } else if (fig == "triangulo") {
        var tipo = document.getElementById('cb_tipotriangulo').value;
        var b = document.getElementById('campo_b').value;
        var c = document.getElementById('campo_c').value;
        if (tipo == 1) {
            if (a == "" || b == "") {
                return false;
            }
        } else {
            if (a == "" || b == "" || c == "") {
                return false;
            }
        }
    }

    return true;
}
