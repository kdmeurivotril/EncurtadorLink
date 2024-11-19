<?php
class Router {
    public function handleRequest() {
        $url = $_SERVER['REQUEST_URI'];
        if ($url === '/' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            (new HomeController())->shorten();
        } elseif (preg_match('/^\/([a-zA-Z0-9]{6})$/', $url, $matches)) {
            $code = $matches[1];
            (new AuthController())->redirect($code);
        } else {
            echo "Página não encontrada!";
        }
    }
}
?>
