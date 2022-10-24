<hr class="divider-w">
        <section class="module-small">
          <div class="container">
            <div class="row multi-columns-row">
              @foreach($books as $book)
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="shop-item">
                <a href="/item/{{$book->id}}"><div class="shop-item-image"><img src="upload/{{$book->item_img}}" alt="Images not available yet"/>
                  </div></a>
                  <h4 class="shop-item-title font-alt"><a href="/item/{{$book->id}}">{{$book->item_name}}</a></h4>￥{{ number_format($book->item_amount) }}
                </div>
              </div>
              @endforeach
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="pagination font-alt"><a href="#"><i class="fa fa-angle-left"></i></a><a class="active" href="#">1</a><a href="#">2</a><a href="#">3</a><a href="#">4</a><a href="#"><i class="fa fa-angle-right"></i></a></div>
              </div>
            </div>
          </div>
        </section>


