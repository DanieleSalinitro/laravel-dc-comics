<header>
    <div>
        <div class="db-container db-ds-flex">
            <div class="db-logo">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo DC">
            </div>
            <ul>
                    <li>
                        <a class="nav-link {{Route::currentRouteName() == 'home' ? 'active' : ''}}" href="{{route('home')}}">
                            Home
                        </a>
                    </li>
                    <li>
                        <a class="nav-link {{Route::currentRouteName() == 'about' ? 'active' : ''}}" href="{{route('about')}}">
                            About
                        </a>
                    </li>
                    <li>
                        <a class="nav-link {{Route::currentRouteName() == 'comics' ? 'active' : ''}}" href="{{route('comics.index')}}">
                            Comics
                        </a>
                    </li>

            </ul>
            <div class="db-input">
                <input type="search" id="search" name="search" placeholder="Search">
                <span><i class="fa-solid fa-magnifying-glass"></i></span>
            </div>
        </div>
    </div>
</header>
