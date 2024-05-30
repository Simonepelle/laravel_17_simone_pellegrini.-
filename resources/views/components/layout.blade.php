<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}}</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <main class="d-flex flex-column min-vh-100">
        <div class="sticky-top">     
            <x-navbar />
        </div>
        
        <hr/>
    <!-- Il "Buco" riempibile -->
        <div class="container">
            {{$slot}}
        </div>

      
    </main>

</body>
</html>