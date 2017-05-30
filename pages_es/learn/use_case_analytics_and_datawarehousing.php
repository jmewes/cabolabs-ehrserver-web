
<div class="row">
  <div class="col-md-12">
    <h1>Use Case: Analytics and Datawarehousing</h1>
    <p>
      Business intelligence (BI) technologies help to run businesses more efficiently and make better decisions for the future.
      BI can be also applied to the clinical area, to understand what is working and what is not, to evaluate outcomes,
      to analyze the past and estimate the future, for certain groups of patients.
    </p>
    <p>
      The first thing to implement a BI solution is to know what you want to measure, and the second is to get data from data
      sources to enable those measures. To get data out the data sources is not an easy task. Common problems include: proprietary
      database schemas, formats and data structures, lack of documentation, inconsistent and incomplete data, among other challenges.
      The EHRServer is the perfect solution for a data source that simplifies the data extraction work, using vendor independent formats,
      a standar-based database schema, and dynamic data queries that to implement micro data services to feed any BI solution like
      analytics or datawarehousing.
    </p>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>Getting the data out: the EHRServer way!</h2>
    <p>
      When data needs to be read from a data source and loaded into an analytics or datawarehouse system, a process called ETL 
      Extraction, Transformation, and Loading) is implemented. This process is not trivial and might need months to be designed
      and built in complex scenarios (many data sources, proprietary, inconsistent data, etc.).
    </p>
    <p>
      To read data from the EHRServer, you just need to create queries using the EHRServer Query Builder, that is
      part of the EHRServer Web Console. Calls to the EHRServer REST API are sent to execute the queries and get the data out.
      Data will be in XML or JSON format and be compliant with the openEHR standard. Knowing that all the data will comply with
      the same format, simplifies the Transformation stage of the ETL process immensely. Your ETL process might need to do some
      merging of data obtained from different queries, or do other transformations, but the work will be far less than the effort
      required to ETL on non-standard data sources. The loading stage is the easiest part, after the data is in a format consistent
      with your analytics or datawarehouse schema, data is saved to those databases, and BI processes and calculations acn run using
      the recently loaded data.
    </p>
    <p>
      Since BU is not static, you will need to add new indicators and measurements, and be sure your data sources have new data to
      support your new requirements. Adding support to new data structures to be stored in the EHRServer is a simple as uploading a
      new clinical document definition and start storing data compliant with that definition. Those definitions are the 
      <?=a('openEHR Operational Templates (OPT)','/learn/openehr_fundamentals')?>. After having new data stored in the EHRServer, just create new queries to feed your ETL process,
      and your new indicators will be ready in no time.
    </p>
    <p>
      In conclusion the main advantages of using the EHRServer as a data source are:
      <ol>
        <li>No need to write custom queries in SQL o other query languages over your data sources, EHRServer queries are created from a GUI and run from a REST API.</li>
        <li>A standard model and open formats, simplify processing the data on the transformation stage, reducing the ETL implementation from months to weeks or even days.</li>
        <li>Higlhy adaptable and scalable to support new requirements of your BI solution.</li>
      </ol>
    </p>
  </div>
</div>
