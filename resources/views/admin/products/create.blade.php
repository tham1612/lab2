@extends('admin.layouts.master')
@section('title')
    Them moi san pham
@endsection
@section('content')
    <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 mt-3">
            <label for="category_id" class="form-label">Category_id:</label>
            <select type="" class="form-control" id="category_id" placeholder="Enter category_id" name="category_id">
                @foreach($categories as $id=>$name)
                    <option value="{{$id}}">{{$name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3 mt-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
        </div>

        <div class="mb-3 mt-3">
            <label for="sku" class="form-label">Sku:</label>
            <input type="text" class="form-control" id="sku" placeholder="Enter sku" name="sku">
        </div>
        <div class="mb-3 mt-3">
            <label for="img_thumb" class="form-label">Img_thumb:</label>
            <input type="file" class="form-control" id="img_thumb"  name="img_thumb">
        </div>
        <div class="mb-3 mt-3">
            <label for="overview" class="form-label">Overview:</label>
            <textarea class="form-control" id="overview" placeholder="Enter overview" name="overview">    </textarea>
        </div>
        <div class="mb-3 mt-3">
            <label for="content" class="form-label">Content:</label>
            <input type="text" class="form-control" id="content" rows="10" name="content">
        </div>
        <button type="submit" class="btn btn-success"> Submit</button>
        <a href="{{route('products.index')}}" class="btn btn-danger">quay trở về trang danh sách</a>

    </form>
@endsection
