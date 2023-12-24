<nav class="sb-topnav navbar navbar-expand navbar-dark" style="background: linear-gradient(to right, #343a40, #6c757d);">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">ScholarLink</a>
            <!-- Sidebar Toggle-->

            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>

                </div>

            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">

            <!-- log in-->
 
            <a href="{{route('admin.login')}}" class="btn btn-info">Log in</a>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li > <a href="{{route('admin.logout')}} " class="dropdown-item" >Log out</a></li>
                    </ul>
                </li>
            </ul>
        </nav>