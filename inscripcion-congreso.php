<?
$ok=0;
if(isset($_GET["ok"]))$ok = $_GET["ok"];

$fp="";
if(isset($_GET["fp"]))$fp = $_GET["fp"];

//$arancel = "Preventa";
$arancel = "General";
//$arancel = "Asociaciones";

?>

<?php include "header.php"; ?>
	
	<header id="headerseccion">
        <div class="fondoContainer"><div class="fondo parallax"></div></div>
	    <div class="container">
	        <img src="images/logo_congreso.png" alt="" width="326" />
	    </div>
	</header>
	
	<div class="seccion">
	    <div class="container">
	        <div class="espaciado20"></div>
	        <? if($ok==0):?>
                <h3 class="titulo">Formulario de <strong>inscripción</strong></h3>
                <p>Complete el formulario y participe del encuentro más importante de inversiones en <strong>Real Estate</strong> de la Región.</p>
                <form name="frm_congreso" id="frm_congreso" method="post" action="http://www.gruposyg.com.ar/ws/grabar_registros_sdni.php">

                    <input type="hidden" name="volver" value="http://www.exporealestatemexico.com/inscripcion-congreso.php?ok=1">
                    <input type="hidden" name="evento" value="100">
                    <input type="hidden" name="origen" value="<?=$_GET["origen"]?>">

                    <div class="columna">
                        <input name="nombre" type="text" id="nombre" placeholder="Nombre y Apellido*" size="40" />
                    </div><!--
                    --><div class="columna">
                        <input name="email" type="email" id="email" placeholder="Email*" size="40" />
                    </div><!--
                    --><div class="columna c33">
                        <input name="telefono" type="text" id="telefono" placeholder="Teléfono*" size="40" />
                    </div><!--
                    --><div class="columna c33">
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
                    </div><!--

                    --><div class="columna c33" style="display:none">
                        <select name="pertenezcoa" id="pertenezcoa" class="opcional" >
                            <option value="">Ninguna Asociación</option>
                            <option value="Canadevi">Canadevi</option>
                            <option value="Adi Chile Y Peru">Adi Chile Y Peru</option>
                            <option value="Real Estate Market & Lifestyle">Real Estate Market & Lifestyle</option>
                        </select>
                    </div><!--
                    --><div class="columna c33">
                        <select name="formapago" >
                            <option value="">Opciones de pago</option>
                            <option value="Deposito">Deposito / Transferencia</option>
                            <option value="PayPal">Tarjeta de credito con PayPal (+5% comisión)</option>
                        </select>
                    </div><!--
                    --><div class="columna full right">
                        <button type="button">Inscribirme</button>
                    </div>
                    
                    <input type="hidden" name="arancel" id="arancel" value="<?php echo $arancel; ?>">

                </form>
            
                <div class="lineapunteada"></div>

                <h3 class="titulo t2"><strong>Descuentos</strong> a través de medios y asociaciones.</h3>

                <div class="precioscontainer">
                    <div class="precios">
                        <div class="bloque">
                            <div class="precio">
                                <div class="categoria"><span>Preventa</span></div>
                                <p class="grande">USD <strong>400</strong><span>+16% IVA</span></p>
                                <p>(hasta el 5 de abril)</p>
                            </div>
                        </div>
                        <div class="bloque">
                            <div class="precio">
                                <div class="categoria"><span>General</span></div>
                                <p class="grande">USD <strong>500</strong><span>+16% IVA</span></p>
                            </div>
                        </div>
                        <div class="bloque asociados" style="display:none">
                            <div class="precio">
                                <div class="colizq">
                                    <div class="cat"><span>asociaciones</span></div>
                                    <p class="grande">USD <strong>350</strong><span>+16% IVA</span></p>
                                </div><!--
                                --><div class="colder">
                                    <p>» Canadevi</p>
                                    <p>» Adi Chile Y Peru</p>
                                    <p>» Real Estate Market & Lifestyle</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            <? else: ?>
                <? if( $fp=="Deposito" || $fp=="Transferencia" ): ?>
                   
                    <!-- Mensaje vacante -->
                    <h3 class="titulo">Su vacante quedó <strong>reservada con exito</strong></h3>
                    <p>Su vacante quedará reservada únicamente mediante el <strong>pago del cupón correspondiente</strong>.  Al realizarlo le llegará un mail de confirmación del mismo y su cupo reservado.</p>
                    <p>Favor de enviar comprobante de pago junto a los datos del asistente a los correos:<br>
                    <a href="mailto:patricia@i11digital.com">patricia@i11digital.com</a> / <a href="mailto:pamela@gruposyg.com">pamela@gruposyg.com</a></p>

                    <div class="espaciado40"></div>

                    <a href="EREMX-datos-bancarios.pdf" target="_blank" class="botonDescargarInfo">Decargar información</a>

                    <div class="espaciado40"></div>

                    <div class="datosDeposito">
                        <div class="col">
                            <div class="bloqueDeposito">
                                <h4>BANCO BENEFICIARIO</h4>
                                <p><strong>Beneficiario:</strong> I11 PROYECTO SA DE CV</p>
                                <p><strong>RFC:</strong> IPR1811228X4</p>
                                <p><strong>Dirección Del Beneficiario:</strong> Via Servio Tulio #106, Col. Fuentes del Valle, San Pedro Garza García, Nuevo León. C.P. 66220</p>
                                <p><strong>País Del Beneficiario:</strong> México</p>
                                <p><strong>Banco Beneficiario:</strong> BBVA Bancomer, S.A.</p>
                                <p><strong>Dirección Del Banco Beneficiario:</strong> Calzada San Pedro #218, Col. Del Valle, San Pedro Garza García, Nuevo León. C.P.66220</p>
                                <p><strong>País Del Banco Beneficiario:</strong> México</p>
                                <p><strong>No. Cuenta:</strong> 0112927950</p>
                                <p><strong>Clabe Interbancaria:</strong> 012580001129279504</p>
                                <p><strong>Swift:</strong> BCMRMXMMPYM</p>
                                <p><strong>ABA:</strong> 121000358</p>
                            </div>
                        </div><!--
                        --><div class="col">
                            <div class="bloqueDeposito">
                                <h4>BANCO INTERMEDIARIO</h4>
                                <p><strong>Banco Intermediario:</strong> The Bank Of New York</p>
                                <p><strong>Dirección Del Banco Intermediario:</strong> New York, Usa</p>
                                <p><strong>Bank Routing / ABA:</strong> 021-000-018</p>
                                <p><strong>Swift Bic:</strong> IRVTUS3N</p>
                            </div>
                        </div>
                    </div>
            
                <? endif; ?>
                <? if($fp=="PayPal"): ?>
                    <h3 class="titulo">El pago ha sido <strong>efectuado con éxito</strong>.</h3>
                    <p>Su inscripción se encuentra <strong>CONFIRMADA</strong>.</p>
                    <p>Días previos al evento usted recibirá la agenda completa.</p>
                    <p>El día del encuentro, a partir de las 8: 30 am, indicando su NOMBRE Y APELLIDO en el sector de acreditaciones, le brindaremos su credencial.</p>
                    <p><strong>Muchas gracias</strong>.</p>
                <? endif; ?>

            <? endif; ?>
	        <div class="espaciado20"></div>
	    </div>
	</div>
	
<?php include "footer.php"; ?>
