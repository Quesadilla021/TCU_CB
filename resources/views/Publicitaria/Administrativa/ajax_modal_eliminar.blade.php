<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script>
function mostrarModalEliminarAgrupacion(id) {

        route = "{{route('modalEliAgrup','#')}}";
        route = route.replace('#',id);

        route_eliminar = "{{ route('eliminarAgrup', '#') }}";
        route_eliminar = route_eliminar.replace('#',id);

        // parent = $(this).parent();
        $.ajax({
            url: route,
            type: 'GET',
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(result) {

                console.log(result);
                $('#portfolioModal1').modal('show');

                $('#nombre').text(result.nombre);
                // $('#descripcion').text(result.descripcion);
                // $('#logo').attr('src',result.img_logo);
                $('#eliminar').attr('action',route_eliminar);
                // $("input[name='nombre_completo_edit']").val(result.nombre_completo);
                // $("input[name='telefono_edit']").val(result.telefono);
                // $("input[name='correo_edit']").val(result.correo);

            }
        });
    
}


</script>