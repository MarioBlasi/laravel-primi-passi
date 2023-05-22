<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

       
         <!-- Bootstrap CSS v5.2.1 -->
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
         <!-- Bootstrap JavaScript Libraries -->
         <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
          </script>
        
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
            integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
          </script>

       <style>
        body{
            font-family: 'Nunito', sans-serif;
        }
       </style>
       
    </head>
    <body >
     <header class="d-flex justify-content-center pt-3 bg-info">
        <a href="{{ route('home') }}">Home &nbsp</a>
        <a href="{{ route('about') }}">About &nbsp</a>
        <a href="{{ route('info') }}">Info &nbsp</a>
        <a href="{{ route('courses') }}">Courses &nbsp</a> 
     </header>
     
    <main>
    <div class="container">
      <div class="row">
        <div class="col p-3">
          <h1 class="shadow my-5 d-flex justify-content-center">
              {{$page_title}}
          </h1>
          <p class="shadow my-5 d-flex justify-content-center">
              {{$subtitle}} 
          </p>
        </div>
      </div>
    </div>

    <div class="container pt-3">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <img src="https://thumbs.dreamstime.com/b/black-welcome-icon-logo-word-welcome-black-welcome-icon-logo-word-welcome-white-131406666.jpg" alt="">
            </div>
           
        </div>
    </div>
  </main>
    </body>
</html>
