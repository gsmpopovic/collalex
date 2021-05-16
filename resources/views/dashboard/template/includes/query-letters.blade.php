<div class="row">
    <nav aria-label="alphabet" class="navbar navbar-expand-sm">
        <ul class="pagination justify-content-center">

            @foreach (['a', 'b', 'k', 'd', 'g', 'h', 'i', 'l', 'm', 'n', 'p', 'r', 's', 't', 'u', 'w', 'y'] as $item)
                <div class="">

                    <li class="page-item d-inline-block"><a class="page-link query_leters" value="{{ $item }}"
                            href="{{ route('lexicon_query_letter', $item) }}">{{ $item }}<a></li>

                </div>
            @endforeach
        </ul>
    </nav>
</div>
