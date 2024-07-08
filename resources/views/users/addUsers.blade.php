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
    <h1 class="text-center">Thêm mới User</h1>
    <form action="{{ route('user.add_User') }}" method="post" class="container">
        @csrf
        <div class="mb-3">
            <input type="text" class="form-control" placeholder="Tên" name="name">
        </div>
        <div class="mb-3">
            <input type="email" class="form-control" placeholder="Email" name="email">
        </div>
        <div class="mb-3">
            <input type="number" class="form-control" placeholder="Tuổi" name="tuoi">
        </div>
        <div class="mb-3">
            <select name="pb" class="form-select">
                <option value="0">-Chọn phòng ban-</option>
                @foreach($phongBan as $pb)
                <option value="{{$pb->id}}">{{$pb->ten_donvi}}</option>
                @endforeach
            </select>
        </div>

       <button type="submit" class="btn btn-primary">Thêm mới</button>
    </form>
</body>

</html>