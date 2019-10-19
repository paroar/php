<?php

function redireccion_index($palabra, $reemplazo, $texto)
{
    header("Location: ../index.php?enviar=exito&palabra=$palabra&reemplazo=$reemplazo&texto=$texto");
}

function textarea($palabra, $reemplazo, $texto)
{
    echo <<<EOD
    <section class="editor-texto">
        <form action="./php/controlador_editor_texto.php" method="post">
            <div class="barra-herramientas">
                <input type="submit" name="enviar" value="posiciones">
                <input type="submit" name="enviar" value="existe">
                <input type="submit" name="enviar" value="reemplazar">
                <div class="barra-herramientas-input">
                    <input type="textarea" name="reemplazo" placeholder="reemplazo" value="$reemplazo">
                    <input type="textarea" name="palabra" placeholder="palabra" value="$palabra">
                </div>
            </div>
            <textarea name="texto" placeholder="Introduce aquí el texto..." class="texto">$texto</textarea><br>
        </form>
    </section>
EOD;
}