<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script>
function mostrarModalAgrupacion(id) {

        route = "{{route('modal','#')}}";
        route = route.replace('#',id);

        route_verMas = "{{ route('agrupacion', '#') }}";
        route_verMas = route_verMas.replace('#',id);

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
                $('#descripcion').text(result.descripcion);
                $('#logo').attr('src',result.img_logo);
                $('#verMas').attr('href',route_verMas);
                // $("input[name='nombre_completo_edit']").val(result.nombre_completo);
                // $("input[name='telefono_edit']").val(result.telefono);
                // $("input[name='correo_edit']").val(result.correo);

            }
        });
    
}


</script>