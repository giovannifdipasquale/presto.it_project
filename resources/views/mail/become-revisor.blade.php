<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Presto.it</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-light">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <h1 class=" text-center display-4 my-4">Presto.<span class="text-warning">it</span></h1>
        </div>
        
        <div class="p-6 p-lg-10">
            <h1 class="fw-700 mt-3">
                Richiesta di collaborazione
            </h1>
            <p>
                L'utente {{ $user->name }}, associato alla seguente mail: {{ $user->email }}, ha chiesto di
                collaborare con noi diventando revisore.
            </p>
            <a class="btn btn-primary" href="{{ route('make.revisor', compact('user')) }}">Rendi Revisor</a>
        </div>
        <div class="text-muted text-center my-4">
            Sent from Presto.it <br>
            Via degli Ulivi, 34<br>
            Bari, 12234 BA <br>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>
