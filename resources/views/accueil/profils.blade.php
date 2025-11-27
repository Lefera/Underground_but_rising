<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Artiste</title>
    <link rel="stylesheet" href="artiste.css">
</head>
<body>

<div class="profile-container">

    <!-- Cover -->
    <div class="cover-photo">
        <img src="img/cover.jpg" alt="Cover">
    </div>

    <!-- Header artiste -->
    <div class="artist-header">
        <img src="img/profil.jpg" class="artist-avatar" alt="Artiste">

        <div class="artist-info">
            <h1>Artiste</h1>
            <p class="tags">Afro, Rap, RnB</p>
            <p class="location">Paris, France</p>

            <div class="socials">
                <a href="#"><img src="img/icon-fb.svg"></a>
                <a href="#"><img src="img/icon-ig.svg"></a>
                <a href="#"><img src="img/icon-yt.svg"></a>
            </div>
        </div>

        <button class="btn-follow">S’abonner</button>
    </div>

    <!-- BIO -->
    <section class="section">
        <h2>Biographie</h2>
        <div class="bio-block">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>

            <img src="img/bio.jpg" class="bio-photo">
        </div>

        <button class="btn-more">Lire plus</button>
    </section>

    <!-- Clips vidéos -->
    <section class="section">
        <h2>Clips vidéo</h2>

        <div class="video-grid">
            <div class="video-card">
                <img src="img/clip1.jpg" class="video-thumbnail">
                <div class="play-btn">▶</div>
                <p class="video-title">Titre du clip</p>
            </div>

            <div class="video-card">
                <img src="img/clip2.jpg" class="video-thumbnail">
                <div class="play-btn">▶</div>
                <p class="video-title">Titre du clip</p>
            </div>

            <div class="video-card">
                <img src="img/clip3.jpg" class="video-thumbnail">
                <div class="play-btn">▶</div>
                <p class="video-title">Titre du clip</p>
            </div>
        </div>
    </section>

    <!-- Discographie -->
    <section class="section">
        <h2>Discographie</h2>

        <div class="discography-grid">
            <div class="disc-item">
                <img src="img/album1.jpg">
                <p class="disc-title">Album 1</p>
                <span class="disc-year">2022</span>
            </div>

            <div class="disc-item">
                <img src="img/single1.jpg">
                <p class="disc-title">Single 1</p>
                <span class="disc-year">2022</span>
            </div>

            <div class="disc-item">
                <img src="img/single2.jpg">
                <p class="disc-title">Aucune</p>
                <span class="disc-year">2023</span>
            </div>
        </div>
    </section>

    <!-- Galerie Photos -->
    <section class="section">
        <div class="title-row">
            <h2>Galerie photos</h2>
            <a class="view-all" href="#">Toutes les photos</a>
        </div>

        <div class="gallery-grid">
            <img src="img/g1.jpg">
            <img src="img/g2.jpg">
            <img src="img/g3.jpg">
        </div>
    </section>

</div>

</body>
</html>
