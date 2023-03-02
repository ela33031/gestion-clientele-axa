@extends ('master')

@section('content')

               <div class="col-lg-11 mb-4">
              <!-- Simple Tables -->
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Ajouter vehicule</h6>
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush" id="myTable">
                  <div class="input-group" >
                        <div class="form-outline" style="margin-left:23cm ">
                            <input onkeyup="myFunction()" type="search" id="myInput" class="form-control" placeholder="immaterculation" />
                        </div>
                    <button type="button" class="btn btn-primary">
                    <i class="fas fa-search"></i>
                    </button>
                </div>

                  <thead class="thead-light">
                        
                      <tr>
                     <th>immatriculation</th> 
                    <th>id_souscripteur</th>
                    <th>Type mine</th>
                    <th>combution</th>
                    <th>editer</th>

                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($vehicules as $vehicules ) 
                      <tr>
                     
                        <td>{{$vehicules->immatriculation}}</td>   
                      <td>{{$vehicules->id_souscripteur}}</td>  
                        <td>{{$vehicules->type_mine}}</td> 
                        <td>{{$vehicules->combution}}</td> 
                        <td>
                           <a href= "editer/{{$vehicules->id}}" class="btn btn-primary">edit vehicule</a>
                        </td>
                        
                        
                           
                        
                        
                    
                      </tr> @endforeach
                    </tbody>
                    </table>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>

            <script>
    function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

               
@endsection