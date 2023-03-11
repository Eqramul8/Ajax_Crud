<script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>



<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>



<script>
    $(document).ready(function() {
        // alert();

        $(document).on('click', '.add_product', function(e) {
            e.preventDefault();
            let name = $('#name').val();
            let price = $('#price').val();
            // console.log(name + price);

            $.ajax({
                url: "{{ route('adding_product') }}",
                method: "POST",
                data: {
                    name: name,
                    price: price,
                },

                success: function(res) {


                    if (res.status = 'success') {

                        $('#addModal').modal('hide');
                        $('#addProductForm')[0].reset();
                        $('.table').load(location.href + ' .table');

                    }

                },

                error: function(err) {
                    let error = err.responseJSON;
                    $.each(error.errors, function(index, value) {
                        $('.errMsgContainer').append('<span class="text-danger">' +
                            value + '</span>' + '<br>');

                    });
                },
            });

        })


        //show product value in update form
        $(document).on('click', '.update_product_form', function() {

            let id = $(this).data('id');
            let name = $(this).data('name');
            let price = $(this).data('price');

            $('#up_id').val(id);
            $('#up_name').val(name);
            $('#up_price').val(price);

        });





        //update product data
        $(document).on('click', '.update_product', function(e) {
            e.preventDefault();
            let up_id = $('#up_id').val();
            let up_name = $('#up_name').val();
            let up_price = $('#up_price').val();
            // console.log(name + price);

            $.ajax({
                url: "{{ route('update.product') }}",
                method: "POST",
                data: {
                    up_id: up_id,
                    up_name: up_name,
                    up_price: up_price,
                },

                success: function(res) {


                    if (res.status = 'success') {

                        $('#updateModal').modal('hide');
                        $('#updateProductForm')[0].reset();
                        $('.table').load(location.href + ' .table');

                    }

                },

                error: function(err) {
                    let error = err.responseJSON;
                    $.each(error.errors, function(index, value) {
                        $('.errMsgContainer').append('<span class="text-danger">' +
                            value + '</span>' + '<br>');

                    });
                },
            });

        })





        //delete product data
        $(document).on('click', '.delete_product', function(e) {
            e.preventDefault();
            let product_id = $(this).data('id');

            // alert(product_id);

            if (confirm('Are you sure to delete productzz??')) {



                $.ajax({
                    url: "{{ route('delete.product') }}",
                    method: "POST",
                    data: {
                        product_id: product_id,

                    },

                    success: function(res) {


                        if (res.status = 'success') {

                            $('.table').load(location.href + ' .table');

                        }

                    }
                });


            }






        })









    });
</script>
