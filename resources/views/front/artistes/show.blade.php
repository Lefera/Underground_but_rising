<x-app-layout>

    <!-- COUVERTURE -->
    <div class="relative w-full h-64 md:h-80 lg:h-96">
        <img src="{{ asset($artiste->photo_couverture ?? 'assets/default-cover.jpg') }}" 
             class="w-full h-full object-cover">
        
        <!-- FOND NOIR DÉGRADÉ -->
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
    </div>

    <!-- INFOS PRINCIPALES -->
    <div class="max-w-7xl mx-auto px-4 -mt-20 relative z-10">

        <div class="flex items-center gap-6">

            <!-- PHOTO PROFIL -->
            <img src="{{ asset($artiste->photo_profil ?? 'assets/default-artiste.jpg') }}"
                 class="w-36 h-36 rounded-full border-4 border-white shadow-xl object-cover">

            <div>
                <h1 class="text-4xl font-bold text-black">{{ $artiste->nom }}</h1>

                <p class="text-yellow-600 text-lg font-semibold">
                    {{ $artiste->genres ?? 'Genre non défini' }}
                </p>

                <p class="text-gray-600">
                    {{ $artiste->ville ?? 'Ville inconnue' }}
                </p>
            </div>

            <!-- BOUTON SABONNER -->
            <div class="ml-auto">
                <button id="abonnerBtn"
                        class="subscribe-btn">
                    S'abonner
                </button>
            </div>

        </div>

        <!-- BIOGRAPHIE -->
        <div class="mt-10">
            <h2 class="gold-title">Biographie</h2>
            <p class="text-gray-700 leading-relaxed">
                {{ $artiste->biographie ?? 'Aucune biographie disponible.' }}
            </p>
        </div>


        <!-- ALBUMS -->
        <div class="mt-14">
            <h2 class="gold-title">Albums</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">

                @foreach($artiste->albums as $album)
                    <a href="{{ route('albums.show', $album->id) }}"
                       class="block bg-white shadow-lg rounded-xl overflow-hidden hover:-translate-y-1 transition">

                        <img src="{{ asset($album->cover) }}"
                             class="w-full h-56 object-cover">

                        <div class="p-4">
                            <h3 class="font-bold text-black">{{ $album->titre }}</h3>
                            <p class="text-gray-500 text-sm">{{ $album->annee }}</p>
                        </div>

                    </a>
                @endforeach

            </div>
        </div>


        <!-- MUSIQUES -->
        <div class="mt-14">
            <h2 class="gold-title">Musiques</h2>

            <div class="space-y-3">
                @foreach($artiste->musiques as $musique)
                    <div class="flex items-center justify-between bg-white shadow p-4 rounded-lg">

                        <div>
                            <h3 class="font-semibold">{{ $musique->titre }}</h3>
                            <p class="text-gray-500 text-sm">{{ $musique->duree }}</p>
                        </div>

                        <a href="#" 
                           class="text-yellow-600 font-bold hover:underline">
                           Écouter
                        </a>
                    </div>
                @endforeach
            </div>
        </div>


        <!-- GALERIE PHOTOS -->
        <div class="mt-14">
            <h2 class="gold-title">Galerie</h2>

            <div class="flex gap-4 overflow-x-auto pb-4">

                @foreach($artiste->photos as $photo)
                    <img src="{{ asset($photo->image) }}"
                         class="w-48 h-32 rounded-lg object-cover shadow-lg hover:scale-105 transition">
                @endforeach

            </div>
        </div>

    </div>


    <!-- JS BOUTON SABONNER -->
    <script>
        document.getElementById('abonnerBtn').addEventListener('click', function () {
            fetch("{{ route('abonner.toggle', $artiste->id) }}", {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                }
            }).then(res => res.json())
              .then(data => {
                if (data.status === 'subscribed') {
                    abonnerBtn.innerText = "Abonné ✔";
                    abonnerBtn.classList.add("subscribed");
                } else {
                    abonnerBtn.innerText = "S'abonner";
                    abonnerBtn.classList.remove("subscribed");
                }
            });
        });
    </script>


    <!-- CSS -->
    <style>
        .gold-title {
            @apply text-2xl font-bold mb-4 border-b-4 border-yellow-500 inline-block pb-1;
        }

        .subscribe-btn {
            @apply bg-yellow-500 text-white px-5 py-2 rounded-lg font-semibold transition shadow-lg;
        }
        .subscribe-btn:hover {
            @apply bg-yellow-600;
        }

        .subscribe-btn.subscribed {
            @apply bg-gray-600;
        }
    </style>

</x-app-layout>
