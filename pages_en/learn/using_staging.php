<div class="row">
  <div class="col-md-12">
    <h1>Using the EHRServer staging server</h1>
    <p>We have a small server for testing that has the same configuration as the production one, it just
    has less resources, so it might run a little slower but for testing that is not a problem. This guide
    will help you setup an account and use the staging server to test your apps before going live.</p>
    <ol>
      <li>Account</li>
      <li>Fundamentas</li>
      <li>Basic management</li>
    </ol>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>1. Account</h2>
    <p>
      To start testing you need an account. Go to the
      <a href="https://ehrserver-cabolabs2.rhcloud.com" target="_blank">staging server</a> and click on
      "Create an account". Fill the form and click on the Register button. Important: remember your username.
      You will receive an email notification with the organization number assigned by the EHRServer to your
      company, also remember that number!. Click on the reset password link on the email, so you can set
      a password for your user. Also remember the pasword!
    </p>
    <p>
      If all the process was excecuted, you will end up with a username, password and organization number.
      Go to the staging server again, and use that information to login. If you can login, your account is
      all setup. Congratulations!
    </p>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>2. Fundamentals</h2>
    <p>
      When you register in the EHRServer a user is created for you. That user is associated with an organization,
      that would be your company. And the EHRServer will assign the ORGANIZATION MANAGER role to your user, so
      you can manage your organization. The organization and will be use to secure data access on the EHRServer.
      For example, all the clinical information of the patients you manage, will also be associated with your
      organization, so other users can't access data under your organization, unless you give them access.
    </p>
    <p>
      You can create other organizations and associate clinical records to those organizations. We recommend to
      create one organization for your company (created during the user sign up) and one organization for each
      client you have. So if you have an app used by 3 clients, and those apps are using the EHRServer as backend,
      the users of each of your clients will access only clinical data associated with their correspondent organization.
    </p>
    <p>
      Of course the users of your apps will need to be authenticated in the EHRServer to access the clinical data.
      There are two ways of doing this. You can manage those users directly in the EHRServer, or you can manage
      them on your apps and generate an API Key to authenticate your apps on the EHRServer API. To create an API Key
      go to Organizations &gt; clink on one organization's name &gt; go to the API Keys section and click on Generate &gt; 
      fill in the name or ID of the system that will use this API Key to access the EHRServer &gt; click on Create.
      If the creating succeeded, you will see the new key created (it is a long string of characters and numbers).
      That will be used to access the API. Please check the 
      <a href="http://cabolabs.com/en/projects" target="_blank">EHRServer Guide</a> to learn how to use it.
    </p>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>3. Basic management</h2>
    <p>
      Let's define the main sections of the EHRServer Web Console:
    </p>
    <ul>
      <li>Dashboard: summary of the data associated with the current organization</li>
      <li>EHRs: clinical records of the patients associated with the current organization</li>
      <li>Contributions: audit trail of the changes for each EHR</li>
      <li>Versions: versioned documents committed for each EHR associated with the current org</li>
      <li>Directory: allows to define folder structures for each EHR</li>
      <li>Queries: create and test queries over EHR data using the Web Query Builder</li>
      <li>Templates: clinical document definitions, you can add more as you need them, should be compliant with the openEHR standard</li>
      <li>Users: manage users associated with the current organization, you can create other ORGANIZATION MANAGERS or plain USERS that won't have access to the Web Console, but can login through the REST API.</li>
      <li>Organizations: manage your organizations</li>
      <li>Notifications: create notifications for other users under your organization, will appear when other users access certain serctions of the Web Console</li>
    </ul>
    <p>
      To start using the EHRServer, you need to create some EHRs. No demographic data is stored in the EHRServer,
      so all the data is anonymized (<a href="<?=$_base_dir?>/learn/anonymous_clinical_information">Why?</a>). To create an EHR an external patient id is needed, so you can link your
      patients (managed on an external system) with the EHRs stored in the EHRServer.
      Then you need to add some clinical document definitions or Templates. There will be some templates loaded
      for you to use, and you can add more. This 
      <a href="http://www.openehr.org/downloads/ADLworkbench/working_with_templates" target="_blank">article</a>
      can be helpful.
    </p>
    <p>
      After that you can create some queries to get data out the EHRServer. Go to the Queries section and create a
      new query. There is a <a href="http://cabolabs.com/en/projects" target="_blank">video demo here</a>, where
      the query creation is shown.
      Now the only thing you need is to commit some data. To commit data you need to use the REST API. On the
      <a href="http://cabolabs.com/en/projects" target="_blank">EHRServer Guide</a> there you can find the
      full API documentation with some examples.
    </p>
    <p>
      Using the API you can execute the queries and get some data from the clinical documents committed to the EHRServer.
      This process is pretty standard and will be the same for each app that uses the EHRServer as a backend. It might be
      challenging when you do it for the first time, but later it will be always the same.
    </p>
  </div>
</div>
