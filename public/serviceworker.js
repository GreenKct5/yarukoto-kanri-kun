self.addEventListener('install', function(event) {
    event.waitUntil(
      caches.open('my-cache').then(function(cache) {
        return cache.addAll([
          '/',
          '/home',
          '/myPage',
          '/createTodo',
          '/signIn',
          '/signUp',
        ]);
      })
    );
  });

  self.addEventListener('fetch', function(event) {
    event.respondWith(
      caches.match(event.request).then(function(response) {
        if (response) {
          return response;
        }
        return fetch(event.request).catch(error => {
          console.error('Fetch failed:', error);
          throw error;
        });
      })
    );
  })
