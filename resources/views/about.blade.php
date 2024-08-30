<!DOCTYPE html>
<html>
    <head>
        <title>Cov Tracer PH</title>
    </head>
	<link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
    <body> 
        <div>
			<img id = "hooh" src="{{ asset('images/hooh.png') }}" alt="pokemon">
            <div id = "div1" style = "border-radius: 40px;">
                <h1 style = "font-size: 50px; margin-top: 10px; text-align: center;">Cov Tracer PH</h1>
            </div>
        </div>
                <!------- left container --------->
        <div id = "div5">
			<h1 style = "margin-left: 40px; font-size: 50px; margin-top: 1px;">About</h1>
			<div id = "div4">
				<p style = "margin-left: 20px; margin-right: 20px; font-size: 30px; padding-top: 15px; text-align:justify">
					Cov Tracer PH keeps track of the Covid situation of the regions within the Philippines.
					By showing the number of cases and statistics per region, users can be aware of the on-going situation and
					keep themselves safe.
				</p>
				<p style = "margin-left: 21px; margin-right: 21px; font-size: 25px; padding-top: 15px;">
					As a reminder always keep yourself safe by:
				</p>
				<p style = "margin-left: 21px; margin-right: 21px; font-size: 25px; padding-top: 10px;">
					- Washing your hands
				</p>
				<p style = "margin-left: 21px; margin-right: 21px; font-size: 25px; padding-top: 10px;">
					- Practicing Social Distancing
				</p>
				<p style = "margin-left: 21px; margin-right: 21px; font-size: 25px; padding-top: 10px;">
					- Wearing a Mask
				</p>
				<p style = "margin-left: 21px; margin-right: 21px; font-size: 25px; padding-top: 10px;">
					- Be Vaccinated
				</p>
			</div>
        </div>
		<div id = "div3">
            <form>
                <input id = "back_button" type = "submit" value = "Back" class = "about" formaction = "{{url('/')}}">
            </form>
        </div>
    </body> 
</html>