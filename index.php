<?php
session_start();

$_base_dir = substr($_SERVER['SCRIPT_NAME'], 0, strrpos($_SERVER['SCRIPT_NAME'], '/'));
$_req_url = parse_url($_SERVER['REQUEST_URI']); // path, query
$_supported_langs = array('en','es');
$_default_lang = $_supported_langs[0];

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

/*
print_r($_REQUEST);
print_r($_SERVER);
print_r($_req_url);
*/

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

echo '<script>console.log("'.$_SESSION['lang'].'");</script>';


// routing
$path = $_req_url['path']; // url path without query string
$route = str_remove_prefix($path, $_base_dir);

$router = array(
   'en' =>
     array(
       '/get_started'                => 'get_started.php',
       '/beta_partners_program'      => 'beta_partners_program.php',
       '/beta_partners_program/complete' => 'beta_partners_program/complete_signup.php',
       '/learn'                      => 'learn.php',
       '/learn/try_it'               => 'learn/test_ehrserver.php',
       '/learn/glossary'             => 'learn/glossary.php',
       '/learn/basic_rest_api_usage' => 'learn/basic_rest_api_usage.php',
       '/learn/openehr_fundamentals' => '/learn/openehr_fundamentals.php',
       '/learn/anonymous_clinical_information' => '/learn/anonymous_clinical_information.php',
       '/learn/ehrserver_web_console' => '/learn/ehrserver_web_console.php',
       '/learn/using_staging'        => '/learn/using_staging.php',
       '/learn/data_commit'          => '/learn/data_commit.php',
       '/learn/use_case_shared_health_recods' => '/learn/use_case_shared_health_recods.php',
       '/learn/use_case_clinical_decision_support' => '/learn/use_case_clinical_decision_support.php',
       '/learn/use_case_monitoring_and_wearables' => '/learn/use_case_monitoring_and_wearables.php',
       '/contact'                    => 'contact.php',
       '/'                           => 'home.php',
       '/index'                      => 'home.php',
       '/home'                       => 'home.php',
       '/community'                  => 'community.php'
     ),
  'es' => // TODO: rename to spanish routes
     array(
       '/get_started'                => 'get_started.php',
       '/beta_partners_program'      => 'beta_partners_program.php',
       '/beta_partners_program/complete' => 'beta_partners_program/complete_signup.php',
       '/learn'                      => 'learn.php',
       '/learn/try_it'               => 'learn/test_ehrserver.php', // TODO
       '/learn/glossary'             => 'learn/glossary.php',
       '/learn/basic_rest_api_usage' => 'learn/basic_rest_api_usage.php',
       '/learn/openehr_fundamentals' => '/learn/openehr_fundamentals.php',
       '/learn/anonymous_clinical_information' => '/learn/anonymous_clinical_information.php',
       '/learn/ehrserver_web_console' => '/learn/ehrserver_web_console.php',
       '/learn/using_staging'        => '/learn/using_staging.php',
       '/contact'                    => 'contact.php',
       '/'                           => 'home.php',
       '/index'                      => 'home.php',
       '/home'                       => 'home.php',
       '/community'                  => 'community.php'
     )
);

// TODO: create mappings between routes in different languages to allow changing the lang
//       and stay on the same page instead of redirecting to home. To do the redirect,
//       a parse url should be done on the referer.

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
    <meta name="description" content="Cloud EHRServer, the open source, generic clinical data repository, with a powerful REST API, compliant with the openEHR standard">
    <meta name="keywords" content="cloud,ehrserver,cabolabs,clinical data repository,clinical database,openehr,rest api,archetypes,templates,foss,open source">
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
          // 404
          echo '<div class="row"><div class="col-md-12"><h1>Sorry, this page wasn\'t found</h1></div></div>';
        }
        
        echo '<script>console.log("'.$route.'");</script>';
      ?>
      
      <!-- Site footer -->
      <footer class="footer">
        <p>&copy; 2016 Powered by <a href="http://www.cabolabs.com/" target="_blank">CaboLabs</a></p>
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
  </body>
</html>
