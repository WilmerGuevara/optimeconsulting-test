$(document).ready(function() {
    $("#product_edit").click(function(event) {
        if( !confirm('¿Seguro desea eliminar el producto?') ) 
            event.preventDefault();
    });
    $("#product_show").click(function(event) {
        if( !confirm('¿Seguro desea eliminar el producto?') ) 
            event.preventDefault();
    });
    $("#category_edit").click(function(event) {
        if( !confirm('¿Seguro desea eliminar la categoría?') ) 
            event.preventDefault();
    });
    $("#category_show").click(function(event) {
        if( !confirm('¿Seguro desea eliminar la categoría?') ) 
            event.preventDefault();
    });
});
    
