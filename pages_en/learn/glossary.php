<div class="row">
  <div class="col-md-12">
    <h1>Glossary</h1>
    <p>On this section you can find a list of common terms used across the EHRServer Web Console and all the documentation.</p>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <dl class="dl-horizontal">
     <dt>EHRServer</dt>
     <dd>The Open Source, Clinical Data Repository, compliant with the openEHR specs. Can be used as a back-end for health information systems or as an EHR integrator.</dd>
     
     <dt>openEHR</dt>
     <dd>Is a standard architecture that allows the implementation of interoperable, flexible, maintainable, knowledge-based and future-proof health information systems. It's specification is open and free.</dd>
     <dd>openEHR <a href="http://openehr.org" target="_blank">website</a></dd>
     
     <dt>EHR</dt>
     <dd>The Electronic Health Record of a patient. It is basically a container of clinical documents.</dd>
     
     <dt>Composition</dt>
     <dd>It's part of the openEHR specs. A Composition can be considered the electronic representation of a clinical document. It is a container for health-realated data, but can also contain adminsitrative, demographic and financial data. It is very flexible and allows to represent a wide range of data structures. Those structures are defined by archetypes and templates.</dd>
     
     <dt>Version</dt>
     <dd>In the openEHR specs, all the clinical documents are versionable. A version is a container of a composition, that includes versioning data, like the version number. New versions are created by commiting corrections or amendments to existing documents.</dd>
     
     <dt>Constribution</dt>
     <dd>Contains metadata that is recorded in the EHR of a patient when a set of compositions are committed to the EHRServer, it is like an audit trail or a Git commit record. It allows answering questions like when, who, why, where, etc.</dd>
     
     <dt>Archetype</dt>
     <dd>Is the definition of a data structure for a specific concept like Blood Pressure, Heart Rate, Medication Prescription, Diagnosis, etc. These definitions are processable by software, and follow the formal ADL (Archetype Definition Language) syntax that is part of the openEHR specs and is an ISO standard (ISO 13606-2).</dd>
     <dd>Archetype <a href="http://ckm.openehr.org" target="_blank">repository</a></dd>
     
     <dt>Template</dt>
     <dd>Represents the definition of a complete clinical document (Composition), and it is composed by a set of Archetypes. There are many modeling tools to create Archetypes and Templates.</dd>
     <dd><a href="http://www.openehr.org/downloads/modellingtools" target="_blank">Modeling tools</a></dd>
     
     <dt>Organization</dt>
     <dd>Since the EHRServer is multi-tenant, and Organization represents a logic division between EHRs that belongs to different Organizations, e.g. a User from Organization A can't access the EHRs from Organization B.</dd>
     
     <dt>Commit</dt>
     <dd>Is the process in which data is registered in the EHRServer. There is a service in the REST API to commit data. All the data is contained in Compositions, and include Contibution and Version metadata. After a set of Compositions is committed, their data is available for querying.</dd>
     
     <dt>Query</dt>
     <dd>Is the process to get data out the EHRServer. Queries are created in the EHRServer's Web Console and accessible from the REST API to execute. The result of a Query execution can be data about a set of EHRs of can be data jsut from one EHR.</dd>
     
     <dt>REST API</dt>
     <dd>A set of interfaces that allow easy access to the data contained within the EHRServer. It includes client authentication, security checks, and filters by Organization.</dd>
     
     <dt>Web Console</dt>
     <dd>The user interface of the EHRServer that allows management of the back-end, e.g. checking the committed Compositions, creating and testing queries, creating users and organizations, etc.</dd>
     
     <!--
     <dt></dt>
     <dd></dd>
     
     <dt></dt>
     <dd></dd>
     -->
    </dl>
  </div>
</div>
