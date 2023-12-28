<?php

namespace App;

class Auth
{

    public static function isLoggedIn()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        return isset($_SESSION['auth']);
    }
    public static function isAdmin()
    {
        return isset($_SESSION['auth']) && $_SESSION['auth'] === 11;
    }

    public static function requireAdmin()
    {
        // Redirige l'utilisateur vers la page non autorisée s'il n'est pas administrateur
        if (!self::isAdmin()) {
            header('Location: /home?unauthorized=1');
            exit();
        }
    }
}
