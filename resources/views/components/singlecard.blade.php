<div>

    <div class="card">
        <img src="{{ $image }}" class="single-card" alt="{{ $title }}">
        <div class="card-body">
            {{-- Il metodo strtoupper() restituisce tutti i caratteri convertiti in uppercase (maiuscolo): --}}
            <h5 class="card-title mb-3">{{ strtoupper($title) }}</h5>
            <div class="mb-3">
                <span style="color: white;">{{ strtoupper($series) }}</span>
                <span style="color: white;"> <strong>- Price:</strong> {{ strtoupper($price) }}</span>
            </div>
            <p style="color: white;"><strong>{{ "Artists: " . $artists }}</strong></p>
            <p style="color: white;"><strong>{{ "Writers: " . $writers }}</strong></p>
            <p style="color: white;" class="mt-5"><strong>DESCRIPTION:</strong></p>
            <p style="color: white;">{{ $description }}</p>
        </div>
    </div>

</div>
