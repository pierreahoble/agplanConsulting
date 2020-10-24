@extends('layout.base')



@section('contenu')

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Liste des constructions</h1>
  </div>

  <!-- Content Row -->
  <div class="row">

 

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-dark shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-dark mb-1"> <h4>Construction</h4> </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Adidogome</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">215,000 XOF</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-home fa-2x text-gray-300"></i>
                        {{-- <img src="{{asset('assets/img/comment/comment_1.png')}}" alt=""> --}}
                    </div>
                    <div class="col-md-12">
                        <a href="#" class="col-auto btn btn-primary  btn-circle btn-sm">
                            <i class="fas fa-edit"></i>
                        </a>

                        <a href="#" class="col-auto btn btn-info  btn-circle btn-sm">
                            <i class="fas fa-eye"></i>
                        </a>

                        <a href="#" class="col-auto btn btn-danger btn-circle btn-sm">
                            <i class="fas fa-trash"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
  </div>

 
@endsection