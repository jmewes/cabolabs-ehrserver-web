<div class="row">
  <div class="col-md-12">
    <h1>Caso de uso: investigación y educación</h1>
    <p>
      La información clínica es fundamental para todo lo relacionado a la investigación clínica y a la educación en el área de la salud.
      Pero se requiere un gran esfuerzo para conseguir, acumular, procesar, limpiar, integrar, agregar y usar la información clínica.
      En general este proceso necesita realizar tareas manuales, y no se cuenta con una metodología sistemática, dificultada aún más
      por la complejidad y heterogeneidad de la información. Otro grave problema de este enfoque es que se tienen formatos y modelos
      propietarios, que además de bloquear la interoperabilidad de la información, agrega complejidad al procesamiento.
    </p>
    <p>
      El enfoque del EHRServer para mejorar, sistematizar y simplificar el procesamiento de la información clínica, permite hacer
      frente a los problemas antes mencionados. Como se implementa el estándar openEHR, se cuenta con un modelo de información 
      normalizado, genérico, completo, consistente y abierto (independiente de cualquier proveedor, sin usar formatos propietarios).
    </p>
    <p>
      El otro elemento que agrega la implementación del estándar openEHR es el contar con una metodología formal de gestión del
      contenido clínico, incluyendo definición semántica mediante <?=a('arquetipos y plantillas','/openehr_fundamentals')?>,
      vínculos con terminologías estándar (SNOMED CT, LOINC, CIE-10, etc.), y restricciones para validación de datos. El EHRServer
      simplifica el proceso de gestión de la información clínica en cada paso del proceso, ahorrando tiempo en tareas relacionadas
      dicha gestión, permitiendo focalizar los recursos en el análisis de los datos para las necesidades de investigación y educación.
    </p>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <h2>Recolecta información clínica y prepárala para el análisis con EHRServer</h2>
    <p>
      El EHRServer puede ser utilizado para almacenar cualquier estructura de información clínica sin necesidad de modificar su
      código o estrutura de base de datos. Para almacenar datos en el EHRServer no necesitas modificar tus sistemas, solamente con
      crear un pequeño programa que pueda copiar datos desde tus fuentes de datos hacia el EHRServer es suficiente. Esta copia de
      datos utilizará el formato estándar de openEHR para representar datos. Contamos con 
      <a href="https://github.com/ppazos/openEHR-OPT" target="_blank">herramientas</a> que te serán útiles en ese proceso.
      Esto se necesita hacer una sola vez, luego de que los datos son cargados en el EHRServer, puedes comenzar a crear
      consultas desde la <?=a('Consola Web','/aprende/ehrserver_web_console')?>. De esta forma podrás obtener datos en un formato
      consistente, usando condiciones y distintas formas de agrupamiento de los datos. Esto facilita el procesamiento posterior
      para el cálculo de indicadores o la creación de reportes.
    </p>
    <p>
      For more about using the EHRServer, check the <?=a('latest demo of the EHRServer','/get_started')?>.
    </p>
  </div>
</div>
