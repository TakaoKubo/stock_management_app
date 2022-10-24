<section class="module-small">
          <div class="container">
            <form class="row">
              <div class="col-sm-4 mb-sm-20">
                <select class="form-control" name="select" onChange="location.href=value;">
                  <option value="#" selected="selected">ソート法を選択してください </option>
                  <option value="?sort=item_name&order=asc">商品名昇順</option>
                  <option value="?sort=item_name&order=desc">商品名降順</option>
                  <option value="?sort=item_number&order=asc">在庫数昇順</option>
                  <option value="?sort=item_number&order=desc">在庫数降順</option>
                  <option value="?sort=published&order=asc">出版年月日昇順</option>
                  <option value="?sort=published&order=desc">出版年月日降順</option>
                </select>
            </form>
          </div>
        </section>


