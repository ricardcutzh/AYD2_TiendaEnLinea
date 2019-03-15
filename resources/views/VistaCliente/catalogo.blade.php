@extends('VistaCliente/master')
@section('content')
<div class="container">
<section class="lattest-product-area pb-40 category-list">
    <div class="row">
        @foreach($productos as $producto)
        <div class="col-lg-4 col-md-6">
            <div class="single-product">
                <img class="img-fluid" src="https://upload.wikimedia.org/wikipedia/en/d/d1/Image_not_available.png" style="width:128px;height:128px;" alt="">
                <div class="product-details">
                    <h6>{{$producto->nombre}}</h6>
                    <div class="price">
                        <h6>Q {{$producto->precio}}</h6>
                    </div>
                    <div class="prd-bottom">
                        <a href="" class="social-info">
                            <span class="ti-bag"></span>
                            <p class="hover-text">add to bag</p>
                        </a>
                        <a href="" class="social-info">
                            <span class="lnr lnr-heart"></span>
                            <p class="hover-text">Wishlist</p>
                        </a>
                        <a href="" class="social-info">
                            <span class="lnr lnr-sync"></span>
                            <p class="hover-text">compare</p>
                        </a>
                        <a href="" class="social-info">
                            <span class="lnr lnr-move"></span>
                            <p class="hover-text">view more</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
</div>
@endsection