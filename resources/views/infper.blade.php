@extends('client')
@section('oper')
<div class="content">
      <div class="container-fluid">
        <div class="row-lg">
          <div class="col-lg-10">
            <div class="card">
             
<h2>Information personelle</h2>
             <form class="needs-validation" novalidate>
                 <div class="form-row-6">
                     <div class="col-md-3 mb-3">
                        
                     <label for="prenom">Prénom</label>
                 <input type="text" class="form-control" id="prenom" placeholder="xxxxx" required>
                         <div class="valid-feedback">Ok !</div>
                         <div class="invalid-feedback">Valeur incorrecte</div>
                     </div>
                     <div class="col-md-3 mb-3">
                         <label for="nom">Nom de famille</label>
                         <input type="text" class="form-control" id="nom" placeholder="yyyyyy" required>
                         <div class="valid-feedback">Ok !</div>
                         <div class="invalid-feedback">Valeur incorrecte</div>
                     </div>
                     <div class="col-md-3 mb-3">
                         <label for="pseudo">Email</label>
                         <input type="email" class="form-control" id="pseudo" placeholder="xxxy@gmail.com" required>
                         <div class="valid-feedback">Ok !</div>
                         <div class="invalid-feedback">Valeur incorrecte</div>
                     </div>
                 </div>
                 <div class="form-row-6">
                     <div class="col-md-3 mb-3">
                         <label for="ville">Numero de Telephone</label>
                         <input type="text" class="form-control" id="ville" placeholder="numero" required>
                         <div class="valid-feedback">Ok !</div>
                         <div class="invalid-feedback">Valeur incorrecte</div>
                     </div>
                     <div class="col-md-3 mb-3">
                         <label for="pays">Adresse</label>
                         <input type="text" class="form-control" id="pays" placeholder="location" required>
                         <div class="valid-feedback">Ok !</div>
                         <div class="invalid-feedback">Valeur incorrecte</div>
                     </div>
                     <div class="col-md-3 mb-3">
                         <label for="cp">Nom Entreprise</label>
                         <input type="number" class="form-control" id="cp" placeholder="Nom" required>
                         <div class="valid-feedback">Ok !</div>
                         <div class="invalid-feedback">Valeur incorrecte</div>
                     </div>
                 </div>
                 <div class="col-md-20 mb-3 text-center">
                 <button class="btn btn-primary" type="submit">Modifier</button>
                 <button class="btn btn-primary" type="reset">Annuler</button>
                 </div></div>
</div></div>
             </form>
         </div>
         @endsection