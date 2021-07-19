<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Danh sach lop</h1>
    <form method="get" action="">
        <input type="text" name="search" placeholder="Tìm kiếm..">
        <button><a href="#"><i class="fa fa-search"></i></a></button>
    </form>
    <a href="{{ route('class.create') }}">Them</a>
    <table>
        <tr>
            <td>id</td>
            <td>Ten lop</td>
            <td>MaCN</td>
        </tr>
        <?php foreach ($class as $lop) : ?>  
        <tr>  
            <td>{{ $lop->id }}</td>
            <td>{{$lop->tenLop }}</td>
            <td>{{$lop->maCN }}</td>
        </tr>
        <?php endforeach; ?>
            
       
    </table>
    {{-- // Hien thi phan trang --}}
    {{ $class->links('pagination::bootstrap-4') }}
</body>
</html>