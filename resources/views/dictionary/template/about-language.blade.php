@extends("dictionary.template.master")
@section("content")
<header>
    <div class="title">
        Here&rsquo;s a random word from the dictionary!
    </div>
</header>
</article>
<article class="post">
    <header>
        <div class="title">
            <span class="headword">ang</span><sub></sub> &nbsp;&nbsp;&nbsp;<a href="#"><span class="pronunciation">[áŋ]
                    <i class="fa fa-volume-up"></i></a></span>
        </div>
        <div class="meta"><span class="badge">&nbsp; STATUS: pending &nbsp;</span>
        </div>
    </header>
    <footer>
        <table>
            <thead>
                <th></th>
                <th>
                    <h2>english</h2>
                </th>
                <th>
                    <h2>cebuano</h2>
                </th>
            </thead>
            <tr>
                <td>
                    <h1>case marker</h1>
                </td>
                <td>
                    <p>nominal case marker
                    </p>
                </td>
                <td>
                    <p>ang
                    </p>
                </td>
            </tr>
        </table>
    </footer>
</article>


</div>

<!-- Sidebar -->
<section id="sidebar">

    <!-- Intro -->
    <section id="intro">
        <header>
            <h2>Dictionary</h2>
        </header>
    </section>

    <!-- About -->
    <section class="blurb">
        <h2>SEARCH BANTAYANON WORD:</h2>
        <form method="get" action="index.php">
            <input type="hidden" value="display" name="action" />
            <div class="row uniform">
                <div>
                    <input type="text" name="q" value="" placeholder="Bantayanon word" />
                </div>
                <div>
                    <ul class="actions">
                        <li><input type="submit" value="Search" /></li>
                        <li><input type="reset" value="Reset" /></li>
                    </ul>
                </div>
            </div>
        </form>
        </ul>
    </section>
</section>
@endsection
