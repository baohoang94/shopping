@if (!empty($cart))
<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
              <li><a href="{{ route('home') }}">Home</a></li>
              <li class="active">Giỏ hàng</li>
            </ol>
        </div>
        <div class="table-responsive cart_info">
            <table class="table table-condensed tableUpdateCart" data-url_update_cart="{{ route('updateCart') }}">
                <thead>
                    <tr class="cart_menu">
                        <td class="image">Sản phẩm</td>
                        <td class="description"></td>
                        <td class="price">Đơn giá</td>
                        <td class="quantity">Số lượng</td>
                        <td class="total">Số tiền</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $subTotal = 0;
                    @endphp
                    @foreach ($cart as $key => $cartItem)
                    @php
                        $subTotal += $cartItem['price'] * $cartItem['quantity']
                    @endphp
                    <tr>
                        <td class="cart_product">
                            <a href="{{ route('detail', ['id' => $key]) }}"><img style="height: 100px" src="{{ $cartItem['image'] }}" alt=""></a>
                        </td>
                        <td class="cart_description">
                            <h4><a href="">{{ $cartItem['name'] }}</a></h4>
                            {{-- <p>Web ID: 1089772</p> --}}
                        </td>
                        <td class="cart_price">
                            <p>{{ number_format($cartItem['price']) }} VND</p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                {{-- <a class="cart_quantity_up" href=""> + </a> --}}
                                <input class="cart_quantity_input" data-id_product="{{ $key }}" type="number" name="quantity" value="{{ $cartItem['quantity'] }}" autocomplete="off" size="2" min="1">
                                {{-- <a class="cart_quantity_down" href=""> - </a> --}}
                            </div>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price">{{ number_format($cartItem['price'] * $cartItem['quantity']) }} VND</p>
                        </td>
                        <td class="cart_delete">
                            <a class="cart_quantity_delete" data-url_delete_cart="{{ route('deleteCart', ['id' => $key]) }}" href=""><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section> <!--/#cart_items-->

<section id="do_action">
    <div class="container">
        <div class="heading">
            <h3>Thông tin đơn hàng</h3>
            <p>Chọn địa chỉ giao hàng và mã giảm giá (nếu có)</p>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="chose_area">
                    <ul class="user_option">
                        <li>
                            <input type="checkbox">
                            <label>Sử dụng mã giảm giá</label>
                        </li>
                        <li>
                            <input type="checkbox">
                            <label>Sử dụng mã free ship</label>
                        </li>
                    </ul>
                    <ul class="user_info">
                        <li class="single_field zip-field">
                            <label>Nhập mã:</label>
                            <input type="text">
                        </li>
                    </ul>
                    <a class="btn btn-default update" href="">Xóa</a>
                    <a class="btn btn-default check_out" href="">Áp dụng</a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="total_area">
                    <ul>
                        <li>Tổng tiền hàng <span>{{ number_format($subTotal) }} VND</span></li>
                        <li>Phí vận chuyển <span>0 VND</span></li>
                        <li>Tổng cộng <span>{{ number_format($subTotal) }} VND</span></li>
                    </ul>
                        <a class="btn btn-default update" href="">Cập nhật</a>
                        <a class="btn btn-default check_out" href="">Đặt hàng</a>
                </div>
            </div>
        </div>
    </div>
</section><!--/#do_action-->
    
@else
    <h1 class="text-center">Bạn chưa có sản phẩm nào trong giỏ hàng</h1>
@endif