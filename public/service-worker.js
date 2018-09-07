var cacheName = 'blog-1';
var dataCacheName = 'data-blog-1';
var filesToCache = [
    '/',
    './js/bootstrap.min.js',
    './js/jquery.waypoints.min.js',
    './js/jquery-3.2.1.min.js',
    './js/main.js',
    './js/owl.carousel.min.js',
    './js/popper.min.js',
    './css/animate.css',
    './css/bootstrap.css',
    './css/owl.carousel.min.css',
    './css/style.css',
    './fonts/ionicons/css/ionicons.min.css',
    './fonts/fontawesome/css/font-awesome.min.css',
    './fonts/flaticon/font/flaticon.css',
    './fonts/fontawesome/fonts/fontawesome-webfont.woff2?v=4.7.0',
    './fonts/ionicons/fonts/ionicons.ttf?v=2.0.0',
    './fonts/fontawesome/fonts/fontawesome-webfont.woff?v=4.7.0',
    './fonts/ionicons/fonts/ionicons.woff?v=2.0.0',
    './fonts/fontawesome/fonts/fontawesome-webfont.ttf?v=4.7.0',
    './images/img_1.jpg',
    './images/img_2.jpg',
    './images/img_3.jpg',
    './images/img_4.jpg',
    './images/img_5.jpg',
    './images/img_6.jpg',
    './images/img_7.jpg',
    './images/img_8.jpg',
    './images/img_9.jpg',
    './images/img_10.jpg',
    './images/img_11.jpg',
    './images/img_12.jpg',
    './images/person_1.jpg'
];

self.addEventListener('install', function(e) {
    console.log('[ServiceWorker] Install');
    e.waitUntil(
        caches.open(cacheName).then(function(cache) {
            console.log('[ServiceWorker] Caching app shell');
            return cache.addAll(filesToCache);
        })

    );
});
self.addEventListener('activate', function(e) {
    console.log('[ServiceWorker] Activate');
    e.waitUntil(
        caches.keys().then(function(keyList) {
            return Promise.all(keyList.map(function(key) {
                if (key !== cacheName && key !== dataCacheName) {
                    console.log('[ServiceWorker] Removing old cache', key);
                    return caches.delete(key);
                }
            }));
        })
    );
    return self.clients.claim();
});

self.addEventListener('fetch', function(e) {
    console.log('[ServiceWorker] Fetch', e.request.url);
    var dataUrl = '/api';
    if (e.request.url.indexOf(dataUrl) > -1) {
        /*
         * When the request URL contains dataUrl, the app is asking for fresh
         * weather data. In this case, the service worker always goes to the
         * network and then caches the response. This is called the "Cache then
         * network" strategy:
         * https://jakearchibald.com/2014/offline-cookbook/#cache-then-network
         */
        e.respondWith(
            caches.open(dataCacheName).then(function(cache) {
                return fetch(e.request).then(function(response){
                    cache.put(e.request.url, response.clone());
                    return response;
                });
            })
        );
    } else {
        /*
         * The app is asking for app shell files. In this scenario the app uses the
         * "Cache, falling back to the network" offline strategy:
         * https://jakearchibald.com/2014/offline-cookbook/#cache-falling-back-to-network
         */
        e.respondWith(
            caches.match(e.request).then(function(response) {
                return response || fetch(e.request);
            })
        );
    }
});