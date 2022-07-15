<div class="content-wrapper">

    <div class="row">
    <div class="col-md-12  grid-margin stretch-card">
        <div class="card">
            <div><a href="showproduct"><button type="submit" value="View all Data" class="btn btn-success" style="color:rgba(0,0,0, 8.0);">View all Data</button><a></div>

        <div class="card-body">

            <h4 class="card-title">Product</h4>
            <p class="card-description">
            Add Product
            </p>

            @if(session()->has('message'))
            <div class="alert alert-success">
            <button type="button" class="class" data-dismiss="alert"></button>

            {{session()->get('message')}}
            </div>
            @endif

            <form class="forms-sample" action="{{url('uploadproduct')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputProductTitle1">Product Title</label>
                <input type="text" class="form-control" id="exampleInputProduct itle1" placeholder="Enter Product Title" name="title">
            </div>
            <div class="form-group">
                <label for="exampleInputProductDescription1">Product Description</label>
                <input type="text" class="form-control" id="exampleInputProductDescription1" placeholder="Enter Product Description" name="desc">
            </div>
            <div class="form-group">
                <label for="exampleInputQuantity1">Quantity</label>
                <input type="number" class="form-control" id="exampleInputQuantity1" placeholder="Enter Product Quantity" min="0" default="1" name="quantity">
            </div>
            <div class="form-group">
                <label for="exampleInputProductPrice1">Product Price</label>
                <input type="text" class="form-control" id="exampleInputProductPrice1" placeholder="Enter Product Price" name="price">
            </div>
            <div class="form-group">
                <label>File upload</label>
                <!-- <input type="file" name="image" class=""> -->
                <div class="input-group col-xs-12">
                    <input type="file" class="form-control file-upload-info" placeholder="Upload Image" name="image">

                    </span>
                </div>
            </div>


            <input type="submit" value="Submit" class="btn btn-success" style="color:rgba(0,0,0, 8.0);">
            </form>
        </div>
        </div>



    </div>

</div>
