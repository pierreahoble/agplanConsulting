@extends('layout.base')








@section('contenu')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Ajouter des informations pour une élément</h1>
</div>


 <!-- DataTales Example -->
 <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark">Formulaire</h6>
    </div>
    <div class="card-body">
        <div class="col-md-12">
            <form action="{{url('ajouter_une_page')}}" method="post" class="form-group"
                enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-md-12">
                        <label class="text-primary h5">Titre de l'élément</label>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <input type="text" id="" class="form-control" name="titre" required
                                    value="" placeholder="Titre de l'élément">
                                @if( $errors->has('titre'))
                                <p class="text-danger">{{ $errors->first('titre') }}</p>
                                @endif
                            </div>
                        </div>
                     </div>


                    <div class="col-md-12">
                        <label class="text-primary h5">Type de l'élément</label>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <select name="type" class="form-control" required>
                                    <option value="">Choisir l'élément</option>
                                    <option value="1">Conseil</option>
                                    <option value="2">Etude</option>
                                    <option value="3">Coaching</option>
                                    <option value="4">Audit</option>
                                    <option value="5">Consignation</option>
                                    <option value="6">Transport</option>
                                    <option value="7">Répresentation</option>
                                    <option value="8">Entreposage</option>
                                    <option value="9">Faire Gerer</option>
                                    <option value="10">Association</option>
                                    <option value="11">Partenaires</option>
                                </select>
                                @if( $errors->has('type'))
                                <p class="text-danger">{{ $errors->first('type') }}</p>
                                @endif
                            </div>
                        </div>
                     </div>

                    <div class="col-md-12">
                        <label class="text-primary h5">Description de l'élément</label>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <textarea name="description" id="" rows="2" class="form-control" placeholder="Description de l'élément" required></textarea>
                                @if( $errors->has('description'))
                                <p class="text-danger">{{ $errors->first('description') }}</p>
                                @endif
                            </div>
                        </div>
                     </div>


                    <div class="form-group col-md-12">
                        <label for="" class="text-primary h5">Photos de l'élément </label>
                    </div>

                    <div class="form-group col-md-12">
                        <div class="custom-file">
                            <input type="file"  id="file" class="custom-file-input" name="image" multiple required>
                            <label class="custom-file-label" for="customFile">Choisire une image</label>
                        </div>
                    </div>

                    <div class="form-group col-md-12" id="prev" style="text-align: center">
                    </div>




                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary btn-block">Enrégistré</button>
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