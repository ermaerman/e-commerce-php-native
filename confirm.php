<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />

<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>

<style type="text/css">
/**
 * Override feedback icon position
 * See http://formvalidation.io/examples/adjusting-feedback-icon-position/
 */
#eventForm .form-control-feedback {
    top: 0;
    right: -15px;
}
</style>
<br>
<div  class="container text-left">
    <h2>Payment Confirmation</h2>
    <h4>Bank Transfer payment only, please confirm your payment by filling out the online form.
Maximum 1 day confirmation process.</h4>
    <i><sub>Fill in the correct data and in accordance with your account number, record number or reference contained on the receipt receipt. Please confirm one times payment only.
If you do not receive a successful SMS / Email within 1x24 hours after filling out the form, please contact our CS.</sub></i><br><br>
    <br>
      <form class="form-horizontal" id="eventForm" role="form" name="confirm" method="post" action="config/confirm-payment.php">
        <div class="form-group" align="left">
        <label class="control-label col-sm-2" for="nama">Order Number :</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="ordernumber" placeholder="&nbsp;Fill your order number" required>
          </div>
        </div>
        <div class="form-group">
      <label name="bank" class="col-sm-2 control-label">Destination of Bank</label>
      <div class="col-sm-10">
        <input class="form-control" id="disabledInput" type="text" name="bank" placeholder="&nbsp;BNI 7144-555-38383888 a/n Watchout" disabled>
      </div>
    </div>
    
        <div class="form-group">
        <label class="control-label col-sm-2" for="email">Name of Sender:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="name" placeholder="&nbsp;Fill the name of sender">
          </div>
        </div>  
        <div class="form-group">
        <label class="control-label col-sm-2" for="date">Date of Transfer:</label>
        <div class="col-sm-10 date">
            <div class="input-group input-append date" id="datePicker">
                <input type="text" class="form-control" name="date" placeholder="&nbsp;Fill your date of transfer">
                <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
            </div>
        </div>
    </div> 
          <div class="form-group">
        <label class="control-label col-sm-2" for="email">Amount:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="amount" placeholder="&nbsp;Fill amount">
          </div>
        </div> 
        <div class="form-group">
        <label class="control-label col-sm-2" for="method" name="method">Method of Transfer  :</label>
          <div class="col-sm-10">
            <select class="form-control" id="sel1" name="method">
    <option>Internet Banking</option>
    <option>Mobile Banking</option>
    <option>ATM</option>
    <option>Cash Deposit</option>
  </select>
            <br>
            <button type="submit" value="Kirim" name="tombol" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-ok"></span> Send</button>
          </div>
        </div>  
  </div></form>
  </div>
