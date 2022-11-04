<section class="module">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h1 class="module-title font-alt">Checkout</h1>
              </div>
            </div>
            <hr class="divider-w pt-20">
            <div class="row">
              <div class="col-sm-12">
                <table class="table table-striped table-border checkout-table">
                  <tbody>
                  <p class="text-center">{{ $message ?? '' }}</p><br>
                    <tr>
                      <th class="hidden-xs">Item</th>
                      <th>Description</th>
                      <th class="hidden-xs">Price</th>
                      <th>Remove</th>
                    </tr>
                    @if($my_carts->isNotEmpty()) 
                    @foreach($my_carts as $my_cart)
                    <tr>
                      <td class="hidden-xs"><a href="#"><img src="/upload/{{$my_cart->stock->item_img}}" alt="INF"/></a></td>
                      <td>
                        <h5 class="product-title font-alt">{{$my_cart->stock->item_name}}</h5>
                      </td>
                      <td class="hidden-xs">
                        <h5 class="product-title font-alt">{{ number_format($my_cart->stock->item_amount)}}円</h5>
                      </td>
                      <td>
                      <form action="/cartdelete" method="post">
                                @csrf
                                <input type="hidden" name="delete" value="delete">
                               <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="stock_id" value="{{ $my_cart->stock->id }}">
                                <input type="submit" value="カートから削除する">
                            </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            <hr class="divider-w">
            <div class="row mt-70">
              <div class="col-sm-5 col-sm-offset-7">
                <div class="shop-Cart-totalbox">
                  <h4 class="font-alt">Cart Totals</h4>
                  <table class="table table-striped table-border checkout-table">
                    <tbody>
                      <tr>
                        <th>Quantity :</th>
                        <td>{{$count}}個</td>
                      </tr>
                      <tr class="shop-Cart-totalprice">
                        <th>Total :</th>
                        <td>{{number_format($sum)}}円</td>
                      </tr>
                    </tbody>
                  </table>
                  <form action="/checkout" method="POST">
                       @csrf
                       <button type="submit" class="btn btn-lg btn-block btn-round btn-d" >Proceed to Checkout</button>
                   </form>
                   @else
                   <p class="text-center">カートはからっぽです。</p>

                  @endif
                  
                </div>
              </div><a href="/">商品一覧へ</a>
            </div>
          </div>
        </section>