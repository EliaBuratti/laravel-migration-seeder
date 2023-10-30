<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/sass/app.scss', 'resources/js/bootstrap.js'])
</head>

<body class="antialiased">

    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Trenitalia</a>
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="#" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#" aria-current="page">Contacts <span class="visually-hidden">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#" aria-current="page">About <span class="visually-hidden">(current)</span></a>
                        </li>
                    </ul>
                    <form class="d-flex my-2 my-lg-0" action="{{ url('/') }}" method="get">
                        <input class="form-control me-sm-2" type="date" id="user_date" name="user_date" placeholder="Search" required>
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        <button class="btn btn-outline-danger my-2 my-sm-0" type="reset">azzera</button>

                    </form>
                </div>
            </div>
        </nav>

    </header>

    <main>

        <div class="container my-5">

            <h1>Stato treni</h1>
            <hr>
            <table class="table">
                <thead>
                    <tr class=" text-capitalize">
                        <th scope="col">codice treno</th>
                        <th scope="col">stazione di partenza</th>
                        <th scope="col">stazione di arrivo</th>
                        <th scope="col">orario di partenza</th>
                        <th scope="col">data partenza</th>
                        <th scope="col">orario di arrivo</th>
                        <th scope="col">società</th>
                        <th scope="col">in orario</th>
                        <th scope="col">stato</th>
                        <th scope="col">carrozze</th>

                    </tr>
                </thead>
                <tbody>
                    @forelse($trains as $train)
                    <tr>
                        <td>{{$train->code}}</td>
                        <td>{{$train->station_departure}}</td>
                        <td>{{$train->station_arrive}}</td>
                        <td>{{$train->time_departure}}</td>
                        <td>{{$train->department_date}}</td>
                        <td>{{$train->time_arrive}}</td>
                        <td>{{$train->society}}</td>
                        <td>{{$train->on_time ? 'In orario' : 'In ritardo'}}</td>
                        <td>{{$train->deleted ? 'Confermato' : 'Cancellato'}}</td>
                        <td>{{$train->carriages}}</td>
                        @empty
                        <td>Nessun treno per la data selezioanta</td>
                    </tr>
                    @endforelse

                </tbody>
            </table>


        </div>


    </main>

</body>

</html>