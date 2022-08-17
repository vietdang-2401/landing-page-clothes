<?php
class RouteController
{
  private $_url;
  private $_dispath;
  function __construct($url)
  {
    $this->_url = $url;
    self::parsingURL();
  }

  function parsingURL()
  {
    if ($this->_url == "/") {
      require_once('HomeController.php');
      $this->_dispath = new HomeController;
    }
    else {
      require_once('ContactController.php');
      $this->_dispath = new ContactController;
    }
  }

  function show()
  {
    $this->_dispath->__render();
  }
}
?>
