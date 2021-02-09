@extends('client.element',['titre'=>'Construction'])




@section('baniere')
	
        <div class="slider-area ">
            <div class="slider-height2construction d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2 style="color:  black">Construction</h2>
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


<div class="container">

    <div class="header-search d-none d-lg-block">
        <form action="rechercher-construction" class="form-box f-right " method="POST">
            @csrf
            <div class="row">
                <div class="col-md-9">
                    <input type="text" name="search" class="form-control" placeholder="Rechercher">
                </div>
                <div class="col-md-3">
                    <button class=" genric-btn primary circle">Rechercher</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- all-course Start -->
<section class="all-course">
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
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Tous nos Constructions</a>
                                </div>
                            </nav>
                            <!--End Nav Button  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- all-course End -->

<div class="popular-course">
    <div class="container">
        <div class="row justify-content-sm-center">
            <div class="cl-xl-7 col-lg-8 col-md-10">
                <!-- Section Tittle -->
                {{-- <div class="section-tittle text-center mb-70">
                    <span>Most Popular Course Of This Week</span>
                    <h2>Our Popular Course</h2>
                </div> --}}
            </div>
        </div>
        <div class="row">
            @if (count($biens)>0) 
            @foreach ($biens as $bien)
            <div class="col-xl-4 col-lg-4 col-md-6">
                <!-- Single course -->
                <div class="single-course mb-40">
                    <div class="course-img">
                        <img src="{{$bien->image}}" alt="">
                    </div>
                    <div class="course-caption">
                        <div class="course-cap-top">
                            <h4><a href="#">{{$bien->nom}}</a></h4>
                        </div>
                        <div class="course-cap-mid d-flex justify-content-between">
                            <div class="course-ratting">
                                <p class="text-danger"> {{$bien->prix}}F CFA</p>
                                {{-- <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i> --}}
                            </div>
                            <ul>
                                <a href="details-bien-immobilier_{{$bien->id}}" class="genric-btn primary circle">En savoir plus</a>
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

@endsection