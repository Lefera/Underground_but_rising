<x-app-layout>

    <!-- HERO -->
    <section class="hero">
        <h1>Découvrez les artistes <span>Underground & Rising</span></h1>
        <p>La plateforme qui met en lumière les talents cachés.</p>
        <a class="btn" href="{{ route('front.artistes.index') }}">Explorer les artistes</a>
    </section>

    <!-- ARTISTES POPULAIRES -->
    <section class="block">

        <h2>Artistes à la une</h2>

        <div class="featured-grid">
            
            @foreach($featured as $artiste)
            <div class="featured-card">
                    <img src="{{ asset('assets/artistes/' . $artiste->photo) }}" alt="{{ $artiste->nom }}">
                    <h3>{{ $artiste->nom }}</h3>
                    <p>{{ $artiste->genres }}</p>
                    <a class="link" href="{{ route('front.artistes.show', $artiste->id) }}">
    Voir l’artiste →
</a>
            </div>
            @endforeach
        
        </div>
            
       
    </section>

    <!-- NOUVEAUX ALBUMS -->
    <section class="block">
        <h2>Nouveaux albums</h2>

        <div class="grid-4">
            @foreach($albums as $album)
                <div class="card">
                    <img src="{{ asset($album->cover) }}" alt="album">
                    <h3>{{ $album->titre }}</h3>
                    <a class="link" href="{{ route('front.albums.show', $album->id) }}">
                        Voir l’album →
                    </a>
                </div>
            @endforeach
        </div>
    </section>

    <!-- CLIPS VIDÉOS -->
    <section class="block">
        <h2>Clips populaires</h2>

        <div class="grid-4">
            @foreach($videos as $video)
                <div class="video-card">
                    <iframe 
                        src="https://www.youtube.com/embed/{{ $video->video_url }}" 
                        allowfullscreen>
                    </iframe>
                </div>
            @endforeach
        </div>
    </section>

    <!-- CATÉGORIES MUSICALES -->
    <section class="block">
        <h2>Catégories musicales</h2>

        <div class="tags">
            @foreach($categories as $cat)
                <span class="tag">{{ $cat }}</span>
            @endforeach
        </div>
    </section>

    <!-- CTA FINAL -->
    <section class="footer-cta">
        <h2>Rejoignez la communauté</h2>
        <p>Abonnez-vous et soutenez les artistes underground</p><br>
        <a class="btn" href="{{ route('register') }}">S'inscrire maintenant</a>
    </section>

</x-app-layout>
