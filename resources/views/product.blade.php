<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>



<style>
    td,
    th {
        font-size: 16px;
    }
</style>







<body>


    <div class="col-md-2 col-xs-2">

    </div>


    <div class="col-md-7 col-xs-12">
        <div class="continer centerIt">

            <h3>All Courses</h3>


            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">
                Add Product
            </button>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>


                    @foreach ($products as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->price }}</td>

                            <td style="width: 14%">
                                <a class="btn btn-danger update_product_form"
                                data-toggle="modal"
                                data-target="#updateModal"
                                data-id="{{$item->id}}"
                                data-name="{{$item->name}}"
                                data-price="{{$item->price}}">Edit</a>

                                <a class="btn btn-danger delete_product"
                                data-id="{{$item->id}}">Delete</a>


                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

            <div class="d-flex justify-content-center">
                {!! $products->links() !!}
            </div>

        </div>
    </div>


    @include('product_js')
    @include('add_product_modal')
    @include('update_product_modal')



</body>

</html>
