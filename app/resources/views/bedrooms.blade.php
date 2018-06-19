@extends('layouts.default')
@section('content')
<div class="container">
    <h2 class="m-3 text-muted">Chambres</h2>
    <div class=" justify-content-center">
    @foreach( $rooms as $value)
        <div class="card-name align-items-center  d-flex col-12 m-1"> 
            <div class=" col-12 d-flex">
                <img src="#" alt="image de la chambre">
                <div>
                    <p class="col-12 mt-2 mb-2" > Nom de la chambre: {{ $value->name }} </p>
                    @if($value->is_suite)
                        <p class="col-9 mt-2 mb-2" >Type: Suite</p>
                    @else
                        <p class="col-9 mt-2 mb-2">Type: Standard</p>
                    @endif
                    <p class="col-9 mt-2 mb-2" >Prix à la nuit: {{ $value->price }}</p>
                    @if($value->reduced_mobility_access)
                        <p class="col-9 mt-2 mb-2" >Accès mobilité réduite: Oui</p>
                    @else
                        <p class="col-9 mt-2 mb-2" >Accès mobilité réduite: Non</p>
                    @endif
                    <p class="col-9 mt-2 mb-2" >Type de lit: {{ $value->bed_type }} </p>
                </div>
            </div>
            <a class= "col-2 btn-secondary align-items-center mt-2 mb-2" href="{{ url('bedroom')}}/{{$value->name}}">Détails</a>
        </div>
    @endforeach
    </div>
</div>
@stop