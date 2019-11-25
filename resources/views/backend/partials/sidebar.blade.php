<nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="{{route('home')}}">
              <span data-feather="home"></span>
              Home <span class="sr-only">(current)</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ request()->is('category') ? ' active' : '' }}" href="{{route('category')}}">
              <span data-feather="file"></span>
              Categories
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ request()->is('product') ? ' active' : '' }}" href="{{route('product.list')}}">
              <span data-feather="shopping-cart"></span>
              Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
              Customers
            </a>
          </li>

        </ul>
      </div>
    </nav>
