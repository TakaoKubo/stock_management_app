<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com"> 
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<!-- @extends('layouts.auth') -->
@section('content')
    <!-- Bootstrapの定形コード… -->
    <div class="card-body">
        <div class="card-title">
        </div>

        <!-- バリデーションエラーの表示に使用-->
        @include('common.errors')
        <!-- バリデーションエラーの表示に使用-->

        <!-- 本のタイトル -->
        <form enctype="multipart/form-data" action="{{ url('books') }}" method="POST" class="form-horizontal">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="book" class="col-sm-3 control-label">本の名前</label>
                    <input type="text" name="item_name" class="form-control">
                </div>

                <div class="form-group col-md-6">
                    <label for="amount" class="col-sm-3 control-label">金額</label>
                    <input type="text" name="item_amount" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="writer" class="col-sm-3 control-label">著者</label>
                    <input type="text" name="writer" class="form-control">
                </div>

                <div class="form-group col-md-6">
                    <label for="page_number" class="col-sm-3 control-label">ページ数</label>
                    <input type="text" name="page_number" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="publisher" class="col-sm-3 control-label">出版社</label>
                    <input type="text" name="publisher" class="form-control">
                </div>

                <div class="form-group col-md-6">
                    <label for="genre" class="col-sm-3 control-label">ジャンル</label>
                    <input type="text" name="genre" class="form-control">
                </div>

                <div class="form-group col-md-6">
                    <label for="synopsis" class="col-sm-3 control-label">あらすじ</label>
                    <input type="text" name="synopsis" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="number" class="col-sm-3 control-label">在庫数</label>
                    <input type="text" name="item_number" class="form-control">
                </div>

                  <div class="form-group col-md-6">
                    <label for="published" class="col-sm-3 control-label">公開日</label>
                    <input type="date" name="published" class="form-control">
                </div>
            </div>
            <!-- file追加 -->
            <div class="col-sm-6">
                <label>画像</label><br>
                <input type="file" name="item_img">
            </div>
            <br>
            <!-- 本 登録ボタン -->
            <div class="form-row">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-primary">
                    Save
                    </button>
                </div>
            </div>
        </form>
    </div>


    <!-- Book: 既に登録されてる本のリスト -->
     <!-- 現在の本 -->
    @if (count($books) > 0)
        <div class="card-body">
            <div class="card-body">
                <table class="table table-striped task-table">
                    <!-- テーブルヘッダ -->
                    <thead>
                    <th>本の名前</th>
                    <th>金額</th>
                    <th>著者</th>
                    <th>ページ数</th>
                    <th>出版社</th>
                    <th>ジャンル</th>
                    <th>あらすじ</th>
                    <th>在庫数</th>
                    <th>公開日</th>
                    <th>&nbsp;</th>
                    </thead>
                    <!-- テーブル本体 -->
                    <tbody>
                        @foreach ($books as $book)
                            <tr>
                                <!-- 本タイトル -->
                                <td class="table-text">
                                    <div>{{ $book->item_name }}</div>
                                </td>
                                <td>
                                    ￥{{ $book->item_amount }}
                                </td>
                                <td>
                                    {{ $book->writer }}
                                </td>
                                <td>
                                    {{ $book->page_number }}
                                </td>
                                <td>
                                    {{ $book->publisher }}
                                </td>
                                <td>
                                    {{ $book->genre }}
                                </td>
                                <td>
                                    {{ $book->synopsis }}
                                </td>
                                <td>
                                    {{ $book->item_number }}個
                                </td>
                                <td>
                                    {{ $book->published }} 
                                </td>
                                <td>
                                    <div><img src="../upload/{{$book->item_img}}" width="100" alt="画像がありません"></div>
                                </td>

                                <!-- 本: 更新ボタン -->
                                <td>
                                    <form action="{{ url('/admin/booksedit/'.$book->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-primary">
                                            更新
                                        </button>
                                    </form>
                                </td>

                                <!-- 本: 削除ボタン -->
                                <td>
                                    <form action="{{ url('/admin/book/'.$book->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger">
                                            削除
                                        </button>
                                    </form>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif

@endsection
</body>
</html>