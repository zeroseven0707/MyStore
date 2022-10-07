<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
        My Store
      </a></div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="nav-item {{ Request::is('dashboard') ? 'active': '' }}  ">
          <a class="nav-link" href="{{ url('dashboard') }}">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
          </a>
        </li>  
        <li class="nav-item {{ Request::is('categories') ? 'active': '' }}">
          <a class="nav-link" href="{{ url('categories') }}">
            <i class="material-icons">category</i>
            <p>categories</p>
          </a>
        </li>
        <li class="nav-item {{ Request::is('add-category') ? 'active': '' }}">
            <a class="nav-link" href="{{ url('add-category') }}">
              <i class="material-icons">category</i>
              <p>Add Category</p>
            </a>
          </li>
          <li class="nav-item {{ Request::is('products') ? 'active': '' }}">
            <a class="nav-link" href="{{ url('products') }}">
              <i class="material-icons">book</i>
              <p>Product</p>
            </a>
          </li>
          <li class="nav-item {{ Request::is('add-product') ? 'active': '' }}">
            <a class="nav-link" href="{{ url('add-product') }}">
              <i class="material-icons">book</i>
              <p>Add Product</p>
            </a>
          </li>
        <li class="nav-item {{ Request::is('user') ? 'active': '' }}">
          <a class="nav-link" href="{{ route('tablelist') }}">
            <i class="material-icons">person</i>
            <p>User</p>
          </a>
        </li>
      </ul>
    </div>
  </div>