<div class="row">
  <div class="col-md-12">
    <h1>openEHR Fundamentals</h1>
    <p>The core features of the EHRServer the compliance with the the openEHR standard.
    So if you are planning to use the EHRServer, it is good to know a little about openEHR
    to get the most out of the EHRServer. Here we go!</p>
    <ol>
      <li>Introduction</li>
      <li>Specifications</li>
      <li>Community</li>
      <li>Tools</li>
      <li>Other resouces</li>
    </ol>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>1. Introduction</h2>
    <p>openEHR is an open standard that specifies all the architectural components needed
    to create health information systems that are interoperable, higly maintainable, and
    very flexible. The architecture has 3 main components: information, knowledge and services.
    The specifications are maintained by the 
    <a href="http://www.openehr.org/about/foundation" target="_blank">openEHR Foundation</a>,
    though it's
    <a href="http://www.openehr.org/programs/specification/" target="_blank">Specifications Program.</a></p>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>2. Specifications</h2>

    <p>The main component of the openEHR specs is the Information Model. It defines the complete
    hierarchy of data structures, from the EHR to the individual data types. The IM is very generic,
    flexible and relatively small, and it allows to represent different data structures for a virtually
    inifinite number of scenarios.</p>
    <p>The second component is the Knowledge Model, that is composed by the Archetype and Template Models.
    openEHR Archetypes are semantic definitions of clinical concepts that can be used to record clinical
    information. For example, there are Archetypes for Blood Pressure, Heart Rate, Diagnosis, Lab Order
    Request, Medication Prescription, Triage, Procedure, etc. You can find a lot of Archetypes in the
    international <a href="http://ckm.openehr.org/ckm/" target="_blank">Clinical Knowledge Manager</a>
    (CKM). Archetypes define the concept, the purpose and context of use, the data structure to record
    information about that concept, data constraints that allow data validation, translations to
    different languages, and references to standard terminologies. Yes, openEHR takes advantage of
    terminologies like SNOMED CT, ICD10, CIAP-2, etc.</p>
    <p>Archetypes represent individual concepts. When we want to create the definition of a full clinical
    document in openEHR, we create a Template. Templates use Archetypes, but you can specify which parts
    of each referenced Archetype should be included in the Template and which parts should not. In a way,
    Templates are like huge Archetypes, but the purpose is different. Also Templates allow only one
    language, so to define documents for different languages, you need to create different Templates.</p>
    <p>The Service Model is formally under construction. It's
    <a href="https://openehr.atlassian.net/wiki/display/spec/Architectural+concepts" target="_blank">architectural components</a>
    are defined, and most of them are part of the current openEHR implementations, but there is
    no normative specification. We have services around: EHR, Demographics, Terminology, Audit, Identity, Security,
    Knowledge, Notification and Workflow.
    One of the specs related to Services that is almost complete is the openEHR REST API specification.
    When this specification is realeased, we plan to implement a compliant REST API. For now the EHRServer
    REST API is very close to the openEHR REST API specs.</p>
    <p>
      For more information check the <a href="http://www.openehr.org/programs/specification/workingbaseline" target="_blank">openEHR Specifications</a>.
    </p>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>3. Community</h2>
    <p>
      openEHR has a great international community composed by informaticians and clinicians from
      around the globe, from Uruguay to Japan, from Spain to Australia.</p>
    <p>
      The community creates and maintains most of the openEHR-related
     <a href="http://openehr.org/downloads/modellingtools" target="_blank">tools</a> and 
      <a href="http://openehr.org/downloads/ehrcomponents" target="_blank">apps</a>.
      And if you need help, the community is there for you, just register on the
      <a href="http://openehr.org/community/mailinglists" target="_blank">mail lists</a>.
    </p>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>4. Tools</h2>
    <p>
      There are a set of open and free tools that are used a lot to work with openEHR.
      Among these tools, you can find:
    </p>
    <ol>
      <li>Archetype Editor: create and edit Archetypes, allows to add translation to more languages.</li>
      <li>Template Designer: create and edit Templates and generate their final form: Operational Templates*.</li>
      <li>Clinical Knowledg Manager: find Archetypes that where created by the community, 
      contribute improvements, allows to translate Archetypes online.</li>
    </ol>
    <p>
      * Operational Template is the form of Template used by the EHRServer. 
      Check <a href="http://www.openehr.org/downloads/ADLworkbench/working_with_templates" target="_blank">this guide</a>
      for more information.
      And you might find this 
      <a href="http://www.slideshare.net/freshehr/openehr-templates-in-detail" target="_blank">presentation</a>
      useful.
    </p>
    <p>
      Find more info about the tools <a href="http://www.openehr.org/downloads/modellingtools" target="_blank">here</a>.
    </p>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>5. Other resources</h2>
    <dl class="dl-horizontal">
      <dt><a href="http://www.openehr.org/what_is_openehr" target="_blank">What is openEHR?</a></dt>
      <dd>A good instroduction to the openEHR world</dd>
      
      <dt><a href="http://www.openehr.org/who_is_using_openehr/" target="_blank">Who is using openEHR?</a></dt>
      <dd>Summary about the companies and organizations that implemented openEHR</dd>
      
      <dt><a href="http://www.openehr.org/about/origins" target="_blank">openEHR origins</a></dt>
      <dd>The openEHR genesis</dd>
      
      <dt><a href="https://omowizard.wordpress.com/2010/03/04/what-on-earth-is-openehr/" target="_blank">What on earth is openEHR? (blog)</a></dt>
      <dd>Nice article for newcomers</dd>
      
      <dt><a href="https://code4health.org/_attachment/introtoopenEHR/2_Introduction_to_openEHR_London.pdf" target="_blank">openEHR introduction (presentation)</a></dt>
      <dd>A very comprehensive introdutory presentation</dd>
      
      <dt><a href="https://github.com/openEHR" target="_blank">openEHR on GitHub</a></dt>
      <dd>Find code and resources about openEHR.</dd>
    </dl>
  </div>
</div>