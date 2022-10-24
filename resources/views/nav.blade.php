<nav class="navbar navbar-expand-lg navbar-white bg-warning mt-3">
    <div class="container">

        <a class="navbar-brand text-dark" href="{{url('/')}}">
            CheapTalk 
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                    <a class="nav-link" href="{{url('/')}}"> Home</a>
                </li>
                @if(Auth::check())
                    <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
                        <a class="nav-link" href="{{url('/dashboard')}}"> Dashboard</a>
                    </li>

                    <li class="nav-item dropdown {{ Request::is('dashboard') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             Categories
                        </a>
                        <div class="dropdown-menu bg-secondary" aria-labelledby="navbarDropdown">
                            @foreach(\App\Models\Category::list() as $key => $category)
                                <a class="dropdown-item" href="{{url('/categories/$key')}}">{{$category}}</a>
                            @endforeach
                        </div>
                    </li>

                    <li class="nav-item dropdown {{ Request::is('authors') ? 'active' : '' }}">
                        <a class="nav-link" href="{{url('/authors')}}"> Authors</a>
                    </li>

                    <li class="nav-item dropdown" style="cursor: pointer">
						<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{auth()->user()->sex =='Male' ? asset('images/avatar.png') : asset('images/female.png')}}" class="rounded-circle" alt="" style="width: 30px;"> &nbsp;{{ auth()->user()->name }}</a>

						<div class="dropdown-menu dropdown-menu-right dropdown-cyan bg-secondary" aria-labelledby="navbarDropdownMenuLink-4">
							<a class="dropdown-item" href="{{url('/authors/' . auth()->user()->id)}}"> My Posts</a>
							<a class="dropdown-item" href="{{url('/logout')}}"> Logout</a>
						</div>
					</li>

                @else
                    <li class="nav-item {{ Request::is('login') ? 'active' : '' }}">
                        <a class="nav-link" href="{{url('/login')}}">  Login</a>
                    </li>
                    <li class="nav-item {{ Request::is('register') ? 'active' : '' }}">
                        <a class="nav-link" href="{{url('/register')}}"> Register</a>
                    </li>
                @endif

            </ul>
        </div>

    </div>
</nav>
