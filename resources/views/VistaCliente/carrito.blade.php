@extends('VistaCliente/master')
@section('content')
<div class="container">

    <!--================Cart Area =================-->
    <section class="cart_area">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        @php
                        $i = 0;
                        @endphp
                            @foreach($carrito as $producto)

                        @php
                        $i += $producto->precio*$producto->cantidad;
                        @endphp
                            <tr>

                                <td>
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="img/cart.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <p>{{$producto->nombre}}</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5>Q{{$producto->precio}}</h5>
                                </td>
                                <td>
                                    <div class="product_count">
                                        <input type="text" name="qty" id="sst" maxlength="12" value="{{$producto->cantidad}}" title="Quantity:"
                                            class="input-text qty">
                                        <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                            class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                                        <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                                            class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                                    </div>
                                </td>
                                <td>
                                    <h5>${{$producto->precio*$producto->cantidad}}</h5>
                                </td>
                            </tr>
                            @endforeach
                            <tr>

                                <td>
                                <h4>Total:</h4>
                                </td>
                                <td>
                                </td>
                                <td>
                                </td>
                                <td>
                                <h3>${{$i}}</h3>
                                </td>

                            </tr>

                        </tbody>
                    </table>

                </div>
                <div>
                <form class="row contact_form" enctype="multipart/form-data" method="post" action="{{url('RealizarCompra')}}" id="contactForm" novalidate="novalidate">
                @csrf

                    <table>
                        <tbody>
                            <tr class="out_button_area">
                                <td>
                                    <div class="checkout_btn_inner d-flex align-items-center">
                                        <a class="gray_btn" href="/Catalogo">Seguir Comprando</a> 
                                        <button type="submit" value="submit" class="primary-btn">Finalizar Compra</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table> 
                </form>

                </div>
            </div>
        </div>
    </section>
    <!--================End Cart Area =================-->


</div>
@endsection
