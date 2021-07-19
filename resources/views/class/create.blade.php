<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Them lop</h1>
    
    <form method="post" action="{{ route('class.store') }}">
        @csrf
    id: <input  type="number" name="id">
    <br/>
    Ten lop: <input type="text" name="nameClass">
    <br/>
    MaCN: <input type="text" name="maCN">
    <br/>
    <button>Them</button>
    </form>
</body>
</html>