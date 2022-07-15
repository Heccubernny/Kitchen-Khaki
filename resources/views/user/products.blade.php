
@include('../user/components/header')
    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Check Our Products</h2>
                        {{-- {{Breadcrumbs::render('products')}} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    {{-- Search form --}}

    <form action="{{url('search')}}" method="get" class="form-inline float-right m-5">
        @csrf
        <input type="search" name="search" id="search" placeholder="Search..." class="form-control">
        &nbsp;
        <input type="submit" value="Submit" class="btn btn-outline-success">
    </form>

    <!-- ***** Products Area Starts ***** -->
    <section class="section" id="products">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Our Latest Products</h2>
                        <span>Check out all of our products.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
            @foreach($data as $products)

                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="{{url('single-product',$products->id)}}"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="{{url('single-product/addstar', $products->id)}}"><i class="fa fa-star"></i></a></li>
                                    <li><a href="{{url('single-product/cart', $products->id)}}"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <img src="/productimage/{{$products->image}}" sizes="" height="300" alt="">
                        </div>
                        <div class="down-content">
                            <h4>{{$products->title}}</h4>

                            <span>
                                {{$products->desc}}
                            </span>
                            {{-- <span>${{$products->price}}</span> --}}
                            {{-- <ul class="stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul> --}}

                        </div>
                    </div>
                </div>

                @endforeach

                </div>
                @if(method_exists($data, 'link'))
                <div class="col-lg-12">
                    <div class="ustify-content-center d-flex">
                        {{-- pagination --}}
                        {!! $data->links() !!}
                    </div>
                </div>
                @endif
            </div>
        </div>
    </section>
    <!-- ***** Products Area Ends ***** -->

@include('../user/components/footer')