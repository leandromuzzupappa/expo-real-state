<?

$ok=0;
if(isset($_GET["ok"]))$ok = $_GET["ok"];

$fp="";
if(isset($_GET["fp"]))$fp = $_GET["fp"];

$ce="";
if(isset($_GET["ce"]))$ce = $_GET["ce"];

//$valor_entrada = 650;
$valor_entrada = 350;
if($ce>=3)$valor_entrada = 350;


//Tarifa regular - USD 650 
//Tarifa pronto pago - USD 550
//Tarifa grupal - USD 500
//Tarifa asociación - USD 450

?>

<!DOCTYPE html>
<html lang="es">

   <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test</title>
</head>

<body>

<? if($ok==0){?>
    <form name="frm_congreso" method="post" action="http://www.gruposyg.com.ar/ws/grabar_registros_sdni.php">
        
        <input type="hidden" name="volver" value="http://www.g2desarrollo.com.ar/syg/test_php/prueba2.php?ok=1">
        <input type="hidden" name="evento" value="100">
        <input type="hidden" name="origen" value="<?=$_GET["origen"]?>">
        
        <input name="nombre" type="text" id="nombre" placeholder="Nombre" size="40" />
        <input name="apellido" type="text" id="apellido" placeholder="Apellido" size="40" />
        <input name="email" type="text" id="email" placeholder="E-mail" size="40" />
        <input name="telefono" type="text" id="telefono" placeholder="Telefono" size="40" />
        <input name="celular" type="text" id="celular" placeholder="Celular" size="40" />
        <input name="empresa" type="text" id="empresa" placeholder="Empresa" size="40" />
        
        <input name="nrubro" type="text" id="nrubro" placeholder="Rubro" size="40" />
        
        <select name="formapago" >
            <option value="">--Opciones de pago--</option>
            <option value="Deposito">Deposito</option>
            <option value="Transferencia">Transferencia</option>
            <option value="PayPal">Tarjeta de credito con PayPal</option>
        </select>
        
        <input type="hidden" name="arancel" value="General">
        <!--<input type="hidden" name="arancel" value="Preventa">
        <input type="hidden" name="arancel" value="Asociaciones">-->
        
        <button type="submit">ENVIAR DATOS</button>
        
    </form>        
<? } else {?>
    <? if($fp=="Deposito"){ ?>
        Recibimos su solicitud de inscripción (Deposito)
    <? } ?>
    <? if($fp=="Transferencia"){ ?>
        Recibimos su solicitud de inscripción (Transferencia)
    <? } ?>
    <? if($fp=="PayPal"){ ?>
        Ya estás inscripto (PayPal)
    <? } ?>
<? } ?>

</body>
</html>