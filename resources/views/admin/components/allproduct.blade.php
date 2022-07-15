@include('admin.components.css')
<body>
    <!-- partial:partials/_navbar.html -->
    @include('admin.components.navbar')
    <!-- partial -->
{{-- @include('admin.components.sidebar') --}}
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->

      <!-- partial -->

      <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="class" data-dismiss="alert">{{session()->get('deletesuccessmessage')}}</button>
                    </div>
                    @endif
                  <p class="card-title">Advanced Table</p>
                  <div class="row">
                    <div class="col-12">
                      <div class="table-responsive">
                        <table id="example" class="display expandable-table" style="width:100%">
                          <thead>
                            <tr>
                              <th>Title</th>
                              <th>Description</th>
                              <th>Quantity</th>
                              <th>Price</th>
                              <th>Image</th>
                              <th>Update</th>
                              <th>Delete</th>
                              {{-- <th>Status</th>
                              <th>Updated at</th> --}}
                              <th></th>
                            </tr>

                            @foreach($data as $product)
                            <tr style="align:center; padding-bottom: 25px;">
                                <td>{{$product->title}}</td>
                                <td>{{$product->desc}}</td>
                                <td>{{$product->quantity}}</td>
                                <td>{{$product->price}}</td>
                                <td><img src="/productimage/{{$product->image}}" height = "50" width="50" /></td>
                                {{-- <td>{{$product->title}}</td>
                                <td>{{$product->title}}</td>
                                 --}}
                                 <td><a class="" href="{{url('updateproduct', $product->id)}}"><i class="ti ti-save"></i><a></td>
                                 <td onclick="confirmDelete()" ><a class="" id="confirmdelete" href="{{url('deleteproduct', $product->id)}}"><i class="ti ti-cut"></i></a></td>

                            </tr>
                            @endforeach
                          </thead>
                      </table>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <script>


                function confirmDelete(){
                    document.getElementbyId("confirmdelete").innerHTML =  "Are you sure";
                }
            </script>

        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
       @include('admin.components.script')

      </body>

