<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
       
        .error-message {
            font-size: 0.9em;
            color: #721c24;
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            border-radius: 5px;
            padding: 10px;
            margin-top: 0.25rem;
            width: auto; 
            display: inline-block; 
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="text-center">AJOUTER UN NOUVEL ETUDIANT</h1>

    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif

    <form method="POST" action="/ajouter/traitement" class="form-group">
        @csrf

        <div class="form-group">
            <label for="Nom">Nom</label>
            <input type="text" class="form-control" name="nom" id="Nom" value="{{ old('nom') }}">
            @error('nom')
            <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="Prenom">Prenom</label>
            <input type="text" class="form-control" name="prenom" id="Prenom" value="{{ old('prenom') }}">
            @error('prenom')
            <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="Age">Age</label>
            <input type="text" class="form-control" name="age" id="Age" value="{{ old('age') }}">
            @error('age')
            <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <hr>
        <button type="submit" class="btn btn-primary">Ajouter un étudiant</button>
        <a href="/etudiant" class="btn btn-danger">Revenir à la liste des étudiants</a>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
