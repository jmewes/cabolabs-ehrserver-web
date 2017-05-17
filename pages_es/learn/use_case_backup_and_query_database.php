<div class="row">
  <div class="col-md-12">
    <h1>Use Case: Backup and Query Clinical Database</h1>
    <p>
      Most working EHR / EMR / PHR software already have good ways of storing clinical information in
      terms of the requirements they satisfy for their specific types of users. Repositories might not be 
      standard-based, might not help on interoperability, but are good enough for a specific context.
    </p>
    <p>
      In that context, the EHRServer can help on providing the backup service for the main clinical database.
      Having a backup is a basic requirement of any system that is critical to support health care proecesses
      and manages sensible information.
      If there are many databases, the <?=a('EHRServer can work as an integrator', 'learn/use_case_shared_health_recods')?>.
    </p>
    <p>
      Since the EHRServer is not only a database, but a smart clinical data repository, when you start using
      it as backup, you will be able to create new services over it:
      <ul>
        <li><?=a('Integrating visualizations of clinical data on mobile apps','learn/use_case_health_and_wellness_apps')?>,</li>
        <li><?=a('enabling Clinical Decision Support','learn/use_case_clinical_decision_support')?>,</li>
        <li><?=a('aggregating data from external systems','learn/use_case_shared_health_recods')?> or</li>
        <li><?=a('biometric monitoring devices','learn/use_case_monitoring_and_wearables')?>,</li>
        <li>or just creating new data services for your existing EHR.</li>
      </ul>
    </p>
    <p>
      The EHRServer is the perfect companion for your existing applications, increasing the rebustness of your solution,
      and enabling innovation.
    </p>
    
  </div>
</div>
