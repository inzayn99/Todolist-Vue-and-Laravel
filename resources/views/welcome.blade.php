<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">


        <title>Vue</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    </head>
    <body>
    <div id="app">

        <todo />

    </div>

    </body>
        <script src="{{ asset('js/app.js') }}" defer></script>

</html>
<script>
    import TodoList from "../js/components/todo";
    export default {
        components: {Todo}
    }
</script>
