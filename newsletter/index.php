<html>
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="ocus on features, not on back-end. The open clinical data repository, compliant with the openEHR standard. Now on the cloud.">
    <meta name="keywords" content="EHRServer, EHR, Server, cloud, saas, back-end, backend, CDR, clinical data repository, openEHR, foss, cabolabs, Cloud EHR Server, electronic health record, medical record, clinical data, clinical information, archetypes, clinical data query, clinical decision suport, CDS">
    <meta name="author" content="Pablo Pazos">
    <meta name="contact" content="pablo.pazos@cabolabs.com" />
    <title>Cloud EHRServer by CaboLabs</title>
    <script>
    var loc = window.location.href+'';
    if (loc.indexOf('http://')==0){
      window.location.href = loc.replace('http://','https://');
    }
    </script>
    <style>
      body {
        background-color: rgb(66, 133, 244);
      }
      .container {
        z-index: 1002;
        position: absolute;
        top: 0px;
        background: #ffffff;
        /* center horizontally */
        left: 50%;
        margin-left: -400px; /* half of the form width */
      }
      #logo_container {
        background: #ffffff;
        position: absolute;
        width: 100%;
        height: 168px;
        border-radius: 0 0 5px 5px;
      }
      #logo_container > div {
        position: absolute;
        margin: 0 auto;
        left: 50%;
      }
      #twitter-widget-0 { 
      width: 100% !important; 
    }
    </style>
  </head>
  <body>
    <?php $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2); ?>
    <div class="container">
      <div id="logo_container">
        <div>
          <div style="position: relative; left: -50%;">
            <img src="CloudEHRServer_white_72_square.png" height="168" />
          </div>
        </div>
      </div>
    
      <?php if ($lang == 'es') : ?>
        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScYB5DzPj06mQZjN4edLV0C0yWqf5OItq4zo8CTtICl51JBXw/viewform?embedded=true" width="800" height="1200" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
      <?php elseif ($lang == 'pt') : ?>
        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScFpxGdW1kVhNI6pympQpkdiHm1pruE0xJrvaaR_nnAGHBj-w/viewform?embedded=true" width="800" height="1200" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
      <?php else : ?>
        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdaON6Spt879JQH637BrGJR-lS67TKkhYm0RCG3nYKSFQMz5g/viewform?embedded=true" width="800" height="1200" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
      <?php endif; ?>
      
      <div>
      <a class="twitter-timeline"  href="https://twitter.com/search?q=from%3ACloudEHRServer%20OR%20%23EHRServer" data-widget-id="801958750898753537">Tweets about EHRServer</a>
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
      </div>
    </div>
  </body>
</html>