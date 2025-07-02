// Tours & Travels Service Worker
const CACHE_NAME = 'tours-travels-cache-v1';
const ASSETS_TO_CACHE = [
  '/',
  '/index.php',
  '/packages.php',
  '/about.php',
  '/contact.php',
  '/gallery.php',
  '/assets/css/style.css',
  '/assets/js/script.js',
  '/assets/images/favicon.svg',
  '/assets/images/404.svg',
  '/manifest.json',
  '/404.php'
];

// Install event - Cache assets
self.addEventListener('install', event => {
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(cache => {
        console.log('Opened cache');
        return cache.addAll(ASSETS_TO_CACHE);
      })
      .then(() => self.skipWaiting())
  );
});

// Activate event - Clean up old caches
self.addEventListener('activate', event => {
  const cacheWhitelist = [CACHE_NAME];
  
  event.waitUntil(
    caches.keys().then(cacheNames => {
      return Promise.all(
        cacheNames.map(cacheName => {
          if (cacheWhitelist.indexOf(cacheName) === -1) {
            return caches.delete(cacheName);
          }
        })
      );
    }).then(() => self.clients.claim())
  );
});

// Fetch event - Serve from cache, fallback to network
self.addEventListener('fetch', event => {
  // Skip non-GET requests and those that aren't for our domain
  if (event.request.method !== 'GET' || 
      event.request.url.indexOf('http') !== 0) {
    return;
  }
  
  // Skip requests to admin area
  if (event.request.url.includes('/admin/')) {
    return;
  }
  
  event.respondWith(
    caches.match(event.request)
      .then(response => {
        // Cache hit - return the response from the cached version
        if (response) {
          return response;
        }
        
        // Not in cache - fetch from network
        return fetch(event.request).then(networkResponse => {
          // Don't cache if response is not ok
          if (!networkResponse || networkResponse.status !== 200 || networkResponse.type !== 'basic') {
            return networkResponse;
          }
          
          // Clone the response
          const responseToCache = networkResponse.clone();
          
          // Add to cache for future requests
          caches.open(CACHE_NAME)
            .then(cache => {
              cache.put(event.request, responseToCache);
            });
            
          return networkResponse;
        });
      })
      .catch(() => {
        // If both cache and network fail, show offline page
        if (event.request.mode === 'navigate') {
          return caches.match('/404.php');
        }
      })
  );
});