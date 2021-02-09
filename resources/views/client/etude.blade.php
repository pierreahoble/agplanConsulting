@extends('client.element',['titre'=>'Etude'])



@section('baniere')
	
        <div class="slider-area ">
            <div class="slider-heightetude d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2 style="color: blue">Etude</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
@endsection




@section('contenu')


<br>
<br>


<!-- all-course Start -->
<section class="all-course ">
    <div class="container">
        <div class="row">
            <div class="all-course-wrapper">
                <!-- Heading & Nav Button -->
                <div class="row mb-15">
                    <div class="col-lg-12">
                        <div class="properties__button mb-90">
                            <!--Nav Button  -->                                            
                            <nav>                                                                             
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Tous nos Etudes</a>
                                </div>
                            </nav>
                            <!--End Nav Button  -->
                        </div>
                    </div>
                </div>
                <!-- Tab content -->
              
            </div>
        </div>
    </div>
</section>
<!-- all-course End -->



<div class="popular-course">
    <div class="container">
        <div class="row">
            @if (count($informations)>0) 
            @foreach ($informations as $formation)
            <div class="col-xl-4 col-lg-4 col-md-6">
                <!-- Single course -->
                <div class="single-course mb-40">
                    <div class="course-img">
                        <img src="{{$formation->image}}" alt="">
                    </div>
                    <div class="course-caption">
                        <div class="course-cap-top">
                            <h4><a href="#">{{$formation->titre}}</a></h4>
                        </div>
                        <div class="course-cap-mid d-flex justify-content-between">
                            <div class="course-ratting">
                                {{-- <p class="text-danger"> {{$formation->prix}}F CFA</p> --}}
                            </div>
                            <ul>
                                <a href="details_{{$formation->id}}" class="genric-btn primary circle">En savoir plus</a>
                            </ul>
                        </div>
                        {{-- <div class="course-cap-bottom d-flex justify-content-between">
                            <ul>
                                <li><i class="ti-user"></i> 562</li>
                                <li><i class="ti-heart"></i> 562</li>
                            </ul>
                            <span>Free</span>
                        </div> --}}
                    </div>
                </div>
            </div>

            @endforeach 
            @else

            <div class="container">
                <h2>Auncun résultats trouvé</h2>
            </div>
            
            @endif

           
        </div>
        <!-- Section Button -->
    </div>
</div>
<!-- Popular Course End -->




@endsection