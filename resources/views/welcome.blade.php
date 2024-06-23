<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LiveWire</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
    </head>
    <body style="background-color: rgb(219, 223, 221)">
        <div>
            <livewire:counter/>
            <livewire:users/>
            <livewire:notes/>
        </div>
    </body>
</html>
