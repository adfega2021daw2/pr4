@extends('disseny')

@section('content')

<h1>Llista d'empleats</h1>
<div class="mt-5">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
  <table class="table">
    <thead>
        <tr class="table-primary">
          <td># ID</td>
          <td>Nom</td>
          <td>Email</td>
          <td>Correu</td>
        </tr>
    </thead>
    <tbody>
        @foreach($usuari as $usu)
        <tr>
            <td>{{$usu->id}}</td>
            <td>{{$usu->nom}}</td>
            <td>{{$usu->cognoms}}</td>
            <td>{{$usu->correu}}</td>
            
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection