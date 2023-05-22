<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header class="d-flex justify-content-center pt-3 bg-primary info">
        <a href="{{ route('home') }}">Home &nbsp</a>
        <a href="{{ route('about') }}">About &nbsp</a>
        <a href="{{ route('info') }}">Info &nbsp</a>
        <a href="{{ route('courses') }}">Courses &nbsp</a>
  </header>
  
  <main>
    <div class="container">
      <div class="row">
        <div class="col">
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
            
            <div class="col p-4">
                <img src="https://i.pinimg.com/550x/29/16/d0/2916d0f1391a69d2a855923b8af6a9e6.jpg" alt="">
            </div>
            <div class="col p-4">
                <img src="https://i.pinimg.com/550x/29/16/d0/2916d0f1391a69d2a855923b8af6a9e6.jpg" alt="">
            </div>
        </div>
    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>