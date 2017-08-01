        <header>

            @include('layouts.partials.top')
            @include('layouts.partials.nav')

        </header>

        @if(Auth::guest())
            @include('layouts.partials.login_modal')
        @endif