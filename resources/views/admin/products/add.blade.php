@extends('admin.layout.master')

@section('title','Product')

@section('body')
<div class="p-4" style="min-height: 800px;">
<h1 class="text-center">Thêm mới sản phẩm</h1>
    <form action="" method="post" class="container">
      
        <div class="mb-3">
            <input type="text" class="form-control" placeholder="Tên" name="name">
        </div>
        <div class="mb-3">
            <input type="number" class="form-control" placeholder="Price" name="price">
        </div>
        <div class="mb-3">
            <input type="number" class="form-control" placeholder="View" name="view">
        </div>
        <div class="mb-3">
            <select name="category" class="form-select">
                <option value="0">-Category-</option>
            
            </select>
        </div>

       <button type="submit" class="btn btn-primary">Thêm mới</button>
    </form>
</div>
@endsection