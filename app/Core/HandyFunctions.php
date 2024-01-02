<?php
namespace MyApp\Core;
use MyApp\Core\Session;

class HandyFunctions
{
    private static $base_path;

    public static function setBasePath($base_path)
    {
        self::$base_path = $base_path;
    }

    public static function dd($value)
    {
        echo "<pre>";
        var_dump($value);
        echo "</pre>";

        die();
    }

    public static function urlIs($value)
    {
        return $_SERVER['REQUEST_URI'] === $value;
    }

    public static function abort($code = 404)
    {
        http_response_code($code);

        require self::$base_path . "View/{$code}.php";

        die();
    }

    public static function authorize($condition, $status = Response::FORBIDDEN)
    {
        if (!$condition) {
            self::abort($status);
        }

        return true;
    }

    public static function base_path($path)
    {
        return self::$base_path . $path;
    }

    public static function view($path, $attributes = [])
    {
        extract($attributes);

        require self::base_path('View/' . $path);
    }

    public static function redirect($path)
    {
        header("location: {$path}");
        exit();
    }

    public static function old($key, $default = '')
    {
        return Session::get('old')[$key] ?? $default;
    }
}

