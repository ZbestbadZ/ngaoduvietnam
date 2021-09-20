@section('custome_style')
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection
<div class="topbar">
    <div class="left-content">
        <h4>NgaoDuVietNam</h4>
    </div>

    <div class="right-content">
        @guest
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" v-pre>
                    <em class="fa fa-user"></em>

                    {{ auth()->guard('admin')->user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a href="{{ route('admin.editAccount') }}" class="dropdown-item"><em class="fas fa-user-cog"></em>{{ __('Account Setting') }}</a>
                    <a class="dropdown-item" href="{{ route('adminLogout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        <em class="fas fa-sign-out-alt"></em>
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('adminLogout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
        @endguest
    </div>
</div>
