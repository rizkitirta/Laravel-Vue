<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Vue Spa</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 15%
        }

    </style>
</head>

<body>

    <div id="app">
        <h1 v-text="'Hello,' + title"></h1>
        <example-component></example-component>
        <header-component></header-component>
        <footer-component></footer-component>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
