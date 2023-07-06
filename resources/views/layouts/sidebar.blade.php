<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link " href="{{url('/dashboard')}}">
        <i class="bi bi-grid"></i>
        <span>Beranda</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-menu-button-wide"></i><span>Menu</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{url('/arsip')}}">
            <i class="bi bi-circle"></i><span>Arsip</span>
          </a>
        </li>

        <li>
          <a href="{{url('/unggah')}}">
            <i class="bi bi-circle"></i><span>Unggah</span>
          </a>
        </li>

        <li>
          <a href="{{url('/konfirmasi-get')}}">
            <i class="bi bi-circle"></i><span>Konfirmasi Surat</span>
          </a>
        </li>

        <li>
          <a href="{{url('/outgoing')}}">
            <i class="bi bi-circle"></i><span>Buat Surat</span>
          </a>
        </li>
      </ul>
    </li> <!-- End Components Nav -->
  </ul>

</aside>
<!-- End Sidebar-->