

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="navbar-header page-scroll">
        <a class="navbar-brand" href="{{ route('homepage') }}">ScholarLink</a>
    </div>

    @guest

    <a class="btn btn-info" href="{{ route('user.login') }}">Login</a>

    <a class="btn btn-info" href="{{ route('user.registration') }}">Registration</a>


    @endguest

    @auth

    <!-- <a href="{{ route('Profile') }}" class="profile-link">
                    <img src="{{ url('/uploads/', auth()->user()->image) }}" alt="Profile Image" class="profile-image">
                </a>
                <a class="btn btn-info mr-50" href="{{ route('user.logout') }}">Logout</a> -->

    <div class="dropdown">
        <a href="#" class="profile-link" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="{{ url('/uploads/', auth()->user()->image) }}" alt="Profile Image" class="profile-image">
        </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="{{ route('Profile') }}">Profile</a>
            <a class="dropdown-item" href="{{ route('user.logout') }}">Logout</a>
        </div>
    </div>



    @endauth

    <form class="navbar-form navbar-right" action="{{ route('search') }}" method="get">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search for research.." name="search">
        </div>
        <button type="submit" class="btn btn-info">Search</button>
    </form>

    <ul class="nav navbar-nav navbar-right">
        <li><a class="color_1" href="{{ route('homepage') }}">Home</a></li>
        <li><a class="color_1" href="{{ route('research') }}">Research</a></li>
        <li class="dropdown">
            <a class="dropdown-toggle color_1" data-toggle="dropdown">Category<b class="caret"></b></a>
            <ul class="dropdown-menu">
                @foreach($cat as $item)
                <li><a href="{{ route('research_under_category', $item->id) }}">{{ $item->categoryName }}</a></li>
                @endforeach
            </ul>
        </li>
    </ul>
</nav>