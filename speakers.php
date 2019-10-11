<?php include "header.php"; ?>
<?php require_once 'includes/speakers-array.php'?>

<header id="headerseccion">
    <div class="fondoContainer"><div class="fondo parallax"></div></div>
    <div class="container">
        <h1>Speakers</h1>
    </div>
</header>

<div id="speakers">
    <div class="container">
        
        <div class="bloques">

            <?php foreach ($speakers as $key => $speaker): ?>
                <div class="col" id="<?=$speaker['id'];?>">
                    <div class="bloque">

                        <span class="foto">
                            <a href="<?=$speaker['linkedin'];?>" target="_blank">
                                <img src="<?=$speaker['foto'];?>"  alt="" />

                                <div class="overlay"></div>

                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="external-link-alt" class="svg-inline--fa fa-external-link-alt fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path class="cls-3" d="M576 24v127.984c0 21.461-25.96 31.98-40.971 16.971l-35.707-35.709-243.523 243.523c-9.373 9.373-24.568 9.373-33.941 0l-22.627-22.627c-9.373-9.373-9.373-24.569 0-33.941L442.756 76.676l-35.703-35.705C391.982 25.9 402.656 0 424.024 0H552c13.255 0 24 10.745 24 24zM407.029 270.794l-16 16A23.999 23.999 0 0 0 384 303.765V448H64V128h264a24.003 24.003 0 0 0 16.97-7.029l16-16C376.089 89.851 365.381 64 344 64H48C21.49 64 0 85.49 0 112v352c0 26.51 21.49 48 48 48h352c26.51 0 48-21.49 48-48V287.764c0-21.382-25.852-32.09-40.971-16.97z"></path></svg>
                            </a>
                        </span>

                        <div class="datos">
                            <h4 class="nombre">
                                <?=$speaker['nombre'];?> <strong><?=$speaker['apellidos'];?></strong>
                            </h4>
                            <?php if(isset($speaker['cargo'])):?>
                                <p class="cargo">
                                    <?=$speaker['cargo'];?> en <strong><?=$speaker['empresa'];?></strong>.
                                </p>
                            <?php endif;?>
                            <?php if(isset($speaker['cargo-l'])):?>
                                <p class="cargo-l">
                                    <?=$speaker['cargo-l'];?> en <strong><?=$speaker['empresa'];?></strong>.
                                </p>
                            <?php endif;?>

                        </div>

                        <div class="links">
                            <?php if(!empty($speaker['linkedin'])):?>
                                <a href="<?=($speaker['linkedin']);?>" target="_blank">
                                    <img src="images/in.png" alt="" class="linkedin">
                                </a>
                            <?php endif;?>

                            <?php if(!empty($speaker['email'])):?>
                                <a href="mailto:<?=($speaker['email']);?>" target="_blank">
                                    <img src="images/email.png" alt="" class="email">
                                </a>
                            <?php endif;?>
                            <?php if(isset($speaker['ig'])):?>
                                <a href="<?=($speaker['ig']);?>" target="_blank" id="links-ig">
                                    <img src="images/ig.png" alt="" class="ig">
                                </a>
                            <?php endif;?>
                        </div>
                        
                    </div>
                </div>
            <?php endforeach;?>

        </div>
        
    </div>
    
    <div class="btn-bloques">
        <div id="izq">Atras</div>
        <div id="der">Adelante</div>
    </div>
</div>
	
<?php include "footer.php"; ?>