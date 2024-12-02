<?php

class MainController
{
    public function home()
    {
        $this->render('home');  
    }

    private function render($view, $data = [])
    {
        extract($data);
        $viewFile = __DIR__ . '/../views/' . $view . '.php';
        if (file_exists($viewFile)) {
            require_once $viewFile;
        } else {
            echo "Vue introuvable: $view";
        }
    }

    public function notFound()
    {
        http_response_code(404);
        echo "404 - Page Not Found!";
    }
}
?>