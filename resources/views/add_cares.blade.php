<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Auklė Kaune</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ url('/css1/style.css') }}" />  
    </head>
    <body class="antialiased">
      <header>
        <nav class="spalvaNavbar navbar sticky-top navbar-expand-lg ">
          <div class="container-fluid">
            <a href="{{ url('/dashboard') }}" class="navbar-brand font-italic">Auklė Kaune</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <div class="navbar-nav navbar-collapse justify-content-end">
                <li class="nav-item dropdown">
                  <a class="linkai nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Profilis
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ url('/my_user_profile') }}">Mano profilis</a></li>
                    <li><a class="dropdown-item" href="{{ url('/my_kid_profiles') }}">Vaiko profilis</a></li>
                  </ul>
                </li>
                <a href="{{ url('/cares') }}" class="linkai nav-link">Paslaugos</a>
                <a href="{{ url('/prices') }}" class="linkai nav-link">Kainos</a>
                @if (auth()->user()->roles==2)
                  <a href="{{ url('/working_days') }}" class="linkai nav-link">Laisvumas</a>
                  @else
                @endif
                <a href="{{ url('/reservation') }}" class="linkai nav-link">Rezervacija</a>
                <a href="{{ url('/about') }}" class="linkai nav-link">Apie</a>
                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ Auth::user()->name }}
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <form method="POST" action="{{ route('logout') }}" x-data>
                      @csrf
                      <button type="submit" class="dropdown-item nav_dropdown">Atsijungti</button>
                    </form>
                  </ul>
                </div> 
              </div>
            </div>
          </div>
        </nav>
      </header>
      <main>
        <div class="container mt-4">
          <a href="{{ url('/cares') }}" class="btn btn-success btn-lg atgal">Atgal</a>
          <h1 class="about_pavadinimas text-center p-4">Paslaugos</h1>
          <div class="row justify-content-center">
            <div class="col-lg-8 ">
              <table class="table table_stilius" >
                <thead class="table1">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col" class="th_stilius">Užsiėmimas</th>
                    <th scope="col" class="th_stilius">Prižiūrėjimas</th>
                    <th scope="col"></th>
                    <th scope="col" class="th_stilius">Redaguoti</th>
                    <th scope="col" class="th_stilius">Ištrinti</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($cares as $cares2)
                  <tr class="tr_stilius">
                    <th scope="row">{{ $cares2->id }}</th>
                      <td class="th_stilius">{{$cares2->take_of_care }}</td>
                      <td class="th_stilius">{{$cares2->when }}</td>
                      <td>{{ Str::limit($cares2->description, 50) }}</td>
                      <td class="th_stilius">
                        <a class='no-underline btn btn-warning btn-sm' href="/add_cares/edit/{{$cares2->id }}">Redaguoti</a>
                      </td>
                      <td class="th_stilius">
                        <a class='no-underline btn btn-danger btn-sm' href="/add_cares/remove/{{$cares2->id }}">Ištrinti</a>
                      </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
      </main>
      <footer>
        <div class="footer text-center p-3 all_footer" >© 2022 Darbą atliko Pijus Černiauskas</div>
      </footer>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>