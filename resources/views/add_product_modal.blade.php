<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel"
    aria-hidden="true">



    <form action="" id="addProductForm">
        @csrf


        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Add Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="errMsgContainer">
                    </div>



                    <div class="form-group">
                        <label for="exampleInputEmail1">Product Name</label>
                        <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp"
                            placeholder="Enter Product Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Product Price</label>
                        <input type="text" name="price" class="form-control" id="price"
                            placeholder="Enter Product Price">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary add_product">Save Product</button>
                </div>
            </div>
        </div>




    </form>





</div>
