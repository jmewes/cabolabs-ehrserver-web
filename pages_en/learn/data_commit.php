<div class="row">
  <div class="col-md-12">
    <h1>EHRServer Data Commit Guide</h1>
    <p>
      This guide will help you understand how to store clinical data in the EHRServer,
      using the commit service, and diferent ways to test that service.
    </p>
    <ol>
      <li>Introduction</li>
      <li>Required resources</li>
      <li>Step by step guide (simplified)</li>
      <li>Detailed steps</li>
      <li>Process to follow</li>
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
      <li><a href="https://github.com/ppazos/cabolabs-ehrserver/blob/master/api/EHRServer_v1.1_insomnia_5.4.json" target="_blank">Get the test Insomnia Script that has the needed requests already configured</a></li>
      <li><a href="https://github.com/ppazos/EHRCommitter" target="_blank">Install EHRCommitter as an alternative method of committing XML instances to the EHRServer</a></li>
    </ol>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>4. Detailed steps</h2>
    
    <h3>Get sample Operational Templates (OPT)</h3>
    <p>
      The Operational Templates are definitions of clinical documents that follow the openEHR standard.
      The EHRServer uses OPTs to understand the structure and constraints of each clinical document.
      All clinical documents committed to the EHRServer should comply with one OPT.
    </p>
    <p>
      You can create your OPTs using tools like Archetype Editor + Template Designer, or LinkEHR.
      For now we will just use the ones created by CaboLabs for testing purposes. You can get the OPTs from here:<br/><br/>
      <a href="https://github.com/ppazos/cabolabs-ehrserver/tree/master/opts/base_opts" target="_blank">https://github.com/ppazos/cabolabs-ehrserver/tree/master/opts/base_opts</a>
    </p>
    
    <h3>Get openEHR-OPT to generate XML instances from OPTs</h3>
    <p>
      At CaboLabs we created this tool to help us on working with Operational Templates and to help
      us testing the EHRServer. This tool is open source and free to use. We will use it to generate
      clinical documents with dummy data that comply with an OPT. And we will use those documents to
      test the commit service on the EHRServer's REST API. Download or clone the whole project. You
      will need Java 7 or superior, and Groovy
      (<a href="http://www.groovy-lang.org/download.html" target="_blank">http://www.groovy-lang.org/download.html</a>)
      to run it. When you have Groovy installed and the openEHR-OPT project downloaded and uncompressed, change
      the opt.bat file with the path where you have Groovy. The openEHR-OPT project is here:<br/><br/>

      <a href="https://github.com/ppazos/openEHR-OPT" target="_blank">https://github.com/ppazos/openEHR-OPT</a><br/><br/>

      If you run opt.bat from the console and you get a "usage" message, the tool is working OK.
    </p>

    <h3>Install Insomnia REST Client to act as client of the EHRServer to commit data as XML instances</h3>
    <p>
      Insomnia is a great tool for testing REST APIs, we use is a lot to test the EHRServer's REST API.
      On this guide we will use Insomnia as one of the two methods to commit clinical data to the EHRServer.<br/><br/>

      <a href="https://insomnia.rest/" target="_blank">https://insomnia.rest/</a>
    </p>
    
    <h3>Get the test Insomnia Script that has the needed requests already configured</h3>
    <p>
      Since we use Insomnia to test the EHRServer's REST API, we created a script that has all the calls
      to the API. You can use it to authenticate and commit data. Just download the script from the link
      below and import it on Insomnia. If you see the API requests on the left menu, the import worked OK!
      All the requests will be grouped by a Request Group called "EHRServer local".<br/><br/>

      <a href="https://github.com/ppazos/cabolabs-ehrserver/blob/master/ehrserver_rest_insomnia.json" target="_blank">https://github.com/ppazos/cabolabs-ehrserver/blob/master/ehrserver_rest_insomnia.json</a>
    </p>
    
    <h3>Install EHRCommitter as an alternative method of committing XML instances to the EHRServer</h3>
    <p>
      This is a web app we developed to help us test the data commit to the EHRServer, and will be our
      second method to test how to send data to the EHRServer. Since this is a web app, it has some
      requirements. First you'll need to have Java 7 or superior. Second you'll need to download and
      install Grails v2.5.6 (https://grails.org/download.html). It needs to be v2.5.6!. It can also be
      installed through SDKMAN, check that on the download page. Once you have Grails installed, download
      or clone the EHRCommitter project from here:<br/><br/>

      <a href="https://github.com/ppazos/EHRCommitter" target="_blank">https://github.com/ppazos/EHRCommitter</a>
    </p>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>5. Process to follow</h2>
    <p>
      For the test you'll need to have EHRServer installed on your machine. You can also have an account on our <a href="<?=$_base_dir?>/pricing">production server</a>.
      
      To install EHRServer locally, check section 2 of the <a href="https://www.cabolabs.com/en/products/ehrserver" target="_blank">EHRServer guide</a>.
    </p>
    
    <h3>Using the Insomnia Script</h3>
    <p>
      First, check that the Insomnia script you imported is pointing to the right server URL. Go to the
      Request Group "EHRServer local", click on the down arrow that appears on the right, click on
      "Edit Environment". It will show a JSON with a lot of URLs, be sure that the correct URL is set to
      "base_url", for a local server the URL will be "http://localhost:8090/ehr/api/v1".
    </p>
    <p>
      Then check that your credentials work. Go to the "login" request under the "EHRServer local"
      Request Group, click on it, click on "PARAMS", and change the data there with your credentials
      (username, password and organization number). Keep the "format" as JSON. Finally, click on "Send"
      on the opt right of the window. The RESPONSE should show you a token if the login was correct.
      Copy the value of the token, we will use it for the commit.
    </p>
    <p>
      Now we will prepare our commit request. Go to the "commit empty versions" request, when you put
      the mouse over it you will see a gear, click on it, then click "Duplicate". We will use this copy
      as our test request. Rename the copy as "commit test 1". With the new request selected, go to the
      HEADERS tab and paste the token you copied from the login response. Note that the value of the
      "Authorization" header should be "Bearer _your_token_". We will leave this request as it is. Now
      we will focus on creating an EHR to commit the data to and a clinical document that will contain
      the data. With those elements our request will be complete.
    </p>
    <p>
      To create an EHR, login into the server and go to the EHRs section and click on "Create EHR".
      Just fill in anything to the Subject ID (external patient ID) and click on Save. The EHRServer will
      assign an UID to the EHR, copy it. Go back to Insomnia, select the "commit test 1" request, and go to
      the PARAMS tab. Paste the value of the EHR UID in the ehrUid param.
    </p>
    <p>
      Finally we will create a sample document with dummy data to commit it to the EHRServer. First choose
      one of the OPTs downloaded on the first step and put it on a simple path like "C:\opts". The open a
      console, go to the folder where the openEHR-OPT is, and run this command:

      <center>opt ingen C:\opts\Review.opt C:\opts 1 version</center><br/>
      
      <blockquote>
        Explanation of the command:<br/><br/>

        <dl>
          <dt>opt</dt>
          <dd>main command</dd>
          <dt>ingen</dt>
          <dd>action of generating a clinical document instance from an OPT</dd>
          <dt>C:\opts\Review.opt</dt>
          <dd>OPT to be used to define the structure of the instance generated</dd>
          <dt>C:\opts</dt>
          <dd>destination folder, where the instance will be stored</dd>
          <dt>1</dt>
          <dd>number of instances that will be generated, you can create more instances and do a heavy load test</dd>
          <dt>version</dt>
          <dd>is the structure that will be generated, "version" is a clinical document with versioning information,
          "composition" is a clinical document without the versioning info, and "version_committer" is a version with metadata
          to be used on the EHRCommitter (we will see that later).</dd>
        </dl>
      </blockquote>
    </p>
    <p>
      The command will generate a file like this: C:\opts\Review_20170216011540_1.xml (OPT_date_instanceNumber.xml).
    </p>
    <p>
      Open the generated file and copy it's content. It should start with &lt;version xmlns=...&gt;. Go back to Insomnia,
      go to the "commit test 1" request, and click on the BODY tab. You will see that the body has a &lt;versions xmlns...&gt;
      XML node. Paste the XML from the clinical document between the &lt;versions&gt; ... &lt;/versions&gt; tags. You will end up
      with something like this:<br/>
      <pre>
&lt;versions xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xmlns="http://schemas.openehr.org/v1"&gt;
    &lt;version xmlns="http://schemas.openehr.org/v1"
                xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
                xsi:type="ORIGINAL_VERSION"&gt;
  &lt;contribution&gt;
  ....
   &lt;/version&gt;
&lt;/versions&gt;
</pre><br/>

       Delete the xmlns* attributes from version, keeping xsi:type:<br/><br/>
<pre>
&lt;versions xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xmlns="http://schemas.openehr.org/v1"&gt;
    &lt;version xsi:type="ORIGINAL_VERSION"&gt;
  &lt;contribution&gt;
  ....
   &lt;/version&gt;
&lt;/versions&gt;
      </pre>
    </p>
    <p>
      This is because a commit can contain many clinical documents. We will explain the use case of that
      in another guide. For now we will commit just one document (or one version).
    </p>
    <p>
      Now our request is complete! Click on "Send" to test it and check the response.
    </p>
    <p>
      If the response looks like the XML below, it means your commit was accepted:
    </p>
    
    <pre>
&lt;result&gt;
  &lt;type&gt;AA&lt;/type&gt;
  &lt;message&gt;Se han recibido correctamente todas las versiones para el EHR c35dfe02-4ece-465e-9433-0540c6d95f3f&lt;/message&gt;
&lt;/result&gt;
    </pre><br/><br/>
    
    <p>
      Go to the EHRServer's Administrative Console to verify the commit. After you login into the server, go to
      EHRs, click on the EHR that you used for the commit. Below the EHR data you will see a list of
      Contributions that represent all the changes to that EHR. The latest contribution should be our test.
      If you click over the XML icon, you will see exactly the same XML generated from the openEHR-OPT project,
      and if you click on the file icon, you will see the contents of the clinical document in a human-friendly
      format, but since the data is autogenerated, it will not make much sense. You can modify the data in
      the XML to make it more realistic.
    </p>
    <p>
      Congratulations, you committed clinical data to the EHRServer!<br/><br/>
    </p>
    <blockquote>
      Note: you will not be able to commit the same clinical document twice, since the EHRServer will consider
      that as a duplicate. What you can do is generate more instances in the openEHR-OPT and commit one by one,
      or you can change the contribution id and version uid in order to avoid the duplication check.
    </blockquote>
    <br/>
    
    
    <h3>Using the EHRCommitter</h3>
    <p>
      Generating the clinical document with annotations
    </p>
    <p>
      This part assumes you already have a user created in the server, and that you created an EHR
      (see previous section).
    </p>
    <p>
      In the previous section we used the openEHR-OPT tool to generate a clinical document in XML (formally
      an openEHR VERSION instance). We used this command:
      <center>opt ingen C:\opts\Review.opt C:\opts 1 version</center><br/>
    </p>
    <p>
      Now we are going to use the same command changing the last parameter to "version_committer".
      <center>opt ingen C:\opts\Review.opt C:\opts 1 version_committer</center><br/>
    </p>
    <p>
      This will generate an XML like before, but it will have metatags instead of data. For example the
      element a) of the previously generated XML, will look like b) in the one with metatags. See below:
    </p>
    <p>
      a)
      <pre>
      &lt;contribution&gt;
         &lt;id xsi:type="HIER_OBJECT_ID"&gt;
            &lt;value&gt;a48e6a8c-a03e-4b04-bcff-54f806337f64&lt;/value&gt;
         &lt;/id&gt;
         &lt;namespace&gt;EHR::COMMON&lt;/namespace&gt;
         &lt;type&gt;CONTRIBUTION&lt;/type&gt;
      &lt;/contribution&gt;
      </pre>
      b)
      <pre>
      &lt;contribution&gt;
         &lt;id xsi:type="HIER_OBJECT_ID"&gt;
            &lt;value&gt;[[CONTRIBUTION:::UUID:::ANY]]&lt;/value&gt;
         &lt;/id&gt;
         &lt;namespace&gt;EHR::COMMON&lt;/namespace&gt;
         &lt;type&gt;CONTRIBUTION&lt;/type&gt;
      &lt;/contribution&gt;
      </pre>
      <br/>
    </p>
    <p>
      Let's say you installed the EHRCommitter in "C:\committer", copy the generated XML to "C:\committer\sample_instances".
    </p>
    <p>
      Now let's run the EHRCommitter. Open a console, go to "C:\committer" and execute "grails prod run-app".
      Of course this supposes that you have Grails 2.5.6 and the EHRCommitter installed. The application
      will run on: http://localhost:8080/EhrCommitter
    </p>
    <p>
      Open the address of the committer in your browser and login with your credentials from the EHRServer.
      The EHRCommitter uses the REST API of the EHRServer to authenticate the user and get the EHRs you created
      from the Web Console. The EHRCommitter will display a list of all the instances with metatags, you will
      see the one we created on the previous step. Click on that one.
    </p>
    <p>
      A form with random data is displayed. Each field is defined by one metatag in the XML. The first field
      is a selector, click on it to select the EHR that you want to commit data to. That is the EHR you created
      from the Web Console. Then you can change the data on the form fields and submit it. The submit will take
      your data, create a valid VERSION instance in XML, and commit that instance to the EHRServer like we did
      from the Insomnia REST Client on the previous section, but now the commit is done by an app.
    </p>
    <p>
      The nice thing about using the EHRCommitter is that you can generate as many commits and all will have
      different IDs/UIDs and data. When testing with Insomnia, you need to manually change the IDs and data
      if you want to commit two or more documents. On the other hand, this process requires to install more
      software than the Insomnia test.
    </p>
    <p>
      Go to the EHRServer to check your commits!
    </p>
  </div>
</div>
