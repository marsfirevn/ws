<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta id="csrf-token" name="X-CSRF-TOKEN" content="{{csrf_token()}}">
    <title>{{config('app.name')}}</title>
</head>

<body>
    <div id="app">
        <h1>Hello world!!!</h1>
    </div>
</body>
</html>
