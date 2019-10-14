$(function () {
    let body = $('body');

    let table_productos = $('#tabla-productos');
    if(table_productos.length){
        let dt_productos = table_productos.DataTable({
            "language":{"url": "//cdn.datatables.net/plug-ins/1.10.13/i18n/Spanish.json"}
        });
    }

    $('#btn-agregar-producto').click(function () {
        let button = $(this);
        let button_text = button.html();
        let form = $('#form-producto');
        $.ajax({
            url: BASEURL + 'productos/add',
            type: 'POST',
            data: form.serialize(),
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            beforeSend: function(){
                button.attr('disabled', 'disabled').html("Procesando...");
            },
            success: function(response) {
                let data = $.parseJSON(response);
                alert(data.message);
                if(data.status){
                    window.location = BASEURL + 'productos';
                }
                button.removeAttr('disabled').html(button_text);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                button.removeAttr('disabled').html(button_text);
            }
        });
    });

    $('#btn-actualizar-producto').click(function () {
        let button = $(this);
        let button_text = button.html();
        let form = $('#form-producto');
        $.ajax({
            url: BASEURL + 'productos/update',
            type: 'POST',
            data: form.serialize(),
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            beforeSend: function(){
                button.attr('disabled', 'disabled').html("Procesando...");
            },
            success: function(response) {
                let data = $.parseJSON(response);
                alert(data.message);
                if(data.status){
                    window.location = BASEURL + 'productos';
                }
                button.removeAttr('disabled').html(button_text);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                button.removeAttr('disabled').html(button_text);
                alert(textStatus);
            }
        });
    });

    body.on('click', '.btn-drop-producto', function () {
        let button = $(this);
        let id = $(this).data('id');
        $.ajax({
            url: BASEURL + 'productos/drop',
            type: 'POST',
            data: "id=" + id,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            beforeSend: function(){
                button.attr('disabled', 'disabled').html("Procesando...");
            },
            success: function(response) {
                let data = $.parseJSON(response);
                alert(data.message);
                if(data.status){
                    window.location.reload();
                }
                button.removeAttr('disabled').html(button_text);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                button.removeAttr('disabled').html(button_text);
                alert(textStatus);
            }
        });
    });
});
