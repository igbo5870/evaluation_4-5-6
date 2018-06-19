@extends('layouts.default')
@section('content')
<div class="container">
    <h2 class="m-3 text-muted">Réservation</h2>
    <div class=" justify-content-center">
    <form>
        @method('put')
        @csrf
         <label name="date_arrivals">Date d'arrivée</label>
         <input type="date" name="date_arrivals"> 
         <label name="date_departure">Date de départ</label>
         <input type="date" name="date_departure"> 
         <label name="customer">Client</label>
         <select name="customer">
             <option>Name 1</option>
             <option>Name 2</option>
         </select>
         <label name="status">Status</label>
         <select name="select">
             <option>Status 1</option>
             <option>Status 2</option>
        </select>
        <input type="submit" value="valider">
    </form>
    </div>
</div>
@stop