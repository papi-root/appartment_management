@extends('layouts.navigation')

@section('content')
<div class="card">
    <div class="card-header">
        NOUVEAU PRODUIT
    </div>

    <div class="card-body">
        <form action="{{ route("livraison.import") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('nom_complet') ? 'has-error' : '' }}">
                <label for="first_name">Fichier excel</label>
                <input type="file" id="excel" name="excel" class="form-control" value="">
                @if($errors->has('excel'))
                    <p class="help-block">
                        {{ $errors->first('excel') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.client.fields.first_name_helper') }}
                </p>
            </div>
        
            <div>
                <input class="btn btn-danger" type="submit" value="Enregistrer">
            </div>
        </form>
    </div>
</div>
@endsection 