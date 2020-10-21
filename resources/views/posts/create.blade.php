<form action="{{route('users.store')}}" method="post">
    @csrf
    {{-- scriviamo a mano l'input --}}
    <input name="_method" type="hidden" value="POST">
    {{-- oppure usiamo blade --}}
    @method('POST')
    <select name="" id="">
        @foreach($users as $user)
        <option value="{{$user->id}}">{{$user->id}}</option>
        @endforeach
    </select>
    <label for="title">Nome</label>
    <input type="text" name="name" placeholder="Nome">
    <label for="content">Testo</label>
    <input type="text" name="lastname" placeholder="Cognome">
    <input type="submit" value="Invia">
</form>