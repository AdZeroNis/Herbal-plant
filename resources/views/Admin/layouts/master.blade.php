<!DOCTYPE html>
<html lang="fa">

@include('Admin.layouts.head')

<body>

 @include('Admin.layouts.sidebar')

    <!-- Toggle button -->
    <button class="toggle-btn" onclick="toggleSidebar()">☰</button>

   @include('Admin.layouts.header')

    <main>
      @yield('content')
    </main>

  @include('Admin.layouts.footer')

@include('Admin.layouts.js')

</body>

</html>
