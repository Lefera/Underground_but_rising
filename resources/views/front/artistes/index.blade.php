<x-app-layout>
<div class="page-wrapper">

    <section class="section">
        <h1 class="section-title">Tous les artistes</h1>

        <div class="grid-4">
            @forelse($artistes as $artiste)
                <div class="card artiste-card">
                    
                    <img class="artiste-photo"
                         src="{{ asset('assets/artistes/' . $artiste->photo) }}"
                         alt="{{ $artiste->nom }}">

                    <div class="card-content">
                        <h3 class="artiste-name">{{ $artiste->nom }}</h3>

                        @if($artiste->featured)
                            <span class="badge-gold">À la une</span>
                        @endif

                        <a href="{{ route('front.artistes.show', $artiste->id) }}" class="btn-gold">
                            Voir profil
                        </a>
                    </div>
                </div>
            @empty
                <p>Aucun artiste enregistré.</p>
            @endforelse
        </div>

        {{-- Pagination Laravel Breeze --}}
        <div class="pagination-wrapper">
           
        </div>
    </section>

</div>
</x-app-layout>
