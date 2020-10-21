@extends('layouts.app')
@section('content')
@if (session('status'))
    <div class="alert alert-success">
       Cancellato profilo numero: {{session('status')}}
    </div>
@endif
<h2>Elenco utenti</h2>
@foreach($users as $user)
<ul>
    <li>{{$user->name}}</li>
    <li>{{$user->email}}</li>
    <li> <a href="{{route('users.show', $user->id)}}">Dettagli</a></li> 
    <!-- //grazie alla relazione posso accedere direttamente alla tabella avatar -->
</ul>
@endforeach
@endsection