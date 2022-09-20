
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="">FBRD</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        @include('partials.search')
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="../../" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="{{route('postUser.index')}}" class="nav-link">Ajouter un post</a></li>
            </ul>
        </div>
        <div class="dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" id="deroulanta" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> {{ Auth::user()->name }}</a>
            <div class="dropdown-menu" aria-labelledby="deroulanta">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
									document.getElementById('logout-form').submit();">
                    {{ __('Se déconnecter') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</nav>
<!-- END nav -->


