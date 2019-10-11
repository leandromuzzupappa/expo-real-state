<?
$ok=0;
if(isset($_GET["ok"]))$ok = $_GET["ok"];

?>

<?php include "header.php"; ?>

	<header id="headerseccion">
        <div class="fondoContainer"><div class="fondo parallax"></div></div>
	    <div class="container">
	        <img src="images/logo_expo.png" alt="" width="364" />
	    </div>
	</header>
	
	<div class="seccion">
	    <div class="container">
	        <div class="espaciado20"></div>
	        <? if($ok==0):?>
                <h3 class="titulo">Formulario de <strong>inscripción</strong></h3>
                <p>Complete el formulario y participe del encuentro más importante de inversiones en <strong>Real Estate</strong> de la Región.</p>
                <form name="frm_congreso" id="frm_congreso" method="post" action="http://www.gruposyg.com.ar/ws/grabar_registros_sdni.php">

                    <input type="hidden" name="volver" value="http://www.exporealestatemexico.com/inscripcion-expo.php?ok=1">
                    <input type="hidden" name="evento" value="101">
                    <input type="hidden" name="origen" value="<?=$_GET["origen"]?>">

                    <div class="columna">
                        <input name="nombre" type="text" id="nombre" placeholder="Nombre y Apellido*" size="40" />
                    </div><!--
                    --><div class="columna">
                        <input name="email" type="email" id="email" placeholder="Email*" size="40" />
                    </div><!--
                    --><div class="columna">
                        <input name="telefono" type="text" id="telefono" placeholder="Teléfono*" size="40" />
                    </div><!--
                    --><div class="columna">
                        <input name="celular" type="text" id="celular" placeholder="Celular*" size="40" />
                    </div><!--
                    --><div class="columna c33">
                        <input name="empresa" type="text" id="empresa" placeholder="Empresa*" size="40" />
                    </div><!--
                    --><div class="columna c33">
                        <input name="cargo" type="text" id="cargo" placeholder="Cargo*" size="40" />
                    </div><!--
                    --><div class="columna c33">
                        <select name="rubro" id="rubro">
                            <option selected="" value="">Rubro</option>
                            <option value="10">Aberturas</option>
                            <option value="11">Abogados</option>
                            <option value="16">Agrimensores</option>
                            <option value="17">Alarmas</option>
                            <option value="1">Arquitecto</option>
                            <option value="19">Asesoría</option>
                            <option value="2">Comprador / Inversor</option>
                            <option value="3">Constructora</option>
                            <option value="4">Desarrollador</option>
                            <option value="22">Educación</option>
                            <option value="5">Escribano</option>
                            <option value="6">Estudiante</option>
                            <option value="41">Hotelería</option>
                            <option value="7">Inmobiliaria</option>
                            <option value="28">Logística y distribución</option>
                            <option value="31">Medios de comunicación</option>
                            <option value="32">Náutica</option>
                            <option value="8">Otro</option>
                            <option value="39">Publicidad</option>
                            <option value="40">Químicas</option>
                            <option value="42">Seguridad</option>
                        </select>
                        <!--<input name="nrubro" type="text" id="nrubro" placeholder="Rubro*" size="40" />-->
                    </div>
                    <div class="columna full right">
                        <span class="aclaracion">Entrada <strong>libre</strong> y <strong>gratuita</strong></span>
                        <button type="button">Inscribirme</button>
                    </div>                 

                </form>
                
            <? else: ?>
                    
                <h3 class="titulo">Su inscripción se encuentra <strong>CONFIRMADA</strong>.</h3>
                <p>Días previos al evento usted recibirá la agenda completa.</p>
                <p>El día del encuentro, a partir de las 8: 30 am, indicando su NOMBRE Y APELLIDO en el sector de acreditaciones, le brindaremos su credencial.</p>
                <p><strong>Muchas gracias</strong>.</p>

            <? endif; ?>
	        <div class="espaciado20"></div>
	    </div>
	</div>
	
<?php include "footer.php"; ?>