<footer class="footer-section py-14">
    <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-10">

        <!-- LOGO -->
     <div class="logo">
    <a href="{{ route('home') }}">
        <img src="{{ asset('assets/artistes/LOGO.jpg') }}" 
             alt="Logo"
             class="logo-site"
             style="height:200px;"> <!-- Taille augmentée -->
    </a>
</div>


        <!-- LIENS -->
        <div class="flex flex-col gap-3">
            <a href="{{ route('home') }}" class="footer-link">Accueil</a>
            <a href="{{ route('front.artistes.index') }}" class="footer-link">Artistes</a>
            <a href="{{ route('front.albums.index') }}" class="footer-link">Albums</a>
            <a href="{{ route('categories.index') }}" class="footer-link">Catégories</a>
            <a href="{{ route('galerie.index') }}" class="footer-link">Galeries</a>
        </div>

        <!-- SOCIALS -->
        <div>
            <h4 class="text-yellow-500 font-semibold mb-3 text-lg">Nous suivre</h4>
            <div class="flex gap-4">
                <a class="footer-social">Facebook</a>
                <a class="footer-social">Instagram</a>
                <a class="footer-social">YouTube</a>
            </div>
        </div>

    </div>

    <div class="text-center mt-12 text-gray-400 text-xs tracking-wide">
        © {{ date('Y') }}-Projet2(Soutenance)Underground & Rising — Tous droits réservés.
    </div>
</footer>