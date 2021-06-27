@include('layout.header')


      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>@yield('judul_halaman')</h1>
          </div>
          	@yield('isi')
          <div class="section-body">
          </div>
        </section>
      </div>
  @include('sweetalert::alert')
@include('layout.footer')