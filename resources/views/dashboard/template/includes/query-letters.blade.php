<div class="row">
    <nav aria-label="alphabet" class="navbar navbar-expand-sm">
        <ul class="pagination justify-content-center">
           {{-- ['a', 'b', 'k', 'd', 'g', 'h', 'i', 'l', 'm'. 'n', 'p', 'r', 's', 't'. 'u', 'w', 'y'] --}}
            {{-- <li class="page-item disabled"><a class="page-link query_leters" href="#" tabindex="-1">FILTER</a></li> --}}
            {{-- <li class="page-item"><a class="page-link query_leters" href="?limit=50">LIMIT 50</a></li> --}}
            {{-- <li class="page-item"><button class="page-link query_leters" value="a">ALL</button></li> --}}
              {{-- 

            <form action="/query-lexicon-letters" method="POST">
              <div class="">
                 {{csrf_field()}}
                 @foreach (['a', 'b', 'k', 'd', 'g', 'h', 'i', 'l', 'm','n', 'p', 'r', 's', 't', 'u', 'w', 'y'] as $item)
                 <li class="page-item d-inline-block"><button class="page-link query_leters" type="submit" value="{{$item}}">{{$item}}</button></li>
                 @endforeach
              </div>
           </form> --}}

           @foreach (['a', 'b', 'k', 'd', 'g', 'h', 'i', 'l', 'm','n', 'p', 'r', 's', 't', 'u', 'w', 'y'] as $item)
           <div class="justify-space-between">

           <form action="/query-lexicon-letters" method="POST">
              {{-- <div class=""> --}}
                 {{csrf_field()}}
                 {{-- @foreach (['a', 'b', 'k', 'd', 'g', 'h', 'i', 'l', 'm','n', 'p', 'r', 's', 't', 'u', 'w', 'y'] as $item) --}}
                 <li class="page-item d-inline-block"><input class="page-link query_leters" name="selected" type="submit" value="{{$item}}"></li>
                 {{-- @endforeach --}}
              {{-- </div> --}}
           </form>
        </div>
           @endforeach
            {{-- <li class="page-item"><a class="page-link query_leters" href="a">a</a></li>
            <li class="page-item"><a class="page-link query_leters" href="b">b</a></li>
            <li class="page-item"><a class="page-link query_leters" href="k">k</a></li>
            <li class="page-item"><a class="page-link query_leters query_leters" href="d">d</a></li>
            <li class="page-item "><a class="page-link query_leters" href="g">g</a></li>
            <li class="page-item "><a class="page-link query_leters" href="h">h</a></li>
            <li class="page-item "><a class="page-link query_leters" href="i">i</a></li>
            <li class="page-item "><a class="page-link query_leters" href="l">l</a></li>
            <li class="page-item "><a class="page-link query_leters" href="m">m</a></li>
            <li class="page-item "><a class="page-link query_leters" href="n">n</a></li>
            <li class="page-item "><a class="page-link query_leters" href="p">p</a></li>
            <li class="page-item "><a class="page-link query_leters" href="r">r</a></li>
            <li class="page-item "><a class="page-link query_leters" href="s">s</a></li>
            <li class="page-item "><a class="page-link query_leters" href="t">t</a></li>
            <li class="page-item "><a class="page-link query_leters" href="u">u</a></li>
            <li class="page-item "><a class="page-link query_leters" href="w">w</a></li>
            <li class="page-item "><a class="page-link query_leters" href="y">y</a></li> --}}
        </ul>
    </nav>
</div>