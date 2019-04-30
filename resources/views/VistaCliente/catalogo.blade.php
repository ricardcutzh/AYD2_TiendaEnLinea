@extends('VistaCliente/master')
@section('content')
<div class="container">
<section class="lattest-product-area pb-40 category-list">
    <div class="row">
        @foreach($productos as $producto)
        <div class="col-lg-4 col-md-6">
            <div class="single-product">

        <form class="row contact_form" enctype="multipart/form-data" method="post" action="{{url('Nuevo_Carrito')}}" id="contactForm" novalidate="novalidate">
            @csrf
                <img class="img-fluid" src="https://upload.wikimedia.org/wikipedia/en/d/d1/Image_not_available.png" style="width:128px;height:128px;" alt="">
                <div class="product-details">
                    <h6>{{$producto->nombre}}</h6>

                    <input type="hidden" value="{{$producto->idproducto}}" class="form-control" id="idproducto" name="idproducto" placeholder="Nombre" >


                    <div class="price">
                        <h6>Q {{$producto->precio}}</h6>

                    </div>
                    <div class="price">
                        <button type="submit" value="submit" class="primary-btn">Agregar</button>
                    </div>

                    <div class="prd-bottom">
                        <a href="" class="social-info">
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

            <!-- <div class="col-md-12 text-right">
                <button type="submit" value="submit" class="primary-btn">Registrar empleado</button>
            </div> -->
        </form>
            </div>
        </div>
        @endforeach
    </div>
</section>
</div>
@endsection
