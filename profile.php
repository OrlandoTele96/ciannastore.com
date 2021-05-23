<?php
  include 'header.php';
  $header = new  HeaderPage();
  //$header->getImageBrand();
  //$header->getTopMenu();
  //echo $header->getBottomMenu();
  $header->setTopBar();
  $header->setBottomBar();
  $head_section=$header->getHeader();
  require 'base.view.php';
?>