@extends('layouts.app')

@section('content')

<div class="container-fluid">
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Persona</th>
        <th scope="col">Orden</th>
        <th scope="col">Variacion</th>
        <th scope="col">Sede</th>
        <th scope="col">Horario</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($orders as $order)        
      <tr>
        <th scope="row">{{$order->id}}</th>
        <td>{{$order->user['name']}}</td>
        <td>{{$order->plate['name']}}</td>
        <td>{{$order->variation}}</td>
        <td>{{$order->location}}</td>
        <td>{{$order->time}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection