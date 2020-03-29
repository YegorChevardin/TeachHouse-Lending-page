<div id="get-info">
			<!--EMAIL SECTION START-->
			<div class="jumbotron" id="email">
				<h1 class="display-4">
					Email us
				</h1>
				<p class="lead">
					We will be very happy if you send a review to us!
				</p>
				<hr class="my-4"/>
				<p class="content-text">
					Put a point on the radio box "Get a document" and email us,
					if you want to get a document, which will
					tell you, how to improve your SPOKEN ENGLISH!
				</p>
				<form action="/email" method="post" autocomplete="on">
					@csrf
					<div class="form-check">
						<input class="form-check-input" type="checkbox" name="Get_document" value="Get" id="defaultCheck1">
						<label class="form-check-label" for="defaultCheck1">
							Get a document
						</label>
					</div>
					<br/>
					<div class="form-group">
						<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Please, type your email..." required="on" wrap="off" name="Text"></textarea>
						<br/>
						<div class="input-group mb-3">
							<input type="email" name="Email" class="form-control" placeholder="Please, type your email adress..." aria-label="Recipient's username" aria-describedby="basic-addon2" required="on" id="EmailInput"/>
							<div class="input-group-append">
								<input id="SendEmail" name="Submit" class="btn btn-primary" type="submit" value="Send"/>
							</div>
						</div>
					</div>
				</form>
			</div>
			<!--EMAIL SECTION END-->
			<!--SING UP SECTION START-->
			<div class="jumbotron" id="sing-up">
				<h1 class="display-4">
					Sing up for our meeting
				</h1>
				<p class="content-text">
					Please enter all things in order
				</p>
				<hr class="my-4"/>
				<form action="/singup" method="post" autocomplete="on">
					@csrf
					<div class="form-group">
						<label>Name</label>
						<br/>
						<input type="text" name="Name" placeholder="Type your name..." required="on" class="form-control"/>
						<br/>
						<label>Surname</label>
						<br/>
						<input type="text" name="Surname" placeholder="Type your surname..." required="on" class="form-control"/>
						<br/>
						<label>Telephone</label>
						<br/>
						<input type="tel" name="Telephone" placeholder="Type your telephone number..." required="on" class="form-control"/>
						<br/>
						<label>Age</label>
						<br/>
						<input id="age-input" type="number" name="Age" placeholder="Please, type your age..." required="on" class="form-control"/>
						<br/>
						<label>Select the date</label>
						<br/>
						<input id="date-input" type="date" name="Date" required="on" class="form-control"/>
						<br/>
						<label>Select a time</label>
						<br/>
						<input disabled id="time-input" type="time" name="Time" required="on" class="form-control" list="time"/>
						<datalist id="time">
							<option class="datalist-option" value="14:00"/>
							<option class="datalist-option" value="14:45"/>
							<option class="datalist-option" value="16:00"/>
						</datalist>
						<br/>
						<label>Select a place of meeting</label>
						<br/>
						<input type="text" name="Place" required="on" class="form-control" list="place"/>
						<datalist id="place">
							<option class="datalist-option" value="Ивана Богуна 9"/>
						</datalist>
						<br/>
						<input class="btn btn-dark btn-block" type="submit" name="Submit" value="Sing up">
					</div>
				</form>
				<hr class="my-4"/>
				<p class="content-text">
					<!--HERE WILL BE INFORMATION ABOUT PLACE OF OUR NEXT MEETING-->
				</p>
				<div class="container-fluid">
					<p>Click on the map to see the place of our next meeting</p>
					<div class="map-responsive">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2692.11391379499!2d34.38067421528166!3d47.56557199880507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dca384261f4af5%3A0x741cf60bd3d8b04e!2z0YPQuy4g0JHQvtCz0YPQvdCwLCAxMS05LCDQndC40LrQvtC_0L7Qu9GMLCDQlNC90LXQv9GA0L7Qv9C10YLRgNC-0LLRgdC60LDRjyDQvtCx0LvQsNGB0YLRjCwgNTMyMDA!5e0!3m2!1sru!2sua!4v1581714331610!5m2!1sru!2sua" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen></iframe>
					</div>
				</div>
			</div>
			<!--SING UP SECTION END-->
		</div>