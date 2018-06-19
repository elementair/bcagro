$('.ul_link').hide();
function filterSelection(sub_producto_id) {
  location.href = './productos.php?sub_producto_id='+sub_producto_id;
}

function toggle_submenu(id){
    var todas = $('.menu_sub_producto').children();
    var imagen = $('#img_'+id);
    var ul_menu = $('#ul_'+id);

    $('.ul_link').hide('slow');

    todas.attr('src','./img/menu_suproductos_up.svg');
    imagen.attr('src','./img/menu_suproductos_down.svg');

    ul_menu.show('slow');


}

 $('.searchbar').keyup(function (){
 	$(".filterDiv").hide();
   	var valor = $(this).val().toUpperCase();

   	$(".filterDiv:contains('"+valor+"')").show();

 });

