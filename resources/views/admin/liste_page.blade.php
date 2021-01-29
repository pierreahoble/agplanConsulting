@extends('layout.base')



@section('contenu')

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Liste des Conseils</h1>
  </div>

  <!-- Content Row -->

  
  <div class="row">

    @if (count($informations)>0)

    @foreach ($informations as $information)
    
    
          <div class="col-auto" style="padding-top: 15px;">
            <div class="card" style="width: 15rem;" style="padding-top: 15px;">
                <img class="card-img-top" src="{{$information->image}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">{{$information->nom}}</h5>
                  {{-- <p class="card-text">Some quick exampl content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                  <div class="col-md-12">
                    <a href="{{url("modifier-une-page/$information->id")}}" class="col-auto btn btn-primary  btn-circle btn-sm">
                        <i class="fas fa-edit"></i>
                    </a>
        
                    {{-- <a href="#" class="col-auto btn btn-info  btn-circle btn-sm">
                        <i class="fas fa-eye"></i>
                    </a> --}}
        
                    <a href="#" class="col-auto btn btn-danger btn-circle btn-sm">
                        <i class="fas fa-trash"></i>
                    </a>
                </div>
                </div>
              </div>
          </div>
        
        
    @endforeach
    @else

    <div class="container">
      <p>Aucun élément trouvé</p>
    </div>
        
    @endif




    
  </div> 





 
@endsection