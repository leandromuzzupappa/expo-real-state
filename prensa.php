<?php include "header.php"; ?>

<header id="headerseccion">
    <div class="fondoContainer"><div class="fondo parallax"></div></div>
    <div class="container">
        <h1>Contacto</h1>
    </div>
</header>

<div class="seccion" >
    <div class="container">        
        <div class="contenidoseccion">
            
            <? if($ok==0){?>
            
            <div class="columna c70">
                <h2>Inscripción a <strong>Prensa</strong></h2>
                <form name="frm_prensa" id="frm_prensa" method="post" action="grabar_contacto.php">
                    <div class="columna">
                        <input name="nombre" type="text" id="nombre" placeholder="Nombre y Apellido"/>
                    </div><!--
                    --><div class="columna">
                        <input name="email" type="text" id="email" placeholder="Email"/>
                    </div><!--
                    --><div class="columna">
                        <input name="empresa" type="text" id="empresa" placeholder="Empresa"/>
                    </div><!--
                    --><div class="columna">
                        <input name="cargo" type="text" id="cargo" placeholder="Cargo"/>
                    </div><!--                
                    --><div class="columna">
                        <input name="telefono" type="text" id="telefono" placeholder="Teléfono (cod. area + nº)"/>
                    </div>
                    <div class="columna">
                        <button type="button">ENVIAR</button>
                    </div>
                </form>
            </div><!--
            --><div class="columna c30">
                <div class="espaciado80"></div>
                <div class="bloquedecarga">
                    <h5>nuestro <strong>logotipo</strong></h5>
                    <a href="images/mediakit.zip">Descargar</a>
                </div>
                <div class="espaciado20"></div>
                <div class="bloquedecarga">
                    <h5><strong>GACETILLAS</strong> DE <strong>PRENSA</strong></h5>
                    <a href="#">Descargar</a>
                </div>
            </div>


            <? } else {?>
                <div class="columna">
                    <h3 class="titulo">En breve nos pondremos en <strong>contacto</strong>.</h3>
                    <p><strong>Muchas gracias</strong>. Expo Real Estate.</p>
                </div>
            <? }?>
            
        </div>    
    </div>    
</div>


<?php include "footer.php"; ?>