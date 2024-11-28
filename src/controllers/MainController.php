<?php

class MainController
{
    // Page d'accueil
    public function home()
    {
        $this->render('home');
    }

    public function produits()
    {
        $this->render('produits');
    }

    public function produit()
    {
        $this->render('produit');
    }

    public function panier()
    {
        $this->render('panier');
    }

    public function connexion()
    {
        $this->render('connexion');
    }

    public function inscription()
    {
        $this->render('inscription');
    }

    // Page "About"
    public function about()
    {
        $this->render('about');
    }

    // Page 404
    public function notFound()
    {
        http_response_code(404);
        echo "404 - Page Not Found!";
    }

    // Méthode pour inclure une vue
    private function render($view, $data = [])
    {
        // Transmet les données aux vues
        extract($data);

        // Inclut la vue demandée
        $viewFile = __DIR__ . '/../views/' . $view . '.php';
        if (file_exists($viewFile)) {
            require_once $viewFile;
        } else {
            echo "View not found: $view";
        }
    }
}
