<?php

namespace App\Core;

use App\Core\Request;
use App\Core\Response;

class Router
{
    protected $routes = [];
    public Request $request;
    public Response $response;


    /**
     * Router constructor.
     * @param Request $request
     * @param Response $response
     * @return void
     */
    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

    /**
     * subscribe get request to the router
     * @param string $path
     * @param callable|string $callback
     * @return void
     */
    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    /**
     * subscribe post request to the router
     * @param string $path
     * @param callable|string $callback
     * @return void
     */
    public function post($path, $callback)
    {
        $this->routes['post'][$path] = $callback;
    }

    /**
     * resolve the request with approriate callback
     * @return callable|string
     */
    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;

        if (!$callback) {
            $this->response->setStatusCode(404);
            return $this->renderView("_404");
        }

        if (is_string($callback)) {
            return $this->renderView($callback);
        }

        return call_user_func($callback);
    }

    /**
     * render view
     * @param string $view
     * @return string
     */
    public function renderView($view, $params = [])
    {
        $layoutContent = $this->layoutContent();
        $viewContent = $this->viewContent($view, $params);
        return str_replace('{{ content }}', $viewContent, $layoutContent);
    }

    /**
     * get layout content
     * @return string
     */
    public function layoutContent()
    {
        ob_start();
        include_once Application::$ROOT_DIR . "/views/layouts/main.php";
        return ob_get_clean();
    }

    /**
     * get view content
     * @param string $view
     * @return string
     */
    public function viewContent($view, $params)
    {
        // ------------- solution 1
        // foreach ($params as $key => $value) {
        //     $$key = $value;
        // }
        // --------------solution 2
        extract($params);
        ob_start();
        include_once Application::$ROOT_DIR . "/views/{$view}.php";
        return ob_get_clean();
    }
}