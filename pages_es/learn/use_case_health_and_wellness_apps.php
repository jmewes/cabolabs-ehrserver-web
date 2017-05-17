<div class="row">
  <div class="col-md-12">
    <h1>Use Case: Health and Wellness Apps</h1>
    <p>
      Development of web and mobile apps for clinicians and patients had an explosive growth in the last years.
      Most of those apps are custom built, isolated from the eHealth ecosystem, and are not compliant with any standard,
      so the capacity of making a real impact on people health is reduced dramatically. One basic requirement of these
      kind of apps is to be integrated into the health system. How information is shared between clinicians and patients
      is fundamental to make any meaningful impact.
    </p>
    <p>
      The EHRServer can help on two specific areas to enable your app on making a reall impact.
      One is making your apps interoperable by means of using standardized health information.
      The other one is by enabling health data sharing between your apps and also with apps from other vendors.
    </p>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>The physical activity tracking app journey</h2>
    <p>
      There are thousands of mobile apps focused on tracking physical activity. Most track excersice in terms of duration,
      distance, effort, and also allows to record your weight changes. Based on that information, and other data
      like your age and gender, the apps can estimate the calories consumed during the exercise. This is so common
      that should be a health app design pattern.
    </p>
    <p>
      From the user perspective, they can see each session of physical activity, with the data afore mentioned, and
      some information across sessions, like charts for the consumed calories per session in comparison with your
      weight loss. But how those pretty charts allow the users to improve their behavior to reach a goal? How can
      goals be expressed in isolation without any kind of clinical overview of the process of lossing weight or just
      staying fit?
    </p>
    <p>
      We need to add some features to integrate the health providers. Great! let's create a web app for clinicians,
      were they can see physical activity data of their patients and send recommendations and set goals to them.
      Now our architecture gets more complex. We get physical activity data on the mobile app, we need to send it
      to a server through an API, and the clinician web app needs to read the data from the server, and create
      recommendations and goals, also through an API. But we should allow users to get those on the mobile app.
      Yes you guess it: through an API.
    </p>
    <p>
      The complexity of such system is the minimum architecture you need to build to make a small impact into
      someone's life. The main idea is to allow better communication between the provider and the patient, and
      that can only be achieved with interoperablity and app/data integration.
      <div align="center">
        <img src="<?=$_base_dir?>/images/Apps_Use_Case_Diagram.png" class="img-responsive" />
      </div>
    </p>
    <p>
      On this scenario, the EHRServer fits perfectly as the backend repository and API to share data between the
      applications, and also to scale, integrating more apps and provinding more services in the future. For example,
      you can add conditions to patients (high blood pressure, obesity, pregnancy, hearth problems, etc.), and
      associate certain goals and recommendations with those conditions, and track biometric values in association
      with the conditions. Or allowing doctors to make medication prescriptions through the web app. The EHRServer
      can store and share that information between those apps almost effortlessly.
    </p>
  </div>
</div>
