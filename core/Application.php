<?php

namespace App\Core;

use App\Core\Router;
use App\Core\Database;
use App\Core\Response;

class Application
{
    public static Application $app;
    public static string $ROOT_DIR;
    public Router $router;
    public Request $request;
    public Response $response;
    public Database $database;

    /**
     * Application constructor.
     * @param string $rootDir
     * @return void
     */
    public function __construct(string $rootPath)
    {
        self::$app = $this;
        self::$ROOT_DIR = $rootPath;
        $this->request = new Request();
        $this->response = new Response();
        $this->database = new Database();
        $this->router = new Router($this->request, $this->response);
    }

    /**
     * resolve the application routes
     * @return void
     */
    public function run()
    {
        echo $this->router->resolve();
    }
}