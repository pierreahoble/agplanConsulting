@extends('client.element',['titre'=>'Location'])


@section('baniere')
	
        <div class="slider-area ">
            <div class="slider-heightlocation d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>Location</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
@endsection





@section('contenu')

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
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Tous nos biens à louer</a>
                                </div>
                            </nav>
                            <!--End Nav Button  -->
                        </div>
                    </div>
                </div>
                <!-- Tab content -->
                <div class="row">
                    <div class="col-12">
                        <!-- Nav Card -->
                        <div class="tab-content" id="nav-tabContent">
                            <!--  one -->
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">       
                                <div class="row">

                                     
                                    @if (count($biens)>0)
                                         @foreach ($biens as $bien)
                                    
                                            <div class="col-xl-4 col-lg-4 col-md-6">
                                                                            <!-- Single course -->
                                                <div class="single-course mb-70">
                                                    <div class="course-img">
                                                      <img src="{{$bien->image}}" alt="">
                                                    </div>
                                                    <div class="course-caption">
                                                        <div class="course-cap-top">
                                                            <h4><a href="#">{{$bien->nom}}</a></h4>
                                                        </div>
                                                        <div class="course-cap-mid d-flex justify-content-between">
                                                            <div class="course-ratting">
                                                                <a href="#" class="genric-btn primary circle">En savoir plus</a>
                                                        </div>
                                                            <ul class="text-danger">Prix :{{$bien->prix}}FCFA</ul>
                                                    </div>
                                                                                    
                                                </div>
                                            </div>
                                    </div>
                                            
                                        @endforeach
                                        

                                    @else
                                        
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