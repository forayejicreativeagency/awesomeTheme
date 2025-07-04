self.addEventListener('install', event => {
  console.log('[Service Worker] Installing...');
  // You can cache files here
});

self.addEventListener('fetch', event => {
  // Intercept network requests (optional)
  console.log('[Service Worker] Fetching:', event.request.url);
});
