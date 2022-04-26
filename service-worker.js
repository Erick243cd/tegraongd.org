//Installation de service worker
self.addEventListener('install', event => {
	console.log('Installation du Service Worker...');
});

self.addEventListener('activate', event => {
	console.log('Activation du Service worker...');
});

self.addEventListener('fetch', event => {
	//console.log('nterception d\'un fetch vers :', event.request.url);
});

// Chargement des éléments dans les caches
const CURRENT_CACHE_NAME = 'v1';


self.addEventListener('fetch', event => {
	//console.log('Interception d\'un fetch vers :', event.request.url);
	event.respondWith(caches.match(event.request)
		.then(cachedResponse => {
			if (cachedResponse) {
				//console.log('Réponse depuis le cache pour :', event.request.url);
				return cachedResponse;
			}

			return fetch(event.request).then(response => {
				if (!response || response.status !== 200 || response.type !== 'basic') {
					return response;
				}

				const responseToCache = response.clone();
				caches.open(CURRENT_CACHE_NAME).then(cache => {
					//console.log('Mise en cache de :', event.request.url);
					cache.put(event.request, responseToCache);
				});
				return response;
			});
		})
	);
});

//nettoyage des éléments dans les caches
self.addEventListener('activate', event => {
	//console.log('Activation du Service worker...');
	event.waitUntil(
		caches.keys().then(cacheNames => {
			return Promise.all(
				cacheNames.map(cacheName => {
					if (cacheName !== CURRENT_CACHE_NAME) {
						return caches.delete(cacheName);
					}
				})
			);
		})
	);
});

//Stratégie de Mise à jour

self.addEventListener('install', event => {
	//console.log('Installation du Service Worker...');
	self.skipWaiting();
});
