@extends('master')

@section('content')
<head>

  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">

  <link href="https://cdn.datatables.net/v/dt/dt-1.13.3/b-2.3.5/rg-1.3.0/rr-1.3.2/sb-1.4.0/sp-2.1.1/sl-1.6.1/datatables.min.css"/>
 
 
</head>
<section class="content "> 
  
      <form action="dataInsert" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container-fluid ">
          <div class="row">
          <div class="col-md-12" style="margin-top:0.5cm">
            
              <div class="card card-primary col-md-12"  >
                <div class="card-header">
                  <h3 class="card-title">Souscripteur</h3>
                </div>
        
  
                
                      <div class="card-body form-horizontal">
                      
                      <div class="form-group col-md-9 ">
                      <label for="exampleInputcin">CIN</label>
                      <input type="text" data-toggle="validator" name="cin" data-minlength="6"class="form-control" id="" placeholder="CIN" required>
                    </div>
                    
                    <div class="form-group col-md-9 validation-grids widget-shadow">
                      <label for="exampleInputnom">NOM</label>
                      <input type="text" data-toggle="validator" name="nom" data-minlength="6" class="form-control" id="" placeholder="NOM" required>
                    </div>
                    <div class="form-group col-md-9 validation-grids widget-shadow">
                      <label for="exampleInputprenom">PRENOM</label>
                      <input type="text" data-toggle="validator" name="prenom" data-minlength="6" class="form-control" id="" placeholder="PRENOM" required>
                    </div>
                   
                      <div class="form-group col-md-5  ">
                        <label>SEXE</label>
                        <select class="form-control" id="" name="sexe">
                          <option>HOMME</option>
                          <option>FEMME</option>
                        
                        </select>
                      </div>
                    <div class="col-md-9">
                      
                      <div class="form-group">
                        <label>DATE DE NAISSANCE</label>
                        <input type="date" name="date_de_naissance"  class="form-control" id="" required>
                    
                        </div>
                        </div>

                    <div class="form-group col-md-9 validation-grids widget-shadow">
                      <label for="exampleInputaddresse">ADRESSE</label>
                      <input type="text" name="adresse"  class="form-control" id="" placeholder="ADRESSE" required>
                    </div>
                    <div class="form-group col-md-9 validation-grids widget-shadow">
                      <label for="exampleInputville">VILLE</label>
                      <input type="text" name="ville" class="form-control" id="" placeholder="VILLE" required>
                    </div>
                    <div class="form-group col-md-9 validation-grids widget-shadow ">
                      <label for="exampleInputcp">CODE POSTALE</label>
                      <input type="text" name="code_postale"  class="form-control" id="" placeholder="CODE POSTALE" required>
                    </div>
                    <div class="form-group col-md-9 validation-grids widget-shadow ">
                      <label for="exampleInputel">TELEPHONE</label>
                      <input type="tel" name="tel"  class="form-control" id="" placeholder="NUMERO DU TELEPHONE" required>
                    </div>
                    
                   
                  </div>
                  
                
              </div>
             <div class="card-footer " style="margin-left:2cm">
                    <button type="submit" class="btn btn-primary " >Ajouter</button>
                 </div>
             

                
                
        </form>
         </section>
         <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/v/dt/dt-1.13.3/b-2.3.5/rg-1.3.0/rr-1.3.2/sb-1.4.0/sp-2.1.1/sl-1.6.1/datatables.min.js"></script>

    
@endsection