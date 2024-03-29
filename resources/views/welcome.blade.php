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
                    <a href="{{ url('') }}" class="navbar-brand font-italic">Auklė Kaune</a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse navbar-collapse justify-content-end" id="navbarCollapse">
                        <a href="{{ url('/cares') }}" class="linkai nav-link">Paslaugos</a>
                        <a href="{{ url('/prices') }}" class="linkai nav-link">Kainos</a>
                        <a href="{{ url('/about') }}" class="linkai nav-link">Apie</a>
                        <div class="navbar-nav">
                            @if (Route::has('login'))
                                <div class="d-flex hidden fixed top-0 right-0 px-6 py-4 sm:block ">
                                    @auth
                                        <a href="{{ url('/dashboard') }}" class="linkai nav-link text-sm text-gray-700 dark:text-gray-500 underline">Pradinis</a>
                                    @else
                                        <a href="{{ route('login') }}" class="linkai nav-link text-sm text-gray-700 dark:text-gray-500 underline">Prisijungimas</a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="linkai nav-link ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Registracija</a>
                                    @endif
                                    @endauth
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <main>
            <div class="container mt-4">
                <div id="carouselExampleControls" class="w-75 mx-auto carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/image/Fotoo1.png" class="karusele_foto d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/image/Fotoo2.png" class="karusele_foto d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/image/Fotoo3.png" class="karusele_foto d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="col-md-10 transbox">
                        <h1 class="welcome_pavadinimas text-center p-4" >Auklė Kaune!</h1>
                        <p class="Welcome_tekstas">Sveiki, esu Ieva Ievaitė asmuo, kuri prižiūrės Jūsų vaiką. Turiu daugiau nei 7 metų patirties šiame darbe. Todėl galiu Jums pasiūlyti patikimą bei atsakingą vaiko priežiūrą. Gyvenu didelėje teritoryje esančiame name, kuriame vaikas turės daug laisvės bei įvairiausių pramogų ne tik namo viduje, bet ir lauke. Jums pažadu savo kaip žmogaus sąžiningumą, nuoširdumą bei rūpestingumą Jūsų vaiko priežiūrai.</p>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <div class="footer text-center p-3" >© 2022 Darbą atliko Pijus Černiauskas</div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>

