 <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>

          </ul>
        </form>
        <ul class="navbar-nav navbar-right">

          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="https://ui-avatars.com/api/?name=@if(Auth::guard('admin')->user()) {{ \Illuminate\Support\Facades\Auth::guard('admin')->user()->name }} @endif" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi,@if(Auth::guard('admin')->user()) {{ \Illuminate\Support\Facades\Auth::guard('admin')->user()->name }} @endif</div></a>
            <div class="dropdown-menu dropdown-menu-right">
{{--              @if(Auth::user()->role_id == 3)--}}
{{--               @if(Auth::user()->status == 1)--}}
{{--               <a href="{{ route('seller.seller.settings') }}" class="dropdown-item has-icon">--}}
{{--                <i class="far fa-user"></i> {{ __('Profile Settings') }}--}}
{{--               </a>--}}
{{--               @else--}}
{{--               <a href="{{ route('merchant.profile.settings') }}" class="dropdown-item has-icon">--}}
{{--                <i class="far fa-user"></i> {{ __('Profile Settings') }}--}}
{{--               </a>--}}
{{--               @endif--}}
{{--              @else--}}
                @if(Auth::guard('admin')->user())
              <a href="{{ route('admin.profile.settings') }}" class="dropdown-item has-icon">
                <i class="far fa-user"></i> {{ __('Profile Settings') }}
              </a>
{{--                @endif--}}

              @endif


              <div class="dropdown-divider"></div>
              <a href="{{ route('admin.logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();" class="dropdown-item has-icon text-danger">
              <i class="fas fa-sign-out-alt"></i>  {{ __('Logout') }}
            </a>



            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="none">
              @csrf
            </form>
          </div>
        </li>
      </ul>
    </nav>
