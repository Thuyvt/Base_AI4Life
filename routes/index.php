<?php

$action = $_GET['act'] ?? '/';

match ($action) {
    '/'         => (new HomeController)->index(),
    'so-thich' => (new HomeController)->soThich(),
    'thong-tin' => (new HomeController)->thongTin(),
    'hoi-dap'  => (new HomeController)->hoiDap(),
};