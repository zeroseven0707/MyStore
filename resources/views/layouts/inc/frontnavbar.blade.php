<section>
    <button
      aria-controls="sidebar"
      data-bs-toggle="offcanvas"
      data-bs-target=".sidebar"
      aria-label="Button Hamburger"
      class="sidebarOffcanvas mb-5 btn p-0 border-0 d-flex d-lg-none"
    >
      <i class="fa-solid fa-bars"></i>
    </button>
    <nav class="nav-content gap-5">
      @if (Auth::check())
              <div class="d-flex gap-3 align-items-center">
                @if (!Auth::user()->image)
                <img
                  src="./assets/images/photo.webp"
                  alt="Photo Profile"
                  class="photo-profile"
                />
                @else
                <img
                src="{{ asset('storage/'.Auth::user()->image) }}"
                alt="Photo Profile"
                class="photo-profile"
              />
                @endif
                <div>
                  @if (!Auth::user()->addres or !Auth::user()->image or !Auth::user()->nohp)  
                    <p class="title-content mb-2">Welcome, {{ Auth::user()->name }} </p>
                      <p class="subtitle-content">
                          Finish your profile.
                          <a href="#" class="btn-link">Edit now</a>
                      </p>
                    @else
                    <p class="title-content mb-2">Welcome, {{ Auth::user()->name }} <span><img src="./assets/icons/ic_badge.svg" alt="Icon Badge"/></span></p>
                    @endif
                </div>
              </div>

              <div class="search-wrapper">
                <div class="search-bar flex-fill">
                  <input
                    class="form-control"
                    type="text"
                    placeholder="Search"
                  />
                </div>
                  <form action="{{ route('logout') }}" method="POST">
                   @csrf
                   <button type="submit" class="btn rounded-5 bg-primary text-white">
                    Logout
                    </button>
                  </form>
              </div>
          @else
                <div class="d-flex gap-3 align-items-center">
                  <div>
                      <p class="title-content mb-2">Welcome to MyStore</p>
                  </div>
                </div>
          
                <div class="search-wrapper">
                  <div class="search-bar flex-fill">
                    <input
                      class="form-control"
                      type="text"
                      placeholder="Search"
                    />
                  </div>
                  <a href="{{ route('login') }}">
                    <button
                      class="btn rounded-5 bg-primary text-white"
                    >
                    Login
                    </button>
                  </a>
                  </a>
                </div>

          @endif
    </nav>
  </section>