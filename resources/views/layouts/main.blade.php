<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Videoteca</title>
</head>
<body>
    
    @include('partials.header')

    <main>
        
        @yeld('content')

    </main>

    @include('partials.footer')
    
    
</body>
</html>