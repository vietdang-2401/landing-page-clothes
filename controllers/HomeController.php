<?php
class HomeController
{
  function __construct()
  {
  }
  function __render()
  {
    require_once ROOT . DS . 'views' . DS . 'homepage.php';
  }
}
?>