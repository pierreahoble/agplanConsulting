@extends('client.element',['titre'=>'Location']) @section('baniere')

<div class="slider-area ">
    <div class="slider-height02 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap hero-cap2 text-center">
                        <h2>Détails</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('contenu')

<br><br>


<div class="container">

    <div class="row">
        <div class="col-md-3">
            <img class="card-img-top" src="{{$information->image}}" alt="Card image cap">
        </div>

        <div class="col-md-9">
            <div class="card" style="width: 50rem;">
                {{-- <img class="card-img-top" src="{{$information->image}}" alt="Card image cap"> --}}
                <div class="card-body">
                    <h5 class="card-title">{{$information->titre}}</h5>
                  
                    <p class="card-text">{{$information->description}}</p>    
                    
                    {{-- <a href="#" class="genric-btn primary circle">En savoir plus</a> --}}
                </div>
            </div>
        </div>

        {{-- <div class="col-md-3">
            <p></p>
        </div> --}}
    </div>
    <br>
    <br>
</div>




@endsection