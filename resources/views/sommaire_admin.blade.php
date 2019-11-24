@extends ('modeles/visiteur')
@section('menu')
    <!-- Division pour le sommaire -->
    <div id="menuGauche">
        <div id="infosUtil">

        </div>
        <ul id="menuList">
            <li>
                <strong>Bonjour {{ $visiteur['nom'] . ' ' . $visiteur['prenom'] }}</strong>

            </li>
            <li class="smenu">
                <a href="{{ route('chemin_gererutilisateur')}}" title="Gerer les utilisateurs">Gerer les utilisateurs</a>
            </li>
            <li class="smenu">
                <a href="{{ route('chemin_ajouterutilisateur') }}" title="Ajouter un visiteur">Ajouter un visiteur</a>
            </li>
            <li class="smenu">
                <a href="{{ route('chemin_deconnexion') }}" title="Se déconnecter">Déconnexion</a>
            </li>
        </ul>

    </div>
@endsection