@extends('layouts.app')
@section('content')
<h2>Dettaglio Utente</h2>
<ul>
    <li>{{$user->name}}</li>
    <li>{{$user->email}}</li>
    <li> {{$user->avatar->telefono}}</li> 
    <!-- //grazie alla relazione posso accedere direttamente alla tabella avatar -->
</ul>
<form action="{{route('users.destroy', $user->id)}}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" value="Cancella Utente">
</form>
<h3>Post che ha scritto</h3>
@foreach($user->posts as $post)
    <div>
        <h4>{{$post->title}}</h4>
        <p>{{$post->body}}</p>
    </div>
@endforeach
@endsection