<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Konferencijų sistema')</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <div class="container">

          <a href="{{ route('home') }}" class="navbar-brand">
              <span class="brand-text font-weight-light">Conference System</span>
          </a>

          <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                @auth
                    @if(auth()->user()->role === 'client')
                        <li class="nav-item">
                            <a class="btn btn-outline-primary btn-sm"
                            href="{{ route('client.conferences.index') }}">
                                {{ __('messages.client_subsystem') }}
                            </a>
                        </li>
                    @endif

                    @if(auth()->user()->role === 'employee')
                        <li class="nav-item">
                            <a class="btn btn-outline-warning btn-sm"
                            href="{{ route('employee.conferences.index') }}">
                                {{ __('messages.employee_subsystem') }}
                            </a>
                        </li>
                    @endif

                    @if(auth()->user()->role === 'admin')
                        <li class="nav-item">
                            <a class="btn btn-outline-danger btn-sm"
                            href="{{ route('admin.dashboard') }}">
                                {{ __('messages.admin_subsystem') }}
                            </a>
                        </li>
                    @endif
                @endauth

            </ul>


          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  @auth
                        <span class="navbar-text me-3">
                            {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}
                        </span>

                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-danger">
                                {{ __('messages.logout') }}
                            </button>
                        </form>
                    @endauth


                    @guest
                        <a class="btn btn-outline-primary me-2" href="{{ route('login') }}">{{ __('messages.login') }}</a>
                        <a class="btn btn-primary" href="{{ route('register') }}">{{ __('messages.register') }}</a>
                    @endguest
              </li>
          </ul>

      </div>
  </nav>

  <div class="content-wrapper">
      <div class="content">
          <div class="container pt-4">

              @yield('content')

          </div>
      </div>
  </div>

  <footer class="main-footer text-center">
      <strong>Conference System © {{ date('Y') }}</strong>
  </footer>

</div>
</body>
</html>
