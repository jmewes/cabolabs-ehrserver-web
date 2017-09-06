<div class="row">
  <div class="col-md-12">
    <h1>Trabajando con información clínica anónima</h1>
    <p>Esta guía te ayudará a entendar los principios de diseño seguidos para almacenar solamente información
    anónima en el EHRServer.</p>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>Introducción</h2>
    <p>
      La mayoría de los sistemas de información en salud gestionan la información clínica y demográfica dentro
      del mismo repositorio. Incluso ambos tipos de información son con frecuencia almacenados dentro de la
      misma base de datos física. Hay varios motivos por lo cual utilzar este tipo de diseño no es una buena idea.
    </p>
    <p>
      Las dos razones principales para definir una separación física entre la información clínica y demográfica
      son la seguridad (incluyendo privacidad y confidencialidad), y permitir el reuso de la información clínica
      con fines secundarios, esto sin comprometer la privacidad y confidencialidad dado que los datos clínicos
      independientes son totalmente anónimos.
    </p>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>Seguridad</h2>
    <p>
      En los últimos años han ocurrido muchos incidentes de violación de datos y seguridad en salud. Si buscas
      en Google <a href="https://www.google.com/search?q=health+data+breach" target="_blank">"Health Data Breach"</a>
      obtendrás varios resultados.
    </p>
    <p>
      Piensa en qué puede ocurrir si la información clínica es robada, pero esta no contiene ningún vínculo
      con información demográfica. No hay nombres, no hay direcciones, ni teléfonos, ni identificadores, nada,
      solo datos clínicos. Esto sería de poco valor para los delincuentes, que buscan una ganancia por no
      revelar los datos, mientras que la confidencialidad de los datos queda intacta. Esta es una de las
      ventajas de tener solo información clínica anónima dentro del repositorio de datos clínicos.
    </p>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>Permitir reuso de datos</h2>
    <p>
      El uso primario de los datos clínicos es el cuidado de la salud. Pero existe un gran número de formas de
      utilizar los datos clínicos fuera del ámbito asistencial. Esto es llamado "uso secundario". Las diferencias
      entre usos primarios y secundarios está definida en la especificación ISO 18308.
    </p>
    <p>
      Entre los usos secundarios podemos nombrar:
    </p>
    <ul>
      <li>Educación</li>
      <li>Investigación</li>
      <li>Apoyo a la toma de decisiones</li>
      <li>Gestión</li>
      <li>Definición de políticas</li>
      <li>Análisis estadístico</li>
      <li>...</li>
    </ul>
    <p>
      Ninguno de estos usos necesita la identificación de las personas individuales a las cuales pertenecen los
      datos clínicos. En este sentido, dar acceso al repositorio clínico a ciertas personas o sistemas para puedan
      leer datos con fines secundarios, no pone en riesgo la privacidad ni confidencialidad de los datos. Estes es
      un concepto central en el diseño del EHRServer, que parte de los requerimientos básicos del estándar openEHR.
    </p>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>Conceptos de diseño clave</h2>
    <h3>Identificadores sin significado</h3>
    <p>
      Las historias clínicas necesitan algún tipo de identificador. Hemos elegido utilizar
      <a href="https://en.wikipedia.org/wiki/Universally_unique_identifier" target="_blank">UUIDs</a>
      como identificadores porque:
    </p>
    <ol>
      <li>No tienen significado, no son identificadores de personas o pacientes</li>
      <li>Son universalmente únicos, pueden generarse de forma distribuida manteniendo la unicidad</li>
      <li>Cumplen con las espeficicaciones de openEHR</li>
    </ol>
    
    <h3>No hay referencias a identificadores reales de personas</h3>
    <p>
      Un identificador real de una persona puede ser su Documento de Identidad, Número de Seguro Social,
      Número de Pasaporte, o Número de Historia Clínica. Estos no deben ser utilizados en el repositorio
      clínico. Por ejemplo, si al crear un EHR para un paciente desde la API REST se desea proveer un
      identificador de paciente, se recomienda utilzar un UUID, no un identificador real.
    </p>
    
    <h3>Asegura las referencias a identificadores de EHRs y de pacientes</h3>
    <p>
      Si al crear un EHR el identificador del paciente es provisto, recomendamos que sea un UUID.
      Para tener acceso a los datos del paciente, las aplicaciones deberán vincular sus pacientes con
      los identificadores del EHR y/o el UUID de paciente en el EHRServer. Esos son los únicos vínculos
      entre los datos clínicos y demográficos, por lo que se debe tener especial cuidado en cuanto a su
      almacenamiento y gestión. Recomendamos que esos vínculos estén cifrados, y solo puedan decifrarse
      por personas autorizadas (por ejemplo médicos con acceso al paciente). Los vínculos entre identificadores
      de EHR, identificadores UUID de pacientes e identificadores reales de pacientes podrían almacenarse
      en una base de datos independiente del repositorio clínico y del demográfico, y controlar el acceso
      a dicha base de datos, solo para quienes tienen permisos de acceso a ambos repositorios. Además todos
      los accesos deberían registrarse, así en caso de un incidente, se cuenta con los logs para analizar.
      Esto permite que aunque un hacker tenga acceso al repositorio clínico, no sepa la identidad de las
      personas, mientras que si accede al repositorio demográfico, no cuenta con información clínica sensible.
      Para poder hacer algo de daño, debería tener acceso a las tres bases de datos, y contar con los mecanismos
      para vincular todos los identificadores (el cifrado lo hace menos probable).
    </p>
    
    <h3>Vinculación de la información</h3>
    <p>
      Para acceder a la información clínica y demográfica, los usuarios deberían estar autorizados en ambos
      repositorios. Los usuarios que tengan acceso solo a los datos clínicos, no podrán vincular identidades
      de personas a esos datos, y los usuarios que tengan acceso solo a los datos demográficos no podrán acceder
      a datos clínicos sensibles. Solo los usuarios con accesos a ambos repositorios, pero además al registro de
      vinculación de identificadores, podrán ver los datos clínicos acompañados de los datos de las personas.
      Esto permite el uso secundario de datos de forma seguda.
    </p>
    
    <h3>Acceso a información clínica</h3>
    <p>
      Para almacenar y acceder a los datos clínicos, las aplicaciones cliente deben proveer el EHR UUID en la
      API REST del EHRServer. Solo los usuarios previamente autorizados podrán acceder al EHR. El EHRServer
      verifica internamente que el usuario tiene acceso al EHR, considerando su rol en la organización donde se
      mantiene el EHR del paciente.
    </p>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>Conclusión</h2>
    <p>
      Recuerda utilizar UUIDs y no identificadores reales de pacientes al comunicarse con el EHRServer. También
      toma en cuenta que la seguridad es un concepto en el que participan múltiples factores, la seguridad global
      dependen del EHRServer en conjunto con las aplicaciones clientes, la correcta gestión de permisos, datos, y
      usuarios.
    </p>
  </div>
</div>
