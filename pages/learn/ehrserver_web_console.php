<div class="row">
  <div class="col-md-12">
    <h1>EHRServer Web Console</h1>
    <p>
      The Web Console is the User Interface of the EHRServer. Users with management
      permissions will be able to access the Web Console. On this guide we exmplain
      the main features of the Web Console to empower you on the management tasks.
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
      From the EHRServer Web Console you can manage all the back-end clinical
      information of your health information systems. On the following sections
      we will describe what you can do on the Web Console to manage:
    </p>
    <ul>
      <li>Administrative, security-related and audit information: Organizations, Users, Roles, Contributions</li>
      <li>Clinical information: EHRs, Versions/Compositions</li>
      <li>Data access: Queries</li>
    </ul>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>2. Users and Roles</h2>
    <p>
      From the Users section you can manage existing users and create new ones. For existing users you
      can request a password update (you can't set passwords directly because passwords are private).
      Each user should be associated with one Organization and have a Role.
    </p>
    <p>
      When you create or edit a User, you can assign Roles. If you want a User to be able to manage
      the same information as you, assign the ROLE_ORG_MANAGER Role. If the User should only access
      the EHRServer by the REST API, assign the ROLE_USER Role.
    </p>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>3. Organizations</h2>
    <p>
      From the Organizations section you can manage existing Organizations and create new ones.
      Organizations are used to separate EHRs from different customers, so you'll need to create
      one Organization per customer.
    </p>
    <p>
      When you create a new User, you need to assign an Organization to that User. So you might
      have 3 Organizations, and create a User to access only one of them. That way you have a lot
      of flexibilty in terms of controlling who access which information.
    </p>
    <p>
      Also when a User access the EHRServer though the REST API, all the requests are done in the
      context of one Organization. If the User or App needs to access information from different
      Organizations, different requests should be sent to the REST API, one per organization.
      That way we keep information from different Organizations separated also for the REST API.
    </p>
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
