@extends('layouts.navigation')
 
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Bien</div>
            <div class="card-body">
                
                <a class="btn btn-primary" href="{{ route('bien.create') }}">Nouveau Bien</a>
        
            </div>
        </div>
    </div>
@endsection
 