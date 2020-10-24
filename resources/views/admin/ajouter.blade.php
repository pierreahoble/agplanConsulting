@extends('layout.base')








@section('contenu')

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
            <form action="{{url('ajouter-un-appartement')}}" method="post" class="form-group"
                enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-md-6">
                        <label class="text-primary h5">Nom de l'élément</label>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <input type="text" id="" class="form-control" name="nom" required
                                    value="" placeholder="Nom de l'element">
                                @if( $errors->has('nom'))
                                <p class="text-danger">{{ $errors->first('nom') }}</p>
                                @endif
                            </div>
                        </div>
                     </div>


                    <div class="col-md-6">
                        <label class="text-primary h5">Informations Générales </label>
                        <div class="row">
                            <div class="form-group col-md-12" id="colprix">
                                <select name="paiement" class="form-control" required id="paiement" required>
                                    <option value="null"> Choisir un type *</option>
                                    <option value="Par mois">En vente </option>
                                    <option value="Par AN">En Location</option>
                                    <option value="Par Semaines">En Construction</option>
                                </select>
                            </div>
                            
                        </div>
                    </div>

                    <div class="col-md-12">
                        <label class="text-primary h5">Description de l'élément</label>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <textarea name="description" id="" rows="3" class="form-control"></textarea>
                                @if( $errors->has('nom'))
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
                            <input type="file"  id="file" class="custom-file-input" name="images[]" multiple>
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


@endsection


@section('script')

<script src="{{asset('assets/js/upload.js')}}"></script>
    
@endsection