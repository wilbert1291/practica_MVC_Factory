<?php if (!defined('Controlador_circulo')) exit; ?>
<ul>
    <li><a id="btn_inicio" href="#" onclick="cambiar_pagina('inicio')">Inicio</a></li>
    <li><a id="btn_circulo" href="#" class="active" onclick="cambiar_pagina('circulo')">Circulo</a></li>
    <li><a id="btn_cuadrado" href="#" onclick="cambiar_pagina('cuadrado')">Cuadrado</a></li>
    <li><a id="btn_triangulo" href="#" onclick="cambiar_pagina('triangulo')">Triangulo</a></li>
</ul>

<div class="col-3 col-s-9">
    <center>
        <div id="area"></div>
        <div id="perimetro"></div>
    </center>
</div>
<div class="col-6 col-s-9">
    <center>
        <h1>Calculadora de cuadrados</h1>
        <br>
        <input type="text" value="circulo" id="figura" hidden>
        <br>
        <div id="campos">
            <label>Cual es el radio de tu circulo:</label>
            <input type="text" id="campo_a">
        </div>
        <div id="botones">
            <button type="button" value="1" onclick="operacion(this.value)">Sacar area</button>
            <button type="button" value="2" onclick="operacion(this.value)">Sacar perimetro</button>
            <button type="button" value="3" onclick="operacion(this.value)">Ver descripcion</button>
            <button type="button" value="0" onclick="operacion(this.value)">Mostrar todo</button>
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
