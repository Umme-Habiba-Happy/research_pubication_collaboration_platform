<div class="navbar-header page-scroll">
   
    <a class="navbar-brand" ></i>ScholarLink</a>
</div>

@guest
    <a class="btn btn-info" href="{{ route('user.login') }}">Login</a>
    <a class="btn btn-info" href="{{ route('user.registration') }}">Registration</a>
@endguest

@auth
    <a class="btn btn-info" href="{{ route('user.logout') }}">Logout</a>
    <a href="{{ route('Profile') }}">{{ auth()->user()->name }}</a>
@endauth
<!-- Add the following code inside the <nav> element in your navbar partial -->

<form class="navbar-form navbar-right" action="{{ route('search') }}" method="get">
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Search for research.." name="search">
    </div>
    <button type="submit" class="btn btn-info">Search</button>
</form>


<div>
    <ul class="nav navbar-nav navbar-right">
       

        <li><a class="color_1" href="{{ route('homepage') }}">Home</a></li>
        <li><a class="color_1" href="{{ route('research') }}">Research</a></li>
        <li><a class="color_1" href="contact.html">Paper</a></li>
        <li class="dropdown">
            <a class="dropdown-toggle color_1" data-toggle="dropdown">Category<b class="caret"></b></a>
            <ul class="dropdown-menu">
                @foreach($cat as $item)
                    <li><a href="{{ route('research_under_category', $item->id) }}">{{ $item->categoryName }}</a></li>
                @endforeach
            </ul>
        </li>
    </ul>
</div>
