<div class="row">
  <div class="col-md-12">
    <h1>EHRServer Data Commit Guide</h1>
    <p>
      This guide will help you understand how to store clinical data in the EHRServer,
      using the commit service, and diferent ways to test that service.
    </p>
    <ol>
      <li>Introduction</li>
      <li>Users and Roles</li>
      <li>Organizations</li>
      <li>EHRs</li>
      <li>Versions</li>
      <li>Contributions</li>
      <li>Queries</li>
      <li>Templates</li>
    </ol>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>1. Introduction</h2>
    <p>
      This guide will show how to work with Operational Templates (OPT) to generate and send data to the EHRServer. The main role of the EHRServer is clinica data storage, so the data commit service is one of the most important functionalities of the EHRServer, and it's key to know how it works in order to use the EHRServer successfully.
    </p>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>2. Required resources</h2>
    <p>
      These resources will help you test the data commit to the EHRServer:
    </p>
    <ol>
      <li>Sample OPTs</li>
      <li>openEHR-OPT</li>
      <li>Insomnia REST Client</li>
      <li>Insomnia Script</li>
      <li>EHRCommitter</li>
    </ol>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>3. Step by step guide (simplified)</h2>
    <ol>
      <li><a href="https://github.com/ppazos/cabolabs-ehrserver/tree/master/opts/base_opts" target="_blank">Get sample Operational Templates (OPT)</a></li>
      <li><a href="https://github.com/ppazos/openEHR-OPT" target="_blank">Get openEHR-OPT to generate XML instances from OPTs</a></li>
      <li><a href="https://insomnia.rest/" target="_blank">Install Insomnia REST Client to act as client of the EHRServer to commit data as XML instances</a></li>
      <li><a href="https://github.com/ppazos/cabolabs-ehrserver/blob/master/ehrserver_rest_insomnia.json" target="_blank">Get the test Insomnia Script that has the needed requests already configured</a></li>
      <li><a href="https://github.com/ppazos/EHRCommitter" target="_blank">Install EHRCommitter as an alternative method of committing XML instances to the EHRServer</a></li>
    </ol>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>4. EHRs</h2>
    <p>
      From the EHRs section you can manage existing EHRs and create new ones. It is recommended
      that the EHRs are created using the REST API, but to have full management abilities, we
      decided to provide a user interfaces in the Web Console to create EHRs manually.
    </p>
    <p>
      On the EHR Details screen you can see all the Contributions to the EHR and access it's clinical
      documents. Don't worry, this information is 100% anonymous. Check our
      <a href="<?=$_base_dir?>/learn/anonymous_clinical_information">guide</a> about this.
    </p>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>5. Versions</h2>
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
    <h2>6. Contributions</h2>
    <p>
      On this section you will find the logs of each change to each EHR of your Organization. This in
      combination with the Versions gives you full Audit abilities. So you have full control over what
      was added or changed, when, from where, by whom, etc.
    </p>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>7. Queries</h2>
    <p>
      The EHRServer gives you full access to all the information stored in the EHRs of each one of your
      organizations. This allow to develope apps that can use this information, without dealing with a
      lot of services and data formats.
    </p>
    <p>
      From the Web Console, you can create queries to return clinical documents or just data points.
      Before saving the queries, you can test the queries with live data, and save the query when it
      returns what you need. When a query is saved, it can be executed form the REST API, so client
      apps will access the same data you saw when tesing que Query from the Web Console.
    </p>
    <p>
      Queries are created for an Organization. If you want to allow Users from many Organizations to
      use the same Query, you can share the Query between your Organizations. 
    </p>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>8. Templates</h2>
    <p>
      On this section you can manage the Operational Templates (OPT) of your Organization. An OPT is
      a clinical document definition, and is part or the openEHR specifications. OPTs are what makes
      the EHRServer so generic, and the base of the querying feature: data queries are created based
      on metadata contained in the OPTs.
    </p>
    <p>
      On the <a href="<?=$_base_dir?>/learn/openehr_fundamentals">openEHR fundamentals</a> you can find
      more information about the tools needed to create OPTs. But don't worry, we provide a common set of
      OPTs to get you started, and we cna help you creating new ones, so you can extend your EHR capabilities.
    </p>
  </div>
</div>
