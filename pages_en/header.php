<div class="masthead">
  <h3 class="text-muted">
    <a href="<?=$_base_dir?>/index">Cloud EHRServer <sub>(beta)</sub></a>
    <span id="langs">
      <a href="?lang=en" style="<?=$_SESSION['lang']=='en'?'font-weight:bold;text-decoration:underline;':''?>">EN</a>
      | 
      <a href="?lang=es" style="<?=$_SESSION['lang']=='es'?'font-weight:bold;text-decoration:underline;':''?>">ES</a>
      <!--| PT-->
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
