


<x-app-layout>




<div class="page-artistes">

    <h1 class="titre-page">Artistes</h1>

    <div class="artistes-grid">
        @foreach ($artistes as $artiste)
            <div class="artiste-card">

                <img src="{{ asset($artiste->image) }}" 
                     class="artiste-photo" 
                     alt="{{ $artiste->nom }}">

                <h3 class="artiste-nom">{{ $artiste->nom }}</h3>

                <p class="artiste-style">{{ $artiste->categorie->nom ?? 'Non défini' }}</p>

                <a href="{{ route('artistes.show', $artiste->id) }}" class="btn-profil">
                    Voir le profil
                </a>
            </div>
        @endforeach
    </div>

</div>


</x-app-layout>

