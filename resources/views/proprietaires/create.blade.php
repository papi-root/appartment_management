@extends('layouts.navigation')
 
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header"><h1> Proprietaires </h1></div>
            <div class="card-body">
            <form action="{{ route('proprietaires.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('nom_complet') ? 'has-error' : '' }}">
                <label for="first_name">Nom Complet <span class="text-danger">*</span></label>
                <input type="text" id="nom_complet" name="nom_complet" class="form-control" value="{{ old('nom_complet') }}" >
                @if($errors->has('nom_complet'))
                    <p class="help-block text-danger">
                        {{ $errors->first('nom_complet') }}
                    </p>
                @endif
           
            </div>
            <br/> 
            <div class="form-group {{ $errors->has('adresse') ? 'has-error' : '' }}">
                <label for="last_name">Adresse </label>
                <input type="text" id="adresse" name="adresse" class="form-control" value="{{ old('adresse') }}">
                @if($errors->has('adresse'))
                    <p class="help-block">
                        {{ $errors->first('adresse') }}
                    </p>
                @endif
            </div>
            <br/> 
            <div class="form-group {{ $errors->has('telephone') ? 'has-error' : '' }}">
                <label for="last_name">Telephone <span class="text-danger">*</span></label>
                <input type="text" id="telephone" name="telephone" class="form-control" value="{{ old('telephone') }}">
                @if($errors->has('telephone'))
                    <p class="help-block text-danger">
                        {{ $errors->first('telephone') }}
                    </p>
                @endif
            </div>

            <br/> 
            <div class="form-group {{ $errors->has('adresse') ? 'has-error' : '' }}">
                <label for="last_name">Email</label>
                <input type="text" id="email" name="email" class="form-control" value="{{ old('email') }}">
            </div>

            <br/> 
            <div class="form-group {{ $errors->has('adresse') ? 'has-error' : '' }}">
                <label for="last_name">NINEA</label>
                <input type="text" id="ninea" name="ninea" class="form-control" value="{{ old('ninea') }}">
            </div>

            <br />
            <div class="form-group {{ $errors->has('adresse') ? 'has-error' : '' }}">
                <label for="last_name">NIC</label>
                <input type="text" id="nic" name="nic" class="form-control" value="{{ old('nic') }}">
            </div>

            <br /> 

            <div class="form-group {{ $errors->has('adresse') ? 'has-error' : '' }}">
                <label for="last_name">Banque</label>
                <input type="text" id="banque" name="banque" class="form-control" value="{{ old('banque') }}">
            </div>
        
            <br /> 

            <div class="form-group {{ $errors->has('adresse') ? 'has-error' : '' }}">
                <label for="last_name">Numero de Compte Bancaire</label>
                <input type="text" id="numero_compte_bancaire" name="numero_compte_bancaire" class="form-control" value="{{ old('numero_compte_bancaire') }}">
            </div>
        
            <br /> 

            <div class="form-group {{ $errors->has('statut') ? 'has-error' : '' }}">
                <label for="first_name">Statut</label>
                <select class="form-control" name="statut"> 
                    <option value="1">Proprietaire</option>
                    <option value="2">Gerant et Proprietaire</option> 
                    <option value="3"> Ancien Collaborateur</option>
                <select>  
             
            </div>
            <br />

            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                <label for="email">Note</label>
                <textarea  name="note" class="form-control" rows="8" cols="8"> </textarea> 
                @if($errors->has('email'))
                    <p class="help-block">
                        {{ $errors->first('email') }}
                    </p>
                @endif
                <p class="helper-block">
                   
                </p>
            </div>
            <div class="text-center">
                <input class="btn btn-primary" type="submit" value="Enregistrer">
            </div>
        </form>
            </div>
        </div>
    </div>
@endsection
 