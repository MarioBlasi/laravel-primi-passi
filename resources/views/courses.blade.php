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
  <header class="d-flex justify-content-center pt-3 bg-secondary">
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
        <div class="row ">
            <div class="col p-4">
                <img src="https://img.freepik.com/premium-vector/senior-woman-playing-golf-green-golf-course-aged-player-taking-shot-active-old-age-concept-landscape-background-horizontal-full-length-vector-illustration_48369-39331.jpg?w=600" alt="">
            </div>
            <div class="col p-4">
                <img src="https://media.istockphoto.com/id/1286102183/vector/golf.jpg?s=612x612&w=0&k=20&c=lOuPjZ57IcNrzyiRRg_StZ7t-dFkE1Po2IAlNxDNlOY=" alt="">
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