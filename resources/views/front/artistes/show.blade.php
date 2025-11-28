<x-layout-app>
<div class="page-wrapper">

    {{-- HEADER ARTISTE --}}
    <section class="section artiste-header">
        <div class="artiste-header-grid">

            <div class="left">
                <img class="artiste-profile-photo"
                     src="{{ asset('assets/artistes/' . $artiste->photo) }}"
                     alt="{{ $artiste->nom }}">
            </div>

            <div class="right">
                <h1 class="artiste-name-big">{{ $artiste->nom }}</h1>

                @if($artiste->featured)
                    <span class="badge-gold">Artiste à la une</span>
                @endif

                <p class="artiste-bio">
                    {{ $artiste->bio ?? 'Aucune biographie disponible.' }}
                </p>

                {{-- Réseaux sociaux --}}
                <div class="social-links">
                    @if($artiste->facebook)
                        <a href="{{ $artiste->facebook }}" target="_blank">Facebook</a>
                    @endif
                    @if($artiste->instagram)
                        <a href="{{ $artiste->instagram }}" target="_blank">Instagram</a>
                    @endif
                    @if($artiste->youtube)
                        <a href="{{ $artiste->youtube }}" target="_blank">YouTube</a>
                    @endif
                </div>
            </div>

        </div>
    </section>


    {{-- ALBUMS --}}
    <section class="section">
        <h2 class="section-title">Albums</h2>

        <div class="grid-4">
            @forelse($artiste->albums as $album)
                <div class="card album-card">
                    <img src="{{ asset('assets/albums/' . $album->cover) }}" class="album-cover">

                    <div class="card-content">
                        <h3 class="album-title">{{ $album->titre }}</h3>
                        <p class="album-year">{{ $album->annee ?? '' }}</p>

                        <a href="{{ route('albums.show', $album->id) }}" class="btn-gold">
                            Voir album
                        </a>
                    </div>
                </div>
            @empty
                <p>Aucun album pour cet artiste.</p>
            @endforelse
        </div>
    </section>


    {{-- CLIPS --}}
    <section class="section">
        <h2 class="section-title">Clips vidéos</h2>

        <div class="grid-3">
            @forelse($artiste->musiques as $musique)
                @if($musique->youtube_url)
                    <div class="card clip-card">

                        <div class="clip-thumb">
                            <iframe src="https://www.youtube.com/embed/{{ $musique->youtube_url }}"
                                    allowfullscreen></iframe>
                        </div>

                        <div class="card-content">
                            <h3 class="clip-title">{{ $musique->titre }}</h3>
                        </div>
                    </div>
                @endif
            @empty
                <p>Aucun clip pour cet artiste.</p>
            @endforelse
        </div>
    </section>

</div>
</x-layout-app>
