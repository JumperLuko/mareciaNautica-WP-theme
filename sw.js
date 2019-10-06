importScripts('./js/cache-polyfill.js');


self.addEventListener('install', function(e) {
 e.waitUntil(
   caches.open('airhorner').then(function(cache) {
     return cache.addAll([
       '/',
       '/contato/',
       '/?homescreen=1',
       './css/responsive_flex-grid.min.css',
       './css/style.min.css',
       '/produtos/'
     ]);
   })
 );
});


self.addEventListener('fetch', function(event) {
//   console.log(event.request.url);
  event.respondWith(
    caches.match(event.request).then(function(response) {
      return response || fetch(event.request);
    })
  );
});