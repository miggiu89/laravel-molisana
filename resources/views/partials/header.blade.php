<header>
    <div id="logo">
        <img src="{{ asset('img/logo.png')}}" alt="logo la molisana">
    </div>

    <div class="main-menu">
        <nav>
            <ul>
                <li>
                    <a href="{{route('pagina-home')}}">
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{route('pagina-prodotti')}}">
                        Prodotti
                    </a>
                </li>
                <li>
                    <a href="{{route('pagina-news')}}">
                        News 
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>