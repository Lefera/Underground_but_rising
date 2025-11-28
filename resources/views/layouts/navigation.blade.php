<nav class="navbar">
    <div class="container">

        <!-- LOGO -->
        <div class="logo">
    <a href="{{ route('home') }}">
        <img src="{{ asset('assets/artistes/LOGO.jpg') }}" 
             alt="Logo"
             class="logo-site"
             style="height:200px;"> <!-- Taille augmentée -->
    </a>
</div>


        <!-- MENU -->
        <ul class="menu">
            <li><a href="{{ route('home') }}">Accueil</a></li>
            <li><a href="{{ route('front.artistes.index') }}">Artistes</a></li>
            <li><a href="{{ route('front.albums.index') }}">Albums</a></li>
            <li><a href="{{ route('categories.index') }}">Catégories</a></li>
            <li><a href="{{ route('galerie.index') }}">Galeries</a></li>
        </ul>

        <!-- AUTH -->
        <div class="auth">
            @guest
                <a href="{{ route('login') }}" class="btn-login">Connexion</a>
                <a href="{{ route('register') }}" class="btn-register">Inscription</a>
            @endguest

            @auth
                <div class="dropdown">
                    <button class="dropdown-btn">
                        {{ Auth::user()->name }}
                        <span class="arrow">▼</span>
                    </button>

                    <div class="dropdown-content">
                        <a href="{{ route('profile.edit') }}">Profil</a>

                        <!-- LOGOUT -->
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="logout-btn">Déconnexion</button>
                        </form>
                    </div>
                </div>
            @endauth
        </div>

    </div>
</nav>
