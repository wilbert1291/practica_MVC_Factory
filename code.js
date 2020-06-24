function cambiar_pagina(pagina) {
    if (pagina == "inicio") {
        document.title = "inicio";
        history.pushState(null, "", "index.php");
        llamar_vista(pagina);
    } else if (pagina == "circulo") {
        document.title = "Calculadora de circulos";
        history.pushState(null, "", "circulo");
        llamar_vista(pagina);
    } else if (pagina == "cuadrado") {
        document.title = "Calculadora de cuadrilateros";
        history.pushState(null, "", "cuadrado");
        llamar_vista(pagina);
    } else if (pagina == "triangulo") {
        document.title = "Calculadora de triangulos";
        history.pushState(null, "", "triangulo");
        llamar_vista(pagina);
    }
}

function llamar_vista(pagina) {
    if (window.XMLHttpRequest) {
        connection = new XMLHttpRequest();
    } else if (window.ActiveXObject) {
        connection = new ActiveXObject("Microsoft.XMLHTTP");
    }

    connection.onreadystatechange = response;

    switch (pagina) {
        case "inicio":
            connection.open('POST', 'Controllers/controller_inicio.php');
            break;
        case "circulo":
            connection.open('POST', 'Controllers/controller_circulo.php');
            break;
        case "cuadrado":
            connection.open('POST', 'Controllers/controller_cuadrado.php');
            break;
        case "triangulo":
            connection.open('POST', 'Controllers/controller_triangulo.php');
            break;
    }
    connection.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    connection.send("&nocache=" + Math.random());
}

function response() {

    if (connection.readyState == 4) {
        document.getElementById("contenido").innerHTML = connection.responseText;
    }

}