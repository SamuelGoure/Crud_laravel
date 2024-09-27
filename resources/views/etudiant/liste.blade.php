<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container text-center">
      <h1>CRUD Laravel</h1>
      <div class="row">
        <div class="col s12">
          <a href="/ajouter" class="btn btn-primary mb-3">Ajouter un nouvel étudiant</a>
          @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénoms</th>
                <th>Âge</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($etudiants as $newcustomer)
                <tr>
                  <td>{{ $newcustomer->id }}</td>
                  <td>{{ $newcustomer->nom }}</td>
                  <td>{{ $newcustomer->prenom }}</td>
                  <td>{{ $newcustomer->age }}</td>
                  <td>
                    <a href="/update-etudiant/{{ $newcustomer->id }}" class="btn btn-info">Modifier</a>
                    <a href="" class="btn btn-danger">Supprimer</a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
