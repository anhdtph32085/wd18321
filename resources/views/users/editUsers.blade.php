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
    <h1 class="text-center">Sửa User</h1>
    <form action="{{ route('user.update_User',$user->id) }}" method="post" class="container" >
        @csrf
        <div class="mb-3">
            <input type="text" class="form-control" placeholder="Tên" name="name" value="{{$user->name}}">
        </div>
        <div class="mb-3">
            <input type="email" class="form-control" placeholder="Email" name="email" value="{{$user->email}}">
        </div>
        <div class="mb-3">
            <input type="number" class="form-control" placeholder="Tuổi" name="tuoi" value="{{$user->tuoi}}">
        </div>
        <div class="mb-3">
            <select name="pb" class="form-select">
                @foreach($phongBan as $pb)
                <option value="{{$pb->id}}" {{ ( $pb->id == $user->phongban_id) ? 'selected' : '' }}>{{$pb->ten_donvi}}</option>
                @endforeach
            </select>
        </div>

       <button type="submit" class="btn btn-primary">Sửa</button>
    </form>
</body>

</html>