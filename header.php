<!DOCTYPE html>
<html lang="<?=gila::config('language')?>">
<?php
view::stylesheet('lib/gila.min.css');
view::stylesheet('themes/oceania/style.css');
view::cssAsync('https://fonts.googleapis.com/css?family=Fjalla+One');
view::head()?>
<style>
<?php
$theme_color=gila::option('theme.color','#6b8f23');
?>
:root{--main-a-color: <?=$a_color?>;--main-primary-color: <?=$theme_color?>}
</style>

<body>
<?php view::widget_area('body'); ?>
  <div>
    <!-- Navigation -->
    <nav class="inline-flex fullwidth g-navbar mainmenu">  
      <span class="fullwidth" style="display:flex">
        <span class="page-title"><a href="<?=gila::base_url()?>"><?=gila::config('title')?></a></span>
        <?php view::menu(); ?>
      </span>
    </nav>
    <div class="main">
