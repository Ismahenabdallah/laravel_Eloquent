<html>
    <head>
        <title>App Name - @yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    <body class="">
        <div class=" relative px-6 py-4">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">Navbar</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">



                      <li class="nav-item">
                        <a  style="padding: .5rem ;"href="{{ route('posts.create')  }}">QueryBuilderCreate</a>

                      </li>
                      <li class="nav-item">
                        <a  style="padding: .5rem ;"href="/posts">PostIndex</a>

                      </li>
                    </ul>
                  </div>
                </div>
              </nav>

            </div>



        <div class="relative flex items-top justify-center min-h-screen bg-gray-800 sm:items-center py-4 ">
            @yield('content')
        </div>







       </body>
</html>
