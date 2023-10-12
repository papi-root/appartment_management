@extends('layouts.navigation')
 
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Proprietaires</div>
            <div class="card-body">
                
                <a class="btn btn-primary" href="{{ route('proprietaires.create') }}">Nouveau Proprietaire</a>
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>
    @vite('resources/js/app.js')
@endsection
 
@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush