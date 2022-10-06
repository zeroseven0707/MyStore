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
                  @if (!Auth::user()->firstname OR !Auth::user()->lastname OR !Auth::user()->addres1 OR !Auth::user()->addres2 OR !Auth::user()->city OR !Auth::user()->state OR !Auth::user()->country OR !Auth::user()->nohp)
                    <p class="title-content mb-2">Welcome, {{ Auth::user()->name }} </p>
                      <p class="subtitle-content">
                          Finish your profile.
                          <a href="{{ route('editprofile') }}" class="btn-link">Edit now</a>
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
              </div>
              <div>
                <a href="{{ route('cart') }}" class="text-decoration-none">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                  </svg>
                  <div class="text-white position-absolute bg-danger rounded-circle d-flex align-items-center" style="margin-top: -40px; margin-left:20px;font-size: 14px; width:15px; height: 15px;">
                    <p style="margin-left:3px;">{{ cart() }}</p>
                  </div>
                </a>
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
                  </a>
                </div>
                <div>
                  <a href="{{ route('cart') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                      <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                    </svg>
                  </a>
                </div>
          @endif
    </nav>
  </section>