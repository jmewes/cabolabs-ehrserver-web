<?php
session_start();

date_default_timezone_set('America/Montevideo');

$_base_dir = substr($_SERVER['SCRIPT_NAME'], 0, strrpos($_SERVER['SCRIPT_NAME'], '/'));
$_req_url = parse_url($_SERVER['REQUEST_URI']); // path, query
$_supported_langs = array('en','es');
$_default_lang = $_supported_langs[0];

// lib
function str_remove_prefix ($str, $prefix)
{
   if (substr($str, 0, strlen($prefix)) == $prefix)
   {
     return substr($str, strlen($prefix));
   }
   
   return $str; // no prfix, nothing change
}

function startsWith($haystack, $needle)
{
   $length = strlen($needle);
   return (substr($haystack, 0, $length) === $needle);
}

function endsWith($haystack, $needle)
{
   $length = strlen($needle);
   if ($length == 0) {
      return true;
   }

   return (substr($haystack, -$length) === $needle);
}

function a($body, $path)
{
   global $_base_dir;
   if ($path[0] != '/') $path = '/'. $path;
   return '<a href="'. $_base_dir . $path .'">'. $body .'</a>';
}

//print_r($_REQUEST);
//print_r($_SERVER);
//print_r($_req_url);

// lang
// if not lang, get from the request, 1st access, set that as lang
// else if there is lang on session but comes the lang param on the request, change lang
if (!array_key_exists('lang', $_SESSION))
{
   $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2); // es en pt
   if (!in_array($lang, $_supported_langs))
   {
      $lang = $_default_lang;
   }
   $_SESSION['lang'] = $lang;
}
if (array_key_exists('lang', $_REQUEST))
{
   $lang = $_REQUEST['lang'];
   if (!in_array($lang, $_supported_langs))
   {
      $lang = $_default_lang;
   }
   $_SESSION['lang'] = $lang;
}

//echo '<script>console.log("'.$_SESSION['lang'].'");</script>';


// routing
$path = $_req_url['path']; // url path without query string
$route = str_remove_prefix($path, $_base_dir);

$router = array(
   'en' =>
     array(
       '/get_started'                 => 'get_started.php',
       '/beta_partners_program'       => 'beta_partners_program.php',
       '/beta_partners_program/complete' => 'beta_partners_program/complete_signup.php',
       '/learn'                       => 'learn.php',
       '/learn/try_it'                => 'learn/test_ehrserver.php',
       '/learn/glossary'              => 'learn/glossary.php',
       '/learn/basic_rest_api_usage'  => 'learn/basic_rest_api_usage.php',
       '/learn/openehr_fundamentals'  => '/learn/openehr_fundamentals.php',
       '/learn/anonymous_clinical_information' => '/learn/anonymous_clinical_information.php',
       '/learn/ehrserver_web_console' => '/learn/ehrserver_web_console.php',
       '/learn/using_staging'         => '/learn/using_staging.php',
       '/learn/data_commit'           => '/learn/data_commit.php',
       '/learn/use_case_shared_health_recods'      => '/learn/use_case_shared_health_recods.php',
       '/learn/use_case_clinical_decision_support' => '/learn/use_case_clinical_decision_support.php',
       '/learn/use_case_monitoring_and_wearables'  => '/learn/use_case_monitoring_and_wearables.php',
       '/learn/use_case_health_and_wellness_apps'  => '/learn/use_case_health_and_wellness_apps.php',
       '/learn/use_case_backup_and_query_database' => '/learn/use_case_backup_and_query_database.php',
       '/learn/use_case_fast_prototyping_poc'      => '/learn/use_case_fast_prototyping_poc.php',
       '/learn/use_case_analytics_and_datawarehousing' => '/learn/use_case_analytics_and_datawarehousing.php',
       '/learn/use_case_research_and_training'     => '/learn/use_case_research_and_training.php',
       '/contact'                     => 'contact.php',
       '/'                            => 'home.php',
       '/index'                       => 'home.php',
       '/home'                        => 'home.php',
       '/community'                   => 'community.php',
       '/pricing'                     => 'pricing.php'
     ),
  'es' => // TODO: rename to spanish routes
     array(
       '/comienza'                     => 'get_started.php',
       '/programa_beta_partners'       => 'beta_partners_program.php',
       '/programa_beta_partners/completa' => 'beta_partners_program/complete_signup.php',
       '/aprende'                      => 'learn.php',
       '/aprende/try_it'               => 'learn/test_ehrserver.php', // TODO
       '/aprende/glossary'             => 'learn/glossary.php',
       '/aprende/basic_rest_api_usage'               => 'learn/basic_rest_api_usage.php',
       '/aprende/openehr_fundamentals'               => '/learn/openehr_fundamentals.php',
       '/aprende/anonymous_clinical_information'     => '/learn/anonymous_clinical_information.php',
       '/aprende/ehrserver_web_console'              => '/learn/ehrserver_web_console.php',
       '/aprende/using_staging'                      => '/learn/using_staging.php',
       '/aprende/data_commit'                        => '/learn/data_commit.php',
       '/aprende/use_case_shared_health_recods'      => '/learn/use_case_shared_health_recods.php',
       '/aprende/use_case_clinical_decision_support' => '/learn/use_case_clinical_decision_support.php',
       '/aprende/use_case_monitoring_and_wearables'  => '/learn/use_case_monitoring_and_wearables.php',
       '/aprende/use_case_health_and_wellness_apps'  => '/learn/use_case_health_and_wellness_apps.php',
       '/aprende/use_case_backup_and_query_database' => '/learn/use_case_backup_and_query_database.php',
       '/aprende/use_case_fast_prototyping_poc'      => '/learn/use_case_fast_prototyping_poc.php',
       '/aprende/use_case_analytics_and_datawarehousing' => '/learn/use_case_analytics_and_datawarehousing.php',
       '/aprende/use_case_research_and_training' => '/learn/use_case_research_and_training.php',
       '/contacto'                   => 'contact.php',
       '/'                           => 'home.php',
       '/index'                      => 'home.php',
       '/inicio'                     => 'home.php',
       '/comunidad'                  => 'community.php'
     )
);

// TODO: create mappings between routes in different languages to allow changing the lang
//       and stay on the same page instead of redirecting to home. To do the redirect,
//       a parse url should be done on the referer.

/* current lang => current route => other lang => other route */

$router_maps = array(

  'en' => array(
    '/get_started' => array(
      'es' => '/comienza' 
    ),
    '/beta_partners_program' => array(
      'es' => '/programa_beta_partners' 
    ),
    '/beta_partners_program/complete' => array(
      'es' => '/programa_beta_partners/completa' 
    ),
    '/learn' => array(
      'es' => '/aprende' 
    ),
    '/learn/try_it' => array(
      'es' => '/aprende/try_it' 
    ),
    '/learn/glossary' => array(
      'es' => '/aprende/glossary' 
    ),
    '/learn/basic_rest_api_usage' => array(
      'es' => '/aprende/basic_rest_api_usage' 
    ),
    '/learn/openehr_fundamentals' => array(
      'es' => '/aprende/openehr_fundamentals' 
    ),
    '/learn/anonymous_clinical_information' => array(
      'es' => '/aprende/anonymous_clinical_information' 
    ),
    '/learn/ehrserver_web_console' => array(
      'es' => '/aprende/ehrserver_web_console' 
    ),
    '/learn/using_staging' => array(
      'es' => '/aprende/using_staging' 
    ),
    '/learn/data_commit' => array(
      'es' => '/aprende/data_commit' 
    ),
    '/learn/use_case_shared_health_recods' => array(
      'es' => '/aprende/use_case_shared_health_recods' 
    ),
    '/learn/use_case_clinical_decision_support' => array(
      'es' => '/aprende/use_case_clinical_decision_support' 
    ),
    '/learn/use_case_monitoring_and_wearables' => array(
      'es' => '/aprende/use_case_monitoring_and_wearables' 
    ),
    '/learn/use_case_health_and_wellness_apps' => array(
      'es' => '/aprende/use_case_health_and_wellness_apps' 
    ),
    '/learn/use_case_backup_and_query_database' => array(
      'es' => '/aprende/use_case_backup_and_query_database' 
    ),
    '/learn/use_case_fast_prototyping_poc' => array(
      'es' => '/aprende/use_case_fast_prototyping_poc' 
    ),
    '/learn/use_case_analytics_and_datawarehousing' => array(
      'es' => '/aprende/use_case_analytics_and_datawarehousing' 
    ),
    '/learn/use_case_research_and_training' => array(
      'es' => '/aprende/use_case_research_and_training' 
    ),
    '/contact' => array(
      'es' => '/contacto' 
    ),
    '/' => array(
      'es' => '/' 
    ),
    '/index' => array(
      'es' => '/' 
    ),
    '/home' => array(
      'es' => '/inicio' 
    ),
    '/community' => array(
      'es' => '/comunidad' 
    ),
    '/pricing' => array(
      'es' => '/precios' 
    ),
  ),
  'es' => array(
    '/comienza' => array(
      'en' => '/get_started' 
    ),
    '/programa_beta_partners' => array(
      'en' => '/beta_partners_program' 
    ),
    '/programa_beta_partners/completa' => array(
      'en' => '/beta_partners_program/complete' 
    ),
    '/aprende' => array(
      'en' => '/learn' 
    ),
    '/aprende/try_it' => array(
      'en' => 'learn/try_it'
    ),
    '/aprende/glossary' => array(
      'en' => 'learn/glossary'
    ),
    '/aprende/basic_rest_api_usage' => array(
      'en' => 'learn/basic_rest_api_usage'
    ),
    '/aprende/openehr_fundamentals' => array(
      'en' => '/learn/openehr_fundamentals'
    ),
    '/aprende/anonymous_clinical_information' => array(
      'en' => '/learn/anonymous_clinical_information'
    ),
    '/aprende/ehrserver_web_console' => array(
      'en' => '/learn/ehrserver_web_console'
    ),
    '/aprende/using_staging' => array(
      'en' => '/learn/using_staging'
    ),
    '/aprende/data_commit' => array(
      'en' => '/learn/data_commit'
    ),
    '/aprende/use_case_shared_health_recods' => array(
      'en' => '/learn/use_case_shared_health_recods'
    ),
    '/aprende/use_case_clinical_decision_support' => array(
      'en' => '/learn/use_case_clinical_decision_support'
    ),
    '/aprende/use_case_monitoring_and_wearables' => array(
      'en' => '/learn/use_case_monitoring_and_wearables'
    ),
    '/aprende/use_case_health_and_wellness_apps' => array(
      'en' => '/learn/use_case_health_and_wellness_apps'
    ),
    '/aprende/use_case_backup_and_query_database' => array(
      'en' => '/learn/use_case_backup_and_query_database'
    ),
    '/aprende/use_case_fast_prototyping_poc' => array(
      'en' => '/learn/use_case_fast_prototyping_poc'
    ),
    '/aprende/use_case_analytics_and_datawarehousing' => array(
      'en' => '/learn/use_case_analytics_and_datawarehousing' 
    ),
    '/aprende/use_case_research_and_training' => array(
      'en' => '/learn/use_case_research_and_training' 
    ),
    '/contacto' => array(
      'en' => '/contact' 
    ),
    '/' => array(
      'en' => '/' 
    ),
    '/index' => array(
      'en' => '/' 
    ),
    '/inicio' => array(
      'en' => '/' 
    ),
    '/comunidad' => array(
      'en' => '/community' 
    ),
    '/precios' => array(
      'en' => '/pricing' 
    ),
  )
);


// ----
// check if the route exists for other language (happens when accesing an URL for one language but the client locale is in another language)

if (!array_key_exists($route, $router[$_SESSION['lang']]) || !file_exists('pages_'. $_SESSION['lang'] .'/'. $router[$_SESSION['lang']][$route]))
{
  $_other_languages = $_supported_langs;
  if (($key = array_search($_SESSION['lang'], $_other_languages)) !== false)
  {
     unset($_other_languages[$key]);
  }
  //print_r($_other_languages);
  //print_r($_supported_langs);

  foreach ($_other_languages as $_olang)
  {
     if (array_key_exists($route, $router[$_olang]))
     {
        $current_url = (isset($_SERVER['HTTPS']) ? "https" : "http") ."://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]?lang=". $_olang;
        //echo "found $route in $_olang, go to $current_url";
        header('Location: ' . $current_url, true, 302);
        exit();
     }
  }
}
// ----


/*
echo $path .'<br/>'; // /ehrserver-cloud/beta_partners_program
echo $_base_dir .'<br/>'; // /ehrserver-cloud
echo $route .'<br/>'; // /beta_partners_program
echo $router[$route] .'<br/>'; // TODO: CHECK IF IT EXISTS
*/
?><!DOCTYPE html>
<html lang="<?=$_SESSION['lang']?>">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Cloud EHRServer, the open source, clinical data repository, REST API, compliant with the openEHR standard">
    <meta name="keywords" content="cloud,ehrserver,cabolabs,clinical data repository,clinical database,openehr,rest api,archetypes,templates,foss,open source,open,health,platform,ehr,sharing,emr,phr,smart,interoperability">
    <meta name="author" content="Pablo Pazos Gutierrez">
    <title>EHRServer by CaboLabs</title>
    
    <script>
    var loc = window.location.href+'';
    var parser = document.createElement('a');
    parser.href = loc;
    
    if (parser.hostname != 'localhost' && !parser.hostname.startsWith('192') && loc.indexOf('http://')==0){
      window.location.href = loc.replace('http://','https://');
    }
    </script>

    <link rel="apple-touch-icon" sizes="57x57" href="<?=$_base_dir?>/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?=$_base_dir?>/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?=$_base_dir?>/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?=$_base_dir?>/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?=$_base_dir?>/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?=$_base_dir?>/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?=$_base_dir?>/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?=$_base_dir?>/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?=$_base_dir?>/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?=$_base_dir?>/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=$_base_dir?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?=$_base_dir?>/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=$_base_dir?>/favicon-16x16.png">
    <link rel="manifest" href="<?=$_base_dir?>/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?=$_base_dir?>/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    
    <!-- Bootstrap -->
    <link href="<?=$_base_dir?>/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?=$_base_dir?>/css/justified-nav.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <link href="https://fonts.googleapis.com/css?family=Raleway|Roboto" rel="stylesheet">
    
    <script src='https://www.google.com/recaptcha/api.js'></script>
    
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
    <style>
      a {
        color: rgb(66, 133, 244); /* links have the Cloud EHRServer brand color */
      }
    </style>
  </head>
  <body>
    <!--
    <button type="button" class="btn btn-default contact">Contact us</button>
    
    <div class="overlay"></div>
    <div id="contact_container">
      <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScOKFq83T2E_0sihwn3-3k52LglWw3gvK7zNua2CX7SW-_l8w/viewform?embedded=true" width="750" height="700" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
    </div>
    -->

    <div class="container">

      <?php include('pages_'. $_SESSION['lang'] .'/'.'header.php'); ?>
      <?php
        if (array_key_exists($route, $router[$_SESSION['lang']]) && file_exists('pages_'. $_SESSION['lang'] .'/'. $router[$_SESSION['lang']][$route]))
        {
          include('pages_'. $_SESSION['lang'] .'/'. $router[$_SESSION['lang']][$route]);
        }
        else
        {
           /*
          // check if the route exists for other language (happens when accesing an URL for one language but the client locale is in another language)
          $_other_languages = $_supported_langs;
          if (($key = array_search($_SESSION['lang'], $_other_languages)) !== false)
          {
             unset($_other_languages[$key]);
          }
          print_r($_other_languages);
          //if ()
          foreach ($_other_languages as $_olang)
          {
             if (array_key_exists($route, $router[$_olang]))
             {
                echo "found $route in $_olang";
             }
          }
          */
             
          // 404
          echo '<div class="row"><div class="col-md-12"><h1>Sorry, this page wasn\'t found</h1></div></div>';
        }
        
        echo '<script>console.log("'.$route.'");</script>';
      ?>
      
      <!-- Site footer -->
      <footer class="footer">
        <p>&copy; <?=date("Y")?> Powered by <a href="http://www.cabolabs.com/" target="_blank">CaboLabs</a></p>
      </footer>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?=$_base_dir?>/js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?=$_base_dir?>/js/bootstrap.min.js"></script>
    <script src="<?=$_base_dir?>/js/jquery.form.min.js"></script>
    
    <script>
     $(function() {
       // bind 'myForm' and provide a simple callback function 
       $('#contact').ajaxForm({
         dataType: 'json',
         success: function(data, status, resp, $form) { 
           // {status: "ok", msg: "Hemos recibido tu mensaje, nos pondremos en contacto en breve"}
           $('#contact').append('<div class="alert alert-success alert-dismissible" role="alert" style=""><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>  '+ data.msg +'</div>');
         }
       });
     });
    </script>
    
    <script>
      $(function() {
        $( "button.contact" ).on( "click", function() {
          $('.overlay').toggle();
          $('#contact_container').toggle();
        });
      });
    </script>
    
    <script>
     (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
     (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
     m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
     })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

     ga('create', 'UA-100013609-1', 'auto');
     ga('send', 'pageview');
    </script>
  </body>
</html>
