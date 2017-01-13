<div class="row">
  <div class="col-lg-8 col-lg-offset-2 text-center main">
    <img src="<?=$_base_dir?>/images/CloudEHRServer_white_72_square.png" />
    <h1>El 50% de tu próximo proyecto de e-Salud,<br/> ya está listo.</h1>
    <h2 class="lead">Enfócate en tu software, entrega más rápido.
    EHRServer es el repositorio de datos clínicos de código abierto,
    que cumple con el estándar openEHR. Ahora en la nube.</h2>
    <p><a class="btn btn-lg btn-success" href="<?=$_base_dir?>/get_started" role="button">Comienza ahora!</a></p>
  </div>
</div>

<div class="row">
  <div class="col-lg-4">
    <h2>Repositorio de datos clínicos genérico</h2>
    <p>Almacena y organiza cualquier tipo de registro clínico generado desde diversas aplicaciones,
    e integra todo en la Historia Clínica Única de cada paciente.</p>

  </div>
  <div class="col-lg-4">
    <h2>Capacidades únicas para consulta de datos</h2>
    <p>Crea consultas de datos desde el EHRServer Query Builder, y déjalas accessibles
    instantáneamente desde la API REST, sin excribir una sola línea de código.</p>

 </div>
  <div class="col-lg-4">
    <h2>Una poderosa API REST</h2>
    <p>Almacenamiento y acceso a los datos clínicos sin complicaciones. Gestiona Historias Clínicas
    y accede a toda la información clínica de una forma estandarizada, desde cualquier sistema o
    aplicación, cuándo y cómo lo necesitas.</p>
  </div>
</div>

<div class="row">
  <div class="col-lg-6">
    <h3>¿Por qué EHRServer?</h3>
    <p>El EHRServer resuelve un problema muy específico, que todos los sistemas de información
    en salud deben resolver: la creación de un repositorio de datos clínicos.</p>
    <p>La información clínica es compleja, heterogénea y altamente jerárquica. Estas características
    hacen difícil lograr un repositorio que sea:
    1. genérico (que soporte diferentes estructuras de datos),
    2. mantenible a largo plazo,
    3. performante,
    4. escalable,
    5. integrable con diversas aplicaciones.</p>
    
    <p>En CaboLabs no ha tomado años de investigación y desarrollo, prueba y error, el crear
    una solución que cumpliera con todos esos requerimientos.</p>
    
    <p>El objetivo del EHRServer es ahorrar tiempo y dinero a compañías que están construyendo
    sistemas de información en salud, e intentan resolver el mismo problema una y otra vez,
    con soluciones a medida.</p>
    
    <p>Con EHRServer tu compañía puede comenzar a trabajar inmediatamente en aplicaciones y
    sistemas, focalizándose en el valor y las funcionalidades que le ofrecerán a sus clientes,
    reduciendo el tiempo de desarrollo, y llegando al mercado más rápido, evitando los costos
    de resolver problemas complejos que ya están resueltos y distraen tus recursos.</p>
   
    <p>Instala y gestiona tu propia instancia del EHRServer o utiliza el servicio Cloud EHRServer.
    Aunque quieras desarrollar tu priopio repositorio de datos clínicos en el futuro, utilizar
    el EHRServer te ayudará a lograr prototipos funcionales para tus proyectos a una fracción
    del tiempo. Prueba y valida tu idea antes de invertir en la construcción de tu repositorio.</p>
    
    
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
    
    <p class="center v-air"><a class="btn btn-primary" href="<?=$_base_dir?>/get_started" role="button">Comienza ahora</a></p>
 </div>
  <div class="col-lg-6">
    <h3>¿Cómo funciona?</h3>
    <p>..
    The core of EHRServer is based on the openEHR specifications. Most of the capabilities
    and features offered by the EHRServer are because of this.</p>
    <p>The EHRServer should be fed with clinical
    document definitions called Operational Templates, or OPT for short. The OPTs define the
    semantics, data structures, constraints and terminology associated with each clinical document.
    It is basically an XML with metadata.</p>
    <p>When client apps commit clinical documents to the EHRServer,
    the data is indexed for querying. Of course, those documents should comply with their definitions (OPT).
    A manager will create data queries using the EHRServer Query Builder, and those queries are defined
    using only information from the OPTs, that is all clinical concepts like Blood Pressure, Diagnosis,
    Physical Examination, Glasgow Coma Scale, etc.</p>
    <p>To create queries there is no need of writing any SQL or source code.
    Once queries are saved, a client system can executed them using the REST API, pulling clincial data
    out from the EHRServer. That's it, data in, data out, all standardized,
    without writing a single line of code.</p>
    
    <h4>Tan simple como:</h4>
    <ol>
      <li>Crea una definición de documento clínico</li>
      <li>Carga la definición en el EHRServer</li>
      <li>Crea consultas de datos basadas en las definiciones de documentos</li>
      <li>Integra tus aplicaciones con la API REST del EHRServer</li>
      <li>Envía datos al EHRServer</li>
      <li>Ejecuta las consultas para obtener los datos en un formato estándar</li>
    </ol>
    
    <p class="center v-air"><a class="btn btn-primary" href="<?=$_base_dir?>/learn" role="button">Aprende más</a></p>
    
  </div>
</div>
