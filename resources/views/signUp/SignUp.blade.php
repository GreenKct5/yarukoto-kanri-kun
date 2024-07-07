<!DOCTYPE html>
<html>
<head>
    <title>SignUp Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="manifest" href="build/manifest.json">
    <script>
        if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('/serviceworker.js')
            .then(function(registration) {
            console.log('Service Worker registered with scope:', registration.scope);
            }).catch(function(error) {
            console.log('Service Worker registration failed:', error);
            });
        }
    </script>
</head>
<body>
    <h1>Welcome to the SignUp Page</h1>
</body>
</html>
