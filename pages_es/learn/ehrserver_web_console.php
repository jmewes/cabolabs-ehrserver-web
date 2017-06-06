<div class="row">
  <div class="col-md-12">
    <h1>EHRServer: introducción a la Consola Web</h1>
    <p>
      La Consola Web es la interfaz de usuario del EHRServer. Los usuarios que tengan permisos
      de administración podrán acceder a la consola para gestionar la información clínica de
      pacientes asociados a distintas organización como hospitales, clínicas, etc.
    </p>
    <p>
      En esta guía se describen las principales características de la Consola Web.
    </p>
    <ol>
      <li>Introducción</li>
      <li>Usuarios y Roles</li>
      <li>Organizaciones</li>
      <li>Historias Clínicas</li>
      <li>Versiones</li>
      <li>Contributiones</li>
      <li>Consultas</li>
      <li>Plantillas</li>
    </ol>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>1. Introducción</h2>
    <p>
      Desde la Consola Web del EHRServer puedes gestionar toda la información generada
      desde tus aplicaciones de registro clínico. En las siguientes secciones describiremos
      qué es lo que puedes gestionar. Dentro de esto se incluye:
    </p>
    <ul>
      <li>Área administrativa, seguridad y auditoría: Organizationes, Usuarios, Roles, Contributiones</li>
      <li>Información clínica: Historias Clínicas, Versiones y Documentos Clínicos</li>
      <li>Acceso a datos: Consultas</li>
    </ul>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>2. Usuarios y Roles</h2>
    <p>
      Desde la sección de usuarios puedes gestionar los usuarios existentes y crear nuevos usuarios.
      Para los usuarios existentes, puedes solicitar que actualicen sus contraseñas, pero no puedes
      actualizarlas tú directamente ya que las contraseñas deben ser privadas. Cada usuario debe
      tener asociado por lo menos un rol y una organización.
    </p>
    <p>
      Cuando se edita un usuario se pueden asignar roles. Los roles que pueden gestionar datos desde
      la Consola Web son los gestores de cuenta (ROLE_ACCOUNT_MANAGER) y gestores de organización
      (ROLE_ORG_MANAGER). Los usuarios normales (ROLE_USER) sólo pueden acceder al EHRServer mediante
      la API REST, estos no tendrán acceso a la Consola Web.
    </p>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>3. Organizationes</h2>
    <p>
      Desde la sección de organizaaciones se pueden gestonar las organizaciones existentes y 
      crear nuevas. Cada organización puede ser un cliente para el cual se mantendrán un conjunto
      de historias clínicas que no serán accesibles desde otras organizaciones.
    </p>
    <p>
      Cuando se crea un nuevo usuario, se le debe asignar una organización. Entonces puedes tener
      3 organizaciones, pero gestionar usuarios que pueden acceder solo a una de ellas. Esto brinda
      una gran flexibilidad en términos de control de acceso a la información de las historias clínicas
      asociadas a cada organización.
    </p>
    <p>
      Cuando un usuario accede al EHRServer desde la API REST, todos los pedidos se encuentran en el
      contexto de una organización. Si el usuario necesita acceder a información de otra organización
      se deben enviar pedidos contextualizados en esa nueva organización.
    </p>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>4. Historias Clínicas</h2>
    <p>
      Desde la sección de historias clínicas se pueden gestionar las existentes y crear nuevas.
      Se recomienda que las historias sean creadas desde la API REST, pero igualmente se permiten
      creare desde la Consola Web.
    </p>
    <p>
      En la vista de los detalles de una historia, se pueden ver todos los cambios que ocurriedon
      sobre la historia. Estos cambios se llaman "contribuciones". También se puede acceder a todos
      los datos clínicos de la historia, pero no te preocupes, esta información es anónima.
      <a href="<?=$_base_dir?>/aprende/anonymous_clinical_information">Más información</a>.
    </p>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>5. Versiones</h2>
    <p>
      The Versions represent clinical documents that are versioned, so for the same clinical document
      (or Composition in the openEHR terminology), you can have more than one Version. On this section
      you can access all the Versions for Compositions of all the EHRs on the current Organization.
      This allows yo uto check which Composition where changed and under which circumstances, enabling
      full audit of the clinical information.
    </p>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>6. Contribuciones</h2>
    <p>
      En esta sección se pueden ver todos los cambios que ocurrieron sobre las historias clínicas de 
      todas las organizaciones a las que tienes acceso. Esta sección en combinación con la sección de
      versiones, donde se muestran todos los documentos clínicos, dan una visión clara para auditar el
      registro clínico, y saber qué cambios se hicieron, sobre qué historia, cuándo, quién hizo los cambios,
      desde dónde se hicieron, y la información clínica relativa a cada cambio.
    </p>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>7. Consultas</h2>
    <p>
      EHRServer brinda acceso completo a todos los datos clínicos que se almacenan y gestionan con él.
      La accesbilidad a la información permite el desarrollo de nuevas aplicaciones y servicios, sin
      la necesidad de implementar complejas integraciones ni tener que lidiar con cambios en el código
      de la aplicación o con formatos proprietarios.
    </p>
    <p>
      Las consultas de datos pueden ser creadas desde la propia Consola Web, sin escribir SQL ni otro
      tipo de código. Las consultas pueden devolver documentos completos o datos singulares. En el momento
      de crear una consulta, la Consola Web permite probar la consulta con datos reales, esto permite
      verificar la correctitud de la consulta antes de guardarla. Una vez guardada la consulta, esta puede
      ser ejecutada desde la API REST y obtener datos openEHR tanto en XML como en JSON. No hay límites en
      cuanto a la cantidad de consultas que se pueden crear o a la complejidad de las mismas.
    </p>
    <p>
      Las consultas se crean en el contexto de una organización. Si se desea que una consulta pueda ser
      ejecutada por usuarios de distintas organizaciones, las consultas pueden compartirse.
    </p>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>8. Plantillas</h2>
    <p>
      En esta sección se pueden gestionar las plantillas para cada organización. Las plantillas son Operational
      Templates (OPT), una forma definida de arquetipos openEHR. Los OPTs permiten que el EHRServer sea genérico,
      en el sentido de que definen las estructuras de datos que se van a almacenar, y en que todas las consultas
      de datos se basan en las estructuras de datos definidas dentro de los OPTs. Entonces, agregando nuevos OPTs
      al EHRServer, se extienden las posibilidades de almacenamiento sin límites y sin necesidad de modificar el
      código fuente o la estructura de la base de datos a la hora de soportar nuevas estructuras.
    </p>
    <p>
      En la guía de <a href="<?=$_base_dir?>/aprende/openehr_fundamentals">fundamentos de openEHR</a> puedes encontrar
      más información acerca de las herramientas utilizadas para crear OPTs. Pero no te preocupes, nosotros proveemos
      un conjunto básico de OPTs para que puedas empezar a utilizar el EHRServer sin preocuparte por crear tus modelos.
    </p>
  </div>
</div>
