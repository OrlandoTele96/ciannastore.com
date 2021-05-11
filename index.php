<?php
  include 'header.php';
  $header = new  HeaderPage();
  $header->getImageBrand();
  $header->setTopBar();
  $head_section=$header->getHeader();
  require 'base.view.php';
?>