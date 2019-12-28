<?php
declare(strict_types=1);

use App\Application\Actions\User\ListUsersAction;
use App\Application\Actions\User\ViewUserAction;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    $app->get('/services', function (Request $request, Response $response) {
      return $this->get('view')->render($response, "services.html", ["pagePath" => "/services", "pageTitle" => "Ingenious Partners, LLC | Services", "pageDescription" => "Test Page Description"]);
    });

    $app->get('/portfolio', function (Request $request, Response $response) {
      return $this->get('view')->render($response, "portfolio.html", ["pagePath" => "/portfolio", "pageTitle" => "Ingenious Partners, LLC | Portfolio", "pageDescription" => "Test Page Description"]);
    });

    $app->get('/testimonials', function (Request $request, Response $response) {
      return $this->get('view')->render($response, "testimonials.html", ["pagePath" => "/testimonials", "pageTitle" => "Ingenious Partners, LLC | Testimonials", "pageDescription" => "Test Page Description"]);
    });

    $app->get('/about', function (Request $request, Response $response) {
      return $this->get('view')->render($response, "aboutus.html", ["pagePath" => "/about", "pageTitle" => "Ingenious Partners, LLC | About Us", "pageDescription" => "Test Page Description"]);
    });

    $app->get('/contact', function (Request $request, Response $response) {
      return $this->get('view')->render($response, "contactus.html", ["pagePath" => "/contact", "pageTitle" => "Ingenious Partners, LLC | Contact Us", "pageDescription" => "Test Page Description"]);
    });

    $app->get('/', function (Request $request, Response $response) {
      return $this->get('view')->render($response, "homepage.html", ["pagePath" => "/", "pageTitle" => "Ingenious Partners, LLC", "pageDescription" => "Test Page Description"]);
    });
};
