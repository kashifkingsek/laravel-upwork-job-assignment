<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Medium</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" href="{{ route('home') }}">Medium Blogs</a>
              </div>
              <ul class="nav navbar-nav pull-right">
                <li ><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Sign Up</a></li>
              </ul>
            </div>
          </nav>

          <div class="jumbotron">
              <h1 class="text-center">Welcome to Medium Blogs</h1>
          </div>
              


        <hr>
        <div class="container bolgs-container">
            @foreach ($posts as $post)
            <div class="row">

                <div class="col-sm-2 col-md-2"></div>
                <div class="col-sm-6 col-md-6">
                    <img src="cover/{{ $post->cover }}" class="logo-trending">
                    <p class="tom-p"><td>{{ $post->author }}</td>
                    </p>
                    <p class="tom-blogstitle">
                        <td>{{ $post->title }}</td>
                    </p>
                    <p class="text-justify">
                        <td>{{ $post->body }}</td>

                    </p>
                </div>
                <div class="col-sm-2 col-md-2">
                    <img src="images/1639916459_givetra-logo.png" class="img-responsive img-blog">
                </div>        
            </div>
            
            
@endforeach

            
        </div>


    </body>
</html>
