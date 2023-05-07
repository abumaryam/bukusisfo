<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Saya</title>
</head>
<body>
@foreach($buku as $bk)
    @if(!empty($bk['author']))<h2>{{ $bk['author'] }}</h2>@endif
@endforeach
</body>
</html>