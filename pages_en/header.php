<div class="masthead">
  <h3 class="text-muted">
    <a href="<?=$_base_dir?>/index">Cloud EHRServer <sub>(beta)</sub></a>
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
            echo '<a href="'. $_base_dir . ($_SESSION['lang'] != $_slang ? $router_maps[$_SESSION['lang']][$route][$_slang] : '') .'?lang='. $_slang .'" style="'. ($_SESSION['lang'] == $_slang ? 'font-weight:bold;text-decoration:underline;':'') .'">'. strtoupper($_slang) .'</a>';
          }
          if ($i < count($_supported_langs)-1) echo ' | ';
        }
      ?>
    </span>
  </h3>
  <nav>
    <ul class="nav nav-justified">
      <li <?=(startsWith($route,'/get_started'))?'class="active"':''?>><a href="<?=$_base_dir?>/get_started">Get started</a></li>
      <li <?=(startsWith($route,'/beta_partners_program'))?'class="active"':''?>><a href="<?=$_base_dir?>/beta_partners_program">Beta Partners</a></li>
      <li <?=(startsWith($route,'/learn'))?'class="active"':''?>><a href="<?=$_base_dir?>/learn">Learn</a></li>
      <li <?=(startsWith($route,'/contact'))?'class="active"':''?>><a href="<?=$_base_dir?>/contact">Contact</a></li>
      <li <?=(startsWith($route,'/community'))?'class="active"':''?>><a href="<?=$_base_dir?>/community">Community</a></li>
    </ul>
  </nav>
</div>
