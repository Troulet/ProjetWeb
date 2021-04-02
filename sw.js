//*************************************************************************//
//*************************************************************************//
//Dans ces deux variables on stock le nom de notre cache + l'assets qui contient les fichiers à garder en cache.
const CacheCesiJob= 'SauvegardeCache';
const assets = [
    '/',
    '/Public/index.php',
    'manifest.json',
    '/resources/img/ironMan.jpg',
    '/resources/img/logo_cesi.png',
    '/resources/img/logo_cesi2.0.png',
    '/resources/img/safran.jpg',
    '/resources/img/stage.jpg',
    '/resources/img/ubi.jpg',
    '/resources/view/contact_admin.blade.php',
    '/resources/view/contact_pilot.blade.php',
    '/resources/view/contact_student.blade.php',
    '/resources/view/create_modify_admin.blade.php',
    '/resources/view/create_modify_enterprise.blade.php',
    '/resources/view/create_modify_offer.blade.php',
    '/resources/view/create_modify_pilot.blade.php',
    '/resources/view/create_modify_student.blade.php',
    '/resources/view/footer.blade.php',
    '/resources/view/header.blade.php',
    '/resources/view/internship_pilot.blade.php',
    '/resources/view/internship_student.blade.php',
    '/resources/view/login.blade.php',
    '/resources/view/postulate.blade.php',
    '/resources/view/stats_student.blade.php',
    '/resources/view/student_pilot.blade.php',
    '/resources/view/header_footer.css',
    '/resources/view/internship_pilot.css',
    '/resources/view/internship_student.css',
    '/resources/view/login.css',
    '/resources/view/postulate.css',
    '/resources/view/stats_student.css',
    '/resources/view/student_pilot.css',
    '/resources/view/user_admin.css',
    '/resources/view/welcome_admin.css',
    '/resources/view/welcome_pilot.css',
    '/resources/view/welcome_student.css',
];

//*************************************************************************//
//*************************************************************************//
//Installation du service worker
self.addEventListener('install', evt => {

  evt.waitUntil(
    caches.open(CacheCesiJob).then(cache => {
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
self.addEventListener("fetch", fetchEvent => {
  fetchEvent.respondWith(
    caches.match(fetchEvent.request).then(res => {
      return res || fetch(fetchEvent.request)
    })
  )
})
