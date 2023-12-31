<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="style.css">

    <title>Services</title>
</head>

<body>
    <div class="container">
        <header>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/services">Services</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <h1 class="mt-5">{{ $saluto }}</h1>

        <ul class="list-group">
            <li class="list-group-item">
                <h5>Vendita prodotti freschi:</h5>
            </li>
            @foreach ($freshProducts as $freshProduct)
                <li class="list-group-item">{{ $freshProduct }}</li>
            @endforeach

            <li class="list-group-item">
                <h5>Vendita prodotti pronti:</h5>
            </li>
            @foreach ($preparedProducts as $preparedProduct)
                <li class="list-group-item">{{ $preparedProduct }}</li>
            @endforeach
        </ul>

        <p class="my-3">{{$comment}}</p>

        <h3 class="my-4">N.B. *</h3>
        <p>Cit. "Io ci dormo... fra due guanciali"</p>
        <p><em>Giorgione</em></p>

    </div>

</body>

</html>
