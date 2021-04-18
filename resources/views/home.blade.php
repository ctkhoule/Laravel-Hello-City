<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hello City</title>
    </head>
    <body>
      <h1>Hello from Dakar!</h1>

      <p>Il est en ce moment : {{ date('h:i A') }} UTC</p>
 
      <footer>
        <p>&copy; Copyright {{ date('Y') }} &middot; <a href="#">A propos</a> </p>
      </footer>
    </body>
</html>
