<div class="row">
  <div class="col-md-12">
    <h1>openEHR XML Guides: using DV_MULTIMEDIA</h1>
    <p>
      On this guide we'll create a step by step test case to define, create instances, commit and query data of type
      <a href="http://www.openehr.org/releases/RM/Release-1.0.2/docs/data_types/data_types.html#_dv_multimedia_class" target="_blank">DV_MULTIMEDIA</a>.
    </p>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>1. Creating archetypes</h2>
    <p>
      We'll create archetypes to thest the simplest structure that contains a DV_MULTIMEDIA node. So we'll start by creating
      an EVALUATION archetype with just one ELEMENT, which ELEMENT.value has type DV_MULTIMEDIA. For this we used the
      <a href="https://www.openehr.org/downloads/modellingtools" target="_blank">Archetype Editor</a> (Windows only).
    </p>
    <p>
      Then we create another archetype for the clinical document (COMPOSITION) that will contain the EVALUATION archetype
      on it's content.
    </p>
    <p>
      The results:
      <ul>
        <li><?=a('openEHR-EHR-EVALUATION.sample_multimedia.v1.adl', 'pages_en/learn/xml_guides/openEHR-EHR-EVALUATION.sample_multimedia.v1.adl', true)?></li>
        <li><?=a('openEHR-EHR-COMPOSITION.sample_multimedia.v1.adl', 'pages_en/learn/xml_guides/openEHR-EHR-COMPOSITION.sample_multimedia.v1.adl', true)?></li>
      </ul>
    </p>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>2. Creating a template</h2>
    <p>
      Using the <a href="https://www.openehr.org/downloads/modellingtools" target="_blank">Template Designer</a>,
      we created a template (OET) and then exported the correspondent Operational Template (OPT). That is what we
      need to work with the EHRServer. To create the template the archetypes should be copied to the selected
      repository in the Template Designer, then is al drag and drop. We didn't change any constraints, just set
      the template name to "sample_multimedia.en.v1".
    </p>
    <p>
      The results:
      <ul>
        <li><?=a('sample_multimedia.en.v1.oet', 'pages_en/learn/xml_guides/sample_multimedia.en.v1.oet', true)?></li>
        <li><?=a('sample_multimedia.en.v1.opt', 'pages_en/learn/xml_guides/sample_multimedia.en.v1.opt', true)?></li>
      </ul>
    </p>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>3. Generating sample document instances</h2>
    <p>
      The generated OPT (sample_multimedia.en.v1.opt) will be used to generate some sample data to create our
      commit to the EHRServer. For doing that, just download our
      <a href="https://github.com/ppazos/openEHR-OPT" target="_blank">openEHR-OPT project</a>. We'll use the
      ingen command to generate an clinical document instance with random data from the OPT.
    </p>
    <p>
      For this we run: <code>opt ingen sample_multimedia.en.v1.opt . 1 version</code>, that will generate an XML,
      that should be valid against the
      <a href="https://github.com/ppazos/cabolabs-ehrserver/blob/master/xsd/Version.xsd" target="_blank">openEHR XML Schema</a>.
      We checked the validation just in case and it is valid.
    </p>
    <p>
      The results:
      <ul>
        <li><?=a('sample_multimedia.en.v1_20180309121724_1.xml', 'pages_en/learn/xml_guides/sample_multimedia.en.v1_20180309121724_1.xml', true)?></li>
      </ul>
    </p>
    <p>
      The generated XML instance will contain the full VERSION and COMPOSITION structures, and you'll see
      the DV_MULTIMEDIA node generated with random data (it's an image). The multimedia ELEMENT looks like this:
      
      <pre>
&lt;items archetype_node_id="at0002" xsi:type="ELEMENT"&gt;
 &lt;name&gt;
   &lt;value&gt;Multimedia node&lt;/value&gt;
 &lt;/name&gt;
 &lt;value xsi:type="DV_MULTIMEDIA"&gt;
   &lt;data&gt;iVBORw0KGgoAAAANSUhEUgAAA...&lt;/data&gt;
   &lt;media_type&gt;
     &lt;terminology_id&gt;
       &lt;value&gt;IANA_media-types&lt;/value&gt;
     &lt;/terminology_id&gt;
     &lt;code_string&gt;image/jpeg&lt;/code_string&gt;
   &lt;/media_type&gt;
   &lt;size&gt;104784&lt;/size&gt;
 &lt;/value&gt;
&lt;/items&gt;</pre><br/>
      
      Note: the data was trimmed for brevity, you will find the full data on the XML sample above.
    </p>
    <p>
      Some considerations about the DV_MULTIMEDIA structure in XML:
      <ol>
        <li>In XML, DV_MULTIMEDIA.data should be encoded in base 64 to avoid breaking the XML,
        since the binary data can contain any character.</li>
        <li>DV_MULTIMEDIA.size should be the size in bytes of the data.</li>
        <li>DV_MULTIMEDIA.media_type.code_string should be one of the valid media type values from the
        <a href="https://github.com/openEHR/terminology/blob/master/openEHR_RM/openehr_external_terminologies.xml#L399" target="_blank">openEHR terminology</a></li>
        <li>The media type codes that should be used for multimedia are the ones for binary data (images, sounds, videos, PDF, etc). For text types, the
        <a href="http://www.openehr.org/releases/RM/Release-1.0.2/docs/data_types/data_types.html#_dv_parsable_class" target="_blank">DV_PARSABLE</a> datatyle should be used.</li>
        <li><a href="http://www.openehr.org/releases/RM/Release-1.0.2/docs/data_types/data_types.html#_dv_multimedia_class" target="_blank">DV_MULTIMEDIA has an uri attribute</a> that allows to reference external multimedia objects, that can be used in case you don't want to store the objects data into the database.</li>
      </ol>
    </p>

  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>4. Preparing the commit</h2>
    <p>
      First, we need to load the OPT into the EHRServer. This is done in the EHRServer Web Console &rsaquo; Templates &rsaquo; <span class="fa fa-upload fa-fw" aria-hidden="true"></span>.
      This should be done on your <a href="https://cloudehrserver.com/learn/try_it" target="_blank">local installation</a> or on the CloudEHRServer by
      <a href="https://cloudehrserver.com/pricing" target="_blank">getting a subscription</a>.
    </p>
    <p>
      Once the OPT is loaded, preparte the XML for the commit. You can <a href="https://cloudehrserver.com/learn/data_commit" target="_blank">check this guide</a> about the commit process.
      Basically you need to edit the <?=a('XML generated by "opt ingen"', 'pages_en/learn/xml_guides/sample_multimedia.en.v1_20180309121724_1.xml', true)?> adding a "versions" element as
      envelope. The resulting XML should look like this:
      
      <pre>
&lt;?xml version="1.0" encoding="UTF-8" standalone="yes" ?&gt;
&lt;versions xmlns="http://schemas.openehr.org/v1" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"&gt;
  &lt;version xsi:type="ORIGINAL_VERSION"&gt;
  ...
  &lt;/version&gt;
&lt;/versions&gt;</pre>
    </p>
    <p>
      Full example of the commit XML:
      <ul>
        <li><?=a('sample_multimedia.en.v1_20180309121724_1_commit.xml', 'pages_en/learn/xml_guides/sample_multimedia.en.v1_20180309121724_1_commit.xml', true)?></li>
      </ul>
    </p>
  </div>
</div>
    
<div class="row">
  <div class="col-md-12">
    <h2>5. Doing the commit</h2>
    <p>
      Then use <a href="https://insomnia.rest/" target="_blank">Insomnia REST Client</a> to do the commit. We have an 
      <a href="https://github.com/ppazos/cabolabs-ehrserver/blob/master/api/EHRServer_v1.2_insomnia_5.8.4.json" target="_blank">Insomnia test script with the REST API requests</a>
      needed, just import it into Insomina.
    </p>
    <p>
      Then look for the "compositions" folder, and the POST "ehrs/$uid/compositions" request in the Insomnia menu. On the request body, paste
      our modified XML (the one with the "versions" element as root). Before committing, you need to execute the authentication service first, that is under the "authentication" folder
      and is the "POST login JSON" request.
    </p>
    <p>
      Then back to the "ehrs/$uid/compositions" and send the request. The server will respond you with some feedback. You can send many requests,
      but you will need to change the "version.contribution.id.value" value, and the "version..uid.value" value (only the UUID part!, the full value has this format UUID::APP::VERSION).
      If you see the current requests from Insomnia, we use variables for that, so Insomnia generate different values on every request, very handy!
    </p>
    <p>
      Note: before doing any requests, double check the "base_url" is pointing to the server you want to access. There are many values set for different environments, for instance
      if you are running EHRServer in your machine, you can use the "EHRServer localhost" environment that has "base_url": "http://localhost:8090/ehr".
    </p>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>6. Querying DV_MULTIMEDIA data</h2>
    <p>
      In the EHRServer Web Console, goto Queries &rsaquo; <span class="fa fa-plus fa-fw" aria-hidden="true"></span> to create a new query. On the Query Builder, set a name for the
      query and choose type = composition. Then on the Template list select our template "sample_multimedia.en.v1", on the Concept list choose "openEHR-EHR-EVALUATION.sample_multimedia.v1"
      (that is the archetype ID), then on the Data point list you will see our DV_MULTIMEDIA node, select it. The Criteria Builder will appear, select the "mediaType" attribute to be
      equals to, and from the value list select "image/jpeg" (since our test contains that media type), then click on "Add criteria".
    </p>
    <p>
      Once our criteria is ready, go to the bottom of the page and click on "Test", that will show test options for the query. Just click on "Execute" and you will see the results:
      all the compositions (clinical documents) committed that contain a DV_MULTIMEDIA with mediaType = image/jpeg. If you save the query, it can be executed from the REST API.
    </p>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>7. Conclusion</h2>
    <p>
      Once you get familiar with each openEHR datatype you will be able to combine them into more complex Operational Templates, store data and create useful queries.
      Also you will see that the same pattern repeats again and a gain when working with EHRServer and openEHR (archetypes &rsaquo; templates &rsaquo; upload &rsaquo;
      test commit &rsaquo; create queries), and this methodology increases productivity, and software quality, and decreases errors, leading to a standardized platform
      to store, manage, access and share clinical information.
    </p>
  </div>
</div>
