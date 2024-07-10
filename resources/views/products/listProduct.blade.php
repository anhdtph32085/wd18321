<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
  
        <a class="btn btn-primary" href="add-product">Them moi</a>
        
        <table class="table table-bordered table-striped text-center">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>NAME</th>
                    <th>PRICE</th>
                    <th>CATEGORY</th>
                    <th>VIEW</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($listProducts as $key => $product)
                <tr>
                    <td>{{$key + 1}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->category}}</td>
                    <td>{{$product->view}}</td>
                    <td>  <a class="btn btn-danger" href="del-product/{{$product->id}}" onclick="return confirm('Bạn có muốn xóa không?');">Xóa</a>
                    <a class="btn btn-warning" href="edit-product/{{$product->id}}">Sửa</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <form action="{{ route('product.find_Product') }}" method="post" class="container">
        @csrf
        <div class="mb-3">
            <input type="text" class="form-control" placeholder="Tìm kiếm" name="name">
        </div>

       <button type="submit" class="btn btn-primary">Tìm kiếm</button>
    </form>
    </div>
</body>
</html>