@extends('layouts.default')
@section('content')
<div class="container">
    <h2 class="m-3 text-muted">Réservation</h2>
    <div>Nom de la chambre: {{ $name }}</div>
    <div class=" justify-content-center">
    <form action="{{ url('bedroom')}}/{{$name}}/booking/validate" method="post">
        {{ csrf_field() }}
         <label name="date_arrivals">Date d'arrivée</label>
         <input type="date" name="date_arrivals"> 
         <label name="date_departure">Date de départ</label>
         <input type="date" name="date_departure"> 
         <label name="customer">Client</label>
         <select name="customer">
            @foreach($customers as $customer)
                <option id="{{$customer->id}}"> {{ $customer->first_name }} {{ $customer->last_name }} </opion>
            @endforeach
         </select>
         <label name="status">Status</label>
         <select name="status">
            @foreach($status as $value)
             <option id="{{$value->id}}">{{ $value->booking_status}}</option>
            @endforeach
        </select>
        <input type="submit" value="valider">
    </form>
    </div>
</div>
@stop