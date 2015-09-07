$(function() {
/*
	$("#example1").dataTable({
        "bAutoWidth": true,
        "bPaginate": false,
    });
*/
	//llamadas ajax
		//cliente

	$('#form_buscar_cliente').submit(function(){
		event.preventDefault();
		$.ajax({
		    type: "POST",
			url: "../../ajax/cliente/buscar_cliente.php",
			data: { name: $('#search_cliente').val()}
		})
		.done(function(resp) {
			$('#search').html(resp);
		}).fail(function() {
			alert( "error" );
		});
	});

	$('#form_modificar_cliente').submit(function(){
		event.preventDefault();
		$.ajax({
		    type: "POST",
			url: "../../ajax/cliente/modificar_cliente.php",
			data: { name: $('#search_cliente').val()}
		})
		.done(function(resp) {
			$('#tbl_modificar_cliente').html(resp);
		}).fail(function() {
			alert( "error" );
		});
	});
	//fin cliente

	//guias
	$('#form_agregar_pieza_guia').submit(function(){
		event.preventDefault();
		$.ajax({
		    type: "POST",
			url: "../../ajax/guias/agregar_piezas.php"
		})
		.done(function(resp) {
			$('#tbl_agregar_pieza_guia').html(resp);
		}).fail(function() {
			alert( "error" );
		});
	});

	$('#form_agregar_guia').submit(function(e){
		crear_ot=confirm('Desea crear las OT \n\r 19002 y 19003');
		if (crear_ot) {
			//cambia url a form
			e.target.action='../ot/lista_ot.php';
		}
	});

	$('#form_buscar_pieza_guia').submit(function(){
		event.preventDefault();
		$.ajax({
		    type: "POST",
			url: "../../ajax/guias/buscar_guia.php" 
		})
		.done(function(resp) {
			$('#tbl_buscar_pieza_guia').html(resp);
		}).fail(function() {
			alert( "error" );
		});
	});
	//bloquea el campo recetas
	//reparar (no desbloquea input)
	$('.muestra_receta label').click(function(){
		muestra_receta = $(".muestra_receta  label .icheckbox_minimal").attr('aria-checked');
		orden_lab = $(".guia_orden_lab  label .icheckbox_minimal").attr('aria-checked');

		console.log(muestra_receta+'     '+orden_lab);
		if(muestra_receta || orden_lab) {  
            $('.input_receta').prop( "disabled", true );
        } else {  
            $('.input_receta').prop( "disabled", false );
        }
	});

	$('.guia_orden_lab label ').click(function(e){
		muestra_receta = $(".muestra_receta  label .icheckbox_minimal").attr('aria-checked');
		orden_lab = $(".guia_orden_lab  label .icheckbox_minimal").attr('aria-checked');

		console.log('---->'+muestra_receta+'     '+orden_lab);
		if(orden_lab) {  
			$.fancybox({
	            href : '../../ajax/laboratorio/orden_lab_frame.php',
	            type : 'iframe',
	            padding : 0
	        });
            $('.input_receta').prop( "disabled", true );
        } else {  
            $('.input_receta').prop( "disabled", false );
        }
	});

	//reparar 
	$('.terminacion_receta label').click(function(){
		var ancho_terminacion = $(".terminacion_receta label .icheckbox_minimal").attr('aria-checked')
		if(ancho_terminacion) {  
            $('.ancho_terminacion input').prop( "disabled", true );
        } else {  
            $('.ancho_terminacion input').prop( "disabled", false );
        } 
	});
/*
	//reparar 
	
*/
	//fecha guia
	//$("#datemask2").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
	//tooltip ruta
	//$('[data-toggle="tooltip"]').tooltip();
	//Fin Guias
	
	//Recetas 
	$('#form_buscar_receta').submit(function(){
		event.preventDefault();
		$.ajax({
		    type: "POST",
			url: "../../ajax/recetas/buscar_recetas.php" //enviar datos de formulario
		})
		.done(function(resp) {
			$('#tbl_buscar_receta').html(resp);
		}).fail(function() {
			alert( "error" );
		});
	});

	//select de recetas
	$(".content").on("change", ".cmb_recetas", function(){
		console.log('1');
		$.ajax({
		    type: "POST",
			url: '../../ajax/recetas/maquinaria_etapas.php'
		})
		.done(function(resp) {
			$('#box_maquinaria_etapa').html(resp);
		}).fail(function() {
			alert( "error" );
		});
	});
	
	$(".copiar_receta label").click(function(){
  		$.ajax({
		    type: "POST",
			url: '../../ajax/recetas/copiar_receta.php',
			data: { name: $('#search_reprocesos').val()}
		})
		.done(function(resp) {
			$('.box_copiar_receta').html(resp);
		}).fail(function() {
			alert( "error" );
		});
  	});
/*
	$(".content").on("change", ".cmb_maquina_etapa", function(){
		console.log('este!!');
		var val = $('.cmb_recetas').val();
		//define url de receta
		switch(val) {
		    case 'T':
				url_receta="../../ajax/recetas/recetas_tenido.ph|p";
		        break;
		    case 'M':
				//agregar_mantencion_maquinaria();
		        break;
		    default:
				url_receta= "../../ajax/recetas/recetas_generico.php";
				break;
		}
		console.log('2');

		$.ajax({
		    type: "POST",
			url: url_receta,  
			data: { name: $('#search_ot').val()}
		})
		.done(function(resp) {
			$('#box_recetas').html(resp);
		}).fail(function() {
			alert( "error" );
		});
	});
*/
	$(".content").on("change", ".etapas_maquinaria", function(){
		var btn = '<button class="btn btn-success btn-right btn-margin btn-lg">Modificar etapa</button>';
		$('#btn_modificar').html(btn);
	});
	//$( ".fecha" ).datepicker();
	//fin recetas

	//maquinaria
	$('#form_buscar_maquinaria').submit(function(){
		event.preventDefault();
		$.ajax({
		    type: "POST",
			url: "../../ajax/maquinaria/buscar_maquinaria.php" //enviar datos de formulario
		})
		.done(function(resp) {
			$('#search_maq').html(resp);
		}).fail(function() {
			alert( "error" );
		});
	});
/*
	$(".box").on("click", ".btn_agregar_campo", function(){
		console.log('-->  '+$('.fancybox-iframe').contents().find('.nombre_campo').val());
		$(".content_add_campo_meta").append(add_campo($('.fancybox-iframe').contents().find('.nombre_campo').val()));
		alert('Registro Agregado'); 
		$.fancybox.close();
	});
*/	
	//seleccion de etapas 
	$('.pasar').click(function() { 
		return !$('#origen option:selected').remove().appendTo('#destino'); 
	});  
	$('.quitar').click(function() { 
		return !$('#destino option:selected').remove().appendTo('#origen'); 
	});
	$('.pasartodos').click(function() { 
		$('#origen option').each(function() { $(this).remove().appendTo('#destino'); });
	});
	$('.quitartodos').click(function() { 
		$('#destino option').each(function() { $(this).remove().appendTo('#origen'); }); 
	});
	$('.submit').click(function() { 
		$('#destino option').prop('selected', 'selected'); 
	});
	//fin maquinaria

	//laboratorio
	$('#form_buscar_laboratorio').submit(function(){
		event.preventDefault();
		$.ajax({
		    type: "POST",
			url: "../../ajax/laboratorio/buscar_laboratorio.php", //enviar datos de formulario
			data: { name: $('#search_lab').val()}
		})
		.done(function(resp) {
			$('#tbl_buscar_laboratorio').html(resp);
		}).fail(function() {
			alert( "error" );
		});
	});
	//fin laboratorio

	//personal
	$('#form_buscar_personal').submit(function(){
		event.preventDefault();
		$.ajax({
		    type: "POST",
			url: "../../ajax/personal/buscar_personal.php", //enviar datos de formulario
			data: { name: $('#search_personal').val()}
		})
		.done(function(resp) {
			$('#tbl_buscar_personal').html(resp);
		}).fail(function() {
			alert( "error" );
		});
	});
	//fin personal

	//tabla auxiliares
	//$('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
  	//$('#textAreaEditor').editableTableWidget({editor: $('<textarea>')});
  	//fin auxiliares 

  	//orden de trabajo 
  	$('#form_buscar_ot').submit(function(){
		event.preventDefault();
		$.ajax({
		    type: "POST",
			url: "../../ajax/ot/buscar_ot.php", //enviar datos de formulario
			data: { name: $('#search_ot').val()}
		})
		.done(function(resp) {
			$('#tbl_ot').html(resp);
			ot_new=unir_ot();
			$('#tbl_dividir_ot').html(ot_new);
		}).fail(function() {
			alert( "error" );
		});
	});
  	//modificar etapas
  	//etapas
    $(".box-body").on("change", ".cmb_etapas", function(){
    	var val = $('.etapas').val();
		//define url de receta
		switch(val) {
		    case 'T':
		    //realiza llamada ajax para obtener el formulario de bitacora (la función se encuentra bajo el ready )
				bitacora_tintoreria();
		        break;
		    case 'M':
				agregar_mantencion_maquinaria();
		        break;
		    default:
		    	$('#etapa_tintoreria').html('');
		    	break;
		}

	    $.ajax({
		    type: "POST",
			url: "../../ajax/etapas/listar_ot_etapas.php", //enviar datos de formulario
			data: { name: $('#search_ot').val()}
		})
		.done(function(resp) {
			$('#tbl_etapas').html(resp);
		}).fail(function() {
			alert( "error" );
		});
	});
/*
	$(".box-body").on("change", ".cmb_etapas", function(){
	    $.ajax({
		    type: "POST",
			url: "../../ajax/etapas/listar_ot_etapas.php", //enviar datos de formulario
			data: { name: $('#search_ot').val()}
		})
		.done(function(resp) {
			$('#tbl_etapas').html(resp);
		}).fail(function() {
			alert( "error" );
		});
	});
*/
	//menu
		//notificaciones
	$(".navbar-static-top").on("click", ".notifications-menu", function(){
		$.ajax({
		    type: "POST",
			url: "../../ajax/alerta/alerta_small.php", 
			data: { name: $('#search_ot').val()}
		})
		.done(function(resp) {
			
			$('.detalle_alerta_small').html(resp);
			$('.notifications-menu .dropdown-menu ').toggle();
		}).fail(function() {
			//alert( "error" );
		});
	});

	$(".navbar-static-top").on("click", ".mensaje_small", function(){
		$.ajax({
		    type: "POST",
			url: "../../ajax/mensajes/mensajes_small.php", 
			data: { name: $('#search_ot').val()}
		})
		.done(function(resp) {
			
			$('.detalle_alerta_small').html(resp);
			$('.messages-menu .dropdown-menu ').toggle();
		}).fail(function() {
			alert( "error" );
		});
	});

	//textarea respuesta se esconde 
	$(".box-body").on("click", ".check_solucion", function(){
		$('.text_solucion').toggle('slow');		
	});

	//fin notificaciones
    //seleccion ot etapas
	$(".content").on("change", ".list_ot", function(){
		$.ajax({
		    type: "POST",
			url: "../../ajax/etapas/maquina_etapas.php", //enviar datos de formulario
			data: { name: $('#search_ot').val()}
		})
		.done(function(resp) {
			$('#tbl_etapas_maquina').html(resp);
		}).fail(function() {
			alert( "error" );
		});
	});
	$(".content").on("change", ".etapas_maquinaria", function(){
		var btn = '<button class="btn btn-success btn-right btn-margin btn-lg">Modificar etapa</button>';
		$('#btn_modificar').html(btn);
	});
	//btn
  	$('#form_dividir_ot').submit(function(e){
		e.preventDefault();
		$.ajax({
		    type: "POST",
			url: "../../ajax/ot/dividir_ot.php",
			data: { name: $('#dividir_ot').val()}
		})
		.done(function(resp) {
			$('#tbl_reprocesos').html(resp);
		}).fail(function() {
			alert( "error" );
		});
	});


  	var active=  true;
  	$('.box_ot').on({
  		click: function(){
  			if (active) {
  				$(this).addClass('list_ot_active');
  				active=  false;
  				console.log(active);
  			}
  			else{
  				$(this).removeClass('list_ot_active');	
  				active=  true;
  				console.log(active);
  			}
  		}
  	});
	$('#crear_lote').submit(function(){
		event.preventDefault();
		$.ajax({
		    type: "POST",
			url: "../../ajax/ot/agregar_lote.php", //enviar datos de formulario
			data: { name: $('#unir_ot').val()}
		})
		.done(function(resp) {
			$('#lote').html(resp);
		}).fail(function() {
			alert( "error" );
		});
	});
  	//dividir ot (descomentar y mover hacia lugar donde no genere errores )
	//draggable();

  	//$('#example1').dataTable();

  	//fin orden de trabajo 


  	//reprocesos
  	$('#form_buscar_reprocesos').submit(function(){
		event.preventDefault();
		$.ajax({
		    type: "POST",
			url: "../../ajax/reprocesos/reprocesos_lista_ot.php", //enviar datos de formulario
			data: { name: $('#search_reprocesos').val()}
		})
		.done(function(resp) {
			$('#tbl_reprocesos').html(resp);
		}).fail(function() {
			alert( "error" );
		});
	});
	//checkbox
  	//fin reprocesos

  	//mantenedor
  	$('#form_moneda_mantencion').submit(function(){
		event.preventDefault();
		$.ajax({
		    type: "POST",
			url: "../../ajax/mantenedor/moneda_mantencion.php", //enviar datos de formulario
			data: { name: $('#search_reprocesos').val()}
		})
		.done(function(resp) {
			$('#tbl_moneda_mantendor').html(resp);
		}).fail(function() {
			alert( "error" );
		});
	});

	$('#form_car_prd_mantencion').submit(function(){
		event.preventDefault();
		$.ajax({
		    type: "POST",
			url: "../../ajax/mantenedor/moneda_mantencion.php", //enviar datos de formulario
			data: { name: $('#search_reprocesos').val()}
		})
		.done(function(resp) {
			$('#tbl_car_prd_mantendor').html(resp);
		}).fail(function() {
			alert( "error" );
		});
	});

	$('#form_t_gasto_mantencion').submit(function(){
		event.preventDefault();
		$.ajax({
		    type: "POST",
			url: "../../ajax/mantenedor/tipo_gasto_mantencion.php", //enviar datos de formulario
			data: { name: $('#search_reprocesos').val()}
		})
		.done(function(resp) {
			$('#tbl_t_gasto_mantencion').html(resp);
		}).fail(function() {
			alert( "error" );
		});
	});

	$('#form_etapa_mantenedor').submit(function(){
		event.preventDefault();
		$.ajax({
		    type: "POST",
			url: "../../ajax/mantenedor/etapa_mantenedor.php", //enviar datos de formulario
			data: { name: $('#search_reprocesos').val()}
		})
		.done(function(resp) {
			$('#tbl_etapa_mantenedor').html(resp);
		}).fail(function() {
			alert( "error" );
		});
	});
  	//fin mantenedordividir_ot
  	
  	//productos
  	$(".productos ").on("click", ".nav-tabs-custom .nav li a ", function(){
  		event.preventDefault();
  		href=$(this).attr('href');
  		$.ajax({
		    type: "POST",
			url: "../../ajax/producto/"+href, //enviar datos de formulario
			data: { name: $('#search_reprocesos').val()}
		})
		.done(function(resp) {
			$('.tab-content').html(resp);
		}).fail(function() {
			alert( "error" );
		});
  	});
  	
  	//fin productos
  	//bodega
  		//pestañas bodega
  	$(".bodega ").on("click", ".nav-tabs-custom .nav li a ", function(){
  		event.preventDefault();
  		href=$(this).attr('href');
  		$.ajax({
		    type: "POST",
			url: "../../ajax/bodega/"+href, //enviar datos de formulario
			data: { name: $('#search_reprocesos').val()}
		})
		.done(function(resp) {
			$('.tab-content').html(resp);
			console.log('asd');
		}).fail(function() {
			alert( "error" );
		});
  	});
  		//tabla pedidos
  	$(".bodega ").on("click", "#agregar_pedido", function(){
  		event.preventDefault();
  		href=$(this).attr('href');
  		$.ajax({
		    type: "POST",
			url: "../../ajax/bodega/"+href, //enviar datos de formulario
			data: { name: $('#search_reprocesos').val()}
		})
		.done(function(resp) {
			$('.tbl_pedido_prd').html(resp);
		}).fail(function() {
			alert( "error" );
		});
  	});
  	//fin bodega

  	/*mensajes*/
  	$(".navbar-right").on("click", ".mensaje_small", function(){
  		event.preventDefault();
  		$.ajax({
		    type: "POST",
			url: "../../ajax/mensajes/mensajes_small.php", //enviar datos de formulario
			data: { name: $('#search_reprocesos').val()}
		})
		.done(function(resp) {
			$('#msj_small').html(resp);
		}).fail(function() {
			alert( "error" );
		});
  	});
  	$(".content_msj").on("click", ".msj", function(){
  		event.preventDefault();
  		$.ajax({
		    type: "POST",
			url: "../../ajax/mensajes/detalle_mensaje.php",
			data: { name: $('#search_reprocesos').val()}
		})
		.done(function(resp) {
			$('.content_msj').html(resp);
		}).fail(function() {
			alert( "error" );
		});
  	});
  	$(".box_msj").on("click", ".msj_recibidos", function(){
  		event.preventDefault();
  		$.ajax({
		    type: "POST",
			url: "../../ajax/mensajes/recibidos_mensaje.php",
			data: { name: $('#search_reprocesos').val()}
		})
		.done(function(resp) {
			$('.content_msj').html(resp);
		}).fail(function() {
			alert( "error" );
		});
  	});
  	$(".navbar-right").on("click", ".msj_small", function(){
  		event.preventDefault();
  		//REPARAR
  		//ruta=$(this).children('a').attr('href')
  		//alert($(this));
  		//$(location).attr('href',"casilla_mensajes.php");
  		window.location.href = 'http://'+location.host+"/maketa/pages/mensajes/casilla_mensajes.php";
  	});


  	/*Reportes*/
  	$(".content").on("submit", "#form_monto_despachos", function(){
  		event.preventDefault();
  		$.ajax({
		    type: "POST",
			url: "../../ajax/reportes/monto_despachos.php",
			data: { name: $('#search_reprocesos').val()}
		})
		.done(function(resp) {
			$('.content_reporte').html(resp);
		}).fail(function() {
			alert( "error" );
		});
  	});



  	/*consumos*/
  	$(".content").on("change", ".cmb_consumos", function(){
  		//obtiene el valor del combobox
  		val=$('.cmb_consumos').val();
  		//sentencia para el cambio url
  		switch(val) {
		    case '1':
				url_receta="../../ajax/consumos/ingreso_consumo.php";
		        break;
		    case '2':
				url_receta="../../ajax/consumos/carga_estanque.php";
		        break;
		    case '3':
				url_receta="../../ajax/consumos/consulta_consumo.php";
		        break;
		    default:
				url_receta= "../../ajax/consumos/recetas_generico.php";
				break;
		}
		//llamada para obtener la pagina 
  		$.ajax({
		    type: "POST",
			url: url_receta,
			data: { name: $('#search_reprocesos').val()}
		})
		.done(function(resp) {
			$('.content_consumos').html(resp);
		}).fail(function() {
			alert( "error" );
		});
  	});

  	/*Index*/
  	$(".content").on("click", ".widgets_index>div", function(){
  		var id=$(this).attr('id');
  		//sentencia para el cambio url
  		switch(id) {
		    case 'ot_index':
				url_receta="ajax/home/ot.php";
		        break;
		    case 'ord_lab_index':
				url_receta="ajax/home/orden_lab.php";
		        break;
		    case 'cliente_index':
				url_receta="ajax/home/clientes.php";
		        break;
		    case 'reporte_index':
				url_receta="ajax/home/reportes.php";
		        break;
		}
		//llamada para obtener la pagina 
  		$.ajax({
		    type: "POST",
			url: url_receta,
			data: { name: $('#search_reprocesos').val()}
		})
		.done(function(resp) {
			$('.content_home').html(resp);
		}).fail(function() {
			alert( "error" );
		});
  	});


});

function agregar() {
	campo = '<li><input class="fecha form-control" type="text" name="color" placeholder="Color" /></li>';
	$("#lista_colores").append(campo);
}
//mantencion maquinaria 
function agregar_herraminetas() {
	campo = '<li><input class="fecha form-control" type="text" name="color" placeholder="Color" /></li>';
	$("#lista_colores").append(campo);
}

function agregar_mezcla_recetas() {
	campo = '<li class="form-group">'+
	            '<div class="col-md-6">'+
	                '<div class="input-group">'+
	                    '<input type="text" class="form-control" placeholder="Cantidad">'+
	                    '<span class="input-group-addon">%</span>'+
	                '</div>'+
	            '</div>'+
	            '<div class="col-md-5">'+
	                '<input type="text" class=" form-control" placeholder="Componente"/>'+
	            '</div>'+
	        '</li>';
	$("#lista_mezcla").append(campo);
}

//mantencion maquinaria 
function cerrar_fancy() {
	$.fancybox.close();
}


function draggable(){
$('.list_ot').selectable({
    cancel: '.sort-handle'
  }).sortable({
    connectWith: ".connectedSortable",
    items: "> li",
    handle: '.sort-handle',
    helper: function(e, item) {
      if ( ! item.hasClass('ui-selected') ) {
        item.parent().children('.ui-selected').removeClass('ui-selected');
        item.addClass('ui-selected');
      }
      var selected = item.parent().children('.ui-selected').clone();
      item.data('multidrag', selected).siblings('.ui-selected').remove();
      return $('<li/>').append(selected);
    },
    stop: function(e, ui) {
      var selected = ui.item.data('multidrag');
      ui.item.after(selected);
      ui.item.remove();
    }
  }).disableSelection();
}
function dividir_ot(){
	ot_new= '  <div class="col-xs-12 col-sm-5  col-md-5 col-lg-5">'+
               '<div class="box box-solid box-warning">'+
                  '<div class="box-header">'+
                     '<h3 class="box-title">OT 20591-B</h3>'+
                     '<div class="box-tools pull-right">'+
                         '<button class="btn btn-warning btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>'+
                         '<button class="btn btn-warning btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>'+
                     '</div>'+
                  '</div>'+
                  '<div class="box-body">'+
                     '<ul id="list" class="connectedSortable list_ot ">'+
                     '</ul>'+
                     '<div class="clear"></div>'+
                  '</div>'+
               '</div>'+
           ' </div>';
	$(".box_ot_division").append(ot_new);
	draggable();
}
function unir_ot(){
	event.preventDefault();
	ot_new= '<div class="box_ot col-xs-12 col-sm-4  col-md-4 col-lg-4">'+
				'<span>OT 20591-B </span>';+
				'<ul id="list" class="connectedSortable list_ot  "><li>sdsf</li></ul>'+
			'</div>';
	$(".dividir_ot").append(ot_new);
	draggable();
}

function add_campo(nombre_campo){
	var campo_meta = '<div  class="col-md-6">'+
							'<div class="form-group">'+
		                        '<label>'+nombre_campo+'</label>'+
		                        '<input type="text" class="form-control" placeholder="'+nombre_campo+'"/>'+
		                    '</div>'+
						'</div>';
	console.log(campo_meta);
	$(".content_add_campo_meta").append(campo_meta);
}
function cerrar_lightbox(){
	parent.$.fancybox.close();
}

function bitacora_tintoreria(){
	event.preventDefault();
	$.ajax({
	    type: "POST",
		url: "../../ajax/etapas/bitacora_tintoreria.php",
		data: { name: $('#search_reprocesos').val()}
	})
	.done(function(resp) {
		$('#etapa_tintoreria').html(resp);
	}).fail(function() {
		alert( "error" );
	});

}


function agregar_mantencion_maquinaria(){
	event.preventDefault();
	$.ajax({
	    type: "POST",
		url: "../../ajax/etapas/agregar_mantencion_maquinaria.php",
		data: { name: $('#search_reprocesos').val()}
	})
	.done(function(resp) {
		$('#etapa_tintoreria').html(resp);
	}).fail(function() {
		alert( "error" );
	});
}