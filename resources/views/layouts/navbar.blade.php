@section('content')
    <nav class="navbar navbar-expand-lg bg-body-tertiary  ">
        <div class="container-fluid ">
            <nav class="navbar bg-body-tertiary">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="{{ url('/skyline-taxi-high-resolution-logo-white-on-transparent-background.png') }}"
                            alt="Bootstrap" height="40">
                    </a>
                </div>
            </nav> <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mx-3 mb-2 mb-lg-0">
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li> --}}
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('profile.edit') }}">{{ __('Profile') }}</a></li>
                            <li>

                                @if (Auth::user()->is_admin)
                                    <a class="dropdown-item" href="{{ route('admin.index') }}"
                                        active="request() - > routeIs('admin.index')">
                                        {{ __('Admin Dashboard') }}
                                    </a>
                            </li>
                            @endif
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                        this.closest('form').submit();">@csrf
                                    {{ __('Log Out') }}
                                </a></li>
                        </ul>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active" aria-current="page"
                            href="{{ route('dashboard') }}">{{ __('Home') }}</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link disabled" hidden="hidden">Disabled</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
@endsection
