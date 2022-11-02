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
              {{$books->links()}}
            </div>
          </div>
        </section>


