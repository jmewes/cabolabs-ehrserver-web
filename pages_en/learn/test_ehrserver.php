<div class="row">
  <div class="col-md-12">
    <h1>Want to test the EHRServer?</h1>
    <p>This guide will help you install it on your computer.</p>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>1. Installing the EHRServer</h2>
    
    <h3>Prerequisites</h3>
    <p>
      <b>1) Download and Install MySQL Server</b><br/><br/>
      <a href="https://dev.mysql.com/downloads/mysql/" target="_blank">Download here</a>
    </p>
    <p>
      <b>2) Download and Install Grails 2.5.6</b><br/><br/>
      <a href="http://www.grails.org/download.html" target="_blank">Download and installation instructions here</a><br/></br>
    </p>
    
    <h3>EHRServer</h3>
    <p>
     <b>3) Download EHRServer</b><br/><br/>

     You can download latest development version of EHRServer from
     <a href="https://github.com/ppazos/cabolabs-ehrserver/archive/master.zip" target="_blank">here</a>.

     You can download the latest release from
     <a href="https://github.com/ppazos/cabolabs-ehrserver/releases" target="_blank">here</a>.<br/></br>
    </p>
    <p>
     <b>4) Configure the database</b><br/><br/>

     Edit the data source, under the "development" environment, 
     <a href="https://github.com/ppazos/cabolabs-ehrserver/blob/master/grails-app/conf/DataSource.groovy" target="_blank">check this</a>.

     If the database you configured doesn’t exist, you need to create it in your DBMS (e.g. MySQL). For simplicity name it "ehrserver".<br/></br>
    </p>
    <p>
      <b>5) Create working folders and configure paths</b><br/><br/>

       opts &amp; opts/base_opts<br/><br/>

       The project includes a folder called "opts". Inside there is a "base_opts" folder, where the default 
       Operational Templates (definitions of openEHR clinical documents) are located. When the EHRServer is 
       started, the OPTs from "base_opts" are copied (and renamed) to "opts", only those definitions will be 
       used by the EHRServer. You can move the "opts" folder to any location, but you need to update the entry 
       "app.opt_repo" in the Config script to reflect the new location of the folder.<br/><br/>

       
       xsd<br/><br/>

       The project includes a folder called "xsd" where the needed XML Schemas are located. You can move that 
       folder to any location, but you need to update these entries on the
       <a href="https://github.com/ppazos/cabolabs-ehrserver/blob/master/grails-app/conf/Config.groovy" target="_blank">Config.groovy</a>:

       <ul>
           <li>app.version_xsd</li>
           <li>app.xslt</li>
           <li>app.opt_xsd</li>
       </ul>
       <br/>
       
       Note: if you run the EHRServer from the WAR in a Web Server like Tomcat, the xsd folder is not needed because 
       it is packaged with the app in the WAR file.<br/><br/>


       versions &amp; commits<br/><br/>

       You need to create these working folders if those are not included in the EHRServer you downloaded. Those folders should have
       permissions to read and write. After you create that folder, you need to update the entry "app.version_repo" and "app.commit_logs"
       on the Config script.<br/><br/>

       By default, those folders are ehrserver/versions and ehrserver/commits, where "ehrserver" is the folder in which the EHRServer code is.<br/></br>
    </p>
    <p>
      <b>6) Add the ENV VAR to generate REST API Tokens</b><br/></br>
      
      It's mandatory to configure the EHRSERVER_REST_SECRET environment variable, and it's recommended to assing an UUID
      as the value.</br></br>
      
      For instance you can have something like this: EHRSERVER_REST_SECRET=6067dba9-1234-1234-1234-92208c77ce77<br/></br>
      
      How to configure environment variables?</br>
      
      <ul>
        <li><a href="https://www.java.com/en/download/help/path.xml" target="_blank">Windows example</a></li>
        <li><a href="https://help.ubuntu.com/community/EnvironmentVariables" target="_blank">Linux example</a></li>
        <li><a href="https://stackoverflow.com/questions/7501678/set-environment-variables-on-mac-os-x-lion" target="_blank">MacOS example</a></li>
      </ul>
      <br/>
      
      How to get an UUID?</br>
      
      <ul>
        <li><a href="https://www.uuidgenerator.net/" target="_blank">UUID generator</a></li>
      </ul>
      <br/>
    </p>
    <p>
      <b>7) Run the EHRServer</b><br/></br>

      Run:<br/></br>

      Execute this command line from the project folder:<br/></br>

      $ehrserver&gt; grails -Dserver.port=8090 -Duser.timezone=UTC run-app<br/></br>

      This will run the server locally, on the port 8090, so you will be able to access it through:
      http://localhost:8090/ehr<br/></br>

      Login:<br/></br>

      Use admin / admin / 123456 (username, password, organization) to login, and you are ready to go. That is the 
      administration user, so it has special access to all the functionalities of the EHRServer.<br/></br>

      For a more constrained user, you can use this login: orgman / orgman / 123456  (username, password, organization). 
      That user is an organization manager, and can only manage it’s organizations, so some items on the menu are hidden 
      from this user as only the admin has rights to access them.<br/></br>
    </p>
    <p>
      <b>8) Create environment variables if you will use the "create account" feature locally</b><br/><br/>

      When an account is created, it needs to send an email with some basic account information, and a link to reset 
      the password. The email service needs to be configured to do that. We use these environment variables to do 
      that configuration:

      <ul>
        <li>EHRSERVER_EMAIL_HOST: URL / IP of your SMTP server</li>
        <li>EHRSERVER_EMAIL_PORT: port number of your SMTP server</li>
        <li>EHRSERVER_EMAIL_USER: valid user on your SMTP server (probably an email address)</li>
        <li>EHRSERVER_EMAIL_PASS: password corresponding to the user</li>
        <li>EHRSERVER_EMAIL_FROM: the email address that will appear to the receiver as "from"</li>
      </ul>
      
      <br/></br>
      
      You can see where this configuration is used <a href="https://github.com/ppazos/cabolabs-ehrserver/blob/master/grails-app/conf/Config.groovy#L285-L293" target="_blank">here</a><br/></br>
    </p>
    <p>
      If you face any issues, you can use our <a href="https://www.cabolabs.com/forum/" target="_blank">community forum</a>.
    </p>
  </div>
</div>

<!--
<div class="row">
  <div class="col-md-12">
    <h2>2. Use our staging server</h2>
    <p>
      We have a full guide on <a href="<?=$_base_dir?>/learn/using_staging">Using the EHRServer staging server</a>
      
      <h3>Some considerations</h3>
      <ol>
        <li>The staging server was created just for testing purposes</li>
        <li>It can be slow</li>
        <li>It can be not available</li>
        <li>Data can be erased without notification</li>
      </ol>
    </p>
    <p>
      <a href="<?=$_base_dir?>/contact">Contact us</a> if you have any questions.
    </p>
  </div>
</div>
-->
