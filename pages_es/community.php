<div class="row">
  <div class="col-md-12">
    <h1>Comunidad EHRServer</h1>
    <p>Herramientas, código de ejemplo, recursos y soporte de la comunidad.</p>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>Clientes y librerías en diferentes lenguajes</h2>
    <ol>
     <li>
       <a href="https://github.com/ppazos/EHRClientPHP" target="_blank">PHP</a>
     </li>
     <li>
       <a href="https://github.com/ppazos/cabolabs-ehrserver-js" target="_blank">Javascript</a>
     </li>
     <li>
       <a href="https://github.com/ppazos/cabolabs-ehrserver-groovy" target="_blank">Groovy</a>
     </li>
     <li>
       <a href="https://github.com/ppazos/cabolabs-ehrserver/blob/master/api/ehrserver_rest_insomnia.json" target="_blank">Insomnia REST Client Pedidos de Prueba</a>
     </li>
     <li>
       <a href="https://github.com/ppazos/cabolabs-ehrserver/blob/master/api/swagger.yaml" target="_blank">Especificación de la API en Swagger (Beta)</a>
     </li>
     <li>
       <a href="https://swaggerhub.com/apis/ppazos/ehr-server/0.9.5" target="_blank">Prueba la API en Swagger (Beta)</a>
     </li>
     <li>
       ¡Pronto tendremos más!
     </li>
     <li>
       <a href="<?=$_base_dir?>/contact">Haznos saber</a> si has creado alguna librería para otros lenguajes.
     </li>
    </ol>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>Aplicaciones de ejemplo que usan EHRServer como backend</h2>
    <ol>
     <li>
       <a href="https://github.com/ppazos/cabolabs-emrapp" target="_blank">EMRApp</a>
       : Aplicación de registro clínico que usa al EHRServer como backend
     </li>
     <li>
       <a href="https://github.com/ppazos/EHRCommitter" target="_blank">EHRCommitter</a>
       : aplicación de pruebas que genera formularios en función de OPTs openEHR, y genera datos de prueba aleatorios para guarlarlos en el EHRServer.
     </li>
     <li>
       <a href="https://github.com/ppazos/notes" target="_blank">Notes</a>
       : aplicación web para organizar notas de sesiones de psicoterapia, utiliza EHRServer como almacenamiento secundario / respaldo
     </li>
    </ol>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>Herramientas</h2>
    <ol>
     <li>
       <a href="https://github.com/ppazos/openEHR-OPT" target="_blank">openEHR-OPT</a>
       : heramienta de línea de comandos para trabajar con Plantillas Operativas (OPT) openEHR
     </li>
    </ol>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>¿Estás usando EHRserver?</h2>
    <a href="<?=$_base_dir?>/contact">Haznos saber</a>. Estamos encantados de saber que estáns usando EHRServer para tus proyectos,
    y podemos ayudarte a sacarle provecho al EHRServer y a diseminar tu trabajo en nuestra comunidad.
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>Documentos clínicos de ejemplo</h2>
    <p>Aquí puedes encontrar una lista de definiciones de documentos clínicos mediante Plantillas Operativas (OPT) de openEHR. También encontrarás
    instancias de ejemplo en XML, que contienen datos aleatorios autogenerados mediante la herramienta openEHR-OPT.</p>
    
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Encuentro</h3>
      </div>
      <div class="panel-body">
        <p>ID Plantilla: <a href="https://github.com/ppazos/cabolabs-ehrserver/blob/master/opts/production/simple_encounter_not_coded_diagnosis/simple_encounter_en.v1.opt" target="_blank">simple_encounter_en.v1</a></p>
        <p>Arquetipos openEHR referenciados:
           <ul>
             <li>openEHR-EHR-COMPOSITION.encounter.v1</li>
             <li>openEHR-EHR-EVALUATION.reason_for_encounter.v1</li>
             <li>openEHR-EHR-SECTION.vital_signs.v0</li>
             <li>openEHR-EHR-OBSERVATION.pulse.v1</li>
             <li>openEHR-EHR-OBSERVATION.height.v1</li>
             <li>openEHR-EHR-OBSERVATION.body_weight.v1</li>
             <li>openEHR-EHR-OBSERVATION.respiration.v1</li>
             <li>openEHR-EHR-OBSERVATION.body_temperature.v2.adl</li>
             <li>openEHR-EHR-OBSERVATION.blood_pressure.v1</li>
             <li>openEHR-EHR-OBSERVATION.indirect_oximetry.v0</li>
             <li>openEHR-EHR-OBSERVATION.exam.v1</li>
             <li>openEHR-EHR-EVALUATION.problem_diagnosis.v1</li>
           </ul>
        </p>
        <p><a href="https://github.com/ppazos/cabolabs-ehrserver/blob/master/opts/production/simple_encounter_not_coded_diagnosis/simple_encounter_en.v1_20170728025738_1.xml" target="_blank">Instancia de ejemplo</a></p>
      </div>
      <div class="panel-footer">v1, Inglés</div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Vital Signs Summary</h3>
      </div>
      <div class="panel-body">
        <p>ID Plantilla: <a href="https://github.com/ppazos/cabolabs-ehrserver/blob/master/opts/production/vital_signs/Vital_Signs_Summary.EN.v1.opt" target="_blank">Vital_Signs_Summary.EN.v1</a></p>
        <p>Arquetipos openEHR referenciados:
           <ul>
             <li>openEHR-EHR-COMPOSITION.health_summary.v1</li>
             <li>openEHR-EHR-SECTION.vital_signs.v0</li>
             <li>openEHR-EHR-OBSERVATION.pulse.v1</li>
             <li>openEHR-EHR-OBSERVATION.height.v1</li>
             <li>openEHR-EHR-OBSERVATION.body_weight.v1</li>
             <li>openEHR-EHR-OBSERVATION.respiration.v1</li>
             <li>openEHR-EHR-OBSERVATION.body_temperature.v2.adl</li>
             <li>openEHR-EHR-OBSERVATION.blood_pressure.v1</li>
             <li>openEHR-EHR-OBSERVATION.indirect_oximetry.v0</li>
           </ul>
        </p>
        <p><a href="https://github.com/ppazos/cabolabs-ehrserver/blob/master/opts/production/vital_signs/Vital_Signs_Summary.EN.v1_20170728024935_1.xml" target="_blank">Instancia de ejemplo</a></p>
      </div>
      <div class="panel-footer">v1, Inglés</div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Psychotherapy Note</h3>
      </div>
      <div class="panel-body">
        <p>ID Plantilla: <a href="https://github.com/ppazos/cabolabs-ehrserver/blob/master/opts/production/psychotherapy_note/Psychotherapy_Note.EN.v1.opt" target="_blank">Psychotherapy_Note.EN.v1</a></p>
        <p>Arquetipos openEHR referenciados:
           <ul>
             <li>openEHR-EHR-COMPOSITION.health_summary-categorized.v1.adl</li>
             <li>openEHR-EHR-EVALUATION.clinical_synopsis.v1.adl</li>
           </ul>
        </p>
        <p><a href="https://github.com/ppazos/cabolabs-ehrserver/blob/master/opts/production/psychotherapy_note/Psychotherapy_Note.EN.v1_20170724075238_1.xml" target="_blank">Instancia de ejemplo</a></p>
      </div>
      <div class="panel-footer">v1, Inglés</div>
    </div>
    
    <div class="row">
      <div class="col-md-6">
        <div class="panel panel-primary">
         <div class="panel-heading">
           <h3 class="panel-title">Validador OPT</h3>
         </div>
         <div class="panel-body">
           <p>Utiliza este XSD para validar OPTs. Cuando un OPT se carga en EHRServer, es validado con este XSD.</p>
           <p><a href="https://github.com/ppazos/cabolabs-ehrserver/blob/master/xsd/OperationalTemplate.xsd" target="_blank">OperationalTemplate.xsd</a></p>
         </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="panel panel-primary">
         <div class="panel-heading">
           <h3 class="panel-title">Validador de Documentos Clínicos</h3>
         </div>
         <div class="panel-body">
           <p>Utiliza este XSD para validar instancias de documentos clínicos en XML.</p>
           <p><a href="https://github.com/ppazos/cabolabs-ehrserver/blob/master/xsd/Version.xsd" target="_blank">Version.xsd</a></p>
         </div>
        </div>
      </div>
    </div>
    
  </div>
</div>