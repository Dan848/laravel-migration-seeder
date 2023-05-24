<div class="container">
    <div class="row">
        @foreach ($movies as $movie)
        <a href="{{route("movie", [$movie["id"]])}}" class="col-12 col-md-4 g-5 d-flex justify-content-center">
            <div class="position-relative card-box text-white" id="{{$movie["id"]}}">
                <!-- IMAGE -->
                <img class="cover" src="{{$movie["image"]}}" alt="{{$movie["title"]}}">
                <!-- INFO BOX -->
                <div class="info-box d-flex justify-content-between p-2">
                    <!-- TITLE -->
                    <div class="h-100 d-flex flex-column justify-content-between">
                        <h5>{{ $movie["title"] }}</h5>
                        <div>Voto
                            <div class="h6">{{ $movie["vote"] }}</div>
                        </div>
                        <div>Titolo Originale
                            <div class="h6">{{ $movie["original_title"] }}</div>
                        </div>
                        <div>Anno di Uscita
                            <div class="h6">{{ substr($movie["date"], 0, 4) }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>
