<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Flower Shop')</title>
    
    <!-- UXCam Analytics SDK - Web (JavaScript) -->
    <!-- Load rrweb for visual session replay -->
    <script src="https://cdn.jsdelivr.net/npm/rrweb@latest/dist/rrweb.min.js"></script>

    <!-- UXCam SDK Configuration - MUST be set BEFORE SDK loads -->
    <script>
      window.UXCamSDK = {
        key: 'ux_de2920decad761fae52d9fcc165d9b64',
        apiUrl: 'http://localhost:3001',
        debug: true  // Enable debug logging to see what API URL is being used
      };
      console.log('UXCam SDK Config:', window.UXCamSDK);
    </script>

    <!-- Load UXCam SDK (always gets latest version) -->
    <script src="http://localhost:5173/uxcam-sdk-rrweb.js" async></script>
    
    @yield('styles')
</head>
<body>
    @yield('content')
    
    @yield('scripts')
</body>
</html>
