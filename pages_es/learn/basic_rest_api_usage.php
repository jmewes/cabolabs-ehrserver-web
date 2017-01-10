<div class="row">
  <div class="col-md-12">
    <h1>Basic REST API Usage</h1>
    <p>On this guide we show the basic flow that most EHRServer clients need to implement.
    This is the most common flow:</p>
    <ol>
      <li>Authentication</li>
      <li>EHR anagement</li>
      <li>Commit data</li>
      <li>Query data</li>
    </ol>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>1. Authentication</h2>
    <p>To use the REST API, authentication is required. There are two ways of authenticate
    on the API: user authentication and app authentication.</p>
    <h3>User authentication</h3>
    <p>Users will authenticate using the login service, and will receive an authorization
    token as a result. That token will be used on every request to the API. The only service
    that doesn't require the authorization token is the login itself.</p>
    <h3>App authentication</h3>
    <p>When users are not managed in the EHRServer, but in an external app, the app will use
    an API key to send requests to the services. The API key plays the role of the user
    authorization token, but is generated for the whole app, not per user. Only users with
    management roles can generate API keys.</p>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>2. EHR Management</h2>
    <p>Since the EHRServer data is 100% anonymous, there is no demographic patient data
    actually stored by the EHRServer. In other words, patient data should be managed by
    an external system, like an MPI. Through the REST API, EHRs can be create for those
    patients managed externally. The EHRServer will manage all the clinical data: the
    EHRs, clinical documents, and data points.</p>
    <h3>Create EHRs for your patients</h3>
    <p>User the create EHR service to create an EHR for a patient manged externally, you
    only need to provide the patient's ID, and the service will return the EHR UID of the
    EHR you just created. So you can store that UID as a reference to the EHR to access it
    later, or you can use your patient's ID to access it.</p>
    <h3>List EHRs</h3>
    <p>Another service allows you to acces all the EHRs created in the EHRServer for each
    one of your patients.</p>
    <h3>Access one specific EHR</h3>
    <p>There are two services to access an specific EHR. The first one allows you to access
    the EHR by it's UID. The other one returns an EHR but using the patient's ID as input parameter.</p>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>3. Commit data</h2>
    <p>To store clinical documents on a patient's EHR, you need to use the commit service.
    One one commit you can send one or more clinical documents for the same patient / EHR.
    It is not possible to mix documents of different patients on the same commit. When documents
    are received, their data is indexed to allow querying. Choosing to commit documents
    individually or by sets might depend on how your app works.</p>
    <h3>Commit per document</h3>
    <p>Client apps can commit each document, created by a health care provider, in a separate
    commit call. For complex flows this option might be simpler to implement by client apps.</p>
    <h3>Commit per clinical session</h3>
    <p>A clinical session is any type of contact or encounter with a health care provider that
    spans for a period of time. On a single clinical session, serveral documents can be created.
    For example, a GP encounter might be recorded in one document, a lab order on another document,
    a medication prescription on another document, and so on. Think of documents as separated pieces
    of paper that are signed individually. So when committing, client apps can send all the docs
    created on the same clinical session, making a 1-to-1 correspondence between a clinical session
    and a commit. This makes the audit process a lot easier.</p>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>4. Query data</h2>
    <p>Once the EHRs have some data on them, client apps can use queries to access and pull
    data out the EHRServer. Queries are created via the Web Console, and are executed through
    the REST API. There are two types of queries, the ones that return clinical documents and
    the ones that return single data points. The advantage of the queries is that different data
    structures are returned in a standardized way.</p>
    <h3>Query documents</h3>
    <p>These queries will return document indexes (references) or full documents, using a
    criteria to filter the results. The result can include documents from one EHR or from
    many EHRs. This is useful to display documents that comply with certain condition, or
    to create rules based on those conditiosn, for example if the condition is "systolic
    blood pressure &gt; 140", all the resulting documents will be only the ones that contain
    a record of high blood pressure, and if there are more than N documents in that scenario,
    the client app can show an alert to the physician. So this enables Clinical Desicion Support.</p>
    <h3>Query data points (or data values)</h3>
    <p>This type of query returns some data points selected in the query. So a query can
    select all the vital signs, and return just the numeric measures, or return all the
    diagnoses for a patient. This is usefull to display numeric data in charts, or to do
    some operations / post-processing over that data. For example when client apps need to
    caculate some indicators (average, medians, etc.) or just count the number or times
    a certain code repeats (like the diagnosis of "Zika virus inffection").</p>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>Conclusion</h2>
    <p>This is the basic flow of calls to the EHRServer's REST API. There are more services
    to access more information, but might not be used in most of the applications created
    over the EHRServer. This guide doesn't include the technidal details about how to use
    the REST API, that is well documented on the
    <a href="https://docs.google.com/viewerng/viewer?url=http://cabolabs.com/software_resources/EHRServer_v0.8.pdf" target="_blank">EHRServer Guide</a>.</p>
  </div>
</div>