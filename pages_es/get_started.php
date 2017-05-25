<div class="row">
  <div class="col-md-12">
    <h1>Comienza</h1>
    <p>
      Actualmente sólo estamos aceptando usuarios que sean parte del
      <a href="<?=$_base_dir?>/programa_beta_partners">Programa de Beta Partners</a>.
      Pronto lanzaremos los planes para uso general.
    </p>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <h2>Proceso de registro</h2>
    <p>
      Para usar CloudEHRServer, envíanos un <a href="<?=$_base_dir?>/contacto">mensaje</a>
      y te contactaremos con istrucciones. Luego de la confirmación de tu registro, te enviaremos
      toda la información necesaria para comenzar a usar el CloudEHRServer!
      Quienes se registren en nuestro
      <a href="<?=$_base_dir?>/programa_beta_partners">Programa de  Beta Partners</a>
      tendrán acceso al servidor de producción.
    </p>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <h2>Probando el CloudEHRServer</h2>
    <p>
      Contamos con dos servidores de pruebas, utilizados para testing y demos. Estos son
      accesibles por el público en general. Puedes crear una cuenta de usuario directamente
      en estos servidores. Solo considera que son servidores pequeños y un poco lentos.
      Puede ser que no estén disponibles temporalmente. En ese caso, intenta acceder,
      espera unos momentos y vuelve a intentar.
      <ul>
        <li>Servidor 1: <a href="https://cabolabs-ehrserver.rhcloud.com/" target="_blank">cabolabs-ehrserver.rhcloud.com</a> (versión antigua)</li>
        <li>Servidor 2: <a href="https://ehrserver-cabolabs2.rhcloud.com/login/auth" target="_blank">ehrserver-cabolabs2.rhcloud.com (última versión)</a></li>
      </ul>
    </p>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <h2>Uso y Administración</h2>
    <p>
      En la sección de <a href="<?=$_base_dir?>/aprende">aprendizaje</a> podrás encontrar documentos y guías que
      te ayudarán en el proceso de entender cómo funciona el EHRServer y cómo sacarle provecho.
    </p>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <h3>¿Cómo funciona?</h3>
    <p>EHRServer está basado en el estándar openEHR, y gran parte de sus especificaciones
    y características son soportadas.</p>
    <p>EHRServer consume modelos de inforamción clínica llamados Plantillas Operativas
    (OPT por su sigla en inglés), donde se define la semántica, estructuras de datos,
    restricciones y terminología asociada a cada documento clínico que será almacenado.</p>
    <p>
    Cuando una aplicación envía documentos para almacenar en EHRServer, datos clave son
    extraídos para permitir búsquedas inteligentes de información. Esos documentos deberán
    cumplir con los OPTs cargados previamente.</p>
    <p>
    Un administrador podrá crear consultas de información utilizando una interfaz web, y
    estarán basadas en las definiciones de los OPTs. Las consultas estarán
    disponibles de forma instantánea para ser ejecutadas desde Servicios Web REST, y así
    poder obtener conjuntos de datos almacenados en EHRServer.</p>
    <p>
    Se pueden crear tantas consultas como sea necesario, sin modificar una sola línea de
    código ni escribir SQL.</p>
    <p>
    Eso es todo, guardas datos, consultas datos, todo estandarizado, y sin escribir una sola
    línea de código.</p>
    
    <h4>Tan simple como:</h4>
    <ol>
      <li>Crea una definición de documento clínico</li>
      <li>Carga la definición en el EHRServer</li>
      <li>Crea consultas de datos basadas en las definiciones de documentos</li>
      <li>Integra tus aplicaciones con la API REST del EHRServer</li>
      <li>Envía datos al EHRServer</li>
      <li>Ejecuta las consultas para obtener los datos en un formato estándar</li>
    </ol>
    
    <h4>Principales características:</h4>
    <ol>
      <li>Consola Web para gestión simplificada</li>
      <li>Auditoría y registros de trazabilidad completos</li>
      <li>Documentos clínicos versionados</li>
      <li>Orientado a servicios / API REST</li>
      <li>Soporta formatos XML y JSON</li>
      <li>Query Builder desde la Consola Web</li>
      <li>Soporta cualquier estructura de documento clínico</li>
      <li>Multi-organización</li>
      <li>Código Abierto</li>
      <li>Cumple el estándar openEHR</li>
    </ol>
    
    <p class="center v-air"><a class="btn btn-primary" href="<?=$_base_dir?>/aprende" role="button">Aprende más</a></p>
    
  </div>
</div>
