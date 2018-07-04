<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

</head>
<body>
<div id="app" class="flex-center position-ref full-height">

    <h1>Ola mundo</h1>

    <example-component :title="'Imildo 50 e Jose'"></example-component>

</div>

<script src="{{asset('js/app.js')}}"></script>
{{--<script src="{{asset('js/script.js')}}"></script>--}}

</body>
</html>