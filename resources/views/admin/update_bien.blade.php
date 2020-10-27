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
            <form action="{{url('modifier_bien')}}" method="post" class="form-group"
                enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <input type="hidden" name="id" value="{{$bien->id}}">

                    <div class="col-md-6">
                        <label class="text-primary h5">Nom de l'élément</label>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <input type="text" id="" class="form-control" name="nom" required
                            value="{{$bien->nom}}" placeholder="Nom de l'element">
                                @if( $errors->has('nom'))
                                <p class="text-danger">{{ $errors->first('nom') }}</p>
                                @endif
                            </div>
                        </div>
                     </div>


                    <div class="col-md-6">
                        <label class="text-primary h5">Type de l'élément</label>
                        <div class="row">
                            <div class="form-group col-md-12" id="colprix">
                                <select name="type" class="form-control" required>
                                    <option> Choisir un type *</option>
                                    <option value="1">En vente </option>
                                    <option value="2">En Location</option>
                                    <option value="3">En Construction</option>
                                </select>
                            </div>
                            
                        </div>
                    </div>




                    <div class="col-md-6">
                        <label class="text-primary h5">Prix</label>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <input type="number" id="" class="form-control" name="prix" required
                                    value="{{$bien->prix}}" placeholder="Prix de l'element">
                                @if( $errors->has('nom'))
                                <p class="text-danger">{{ $errors->first('nom') }}</p>
                                @endif
                            </div>
                        </div>
                     </div>

                     <div class="col-md-6">
                        <label class="text-primary h5">Quartier</label>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" name="quartier" required
                                        value="{{$bien->quartier}}"       placeholder="Quartier de l'element">
                                @if( $errors->has('nom'))
                                <p class="text-danger">{{ $errors->first('nom') }}</p>
                                @endif
                            </div>
                        </div>
                     </div>


                    <div class="col-md-12">
                        <label class="text-primary h5">Description de l'élément</label>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <textarea name="description" id="" rows="2" class="form-control" placeholder="Description de l'élément" required>{{$bien->description}}</textarea>
                                @if( $errors->has('nom'))
                                <p class="text-danger">{{ $errors->first('nom') }}</p>
                                @endif
                            </div>
                        </div>
                     </div>


                    {{-- <div class="form-group col-md-12">
                        <label for="" class="text-primary h5">Photos </label>
                    </div>

                    <div class="form-group col-md-12">
                        <div class="custom-file">
                            <input type="file"  id="file" class="custom-file-input" name="image" multiple required>
                            <label class="custom-file-label" for="customFile">Choisire une image</label>
                        </div>
                    </div>

                    <div class="form-group col-md-12" id="prev" style="text-align: center">
                    </div> --}}




                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary btn-block">Modifier</button>
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