@include('admin.components.css')
<body>
    <!-- partial:partials/_navbar.html -->
    @include('admin.components.navbar')
    <!-- partial -->
@include('admin.components.sidebar')
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->

      <!-- partial -->
     <!-- <div class="container-fluid page-body-wrapper">
      <div class="container">
        <h2 style="font-size: 1.2em;" class="ml-2">Add Product</h2>
        <div>
        <form method="post" action="/">
        <label for="Product Name" class="mt-2 ml-2">
          Product name
        </label>
        <br/>
        <input type="text" name="title" placeholder="Input the product name">
<label for="Product Name" class="mt-2 ml-2">
          Product name
        </label>
        <br/>
        <input type="text" name="title" placeholder="Input the product name">
<label for="Product Name" class="mt-2 ml-2">
          Product name
        </label>
        <br/>
        <input type="text" name="title" placeholder="Input the product name">
<label for="Product Name" class="mt-2 ml-2">
          Product name
        </label>
        <br/>
        <input type="text" name="title" placeholder="Input the product name">
<label for="Product Name" class="mt-2 ml-2">
          Product name
        </label>
        <br/>
        <input type="text" name="title" placeholder="Input the product name">

      </form>
      </div>
      </div>

     </div>
 -->
       @include('admin.components.form')

       @include('admin.components.allproduct')
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
       @include('admin.components.script')

      </body>

