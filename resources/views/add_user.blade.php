@extends ('sommaire')
@section('contenu1')
    <div id="contenu">
        <h2>Ajouter un utilisateur</h2>
        <form action="{{ route('chemin_listeFrais') }}" method="post">
    {{ csrf_field() }}
        </form>
        @endsection