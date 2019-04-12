<div class="row">
  <div class="col-md-12">
    <h1>Comienza</h1>
    <p>
      CloudEHRServer es una plataforma para gestionar y compartir información clínica, basada en
      <a href="https://github.com/ppazos/cabolabs-ehrserver" target="_blank">software de código abierto</a>
      y el <a href="https://www.openehr.org/" target="_blank">estándar openEHR</a>.
    </p>
    <p>
      Los principales componentes son: un repositorio de información estandarizado, una API REST y una
      consola web de administración. Provee todo lo necesario para almacenar, consultar, recuperar,
      gestionar y auditar información clínica de forma segura, privada y de forma estándar.
    </p>
    <p>
      CloudEHRServer habilita la creación de varios tipos de aplicaciones clínicas para ingreso, visualización,
      y análisis de información clínica. El backend de tu próxima aplicación clínica está listo, para que puedas
      focalizarte en las funcionalidades para tus clientes.
    </p>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>Suscríbete a CloudEHRServer</h2>
    <p>
      En la página de <a href="<?=$_base_dir?>/precios">precios</a> puedes encontrar los planes que ofrecemos
      con distintos niveles de servicio. Luego de suscribirte a un plan, podrás crear tu repositorio, crear
      organizaciones, usuarios, historias clínicas, plantillas y consultas de datos clínicos. Puedes encontrar
      más inbformación en nuestra <a href="<?=$_base_dir?>/aprende">página de aprendizaje</a>.
    </p>
  </div>
</div>

<!--
<div class="row">
  <div class="col-md-12">
    <h2>Proceso de registro</h2>
    <p>
      Para usar CloudEHRServer, envíanos un <a href="<?=$_base_dir?>/contacto">mensaje</a>
      y te contactaremos con instrucciones. Luego de la confirmación de tu registro, te enviaremos
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
        <li>Servidor 1: <a href="https://cabolabs-ehrserver.rhcloud.com/" target="_blank">cabolabs-ehrserver.rhcloud.com</a></li>
        <li>Servidor 2: <a href="https://ehrserver-cabolabs2.rhcloud.com/" target="_blank">ehrserver-cabolabs2.rhcloud.com</a></li>
      </ul>
    </p>
  </div>
</div>
-->
<div class="row">
  <div class="col-md-12">
    <h2>Uso y Administración</h2>
    <p>
      En la sección de <a href="<?=$_base_dir?>/aprende">aprendizaje</a> podrás encontrar documentos y guías que
      te ayudarán en el proceso de entender cómo funciona el EHRServer y cómo sacarle provecho.
    </p>
    <p>
      Presentaciones y demostracioens de EHRServer:
      <div align="center">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/8NFoGnQUr88" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/xQq-fEfxxjw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/zSftiFBjboE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/JIolq3b_Gkw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
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

    <p>Cuando una aplicación envía documentos para almacenar en EHRServer, datos clave son
    extraídos para permitir búsquedas inteligentes de información. Esos documentos deberán
    cumplir con los OPTs cargados previamente.</p>

    <p>Un administrador podrá crear consultas de información utilizando una interfaz web, y
    estarán basadas en las definiciones de los OPTs. Las consultas estarán
    disponibles de forma instantánea para ser ejecutadas desde Servicios Web REST, y así
    poder obtener conjuntos de datos almacenados en EHRServer.</p>

    <p>Se pueden crear tantas consultas como sea necesario, sin modificar una sola línea de
    código ni escribir SQL.</p>

    <p>Eso es todo, guardas datos, consultas datos, todo estandarizado, y sin escribir una sola
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
      <li>Consola Web para gestión y audirotía simple</li>
      <li>Auditoría y registros de trazabilidad completos</li>
      <li>Documentos clínicos versionados</li>
      <li>Orientado a servicios / API REST</li>
      <li>Soporta formatos XML y JSON</li>
      <li>Query Builder para crear consultas de datos desde la Consola Web</li>
      <li>Soporte de expresiones SNOMED CT en consultas openEHR</li>
      <li>Soporta cualquier estructura de documento clínico</li>
      <li>Multi-organización</li>
      <li>Código Abierto</li>
      <li>Cumple el estándar openEHR</li>
    </ol>

    <p class="center v-air"><a class="btn btn-primary" href="<?=$_base_dir?>/aprende" role="button">Aprende más</a></p>

  </div>
</div>
