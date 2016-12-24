<div class="row">
  <div class="col-md-12">
    <h1>Working with anonymous clinical information</h1>
    <p>This guide will help you understand the design principle of having only anonymous 
    information stored in the EHRServer.</p>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>Introduction</h2>
    <p>
      Most health information systems manage clinical and demographic information on the same
      system, and even store both types of information on the same physical database. There are
      some reasons why this might not be a good idea, and, technically speaking, not the best
      software architectural design.
    </p>
    <p>
      The two main reason why having a physical separation of clinical and demographic data are:
      Security and Enabling Data Reuse.
    </p>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>Security</h2>
    <p>
      In the last couple of years, a lot of data breaches and security incidents occurred in the
      health care domain. Just 
      <a href="https://www.google.com/search?q=health+data+breach" target="_blank">Google "Health Data Breach"</a>
      and you will find some results.
    </p>
    <p>
      Think of what would happen if clinical information was stolen, but it didn't contain any
      demographic data. No names, no addresses, no phone numbers, no SSNs, no document numbers,
      nothing, just plain clinical data. It would be worthless for the stealers, while privacy
      and confidentiality is intact. This is one advantage of having only anonymous clinical
      information.
    </p>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>Enabling Data Reuse</h2>
    <p>
      The primary use of clinical information is health care. There is a wide range of uses for
      this kind of information beyond health care. This is called "secondary uses". The differences
      between primary and secondary uses are well defined by the ISO 18308 standard.
    </p>
    <p>
      Between secondary data uses we can find:
    </p>
    <ul>
      <li>Education</li>
      <li>Research</li>
      <li>Decision Support</li>
      <li>Management</li>
      <li>Policy-Making</li>
      <li>Statistical Analysis</li>
      <li>...</li>
    </ul>
    <p>
      None of these secondary uses need to identify individuals. So, granting access to the "Clinical
      Repository" for people or systems to enable the secondary uses won't put privacy and
      confidentiality at risk if all the clinical information is anonymous. This is a core concept of
      the EHRServer design but is nothing new: this requirement is part of the openEHR specifications.
    </p>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>Key design concepts</h2>
    <h3>Meaningless identifiers</h3>
    <p>
      Since EHRs need to have some kind of identifier, we have choosen to use 
      <a href="https://en.wikipedia.org/wiki/Universally_unique_identifier" target="_blank">UUIDs</a>
      as identifiers because:
    </p>
    <ol>
      <li>Are meaningless, are not person or patient identifiers</li>
      <li>Universally unique, allows distributed generation, maintainin uniqueness</li>
      <li>Are compliant with the openEHR specifications</li>
    </ol>
    <h3>No references to person or patient real-life identifiers</h3>
    <p>
      Real person or patient identifiers like SSN, National Identification Card numbers, Drivers
      License umbers or Medical Record Numbers shouldn't be used in the Clinical Repository. For
      example if you use the REST API to create an EHR, a patient ID should be provided. We
      recommend to use UUIDs for that. So no personal IDs are stored in the EHRServer or
      communicated ot it. This reduces the impact of any type of security incidents associated
      with the clinical repository, keeps the information anonymous, and maintains privacy
      and confidentiality.
    </p>
    <h3>Keep generated EHR and patient UUIDs safe</h3>
    <p>
      When creating an EHR, a patient ID should be provided. Above we recommend that ID to be an UUID.
      To have access to the EHR, client apps should store the patient UUID and/or the EHR UUID. Those
      identifiers are the only link between your patient's demographic data and the clinical data stored
      in the EHRServer.We recommend to store those identifiers in a safe place, encryption is encouraged,
      allowing decrition only for authorized users, and, if possible, making a little dificult to find
      the link between a patient demographic record and it's EHR and patient UUIDs. One idea would be to
      store the UUIDs in a different database, alongside with the patient ID in the demograpihc repository.
      These are all extra security measures. Even if a hacker can access your patient's demograhpic data,
      might not have access to the UUIDs. If they gain access to both, they still will need the Private
      API Key to get data from the EHRServer. Of course the API Keys should also be secured, but that
      is not related with this specific guide.
    </p>
    <h3>Information linkage</h3>
    <p>
      Users should be authenticated and authorized to access both demographic and clinical data.
      Users with access only to clinical data won't be able to know the identities of the patients
      associated to each EHR. This kind of access can be granted to allow secondary uses,
      like Clinical Research. Which user has access to which data is controlled by you. You also
      control the demographic repository and the UUIDs.
    </p>
    <h3>Accessing clinical information</h3>
    <p>
      To access data of a specific EHR, or to cimmit data to it, client apps should provide the
      EHR UUID to the EHRServer REST API. Only authorized users should be able to get the UUID and
      access the REST API with that UUID. The UUID access should be controlled by your application,
      while the EHRServer verifies authorization rules internally.
    </p>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>Conclusion</h2>
    <p>
      Remember to use UUIDs not real IDs for patients when communicating with the EHRServer. Also
      take into account that security is a multi-factor concept, and part of the security care relies
      on how your apps are developed. Take into account the recommendations of this guide to reduce
      risks while enabling clinical data reuse.
    </p>
  </div>
</div>
