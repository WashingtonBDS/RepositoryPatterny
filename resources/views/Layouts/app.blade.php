<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @section('sidebar')
        This is the master sidebar.
    @show

    <div class="cointainer">
        @vield('content')
    </div>
</body>
</html>
