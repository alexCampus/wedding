<div class="container-fluid">
    <nav class="navbar navbar-default">
        <div class="navbar-header">
            <!-- Mobile Toggle Menu Button -->
            <a href="#" class="js-qbootstrap-nav-toggle qbootstrap-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
            <a class="navbar-brand" href="{{ route('home') }}">Marilyvier</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="{{ route('home') . '#lesMaries' }}"><span>Les Mariés</span></a></li>
                <li><a href={{ route('home') . '#lesTemoins' }}><span>Les Témoins</span></a></li>

                @if (Auth::user())
                    <li><a href="{{  route('organisation') }}"><span>Organisation</span></a></li>
                    <li><a href="{{ route('forum') }}"><span>Forum</span></a></li>
                    <li><a href="{{  route('inscription') }}"><span>Inscription Participation</span></a></li>
                    <li><a href="#"><span>Photo / Vidéos</span></a></li>
                    <li><a href="#"><span>Livre d'Or</span></a></li>
                @endif

                {{--<li><a href="#"><span>Jeux</span></a></li>--}}
                @if (!Auth::user())
                    <li class="right"><a href="{{ route('login') }}"><span>Se Connecter</span></a></li>
                @else
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Se Déconnecter</a>
                    </li>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                @endif
            </ul>
        </div>
    </nav>
</div>