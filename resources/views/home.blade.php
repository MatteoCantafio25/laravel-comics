<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Matteo Cantafio">
    <meta name="description" content="Laravel Comics Layout">
    <title>Laravel Comics Layout</title>
    <!-- Fontawesome -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css' integrity='sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==' crossorigin='anonymous'/>
    <!-- App Js -->
    @vite('resources/js/app.js')
</head>

<body>
  <!-- Header -->
    @include('includes.header')

    <!-- Jumbotron -->
    <div class="jumbotron-container"></div>

    <!-- Main -->
    @include('includes.main')

    <!-- Spam -->
    @include('includes.spam')

    <!-- Footer -->
    <footer>
        <!-- Footer Top -->
        @include('includes.footertop')

        <!-- Footer Bottom -->
        @include('includes.footerbottom')
    </footer>  

</body>
</html>