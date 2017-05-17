<div class="row">
  <div class="col-md-12">
    <h1>Use Case: Biometric Data Monitoring and Wearable Devices</h1>
    <p>
      The wearable device market is growing. New devices and new integrations are release every day.
      And more health monitoring capabilities are added to the latest mobile phones. Are you planning
      to enter this market? Check what the EHRServer can do for your project.
    </p>
    <p>
      Your next physical activity monitoring, sleep quality tracking or weight control app
      can benefit from the use of the EHRServer as a data aggregator backend, and using EHRServer
      queries to generate automatic alerts, recommendations or reminders for your users.
    </p>
    <p>
      EHRServer is an ideal tool for storing biometric data coming from any kind of any monitoring app,
      and by creating smart queries you can get aggregated and more meaningful information out the EHRServer
      and into your applications.
    </p>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>Standard architeture for biometrical monitoring and with wearable devices</h2>
    <p>
      These are the main components of any wearable monitoring system:
    </p>
    <ol>
      <li>Monitoring Device: is the device that contains the sensors that can read biometric data from a person</li>
      <li>Local Broker: is an Internet enabled device (phone, laptop, tablet) that is locally connected to the Monitoring Device (e.g. by Bluetooth))</li>
      <li>Remote API: the Local Broker caches data from the Monitoring Device and sends it to a secure API, in general to store the biometric data on the cloud</li>
      <li>Cloud Server: is behind the Remote API, receives and stores data, can further process, analyze, and aggergate biometric data, and allows to query it</li>
      <li>Services: the system can provide different kinds of services based on the information gathered from Monitoring Devices and knowleg added on the Cloud Server processing step</li>
      <li>Data Visualization Apps: sometimes the app on the Local Broker (e.g. a phone) allows to visualize the gathered information after processing it in the
      Cloud Server, but also other devices can be used for that! A Web App accessible from a desktop computer will be able to display the same information in
      different ways with less visualization restrictions as we have on mobile phones because of the screen size</li>
    </ol>
    <div align="center">
      <img src="<?=$_base_dir?>/images/Wearables_Use_Case_Diagram.png" class="img-responsive" />
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>The EHRServer role on this environment</h2>
    <p>
      The main role of the EHRServer in such environment is to provide a simple, clean, standard-based API to allow Local Brokers to commit data to be stored in the cloud.
      The EHRServer is itself a Cloud Server, and allows to query the committed data with different levels of aggregation (get full sets of data, get data points from different sets, etc.)
      and with different ways of grouping (time series, by containing record, etc.). This allows to build more Services over the same data sets, and create Data Visualization Apps.
    </p>
    <p>
      With the help of the EHRServer you can reduce the time to market of your solutions, while getting a powerful backend to support your platform.
    </p>
  </div>
</div>
