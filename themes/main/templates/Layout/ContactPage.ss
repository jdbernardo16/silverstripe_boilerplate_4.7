<div id="header">
	<h1>Header</h1>
</div>
<form action="" id="contactForm" method="post">
	<div class="input-hldr">
		<input type="text" name="fullname" placeholder="Full Name" required>
	</div>
	<div class="input-hldr">
		<input type="text" name="email" placeholder="E-mail Address" required>
	</div>
	<div class="input-hldr">
		<input type="text" name="contact" placeholder="Contact Number" onkeydown="return ( event.ctrlKey || event.altKey 
                    || (47<event.keyCode && event.keyCode<58 && event.shiftKey==false) 
                    || (95<event.keyCode && event.keyCode<106)
                    || (event.keyCode==8) || (event.keyCode==9) 
                    || (event.keyCode>34 && event.keyCode<40) 
                    || (event.keyCode==46) )" required>
	</div>
	<div class="input-hldr">
		<textarea type="text" name="messagedetails" placeholder="Message" required></textarea>
	</div>
	<div class="button-hldr">
		<button id="contactBtn">Send Us</button>
		<input type="hidden" name="postFlag" value="1">
	</div>
</form>