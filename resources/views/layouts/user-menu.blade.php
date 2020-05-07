<li class="nav-item dropdown ">
  <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false">
    <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ \Auth::user()->name }}</span>
    {{-- <img class="img-profile rounded-circle" src=""> --}}
  </a>
  <!-- Dropdown - User Information -->
  <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

    <a class="dropdown-item" href="/logout" onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
      <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
      Logout
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
    </form>
  </div>
</li>