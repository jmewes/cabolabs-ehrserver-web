<div class="row">
  <div class="col-md-12">
    <h1>Use Case: Shared Health Records</h1>
    <p>
      In contexts of multiple disparate, heterogeneous and isolated clinical systems,
      data integration is a must to provide better care quality and to reduce
      administrative and maintenance costs of dealing with multiple systems to
      get back usable information.
    </p>
    <p>
      EHRServer is an ideal tool for centralizing the information that needs to be
      shared between clinicians, specialties, offices, and even with the patient through
      a PHR or a Patient Portal.
    </p>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>Steps to follow</h2>
    <ol>
      <li>
        <b>Analyze</b> which information should be shared between your systems, start small,
        focus on the basics: general encounters, vital signs, allergies and other diagnosis,
        family history, immunizations, etc.
      </li>
      <li>
        <b>Model</b> that information using openEHR.
        <a href="<?=$_base_dir?>/learn/openehr_fundamentals">Check the openEHR intro guide</a>.
        This will serve as a canonical model that will standardize the information from your
        different systems.
      </li>
      <li>
        <b>Transform</b> your data sources into canonical model instances. We have tools to help
        you on that process. Also a middleware like Mirth Connect (open source) can help you on
        the transformation task. Of course,
        <a href="http://cabolabs.com" target="_blank">we can help with this process</a>.
      </li>
      <li>
        <b>Commit</b/> <a href="<?=$_base_dir?>/learn/data_commit">send your instances to the EHRServer</a>
        to be persisted as part of each patient's EHR. Repeat until your current data is cimmitted.
        This is like a batch process to load historical data. Now the data is ready for quering!
      </li>
      <li>
        <b>Query</b> the data from any external system, even from systems that are not part of
        the data sources! Create some basic queries over your data, like get all the vital signs
        from an EHR. That can be done easily using the 
        <a href="<?=$_base_dir?>/learn/ehrserver_web_console">Web Console of the EHRServer</a>, yes from a GUI!
        The result of each query will be consistent, openEHR compliant, and you can choose between
        JSON and XML formats to get your data for processing (yes you can do things like evaluating
        rules for clinical decision support), analysis, or just nice visualizations. If you don't
        want to query, you can get full clinical documents by their id in XML or JSON.
      </li>
      <li>
        <b>Integrate</b> this solution in your environment to synchronize data regularly, so you get
        current data when your systems and apps execute the queries. The first commit round is the
        heavy loading, now it's time to receive data online instead of a batch process.
      </li>
    </ol>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>Open a world of possibilities</h2>
    <p>
      Following those steps you didn't just loaded data into another database, you standardized
      and integrated data from heterogeneous, and maybe inconsistent / incompatible clinical systems.
      This opens a whole wolrd of new possibilities! Sharing clinical data between your systems
      is the first step, but you can add more apps that use queries to access existing data to create
      more services to clinicians and patients, explore data visualizations, integrate this data into
      clinical decision support tools, and more. Your imagination is the limit.
    </p>
    <p>
      Also, following the same setps you can scale your integration in terms of the information that
      is being shared, sharing more information and creating new queries over data. With that you can
      offer new services and continously improve your app ecosystem. Keep this mantra in mind: Better
      apps for clinicians, better access to meaningful clinical information, better care for patients.
    </p>
  </div>
</div>

