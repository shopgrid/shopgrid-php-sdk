<?php 
  require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload
  
  use ShopGrid\SayHello;
  echo SayHello::world();
  