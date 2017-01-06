<div class="row">
  <div class="col-md-12">
    <h1>Beta Partners Program</h1>
    <p>
      To complete the signup for the Beta Partners Program, please use our PayPal button below.
      You can choose between periods of 6 or 12 months, in which you will have unconstrainted
      access to all the features, without any quotas and all the advantages of being a Beta Partner.</p>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>Complete signup</h2>
    
    <p>
      Please select a period in which you want to participate as Beta Partner and complete
      the payment through PayPal. If you don't want to use PayPal, 
      <a href="<?=$_base_dir?>/contact">contact us</a>
      to give you some alternatives.
    </p>

    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
      <input type="hidden" name="cmd" value="_s-xclick">
      <input type="hidden" name="hosted_button_id" value="ADBXEB42LKWWW">
      <table>
        <tr><td>
          <input type="hidden" name="on0" value="Period">Period
        </td></tr>
        <tr><td>
          <select name="os0">
           <option value="6 months">6 months $150.00 USD</option>
           <option value="12 months">12 months $300.00 USD</option>
          </select>
        </td></tr>
      </table>
      <br/>
      <input type="hidden" name="currency_code" value="USD">
      <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynow_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
      <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
    </form>
    
  </div>
</div>
