<div class="row">
  <div class="col-md-12">
    <h1>¿Quieres probar el EHRServer?</h1>
    <p>Esta guía te ayudará a instalarlo en tu computadora.</p>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>1. Instalación del EHRServer</h2>
    
    <h3>Prerrequisitos</h3>
    <p>
      <b>1) Instala MySQL Server</b><br/><br/>
      <a href="https://dev.mysql.com/downloads/mysql/" target="_blank">Descarga el instalador</a>
    </p>
    <p>
      <b>2) Instala Grails 2.5.6</b><br/><br/>
      <a href="http://www.grails.org/download.html" target="_blank">Aquí puedes encontrar la descarga y las instrucciones de instalación</a><br/></br>
    </p>
    
    <h3>EHRServer</h3>
    <p>
     <b>3) Descarga EHRServer</b><br/><br/>

     Descarga la versión de desarrollo
     <a href="https://github.com/ppazos/cabolabs-ehrserver/archive/master.zip" target="_blank">aquí</a>.

     Descarga la última versión liberada
     <a href="https://github.com/ppazos/cabolabs-ehrserver/releases" target="_blank">aquí</a>.<br/></br>
    </p>
    <p>
     <b>4) Configura la base de datos</b><br/><br/>

     Edita el archivo DaraSource, bajo el ambiente "development",
     <a href="https://github.com/ppazos/cabolabs-ehrserver/blob/master/grails-app/conf/DataSource.groovy" target="_blank">puedes verlo aquí</a>.

     Si la base de datos configurada no existe, debes crearla en MySQL. Por simplicidad puedes llamarla "ehrserver".<br/></br>
    </p>
    <p>
      <b>5) Configuración de las carpetas de trabajo</b><br/><br/>

       opts y opts/base_opts<br/><br/>
       
       El proyecto incluye una carpeta llamada "opts", que contiene una carpeta llamada "base_opts". Ahí están
       las plantillas openEHR que se cargarán cuando se ejecute EHRServer. Puedes mover la carpeta "opts" a
       cualquier ora ubicación, si lo haces debes configurar la entrada "app.opt_repo" en el archivo
       <a href="https://github.com/ppazos/cabolabs-ehrserver/blob/master/grails-app/conf/Config.groovy" target="_blank">Config.groovy</a>,
       bajo el entorno "development".<br/><br/>

       
       xsd<br/><br/>
       
       El proyecto incluye una carpeta llamada "xsd" que contiene los esquemas XML necesarios para validar plantillas y
       documentos clínicos. Puedes mover esa carpeta pero en
       <a href="https://github.com/ppazos/cabolabs-ehrserver/blob/master/grails-app/conf/Config.groovy" target="_blank">Config.groovy</a>
       debes actualizar las siguientes entradas:

       <ul>
         <li>app.version_xsd</li>
         <li>app.xslt</li>
         <li>app.opt_xsd</li>
       </ul>
       <br/>

       Nota: si ejecutas EHRServer desde el WAR en un servidor como Tomcat, la carpeta xsd no es necesaria porque
       está incluida en el archivo WAR.<br/><br/>


       versions y commits<br/><br/>

       Si las carpetas versions y commit no están incluidas en el proyecto, deben crearse. Estas carpetas deben tener
       permisos de escritura para que EHRServer pueda guardar datos en ellas. Luego verifica que la configuración de
       las entradas "app.version_repo" y "app.commit_logs" contienen las rutas correctas. Esto es dentro de Config.groovy.<br/><br/>

       Por defecto esas rutas son ehrserver/versions y ehrserver/commits, donde "ehrserver" es la carpeta donde está EHRServer.<br/></br>
    </p>
    <p>
      <b>6) Configura la clave de tokens para la API REST</b><br/></br>
      
      Es necesario configurar la variable de entorno EHRSERVER_REST_SECRET, se recomienda que el valor sea un UUID.<br/></br>
      
      La variable debería verse así con un valor de ejemplo: EHRSERVER_REST_SECRET=6067dba9-1234-1234-1234-92208c77ce77<br/></br>
      
      ¿Cómo configurar variables de entorno?</br>
      
      <ul>
        <li><a href="https://www.java.com/en/download/help/path.xml" target="_blank">Ejemplo de Windows</a></li>
        <li><a href="https://help.ubuntu.com/community/EnvironmentVariables" target="_blank">Ejemplo de Linux</a></li>
        <li><a href="https://stackoverflow.com/questions/7501678/set-environment-variables-on-mac-os-x-lion" target="_blank">Ejemplo de MacOS</a></li>
      </ul>
      <br/>
      
      ¿Cómo puedo obtener un UUID?</br>
      
      <ul>
        <li><a href="https://www.uuidgenerator.net/" target="_blank">Generador de UUIDs</a></li>
      </ul>
      <br/>
    </p>
    <p>
      <b>7) Ejecutando EHRServer</b><br/></br>

       Para ejecutar, debes correr este comando desde la consola, estando dentro de la carpeta del EHRServer:<br/></br>

       ehrserver&gt; grails -Dserver.port=8090 -Duser.timezone=UTC run-app<br/></br>

       Esto ejecutará EHRServer localemente, y estará accesible desde el puerto 8090, podrás accederlo desde:
       http://localhost:8090/ehr<br/></br>

       Para ingresar desde la consola web, utiliza las credenciales de administración: admin / admin / 123456
       (nombre de usuario / clave, número de organización). Como este usuario es adminstrador, tendrá acceso
       a todas las secciones de la consola web.<br/></br>

       Para usuarios con más restricciones puedes usar: accman / accman / 123456 (usuario que gestiona una cuenta),
       orgman / orgman / 123456 (usuario que gestiona una organización).<br/></br>
    </p>
    <p>
      <b>8) Crear variables de entorno para habilitar el registro de usuarios</b><br/><br/>

      Cuando un usuario se registra desde la consola web, el EHRServer enviará un correo con información de cómo
      ingresar al EHRServer y un link para establecer una clave para su cuenta. Para poder enviar el correo, se
      debe configurar un servidor de correos SMTP mediante las siguientes variables de entorno:

      <ul>
        <li>EHRSERVER_EMAIL_HOST: URL / IP de tu servidor SMTP</li>
        <li>EHRSERVER_EMAIL_PORT: puertodel servidor SMTP</li>
        <li>EHRSERVER_EMAIL_USER: usuario válido en el servidor SMTP</li>
        <li>EHRSERVER_EMAIL_PASS: clave para el usuario</li>
        <li>EHRSERVER_EMAIL_FROM: dirección de correo que aparecerá en el campo "De"</li>
      </ul>
      
      <br/></br>
      
      Aquí puedes ver donde se utiliza esta <a href="https://github.com/ppazos/cabolabs-ehrserver/blob/master/grails-app/conf/Config.groovy#L285-L293" target="_blank">configuración</a><br/></br>
    </p>
    <p>
      Si tienes algún problema, consulta en nuestro <a href="https://www.cabolabs.com/forum/" target="_blank">foro de la comunidad</a>.
    </p>
  </div>
</div>
