<!DOCTYPE html>
<html>
<head>
    <title>Movies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>


<div class="container mt-5">
    @foreach ($films as $film)
        <div class="card" style="width: 18rem; margin-bottom: 1rem;">
            <div class="card-body">
                <p class="card-title text-center"><strong>Titolo</strong>: {{ $film->title }}</p>
                <p class="card-text text-center"><strong>Titolo originale</strong>: {{ $film->original_title }}</p>
                <p class="card-text text-center"><strong>Paese</strong>: {{ $film->nationality }}</p>
                <p class="card-text text-center"><strong>Uscita</strong>: {{ $film->date }}</p>
                <p class="card-text text-center"><strong>Voto</strong>: {{ $film->vote }}</p>
            </div>
        </div>
    @endforeach
</div>

   
</body>
</html>