 <!-- BREADCRUMB -->
 <nav class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-12">

          <!-- Breadcrumb -->
          <ol class="breadcrumb mb-0 fs-xs text-gray-400">
            <li class="breadcrumb-item">
              <a class="text-gray-400" href="{{ route('client.index') }}">Home</a>
            </li>
            <li class="breadcrumb-item active">
              @yield('title')
            </li>
          </ol>

        </div>
      </div>
    </div>
  </nav>

  {{-- <section class="pt-7 pb-12">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- Heading -->
          <h3 class="mb-10 text-center">@yield('title')</h3>
        </div>
      </div>
     
    </div>
  </section> --}}