
<div class="row">
  <div class="col-md-12">
    <h1>Use Case: Clinical Decision Support</h1>
    <p>
      Clinical Decision Support (CDS) in a nutshell is the set of tools, technologies and processes that allows to define
      and use rules to generate meaningful alerts, recommendations or reminders to help clinicians on their decision
      process when treating a patient.
    </p>
    <p>
      CDS should be a goal of any EHR / EMR project, because it has a direct incidence in the quality of care. Think for
      a moment on a perfect EHR that has all the patient's data in it. That allow a doctor to access all that data. But
      a normal person can't process that kind of information in a short period of time without any assistance. And even
      more, can't make meaningful correlations between clinical data from different points in time. Thata is why CDS is
      needed: to find correlations that might mean something to a clinician that is in the office with the patient. And
      the system should be smart enough to show those correlations in terms that the doctor can interpret and make an
      informed decision over the patient's health care plans and wellness goals. So data is not enought, we need rules!
    </p>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h1>Rules for CDS: a basic scenario</h1>
    <p>
      We created working rules for CDS as an example on our EHRServer Groovy Client project (for techies: read the code,
      is well documented).
    </p>
    <p>
      <a href="https://github.com/ppazos/cabolabs-ehrserver-groovy/tree/master/src/com/cabolabs/cds" target="_blank">Clinical Decision Support example</a>.
    </p>
    <p>
      This example shows how the EHRServer can be used as a data source when a set of rules is evaluated to generate
      alerts, recommendations and reminders. A rule is a container of logic that is evaluated against a data set. That
      data set comes from the patient's clinical information in the EHRServer. If the rule conditions are met, a set of
      actions are executed. An action can be anything: send an email, an SMS, create a record in a database, invoke an
      external service, or just logging data into a text file. Any of those outcomes can be the alert, recommendation or
      reminder itself, or a trigger to an external system to show that to the doctor.
    </p>
    <p>
      Our <a href="https://github.com/ppazos/cabolabs-ehrserver-groovy/blob/master/src/com/cabolabs/cds/CDSRule.groovy" target="_blank">simple rule</a>
      checks if the patient has more than five records of high blood pressure in the last 12 months, and on that case,
      executes an action. The action just logs information into the console, but remember this can be anything you
      want and you can write the code for new actions. The records associated with the high blood pressure, are
      retrieved from the EHRServer by executing a query. We created the query from the EHRServer Web Console.
      It returns all the clinical documents that contain a record of systolic blood pressure above 140mmHg or
      diastolic blood pressure above 90mmHg. The query looks like this:
      <pre style="white-space:pre; background:none; padding:0; margin:1.5em 0;"><code class="json hljs">{
  "uid": "7d125791-9f16-4b9b-a121-8b1238b59cb5",
  "name": "High Blood Pressure",
  "format": "json",
  "type": "composition",
  "author": {
    ...
  },
  "criteriaLogic": "OR",
  "templateId": null,
  "criteria": [
    {
      "archetypeId": "openEHR-EHR-OBSERVATION.blood_pressure.v1",
      "path": "/data[at0001]/events[at0006]/data[at0003]/items[at0004]/value",
      "conditions": {
        "magnitude": {
          "gt": [
            140
          ]
        },
        "units": {
          "eq": "mm[Hg]"
        }
      }
    },
    {
      "archetypeId": "openEHR-EHR-OBSERVATION.blood_pressure.v1",
      "path": "/data[at0001]/events[at0006]/data[at0003]/items[at0005]/value",
      "conditions": {
        "magnitude": {
          "gt": [
            90
          ]
        },
        "units": {
          "eq": "mm[Hg]"
        }
      }
    }
  ]
}</code></pre>
    </p>
    <p>
      Then the <a href="https://github.com/ppazos/cabolabs-ehrserver-groovy/blob/master/src/com/cabolabs/cds/CDSSuite.groovy" target="_blank">rule is initialized</a>
      wiht the EHR id of the patient, the actions that will take place if the rule conditions are met, and it runs the rule evaluation. In just four lines of code!
    </p>
    <p>
      We can make things more complicated by executing the rule for every EHR in the EHRServer, just by getting all the EHR ids from the API, then execute the
      same logic for each EHR. That way the system can create alerts, reminders and recommendations for every patient, with updated data on each run. Of course
      it should be smart enought not to send the same alert twice, but we'll let that for you.
    </p>
    <p>
      The role of the EHRServer on this scenario is fundamentalin two aspects: 1. you can create queries over the
      exact data that you need to evaluated the rules, 2. API access to query execution makes it very easy to integrate
      the EHR data into the CDS rule logic. Few lines of code and you are done.
    </p>
  </div>
</div>

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.11.0/styles/default.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.11.0/highlight.min.js"></script>
<script>hljs.initHighlightingOnLoad();</script>


