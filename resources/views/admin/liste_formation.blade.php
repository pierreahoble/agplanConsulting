@extends('layout.base')



@section('contenu')

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Liste des formations</h1>
  </div>

  <div class="row">


   

    @if (count($formations)>0)
        
    @foreach ($formations as $formation)
    <div class="col-md-3">

      <div class="col-auto" style="padding-top: 15px;">
        <div class="card" style="width: 15rem;" style="padding-top: 15px;">
        <img class="card-img-top" src="{{$formation->image}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{$formation->tiitre}}</h5>
            <p class="card-text">Prix: {{$formation->prix}}</p>
              {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
              <div class="col-md-12">
                <a href="{{url("modifier_formation/{$formation->id}")}}" class="col-auto btn btn-primary  btn-circle btn-sm">
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
    </div>
    
        
    @endforeach

    @else 
<div class="container">
  <div class="">
    <p>
      Aucune formation trouvée
    </p>
  </div>
</div>
    @endif






    
  </div> 


 
@endsection