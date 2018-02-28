<style type="text/css">
	button.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

button.accordion.active, button.accordion:hover {
    background-color: #ddd;
}

button.accordion:after {
    content: '\002B';
    color: #777;
    font-weight: bold;
    float: right;
    margin-left: 5px;
}

button.accordion.active:after {
    content: "\2212";
}

div.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}
</style>
<BR>
<div  class="container text-left">
	  <h2>FAQ (Frequently Asked Questions)</h2>
	  <p><i><sub>Frequently asked questions (FAQ), are listed questions and answers, all supposed to be commonly asked in some context, and pertaining to a particular topic.</sub></i></p>

	  <button class="accordion">How to buy the watch?</button>
<div class="panel">
  <br><p>You can go to page <a href="index.php?content=buy">How to buy</a></p>.
</div>

<button class="accordion">Can i get the sale without sign up/login first?</button>
<div class="panel">
  <br><p>Yes, actually you can get the sale for goods that have the label of sale. But if you have account, you can get much of benefit.</p>
</div>

<button class="accordion">My watch is not coming to my house since last week, why? Is there any trouble?</button>
<div class="panel">
  <br><p>Maybe its because you not fill the form of confirm your payment after transaction. You can fill the form of confirm your payment by go to page <a href="#">Payment Confirmation</a>.</p>
</div>

<br>
	  <h2>Contact Us</h2>
	  <h4>You can fill your question about Watchout.com or something in the form under here.</h4>
	  <i><sub><span class="label label-danger">Important</span> We'll reply your question by email, so please fill the form with correctly. Thank you!</sub></i><br><br>
	  <br>
			<form class="form-horizontal" role="form" name="submitcomment" method="post" action="config/submitcomment.php">
				<div class="form-group" align="left">
				<label class="control-label col-sm-2" for="nama">Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nama" placeholder="Fill your name" required>
					</div>
				</div>
				<div class="form-group">
				<label class="control-label col-sm-2" for="email">Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" name="email" placeholder="Fill your email" required>
					</div>
				</div>		
				<div class="form-group">
				<label class="control-label col-sm-2" for="email">Country&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="website" placeholder="Fill your country">
					</div>
				</div>	
				<div class="form-group">
				<label class="control-label col-sm-2" for="email">Question &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="komentar" placeholder="Fill your question" required>
						<br>
						<button type="submit" value="Kirim" name="tombol" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-ok"></span> Send</button>
					</div>
				</div>	
				<div class="form-group">
				<label class="control-label col-sm-2" for="art_id"></label>
					<div class="col-sm-10">
						<input type="hidden" value="1" class="form-control" name="art_id">
					</div>
				</div>	
				<div class="form-group">
				<label class="control-label col-sm-2" for="art_id"></label>
					<div class="col-sm-10">
						<input type="hidden" class="form-control" name="art_url">
					</div>
				</div>
				</form>
				
<div class="container text-left">
<?php include("config/publishcomment.php"); getcomment("1"); ?></div>
</div>