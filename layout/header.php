<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- App Identity -->
    <meta name="application-name" content="Fariowala">
    <meta name="theme-color" content="#007bff">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="mobile-web-app-capable" content="yes">

    <!-- Manifest -->
    <link rel="manifest" href="/site.webmanifest">

    <!-- Favicon & Icons -->
    <link rel="icon" type="image/x-icon" href="images/favicon.svg">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/svg+xml" href="images/favicon/favicon.svg">
    <link rel="shortcut icon" href="images/favicon/favicon.ico">

    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <meta name="apple-mobile-web-app-title" content="Awesome App">

    <!-- Optional Additional PNG Sizes -->
    <link rel="icon" type="image/png" sizes="192x192" href="images/favicon/icon-192x192.png">
    <link rel="icon" type="image/png" sizes="512x512" href="images/favicon/icon-512x512.png">

    <!-- CSS Files -->
     <link rel="stylesheet" href="../css/main.min.css" type="text/css"/>

    <!-- Service Worker -->
    <script>
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker.register('sw.js')
                .then(reg => console.log('Service Worker registered:', reg))
                .catch(err => console.error('Service Worker registration failed:', err));
        }
    </script>


    <title>Awesome App</title>
</head>
<body>