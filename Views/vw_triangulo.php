<?php if (!defined('Controlador_triangulo')) exit; ?>
<ul>
    <li><a id="btn_inicio" href="#" onclick="cambiar_pagina('inicio')">Inicio</a></li>
    <li><a id="btn_circulo" href="#" onclick="cambiar_pagina('circulo')">Circulo</a></li>
    <li><a id="btn_cuadrado" href="#" onclick="cambiar_pagina('cuadrado')">Cuadrado</a></li>
    <li><a id="btn_triangulo" href="#" class="active" onclick="cambiar_pagina('triangulo')">Triangulo</a></li>
</ul>


<div class="col-3 col-s-9">
    <center>
        <div id="area"></div>
        <div id="perimetro"></div>
    </center>
</div>
<div class="col-6 col-s-9">
    <center>
        <h1>Calculadora de triangulos</h1>
        <br>
        <input type="text" value="triangulo" id="figura" hidden>
        <br>
        <div id="combo">
            <label for="">¿Su triangulo es equilatero? (Sus 3 lados iguales)</label>
            <br>
            <select id="cb_tipotriangulo" onchange="tipo_triangulo(this.value)">
                <option value="0">- Selecciona -</option>
                <option value="1">- Si -</option>
                <option value="2">- No -</option>
            </select>
        </div>
        <div id="campos" hidden>
            <div>
                <label id="etiqueta_1">Cual es el tamaño de la base:</label>
                <input type="text" id="campo_a">
            </div>
            <div>
                <label id="etiqueta_2">Cual es el tamaño de la altura:</label>
                <input type="text" id="campo_b">
            </div>
            <div id="campo_3">
                <label id="etiqueta_3">Tamaño del lado 3:</label>
                <input type="text" id="campo_c">
            </div>
        </div>
        <div id="botones" hidden>
            <button type="button" value="1" onclick="operacion(this.value)">Sacar area</button>
            <button type="button" value="2" onclick="operacion(this.value)">Sacar perimetro</button>
            <button type="button" value="3" onclick="operacion(this.value)">Ver descripcion</button>
            <button type="button" value="0" onclick="operacion(this.value)">Mostrar todo</button>
        </div>
        <div id="nota" hidden>
            <label style="color:red">*NOTA: En caso de querer sacar perimetro el lado 1 se tomara como la base y lado 2 se tomara como la altura*</label>
        </div>
    </center>
</div>
<div class="col-3 col-s-9">
    <div id="descripcion" hidden>
        <center>
            <div>
                <img src="" alt="" width="75%" id="img">
                <p id="text_descripcion"></p>
            </div>
        </center>
    </div>
</div>
