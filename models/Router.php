<?php

namespace App;

class Router {

    /**
     * @var string
     */
    private $targetPath;

    /**
     * @var Altorouter
     */
    private $router;

    public function __construct(string $targetPath)
    {
        $this->targetPath = $targetPath;
        $this->router = new \AltoRouter();
    }

    public function get(string $url, string $file, ?string $routeName = null): self
    {
        $this->router->map('GET', $url, $file, $routeName);
        
        return $this;
    }

    /**
     * La variable $match est un tableau la valeur de retour de la fonction initiée
     */    

    public function run()
    {
        $match = $this->router->match();
        $file = $match['target'];
        ob_start();
        require $this->targetPath . DIRECTORY_SEPARATOR . "/{$file}.php";

        $content = ob_get_clean();
        require $this->targetPath . DIRECTORY_SEPARATOR . "frame/layout.php";

        return $this;
    }


}

?>