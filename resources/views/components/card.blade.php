<div>
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->

    <div class="card">
        <a href="{{ route('single-page') }}"><img src="{{ $image }}" class="card-img-top" alt="{{ $title }}"></a>
        <div class="card-body">
            {{-- Il metodo strtoupper() restituisce tutti i caratteri convertiti in uppercase (maiuscolo): --}}
            <h5 class="card-title">{{ strtoupper($title) }}</h5>
        </div>
    </div>

</div>