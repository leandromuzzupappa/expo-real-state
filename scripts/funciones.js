function onEnterFrame() {
	t = setTimeout(function(){ onEnterFrame() }, 25);
}

var bloquesResize = [
    {elemento:"#home .infoevento .bloque", width:1300},
    {elemento:"#home .about .intro .colder .bloque", width:900},
    {elemento:"#home .about .inscripcion .bloque", width:900},
    {elemento:"#home .eventos .bloques .bloque", width:500}
]
function onResize() {
    
    for (i = 0; i < bloquesResize.length; i++) {
        var altomax=0;
        $(bloquesResize[i].elemento).css("height","auto");
        if ( $(window).width()>bloquesResize[i].width ) {
            $(bloquesResize[i].elemento).each(function( index ) {
                if ( $(this).outerHeight()>altomax ) {
                    altomax=$(this).outerHeight();
                }
            });
            $(bloquesResize[i].elemento).css("height",altomax+"px");
        }
    }
    
}

var popupAbierto=false;

function abrirPopup(id) {
	$(".popupContainer").css("display", "block");
	$(".popupContainer").css("opacity", "0");
	$(".popupContainer").scrollTop(0);
	TweenLite.to( $(".popupContainer"), 0.5, { opacity:1 });
	$(".popupContainer .popup").css("display", "none");
	$(id).css("display", "inline-block");	
	TweenLite.to( $(id), 0, { scale:0.5, opacity:0 });
	TweenLite.to( $(id), 0.5, { delay:0.3, scale:1, opacity:1, ease: Power2.easeOut });
	$("body").css("overflow-y","hidden");
	popupAbierto=true;
}

function cerrarPopup() {
	TweenLite.to( $(".popupContainer .popup"), 0.3, { scale:0.5, opacity:0, ease: Power2.easeIn });
	TweenLite.to( $(".popupContainer"), 0.5, { delay:0.3, opacity:0, onComplete:function(){
		$(".popupContainer").css("display","none");
	} });
	$("body").css("overflow-y","auto");	
	popupAbierto=false;	
}

function getUrlVars() {
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}

function scrollEvents() {
	if ( $(window).scrollTop()>300 ) {
		if ( !$("#menuFlotante").hasClass("activo") ) {
			$("#menuFlotante").addClass("activo");
		}
	} else {
		if ( $("#menuFlotante").hasClass("activo") ) {
			$("#menuFlotante").removeClass("activo");
		}
	}

	$(".botonScroll").each(function( index ) {
		var seccion=$(this).data("anchor");
		
		if ( $("#menuFlotante").css("display")=="block" ) {
			var menuAlto=$("#menuFlotante").outerHeight();
		} else {
			var menuAlto=0;
		}
		
		if ( $(this).data("offset") ) {
			var inicio=$(seccion).offset().top+$(this).data("offset")-2-menuAlto;
		} else {
			var inicio=$(seccion).offset().top-2-menuAlto;
		}
		if ( $( ".botonScroll:eq("+(index+1)+")" ).data("offset") ) {
			var final=$(seccion).offset().top+$(seccion).outerHeight()+$( ".botonScroll:eq("+(index+1)+")" ).data("offset") -10-menuAlto;
		} else {
			var final=$(seccion).offset().top+$(seccion).outerHeight() -10-menuAlto;
		}
		
		if ( ($(window).scrollTop()>inicio) && ($(window).scrollTop()<final)  ) {
			$(this).addClass("activo");
		} else {
			$(this).removeClass("activo");
		}
	});
}

function itemSlider () {
	console.log('inicio');

	// Traer el ancho y la cantidad de speakers
	var getSpeaker = $('#speakers .col');
	var getWidthSpeaker = getSpeaker.outerWidth();
	var getCantidadDeSpeakers = getSpeaker.length;
	var getTotalWidthSpeakers = (getWidthSpeaker*getCantidadDeSpeakers)+50;
	
	// Traer el bloque contenedor y setearle el ancho
	var getBloqueSpeakers = $('#speakers .bloques');
	var setWidthBloqueSpeakers = getBloqueSpeakers.css('width', getTotalWidthSpeakers+'px');

	// Traer botones y setearles la funcion
	var getBotonAnterior = $('#speakers .btn-bloques #izq');
	var getBotonSiguiente = $('#speakers .btn-bloques #der');

	// Ver en que posicion esta el bloque contenedor
	var getBloqueSpeakersPos = getBloqueSpeakers.position().left;
	console.log(getBloqueSpeakersPos);


	getBotonSiguiente.click(function () {
		// Traje la posision del la variable bloqueSpeakerPos y por cada click le resto el getWithSpeaker (el ancho del item)
		getBloqueSpeakersPos = getBloqueSpeakersPos-getWidthSpeaker;
		setBloqueSpeakersPos = getBloqueSpeakersPos+'px';

		console.log( parseInt(setBloqueSpeakersPos) );
		console.log( (getTotalWidthSpeakers-getWidthSpeaker)*(-1) );
		//console.log(getBloqueSpeakersPos);

		// Si la posicion del setBloqueSpeaker es mayor al negativo del total del ancho total del bloque menos el ancho de 1 speaker
		// entonces que me siga restando a la posicion left del bloque. De lo contrario, que pare
		if ( parseInt(setBloqueSpeakersPos) >= ( (getTotalWidthSpeakers-(getWidthSpeaker+50))*(-1) ) ) {
			getBloqueSpeakers.css('left', setBloqueSpeakersPos);
		} else {
			getBloqueSpeakersPos = 0+getWidthSpeaker;

		}


	})

}

$(document).ready(function () {
	
	// Eventos Loading
	var animLoading = new TimelineMax({ repeat:-1 });
	animLoading.add( TweenLite.to( "#loading .lineaFrente", 2, { "stroke-dashoffset":-640, ease:Power0.easeNone } ) );
	
    
	$("#menu-mobile .botones").html( $("#top .colder").html() );
	$("#boton-menu-mobile").click(function(){
		if ( $("#boton-menu-mobile").hasClass("activo") ) {
			$("#menu-mobile").removeClass("activo");
			$("#boton-menu-mobile").removeClass("activo");
		} else {
			$("#menu-mobile").addClass("activo");
			$("#boton-menu-mobile").addClass("activo");
		}
	});
    
	// Eventos Popup
	/*$(".popupContainer .popup .cerrar, .popupContainer .overlay").click(function(){
		cerrarPopup();
	});*/
	
    setearForm("#frm_congreso");
	
    
    $(document).click(function(event){
        if ( event.target.className!="botondesplegable" ) {
            $("#top .colder .boton .desplegable").css("display","none");
        }
    });
    $("#top .colder div.boton").click(function(){
        $("#top .colder .boton .desplegable").css("display","none");
        
        var desplegable=$(this).find(".desplegable");
        
        desplegable.css("display","block");
        TweenLite.to( desplegable, 0, { opacity:0 });
        TweenLite.to( desplegable, 0.3, { opacity:1 });        
        
    });
    
    
    if ( $("#pertenezcoa").val()=="" ) {
        $('input[name="arancel"]').val('Preventa');
        //$('input[name="arancel"]').val('General');
    } else {
        $('input[name="arancel"]').val('Asociaciones');
    }
    $("#pertenezcoa").change(function(){
        if ( $("#pertenezcoa").val()=="" ) {
            $('input[name="arancel"]').val('Preventa');
            //$('input[name="arancel"]').val('General');
        } else {
            $('input[name="arancel"]').val('Asociaciones');
        }
	});
	

	/*
	$('#speakers .bloque .foto a').click(function( event )	{
		event.preventDefault();
	});
	$('#speakers .bloque .links .linkedin').click(function( event )	{
		event.preventDefault();
	});

	$('#speakers .bloque').click(function () {
		var indice = $('#speakers .bloque').index(this);
		var link = $('#speakers .bloque:eq('+indice+') .foto a').attr('href');

		if ( link != '' ) {
			window.open(link);
		}
	});
	*/

	function setClickBloque (event) {
		var indice = $('#speakers .bloque').index(this);
		var link = $('#speakers .bloque:eq('+indice+') .foto a').attr('href');
		var linkIg = $('#speakers .bloque:eq('+indice+') .links #links-ig').attr('href');

		// console.log( event.target.className );

		if ( link.length >= 1 ) {
			if ( link !== '' && event.target.className!='overlay' && event.target.className!='linkedin' && event.target.className!='email' && event.target.className!='ig'  ) {
				window.open(link);
			}
		} else if (link.length == 0 ) {
			if ( link !== '' && event.target.className!='overlay' && event.target.className!='linkedin' && event.target.className!='email' && event.target.className!='ig' ) {
				window.open(linkIg); 
			}
		}
		
	};

	$('#speakers .bloque').on('click', setClickBloque);

	
	itemSlider();


});

$( window ).load(function() {
	
	// LOADING
	TweenLite.to( $("#loading"), 0.5, { opacity:0, delay:0.2,
		onComplete:function(){
			$("#loading").css("display","none");
		}
	});
	
    // Eventos Responsive
	$( window ).resize(function() {
		onResize();
	});
	onResize();
    
	//onEnterFrame();
	
});