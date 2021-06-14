@extends('layout.base') @section('contenu')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Ajouter élément</h1>
</div>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark">Formulaire pour ajouter un bien</h6>
    </div>
    <div class="card-body">
        <div class="col-md-12">
            <form action="{{url('ajouter_un_element')}}" method="post" class="form-group" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-md-6">
                        <label class="text-primary h5">Nom de l'élément</label>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <input type="text" id="" class="form-control" name="nom" required value="" placeholder="Nom de l'element"> @if( $errors->has('nom'))
                                <p class="text-danger">{{ $errors->first('nom') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <label class="text-primary h5">Type de l'élément</label>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <select name="type" class="form-control" required id="type">
                                    <option value=""> Choisir un type *</option>
                                    <option value="1">En vente </option>
                                    <option value="2">En Location</option>
                                    <option value="3">En Construction</option>
                                    {{-- <option value="4">Agenda</option> --}}
                                </select>
                            </div>

                        </div>
                    </div>


                    <div id="champ" class="col-md-12">
                        <div class="row">

                            <div class="col-md-6" id="prix">
                                <label class="text-primary h5">Prix</label>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <input type="number" id="" class="form-control" name="prix" placeholder="Prix de l'element"> @if( $errors->has('nom'))
                                        <p class="text-danger">{{ $errors->first('nom') }}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-md-6">
                                <label class="text-primary h5">Quartier</label>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <input type="text" id="" class="form-control" name="quartier"  placeholder="Quartier de l'element"> @if( $errors->has('nom'))
                                        <p class="text-danger">{{ $errors->first('nom') }}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>



                    {{-- <div class="col-md-12" id="dateview">
                        <label class="text-primary h5">Date de l'évènement</label>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <input type="date" id="" class="form-control" name="date" required> @if( $errors->has('date'))
                                <p class="text-danger">{{ $errors->first('date') }}</p>
                                @endif
                            </div>
                        </div>
                    </div> --}}



                    <div class="col-md-12">
                        <label class="text-primary h5">Description de l'élément</label>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <textarea name="description" id="" rows="2" class="form-control" placeholder="Description de l'élément" required></textarea> @if( $errors->has('nom'))
                                <p class="text-danger">{{ $errors->first('nom') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>


                    <div class="form-group col-md-12">
                        <label for="" class="text-primary h5">Photos </label>
                    </div>

                    <div class="form-group col-md-12">
                        <div class="custom-file">
                            <input type="file" id="file" class="custom-file-input" name="image" multiple required>
                            <label class="custom-file-label" for="customFile">Choisire une image</label>
                        </div>
                    </div>

                    <div class="form-group col-md-12" id="prev" style="text-align: center">
                    </div>




                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary btn-block">Envoyer</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection @section('script')

<script>
    // $(document).ready(function() {
    //     $('#dateview').hide()
    //     $("select").change(function() {
    //         var va = ""
    //         $("select option:selected").each(function() {
    //             va += $(this).text()
    //         })
    //         if (va == "Agenda") {
    //             $('#champ').hide()
    //             $('#dateview').show()
    //         } else {
    //             $('#dateview').hide()
    //             $('#dateview').removeAttr('required')
    //             $('#champ').show()
    //         }
    //     })
    // });
</script>


<script src="{{asset('assets/js/upload.js')}}"></script>


@endsection