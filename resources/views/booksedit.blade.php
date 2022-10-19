@extends('layouts.mng')

@section('content')
<div class="row container">
  <div class="col-md-12">
    @include('common.errors')
    <form action="{{url('books/update')}}"method="POST">

      <!--item_name-->
      <div class="form-group">
        <label for="item_name">Title</label>
        <input type="text"name="item_name"class="form-control"
        value="{{$book->item_name}}">
      </div>
      <!--/ item_name-->

      <!--item_number-->
      <div class="form-group">
        <label for="item_number">Number</label>
      <input type="text"name="item_number"class="form-control"
      value="{{$book->item_number}}">
      </div>
      <!--/item_number-->

      <!--item_amount-->
      <div class="form-group">
        <label for="item_amount">Amount</label>
      <input type="text"name="item_amount"class="form-control"
      value="{{$book->item_amount}}">
      </div>
      <!--/item_amount-->
      
      <!--writer-->
      <div class="form-group">
        <label for="writer">writer</label>
      <input type="text"name="writer"class="form-control"
      value="{{$book->writer}}">
      </div>
      <!--writer-->
      
      <!--page_number-->
      <div class="form-group">
        <label for="page_number">page_number</label>
      <input type="text"name="page_number"class="form-control"
      value="{{$book->page_number}}">
      </div>
      <!--page_number-->
      
      <!--publisher-->
      <div class="form-group">
        <label for="publisher">publisher</label>
      <input type="text"name="publisher"class="form-control"
      value="{{$book->publisher}}">
      </div>
      <!--publisher-->
      
      <!--genre-->
      <div class="form-group">
        <label for="genre">genre</label>
      <input type="text"name="genre"class="form-control"
      value="{{$book->genre}}">
      </div>
      <!--genre-->
      
      <!--synopsis-->
      <div class="form-group">
        <label for="synopsis">synopsis</label>
      <input type="text"name="synopsis"class="form-control"
      value="{{$book->synopsis}}">
      </div>
      <!--synopsis-->

      <!--published-->
      <div class="form-group">
        <label for="published">published</label>
      <input type="datetime"name="published"class="form-control"
      value="{{$book->published}}">
      </div>
      <!--/published-->

      <!-- file追加 -->
      <div class="form-group">
      <label for="file">画像</label>
      <input type="file" name="item_img"class="form-control"
      value="{{$book->file}}">
      </div>
      <!-- file追加 -->

      <!--saveボタン/Backボタン-->
      <div class="well well-sm">
      <button type="submit"class="btn btn-primary">save</button>
      <a class="btn btn-link pull-right"href="{{url('/')}}">back</a>
      </div>
      <!--/saveボタン/Backボタン-->

      <!--id値を送信-->
      <input type="hidden"name="id"value="{{$book->id}}">
      <!--/id値を送信-->

      <!--CSRF-->
      @csrf
      <!--/ CSRF-->


    </form>
    </div>
  </div>
@endsection
    