<div class="masthead">
  <h3 class="text-muted">
    <a href="<?=$_base_dir?>/index">CloudEHRServer <sub>(beta)</sub></a>
    <span id="langs">
      <?php
        foreach ($_supported_langs as $i => $_slang)
        {
          if ($_SESSION['lang'] == $_slang)
          {
            echo strtoupper($_slang);
          }
          else
          {
            $path = '';
            if ( !isset($router_maps[$_SESSION['lang']][$route]) ) $path = $router_maps[$_SESSION['lang']]['/inicio'][$_slang];
            else $path = $router_maps[$_SESSION['lang']][$route][$_slang];
             
            echo '<a href="'. $_base_dir . ($_SESSION['lang'] != $_slang ? $path : '') .'?lang='. $_slang .'" style="'. ($_SESSION['lang'] == $_slang ? 'font-weight:bold;text-decoration:underline;':'') .'">'. strtoupper($_slang) .'</a>';
          }
          if ($i < count($_supported_langs)-1) echo ' | ';
        }
      ?>
    </span>
  </h3>
  <nav>
    <ul class="nav nav-justified">
      <li <?=(startsWith($route,'/comienza'))?'class="active"':''?>><a href="<?=$_base_dir?>/comienza">Comienza</a></li>
      <li <?=(startsWith($route,'/precios'))?'class="active"':''?>><a href="<?=$_base_dir?>/precios">Precios</a></li>
      <li <?=(startsWith($route,'/aprende'))?'class="active"':''?>><a href="<?=$_base_dir?>/aprende">Aprende</a></li>
      <li <?=(startsWith($route,'/contacto'))?'class="active"':''?>><a href="<?=$_base_dir?>/contacto">Contacto</a></li>
      <li <?=(startsWith($route,'/comunidad'))?'class="active"':''?>><a href="<?=$_base_dir?>/comunidad">Comunidad</a></li>
    </ul>
  </nav>
</div>
