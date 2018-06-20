@extends('layouts.default')
@section('content')
<div class="container">
    <h2 class="m-3 text-muted">Chambres</h2>
    <div class=" justify-content-center">
    @foreach ($rooms as $value)
        <p>Nom de la chambre: {{ $value->name }}</p>
        <p>Type de lit: {{ $value->bed_type }}</p>
        <p>Type de salle de bain: {{ $value->bathroom_type }}  </p>
        <p>Vue: {{ $value->view }}</p>
        @if($value->is_suite)
            <p>Type de chambre: Suite </p>
        @else 
            <p>Type de chambre: Chambre</p>
        @endif
        <p>Prix : {{ $value->price }}€ </p>
        @if($value->reduced_mobility_access)
            <p>Accès mobilité réduite: Oui</p>
        @else
            <p>Accès mobilité réduite: Non</p>
        @endif
        <p>Superficie: {{ $value->area}}m </p>
        <a type="button" class="btn btn-ligth"href="{{ url('bedroom')}}/{{$value->id}}/booking">Réserver</a>
        <a type="button" class="btn btn-ligth"href="{{ url('bedrooms')}}">Liste des chambres</a>
    @endforeach
    </div>

</div>
@stop