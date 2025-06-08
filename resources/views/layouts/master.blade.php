<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel App')</title>

    {{-- ✅ Try CDN Bootstrap CSS first --}}
    <link id="bootstrap-cdn" rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
          onerror="loadLocalBootstrapCSS()">

    {{-- ✅ Local Bootstrap CSS (not loaded unless CDN fails) --}}
    <noscript>
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    </noscript>

    {{-- ✅ Font Awesome --}}
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    {{-- ✅ Custom Styles --}}
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    @yield('custom-style')

    {{-- ✅ JS Fallback Loader --}}
    <script>
        function loadLocalBootstrapCSS() {
            var localCss = document.createElement('link');
            localCss.rel = 'stylesheet';
            localCss.href = '{{ asset('bootstrap/css/bootstrap.min.css') }}';
            document.head.appendChild(localCss);
        }
    </script>
</head>
<body>

    {{-- Main Content --}}
    @yield('body')

    {{-- ✅ Try CDN Bootstrap JS first --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            onerror="loadLocalBootstrapJS()"></script>

    {{-- ✅ Local Bootstrap JS Fallback --}}
    <script>
        function loadLocalBootstrapJS() {
            var script = document.createElement('script');
            script.src = '{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}';
            document.body.appendChild(script);
        }
    </script>

    {{-- ✅ SweetAlert2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- Page Scripts --}}
    @yield('scripts')

</body>
</html>
