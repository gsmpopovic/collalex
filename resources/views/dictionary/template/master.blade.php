<!DOCTYPE HTML>
<!--
 Future Imperfect by Pixelarity
 pixelarity.com | hello@pixelarity.com
 License: pixelarity.com/license
-->
<html>

<head>
@include("dictionary.template.includes.meta")
</head>

<body>

    <!-- Wrapper -->
    <div id="wrapper">

        @include("dictionary.template.includes.header")
        
        <!-- Main -->
        <div id="main">


            <article class="post">
                @yield("content")
            </article>
        </div>

        <!-- Sidebar -->
        @include("dictionary.template.includes.sidebar")

    </div>

    @include("dictionary.template.includes.footerscripts")
</body>

</html>
