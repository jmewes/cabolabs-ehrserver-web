<style>
  ul.plan li:first-child {
    color: #fff;
    background-color: rgb(66, 133, 244);
  }
  li {
    text-align: center;
  }
  li .btn {
    margin: 5px 0;
  }
  .question {
    color: #999;
  }
</style>

<div class="row">
  <div class="col-md-12">
    <h1>CloudEHRServer Plans</h1>
    <p>Choose the plan that matches your needs.</p>
  </div>
</div>

<div class="row">
  <div class="col-md-4">
  
    <!-- BASIC PLAN -->
    <ul class="list-group plan">
     <li class="list-group-item">
       <h2>Basic</h2>
     </li>
     <li class="list-group-item">
       <h3>15 USD/mo</h3>
       <small>+ one time 15 USD fee for setup</small>
     </li>
     <li class="list-group-item">
       <i class="fa fa-database fa-fw" aria-hidden="true"></i> 2.5 GB
     </li>
     <li class="list-group-item">
       <i class="fa fa-file-text-o fa-fw" aria-hidden="true"></i>
       5 custom templates / org
       <i class="fa fa-question-circle fa-fw question templates" aria-hidden="true" title="Templates are clinical document definitions, on this plan you can upload up to 5 custom templates to your repository"></i>
     </li>
     <li class="list-group-item">
       <i class="fa fa-building-o fa-fw" aria-hidden="true"></i> 1 organization
     </li>
     <li class="list-group-item">
       Up to 5 API tokens
       <i class="fa fa-question-circle fa-fw question templates" aria-hidden="true" title="API tokens are used to connect client apps to the EHRServer REST API"></i>
     </li>
     <li class="list-group-item">
       Unlimited EHRs
     </li>
     <li class="list-group-item">
       Free SNOMED expressions for 1 year
       <i class="fa fa-question-circle fa-fw question templates" aria-hidden="true" title="Allows to use SNOMED expressions in clinica data queries with complex search criteria"></i>
     </li>
     <li class="list-group-item">
       Community support
     </li>
     
     <li class="list-group-item">
       <a href="https://goo.gl/forms/sDJ4RVrpuXCWMmTE3" target="_blank"><button type="button" class="btn btn-success navbar-btn">Sign up</button></a>
     </li>
   </ul>
   
  </div>
  <div class="col-md-4">
  
   <!-- STANDARD PLAN -->
    <ul class="list-group plan">
     <li class="list-group-item">
       <h2>Standard</h2>
     </li>
     <li class="list-group-item">
       <h3>35 USD/mo</h3>
       <small>+ one time 15 USD fee for setup</small>
     </li>
     <li class="list-group-item">
       <i class="fa fa-database fa-fw" aria-hidden="true"></i> 7.5 GB
     </li>
     <li class="list-group-item">
       <i class="fa fa-file-text-o fa-fw" aria-hidden="true"></i>
       10 custom templates / org
       <i class="fa fa-question-circle fa-fw question templates" aria-hidden="true" title="Templates are clinical document definitions, on this plan you can upload up to 10 custom templates to your repository"></i>
     </li>
     <li class="list-group-item">
       <i class="fa fa-building-o fa-fw" aria-hidden="true"></i> 3 organizations
     </li>
     <li class="list-group-item">
       Up to 20 API tokens
       <i class="fa fa-question-circle fa-fw question templates" aria-hidden="true" title="API tokens are used to connect client apps to the EHRServer REST API"></i>
     </li>
     <li class="list-group-item">
       Unlimited EHRs
     </li>
     <li class="list-group-item">
       Free SNOMED expressions for 1 year
       <i class="fa fa-question-circle fa-fw question templates" aria-hidden="true" title="Allows to use SNOMED expressions in clinica data queries with complex search criteria"></i>
     </li>
     <li class="list-group-item">
       Community support
     </li>
     
     <li class="list-group-item">
       <a href="https://goo.gl/forms/T0eI3AgSAPwYbgbB3" target="_blank"><button type="button" class="btn btn-success navbar-btn">Sign up</button></a>
     </li>
   </ul>
   
  </div>
  <div class="col-md-4">
  
   <!-- ENTERPRISE PLAN -->
    <ul class="list-group plan">
     <li class="list-group-item">
       <h2>Enterprise</h2>
     </li>
     <li class="list-group-item">
       <h3>75 USD/mo</h3>
       <small>+ one time 15 USD fee for setup</small>
     </li>
     <li class="list-group-item">
       <i class="fa fa-database fa-fw" aria-hidden="true"></i> 15 GB
     </li>
     <li class="list-group-item">
       <i class="fa fa-file-text-o fa-fw" aria-hidden="true"></i>
       25 custom templates / org
       <i class="fa fa-question-circle fa-fw question templates" aria-hidden="true" title="Templates are clinical document definitions, on this plan you can upload up to 25 custom templates to your repository"></i>
     </li>
     <li class="list-group-item">
       <i class="fa fa-building-o fa-fw" aria-hidden="true"></i> 10 organizations
     </li>
     <li class="list-group-item">
       Unlimited API tokens
       <i class="fa fa-question-circle fa-fw question templates" aria-hidden="true" title="API tokens are used to connect client apps to the EHRServer REST API"></i>
     </li>
     <li class="list-group-item">
       Unlimited EHRs
     </li>
     <li class="list-group-item">
       Free SNOMED expressions for 1 year
       <i class="fa fa-question-circle fa-fw question templates" aria-hidden="true" title="Allows to use SNOMED expressions in clinica data queries with complex search criteria"></i>
     </li>
     <li class="list-group-item">
       Personalized support
     </li>
     
     <li class="list-group-item">
       <a href="https://goo.gl/forms/LsTZJoGSnLijnngg1" target="_blank"><button type="button" class="btn btn-success navbar-btn">Sign up</button></a>
     </li>
   </ul>
   
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>Need more?</h2>
    <p>
      We also provide custom plans and dedicated servers (one server just for you with no limits).
      <a href="<?=$_base_dir?>/contact">Contact us!</a>
    </p>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>How do plans work?</h2>
    
    <p>Plans are based on the storage space needed for your clinical documents, the number
    of organizations that will generate and consume documents, and the number of
    different types of documents (templates) supported for each organization.</p>
    
    <p>Plan subscriptions are paid yearly, and that credit is assigned to your account. Each month
    a debit equals to the monthly cost of the plan will be executed against your credit.</p>
    
    <p>You can request a plan change any time, and the credit you have will be prorrated to the
    price of the new plan. For instance, if you sign up to a Basic plan, and after two months
    you want to updade, there will be 70 USD in your credit (7 * 12 - 7 * 2), and if the new plan
    is Standard, your credit will cover about 5 months for the new plan.</p>
    
    <p>Do you have questions? <a href="<?=$_base_dir?>/contact">Let us know!</a></p>
  </div>
</div>

