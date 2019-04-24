@extends('master')
@section('main_content')

<section class="shopping_cart_page">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 mx-auto">
                <div class="widget">
                    <div class="section-header">
                        <h3 class="heading-design-h5">
                            Cart
                        </h3>
                    </div>
                    @if ($cart)
                    <div class="table-responsive">

                        <table class="table cart_summary">
                            <thead>
                                <tr>
                                    <th class="cart_product">Product</th>
                                    <th>Description</th>
                                    <th>Avail.</th>
                                    <th>Unit price</th>
                                    <th>Qty</th>
                                    <th>Total</th>
                                    <th class="action"><span class="text-danger"><i class="fas fa-trash text-dandger"></i></span></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cart as $product)
                                <tr>
                                    <td class="cart_product"><a href="#"><img class="img-fluid" src="{{asset('images/' . $product['attributes']['image'])}}" alt="Product"></a></td>
                                    <td class="cart_description">
                                        <p class="product-name"><a href="#">{{$product['name']}}</a></p>
                                    </td>
                                    <td class="availability in-stock"><span class="badge badge-success">In stock</span></td>
                                    <td class="price"><span>${{$product['price']}}</span></td>
                                    <td class="qty">
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                     <a href="{{ url('shop/update-cart?pid=' . $product['id'] . '&op=minus') }}" class="btn btn-theme-round btn-number btn-shop-item-count"><span class="fa fa-minus  "></span></a>

                                            </button>
                                            </span>
                                            <input class="form-control border-form-control form-control-sm input-number" value="{{ $product['quantity'] }}" type="text">
                                            <span class="input-group-btn">
                                      <a href="{{ url('shop/update-cart?pid=' . $product['id'] . '&op=plus') }}" class="btn btn-theme-round btn-number btn-shop-item-count" ><span class="fa fa-plus"></span></a>


                                            </button>
                                            </span>
                                        </div>
                                    </td>
                                    <td class="price"><span>${{$product['price'] * $product['quantity']}}</span></td>
                                    <td class="action">
                                        <a data-toggle="tooltip" data-placement="top" title="" href="{{ url('shop/remove-item?pid=' . $product['id']) }}" data-original-title="Remove"><span class="text-danger"><i class="fas fa-trash text-dandger"></i></span></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>

                                <tr>
                                    <td colspan="2"></td>
                                    <td colspan="3">Total products (tax incl.)</td>
                                    <td colspan="2">$437.88 </td>
                                </tr>
                                <tr>
                                    <td colspan="5"><strong>Total</strong></td>
                                    <td colspan="2"><strong>${{  Cart::getTotal()}} </strong></td>
                                </tr>
                            </tfoot>
                        </table>

                    </div>
                    <a href="{{url('shop/empty-cart')}}" class="btn float-left btn-danger mb-1">Clean all</a>
                    <a href="{{url('shop/order')}}" class="btn btn-theme-round btn-lg pull-right">ORDER NOW</a>
                </div>
                @else
                <p class="text-center m-auto h4"> No products in cart</p>
            </div>
            @endif
        </div>
    </div>
</section>
@endsection
