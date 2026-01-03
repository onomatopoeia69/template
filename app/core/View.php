<?php 
     namespace App\Core;

    use Twig\Environment;
    use Twig\Loader\FilesystemLoader;

    class View
    {
        protected static Environment $twig;

        public static function init()
        {
            $viewsPath = __DIR__ . '/../views';
            $cachePath = __DIR__ . '/../../cache';

            if (!is_dir($cachePath)) {
                mkdir($cachePath, 0775, true);
            }

            $loader = new FilesystemLoader($viewsPath);

            self::$twig = new Environment($loader, [
                'cache' => $cachePath,
                'auto_reload' => true,
            ]);
        }

        public static function render(string $view, array $data = [])
        {
            echo self::$twig->render($view . '.twig', $data);
        }
    }

