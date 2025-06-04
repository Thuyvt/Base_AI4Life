<?php

define('BASE_URL',          'http://localhost:3000/AI4Life/');

define('PATH_ROOT',         __DIR__ . '/../');

define('PATH_VIEW',         PATH_ROOT . 'views/');

define('PATH_VIEW_MAIN',    PATH_ROOT . 'views/main.php');

define('BASE_ASSETS_UPLOADS',   BASE_URL . 'assets/uploads/');

define('PATH_ASSETS_UPLOADS',   PATH_ROOT . 'assets/uploads/');

define('PATH_CONTROLLER',       PATH_ROOT . 'controllers/');

define('PATH_MODEL',            PATH_ROOT . 'models/');

define('DB_HOST',     'localhost');
define('DB_PORT',     '3306');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME',     '');
define('DB_OPTIONS', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
]);
// DEFILE MODEL_OPTIONS OPENROUNTER
define('MODEL_OPTIONS', [
    'google/gemini-2.0-flash-exp:free' => 'Gemini-2.0-flash-exp',
    'deepseek/deepseek-r1-0528:free' => 'Deepseek-r1-0528',
    'deepseek/deepseek-r1-0528-qwen3-8b:free' => 'Deepseek-r1-0528-qwen3-8b',
]);
define('MODEL_DEEPSEEK_R1', 'deepseek/deepseek-r1-0528:free');

define('API_OPENROUTER_KEY', "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");
// define('API_OPENROUTER_URL', "https://openrouter.ai/api/v1/chat/completions");
const API_OPENROUTER_URL = "https://openrouter.ai/api/v1/chat/completions";
