//*************************************************************************//
//*************************************************************************//
//Dans ces deux variables on stock le nom de notre cache + l'assets qui contient les fichiers à garder en cache.
const CacheCesiJob= 'SauvegardeCache';
const assets = [
    '/',
    '/Public/index.php',
    '/manifest.json',
    '/app.js',
    '/img/ironMan.jpg',
    '/img/logo_cesi.png',
    '/img/logo-cesi2.0.png',
    '/img/safran.jpg',
    '/img/stage.jpg',
    '/img/ubi.jpg',
    '/ressources/view/contact_admin.blade.php',
    '/ressources/view/contact_pilot.blade.php',
    '/ressources/view/contact_student.blade.php',
    '/ressources/view/create_modify_admin.blade.php',
    '/ressources/view/create_modify_enterprise.blade.php',
    '/ressources/view/create_modify_offer.blade.php',
    '/ressources/view/create_modify_pilot.blade.php',
    '/ressources/view/create_modify_student.blade.php',
    '/ressources/view/footer.blade.php',
    '/ressources/view/header.blade.php',
    '/ressources/view/internship_pilot.blade.php',
    '/ressources/view/internship_student.blade.php',
    '/ressources/view/login.blade.php',
    '/ressources/view/postulate.blade.php',
    '/ressources/view/stats_student.blade.php',
    '/ressources/view/student_pilot.blade.php',
    '/ressources/view/header_footer.css',
    '/ressources/view/internship_pilot.css',
    '/ressources/view/internship_student.css',
    '/ressources/view/login.css',
    '/ressources/view/postulate.css',
    '/ressources/view/stats_student.css',
    '/ressources/view/student_pilot.css',
    '/ressources/view/user_admin.css',
    '/ressources/view/welcome_admin.css',
    '/ressources/view/welcome_pilot.css',
    '/ressources/view/welcome_student.css',
    'https://fonts.googleapis.com/icon?family=Material+Icons',
    'https://fonts.gstatic.com/s/materialicons/v70/flUhRq6tzZclQEJ-Vdg-IuiaDsNcIhQ8tQ.woff2'
];

//*************************************************************************//
//*************************************************************************//
//Installation du service worker
self.addEventListener('install', evt => {

  evt.waitUntil(  caches.open(CacheCesiJob).then(cache => {
    console.log('caching shell assets');
    cache.addAll(assets);
    })
)
  
});

//*************************************************************************//
//*************************************************************************//
//Activation du Service Worker
self.addEventListener('activate', evt => {
    console.log('service Worker has been activated');
});

//*************************************************************************//
//*************************************************************************//
//fetch event afin de répondre quand on est en mode hors ligne.
self.addEventListener('fetch', function(event) {
    event.respondWith(
      caches.open('SauvegardeCache').then(function(cache) {
        return cache.match(event.request).then(function (response) {
          return response || fetch(event.request).then(function(response) {
            cache.put(event.request, response.clone());
            return response;
          });
        });
      })
    );
  });  