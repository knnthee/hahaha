<!--navbar-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
        <!--Logo-->
          <a class="navbar-brand fs-4" href="#">StayWise</a>
          <!--Toggle Btn-->
          <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!--Sidebar-->
          <div class="sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <!--Sidebar Header-->
            <div class="offcanvas-header border-bottom">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
              <button type="button" class="btn-close btn-close-white shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <!--Sidebar Body-->
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item mx-2">
                  <a class="nav-link" aria-current="page" href="{{ route("home") }}">Home</a>
                </li>
                <li class="nav-item mx-2">
                  <a class="nav-link" href="{{ route("about") }}">About</a>
                </li>
              </ul>
              <!--Login / Signup-->
              <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center gap-3">
                <a class="login" href="{{ route('login') }}" class="text-white">Login</a>
                <a href="#signup" class="text-white text-decoration-none px-3 py-1 bg-primary rounded-4">Signup</a>
              </div>
            </div>
          </div>
        </div>
      </nav>
            </div>
          </div>
        </div>
      </nav>