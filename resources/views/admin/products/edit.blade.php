@extends('admin.layouts.master')
@section('title')
{{--  edit  san pham :{{$model->name}}--}}
@endsection
@section('content')
    <form action="{{route('products.update',$product)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3 mt-3">
            <label for="category_id" class="form-label">Category_id:</label>
            <select type="" class="form-control" id="category_id"  name="category_id">
                @foreach($categories as $id=>$name)
                    <option @if($product->category_id==$id) selected @endif
                    value="{{$id}}">{{$name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3 mt-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name"   value="{{$product->name}}" name="name">
        </div>

        <div class="mb-3 mt-3">
            <label for="sku" class="form-label">Sku:</label>
            <input type="text" class="form-control" id="sku" value="{{$product->sku}}" name="sku">
        </div>
        <div class="mb-3 mt-3">
            <label for="img_thumb" class="form-label">Img_thumb:</label>
            <input type="file" class="form-control" id="img_thumb"  name="img_thumb">
            <img src="{{asset($product->img_thumb)}}" alt="" width="100px">
        </div>
        <div class="mb-3 mt-3">
            <label for="overview" class="form-label">Overview:</label>
            <textarea class="form-control" id="overview" placeholder="Enter overview" name="overview">  {{$product->overview}} </textarea>
        </div>
        <div class="mb-3 mt-3">
            <label for="content" class="form-label">Content:</label>
            <textarea type="text" class="form-control" id="content" rows="10" name="content"> {{$product->content}}</textarea>
        </div>
        <button type="submit" class="btn btn-success"> Submit</button>
        <a href="{{route('products.index')}}" class="btn btn-danger">quay trở về trang danh sách</a>

    </form>
@endsection
