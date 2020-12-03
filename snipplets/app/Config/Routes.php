//jadi routes group ini maksudnya km bisa group route yang sejenis (misalkan: group landingPage ini),
//routes group ini base nya di url '/' yaitu: frontend.gdps.localhost/

$routes->group('/', function (RouteCollection $routes) {

    //ini route untuk function controller LandingPage home/index , url nya frontend.gdps.localhost/ 
    $routes->get('', 'LandingPage::index');

    //ini route untuk function controller LandingPage about , url nya frontend.gdps.localhost/about
    $routes->get('about', 'LandingPage::about');

    //ini route untuk function controller LandingPage services , url nya frontend.gdps.localhost/services
    $routes->get('services', 'LandingPage::services');

    //ini route untuk function controller LandingPage about , url nya frontend.gdps.localhost/gallery
    $routes->get('gallery', 'LandingPage::gallery');

    //dst dst
    $routes->get('news', 'LandingPage::news');

    $routes->get('career', 'LandingPage::career');

    $routes->get('contact', 'LandingPage::contact');
});