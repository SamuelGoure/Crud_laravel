<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    
    
     <div class="container t">
     
       <div class="row">
           <div class="col s12">
             <h1>AJOUTER UN NOUVEL ETUDIANT</h1>
             <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" >
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Prenoms</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" >
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Age</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" >
                </div>
                
                <button type="submit" class="btn btn-primary">Ajouter un etudiant</button>
                <a href="/etudiant" class="btn btn-danger">Revenir à la liste des étudiants</a>
             </form>
           </div>
       
       </div>
       
     </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>