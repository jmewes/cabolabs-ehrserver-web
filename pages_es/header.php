<div class="masthead">
  <h3 class="text-muted">
    <a href="<?=$_base_dir?>/index">Cloud EHRServer <sub>(beta)</sub></a>
    <span id="langs">
      <a href="<?=$_base_dir?><?=$_SESSION['lang']!='en'?$router_maps[$_SESSION['lang']][$route]['en']:''?>?lang=en" style="<?=$_SESSION['lang']=='en'?'font-weight:bold;text-decoration:underline;':''?>">EN</a>
      | 
      <a href="<?=$_base_dir?><?=$_SESSION['lang']!='es'?$router_maps[$_SESSION['lang']][$route]['es']:''?>?lang=es" style="<?=$_SESSION['lang']=='es'?'font-weight:bold;text-decoration:underline;':''?>">ES</a>
      <!--| PT-->
    </span>
  </h3>
  <nav>
    <ul class="nav nav-justified">
      <li <?=(startsWith($route,'/comienza'))?'class="active"':''?>><a href="<?=$_base_dir?>/comienza">Comienza</a></li>
      <li <?=(startsWith($route,'/programa_beta_partners'))?'class="active"':''?>><a href="<?=$_base_dir?>/programa_beta_partners">Beta Partners</a></li>
      <li <?=(startsWith($route,'/aprende'))?'class="active"':''?>><a href="<?=$_base_dir?>/aprende">Aprende</a></li>
      <li <?=(startsWith($route,'/contacto'))?'class="active"':''?>><a href="<?=$_base_dir?>/contacto">Contacto</a></li>
      <li <?=(startsWith($route,'/comunidad'))?'class="active"':''?>><a href="<?=$_base_dir?>/comunidad">Comunidad</a></li>
    </ul>
  </nav>
</div>
