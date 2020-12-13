<?php require_once('partials/header.php'); ?>
</header>
<h1 class="common-page-header listing-page-header"></h1>


<section class="section section--contact_form">
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<address class="text-justify panel panel-default panel-body" style="height: 212px;">
			
					<b>Auxilium Solutions</b> <br>
					Shop No. 52, Ground Floor,
                    Goyal Trade Centre, 
                    Shantivan, Borivali(E).
                    Mumbai-400066<br>
					
					E-Mail: support@auxiliumsolns.com 
				</address>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<form action="https://formspree.io/f/mbjpzplw" class="form-group" method="post" id="contact-form">
					<h3 class="section__heading">Send Message</h3>
					<div class="row">
						<div class="col-sm-6 form-group">
							<p id="form-messages"></p>
						</div>
						
					</div>
					<div class="row">
						<div class="col-sm-6 form-group">
							<label class="form-control-label" for="name">Your Name</label>
							<input class="form-control" placeholder="Your Name" required="" name="Name" id="name" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">
						</div>
						<div class="col-sm-6 form-group">
							<label class="form-control-label" for="email">Email Address</label>
							<input class="form-control" type="email" placeholder="E-mail Address" required="" name="E-mail Address" id="email">
							
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 form-group">
							<label class="form-control-label" for="phone">Phone</label>
							<input class="form-control" placeholder="Your Phone" required="" name="Phone No" id="phone">
						</div>
						
					</div>
					<div class="form-group">
						<label class="form-control-label" for="message">Your Message</label>
						<textarea name="Message" id="message" rows="7" required="" class="form-control" placeholder="Message or Comment"></textarea>
					</div>
					<input type="submit" value="Send Message">
				</form>
			</div>
			<div class="col-sm-6">
				<div class="map-container">
					<!-- <iframe src="https://www.google.com/maps/d/embed?mid=1tnQZDlxoa1FM4kEvvQ_vYiZZIdc&amp;hl=en" width="100%" height="480"></iframe> -->
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15068.381777554858!2d72.8650182!3d19.2346717!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x285bd6d2dc731406!2sAuxilium%20Solutions!5e0!3m2!1sen!2sin!4v1607870449134!5m2!1sen!2sin" width="100%" height="480" ></iframe>
				</div>
			</div>
		</div>
	</div>
</section>

<?php require_once('partials/footer.php'); ?>