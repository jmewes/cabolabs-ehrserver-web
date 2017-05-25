<div class="row">
  <div class="col-md-12">
    <h1>Get started</h1>
    <p>
      Currently we are only accepting sign-ups for the 
      <a href="<?=$_base_dir?>/beta_partners_program">Beta Partners Program</a>.
      Soon we will launch our service plans for general usage.
    </p>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <h2>Enrollment process</h2>
    <p>
      To sign-up send a request to participate in the Beta Partners Program from
      <a href="<?=$_base_dir?>/beta_partners_program">here</a>. After your request is
      approved, you'll need to confirm your account and start using the CloudEHRServer. 
    </p>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <h2>Trying out CloudEHRServer</h2>
    <p>
      We have two staging servers that we use for testing and demos, that are
      publicly accessible. You can create a test account directly on those servers.
      Consider that those are small servers, with that we mean that are really sloooow,
      and might not have the latest version of the EHRServer installed, but we try
      to keep them up to date. Also the service might not be available 100% of the time.
      <ul>
        <li>Staging 1: <a href="https://cabolabs-ehrserver.rhcloud.com/" target="_blank">cabolabs-ehrserver.rhcloud.com</a> (old version)</li>
        <li>Staging 2: <a href="https://ehrserver-cabolabs2.rhcloud.com/login/auth" target="_blank">ehrserver-cabolabs2.rhcloud.com</a> (latest version)</li>
      </ul>
    </p>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <h2>Usage and Management</h2>
    <p>
      In our <a href="<?=$_base_dir?>/learn">Learn</a> section you will find documentation and guides that will help you
      in the process of understanding how the EHRServer woks and how to get the most
      out of it.
    </p>
    <p>
      Also check the latest demo of the EHRServer:
      <div align="center">
        <iframe width="356" height="200" src="https://www.youtube.com/embed/lCIRJkSCvPc?ecver=1" frameborder="0" allowfullscreen></iframe>
      </div>
    </p>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <h3>How does it work?</h3>
    <p>The core of EHRServer is based on the openEHR specifications. Most of the capabilities
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
    
    <h4>Simple as:</h4>
    <ol>
      <li>Create a clinical document definition</li>
      <li>Upload the definition to the EHRServer</li>
      <li>Create data queries based on document definitions</li>
      <li>Integrate the EHRServer API in your apps</li>
      <li>Commit some data</li>
      <li>Query and display your data</li>
    </ol>
    
    <h4>Main features:</h4>
    <ol>
      <li>Web Console for simple management</li>
      <li>Full audit access for traceability</li>
      <li>Versioned clinical documents</li>
      <li>Service Oriented / REST API</li>
      <li>Supports XML and JSON formats</li>
      <li>Query Builder from the Web Console</li>
      <li>Supports any structure of clinical document</li>
      <li>Multitenant</li>
      <li>Open Source</li>
      <li>Compliant with the openEHR standard</li>
    </ol>
    
    <p class="center v-air"><a class="btn btn-primary" href="<?=$_base_dir?>/learn" role="button">Continue learning</a></p>
    
  </div>
</div>
