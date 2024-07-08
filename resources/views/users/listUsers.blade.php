
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
    <a class="btn btn-primary" href="add-user">Thêm mới</a>
<table class="table table-bordered table-striped text-center container">
    <thead>
        <th>STT</th>
        <th>Tên</th>
        <th>Tuổi</th>
        <th>Phòng ban</th>
        <th>Email</th>
        <th>Hành động</th>
    </thead>
    <tbody>
        @foreach($listUsers as $key => $User)
           <tr>
            <td>{{$key + 1}}</td>
            <td>{{$User->name}}</td>
            <td>{{$User->tuoi}}</td>
            <td>{{$User->ten_donvi}}</td>
            <td>{{$User->email}}</td>
            <td>
                <a class="btn btn-danger" href="del-user/{{$User->id}}" onclick="return confirm('Bạn có muốn xóa không?');">Xóa</a>
                <a class="btn btn-warning" href="edit-user/{{$User->id}}">Sửa</a>
            </td>
           </tr>

        @endforeach
    </tbody>
</table>
</body>
</html>