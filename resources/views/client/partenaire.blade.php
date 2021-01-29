@extends('client.element',['titre'=>'Nos Partenaires'])


@section('baniere')
	
        <div class="slider-area ">
            <div class="slider-heightpartenaire d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>Nos Partenaires</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
@endsection





@section('contenu')





{{-- <div class="container">

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
</div> --}}

<!-- all-course Start -->
<section class="all-course section-padding30">
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
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Tous nos Partenaires</a>
                                </div>
                            </nav>
                            <!--End Nav Button  -->
                        </div>
                    </div>
                </div>
                <!-- Tab content -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- Nav Card -->
                        <div class="tab-content" id="nav-tabContent">
                            <!--  one -->
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">       
                                <div class="row">
                                    
                                    @if (count($informations)>0)
                                         @foreach ($informations as $information)
                                         <div class="col-xl-4 col-lg-4 col-md-4 col-auto">
                                            <!-- Single course -->
                                            
                                            <div class="single-course mb-70">
                                                <div class="course-img">
                                                    <img src="{{$information->image}}" alt="">
                                                </div>
                                                <div class="course-caption">
                                                    <div class="course-cap-top">
                                                        <h6><a href="#">{{$information->titre}}</a></h6>
                                                    </div>
                                                    <div class="row">
                                                        {{-- <div class="col-xl-6 col-lg-6 col-md-6">
                                                            <p>{{$information->quartier}}</p>
                                                        </div> --}}
                                                        {{-- <div class="col-xl-12 col-lg-12 col-md-12">
                                                            <p class="text-danger"> {{$information->prix}}F CFA</p>
                                                        </div> --}}
                                                    </div>
                                                    
                                                    <div class="course-cap-mid d-flex justify-content-between">
                                                        <div class="course-ratting">
                                                            <a href="details_{{$information->id}}" class="genric-btn primary circle">En savoir plus</a>
                                                        </div>
    
                                                    </div>
    
                                                </div>
                                            </div>
    
    
                                            
    
                                        </div> 
                                        @endforeach

                                    @else
                                        <div class="container">
                                            <h2 class="text-center">Aucun résultat trouvé</h2>
                                        </div>
                                    @endif

                                
                                </div>
                            </div>
                            <!--  Two -->
                           
                        </div>
                    <!-- End Nav Card -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- all-course End -->






@endsection