<div class="row">
  <div class="col-md-12">
    <h1>Use Case: Fast Prototyping and Proof of Concept</h1>
    <p>
      There are many scenarios in which the EHRServer will help to build a functional prototype or MVP
      fast, adapting it to your scpecific requirements without writing a line of code for the backend.
      <ol>
        <li>Your company/organization wants to build apps for health care, that will be used on multiple platforms (mobile iOS & Android, web, desktop, etc.)</a>
        <li>Your company is a software factory and needs to show a working prototype to a potential new client or an investor</a>
        <li>You are planning a live demo of your apps and need a way to share clinical data between them</a>
      </ol>
    </p>
    <p>
      EHRServer is the perfect complement to allow your ideas come to life. Instead of worrying about the backend,
      how data will be stored, how it will be shared between platforms and devices, and learning how to implement the
      openEHR standard, just delegate that to the EHRServer, use it as a backend service, and <b>focus on delivering
      features to your customers and end users</b>. Either way, they won't see the effort you invested on building a
      backend, an will focus on what they see and how your apps can be used.
    </p>
  </div>
</div>


<div class="row">
  <div class="col-md-12">
    <h2>Get it done fast!</h2>
    <p>
      To adapt the EHRServer to your needs, just follow these steps:
    </p>
    
    <ol>
      <li>Define the contents of your records: go to the <a href="http://ckm.openehr.org/ckm/" target="_blank">openEHR Clinical Knowledge Manager</a>
        and pick the content (openEHR Archetypes) that will be part of your app.</li>
      <li>Aggregate the content into records / documents: create a document definition (Operational Template or OPT) with the content
        you selected from the CKM. You can use free tools to do that, like the
        <a href="http://www.openehr.org/downloads/modellingtools" target="_blank">Template Designer</a>. We can help you with this,
        <?=a('let us know!','/contact')?></li>
      <li>Load your OPTs into the EHRServer: go to the Templates section on the EHRServer Web Console and upload the OPT. Now the EHRServer
        is able to receive data that follows your clinical document definition!</li>
      <li>Generate some test data: use our <a href="https://github.com/ppazos/openEHR-OPT" target="_blank">openEHR-OPT</a> project
        to generate sample XML instances that follow the structure in your OPTs. Check the README.</li>
      <li>Load some sample data: use our <a href="https://insomnia.rest/" target="_blank">Insomnia REST Client</a> tests to commit some
        generated documents to the EHRServer. This will help you understand how the REST API works to start committing data from your own
        apps. <a href="https://github.com/ppazos/cabolabs-ehrserver/blob/master/ehrserver_rest_insomnia.json" target="_blank">Here</a>
        you can find the test script.</li>
      <li>Use the generated documents in your app: allow your app to generate clinical documents, or to inject data using the ones
        you generated as data templates. You can fill the data in the XML from data users enter in you app UI.</li>
      <li>Use integrate the commit API in your app: you can generate an API Key from the EHRServer Web Console (from your organization's view),
        and use that key to authenticate your requests to the REST API, then just send the clinical documents generated from your app, to the
        commit service.</li>
      <li>Get your data out!: you will be able to create any number of data queries to get data from the EHRServer and display it in your apps,
        even on a different app than the one that generated the data. This is key to support many platforms and devices and the base for data
        sharing between apps. Queries are created from the EHRServer Web Console, just go to the Queries section on the EHRServer, and create
        a new query. Then queries can be executed from the REST API, you just need the query UID.</li>
    </ol>
    
    <p>
      <b>That's it!, data in, data out.</b> Adapted to your specific needs, using a simple REST API, being compliant with the openEHR
      standard, and without writing a line of code for the backend.
    </p>
    
    <p>
      For more details, check the <?=a('latest demo of the EHRServer','/get_started')?>.
    </p>
  </div>
</div>
