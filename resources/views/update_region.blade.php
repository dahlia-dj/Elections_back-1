
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style></style>
</head>
<body>
    <form method ="post" action="/region_update">
        {{ csrf_field() }}
    <div>
        <h2>Mise a jour de region</h2>
        <input type="hidden" name="id" value="{{$reg->label}}">
        <input type="text" name="Region" value="{{$reg->label}}" placeholder="region">
        <button type="submit" class="btn btn-online-primary" value="update">Ok</button>
    </div>
</form>
</body>
</html>    