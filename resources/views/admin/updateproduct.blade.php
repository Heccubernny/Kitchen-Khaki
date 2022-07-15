<base href="/public">
@include('admin.components.css')
<body>

    <!-- partial:partials/_navbar.html -->
    @include('admin.components.navbar')
    <!-- partial -->
@include('admin.components.sidebar')
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->

      <!-- partial -->
      <div class="content-wrapper">

        <div class="row">
        <div class="col-md-12  grid-margin stretch-card">
            <div class="card">
                <div><a href="showproduct"><button type="submit" value="View all Data" class="btn btn-success" style="color:rgba(0,0,0, 8.0);">View all Data</button><a></div>

            <div class="card-body">

                <h4 class="card-title">Product</h4>
                <p class="card-description">
                Update Product
                </p>

                @if(session()->has('updatemessage'))
                <div class="alert alert-success">
                <button type="button" class="class" data-dismiss="alert"></button>

                {{session()->get('updatemessage')}}
                </div>
                @endif

                <form class="forms-sample" action="{{url('updateproductdone', $data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputProductTitle1">Product Title</label>
                    <input type="text" class="form-control" id="exampleInputProduct itle1" value="{{$data->title}}" placeholder="Enter Product Title" name="title">
                </div>
                <div class="form-group">
                    <label for="exampleInputProductDescription1">Product Description</label>
                    <input type="text" class="form-control" id="exampleInputProductDescription1" value="{{$data->desc}}" placeholder="Enter Product Description" name="desc">
                </div>
                <div class="form-group">
                    <label for="exampleInputQuantity1">Quantity</label>
                    <input type="number" class="form-control" id="exampleInputQuantity1" value="{{$data->quantity}}" placeholder="Enter Product Quantity" min="0" default="1" name="quantity">
                </div>
                <div class="form-group">
                    <label for="exampleInputProductPrice1">Product Price</label>
                    <input type="text" class="form-control" id="exampleInputProductPrice1" value="{{$data->price}}" placeholder="Enter Product Price" name="price">
                </div>
                <div class="form-group">

                    <label>File upload</label>
                    <!-- <input type="file" name="image" class=""> -->
                    <div class="input-group col-xs-12">
                        <img src="/productimage/{{$data->image}}" height="100" width="100"/>
                        <br/>
                        <div class="container">
                        <p>Change Image</p>

                        <span>
                        <input type="file" class="form-control file-upload-info" placeholder="Upload Image" name="image">

                        </span>
                    </div>
                    </div>
                </div>


                <input type="submit" value="Submit" class="btn btn-success" style="color:rgba(0,0,0, 8.0);">
                </form>
            </div>
            </div>



        </div>

    </div>


        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
       @include('admin.components.script')

      </body>

