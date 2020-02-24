<?php
/*******************************************************
For this piece of the test, you will have a several HTML, CSS and PHP questions.

PHP and HTML
	1. Fill in your name and the date in the "By" line.
	2. In the first text box, labeled "Current Date and Time", display the date and time that the page loaded. Make the date in Month/Day/Year formatting and the time in Hour:Minutes:Seconds formatting.
	3. Disable modifying the date and time in the first text box, labeled "Current Date and Time". 
	4. Fill in the drop down, labeled "Favorite Programming Language", with the $programmingLanguages array.
	
CSS 
	For the CSS portion, getting the basics is the most important which will be listed below, however if you consider yourself a web designer and want to do more than the list, please do.  

	1. Center all items in the body (inputs, labels and headers) horizontally.
	2. The background needs to be or contain a dark blue.
	3. The top 2 headers need to be white
	4. The labels for inputs and the footer need to be a red or pink
	
*******************************************************/

// Use this array to fill in the drop down
$programmingLanguages = array(
	"A# .NET",
	"A-0 System",
	"A+",
	"A++",
	"ABAP",
	"ABC",
	"ABC ALGOL",
	"ABSET",
	"ABSYS",
	"ACC",
	"Accent",
	"Ace DASL (Distributed Application Specification Language)",
	"ACL2",
	"ACT-III",
	"Action!",
	"ActionScript",
	"Actor",
	"Ada",
	"Adenine",
	"Agda",
	"Agilent VEE",
	"Agora",
	"AIMMS",
	"Aldor",
	"Alef",
	"ALF",
	"ALGOL 58",
	"ALGOL 60",
	"ALGOL 68",
	"ALGOL W",
	"Alice",
	"Alma-0",
	"AmbientTalk",
	"Amiga E",
	"AMOS",
	"AMPL",
	"AngelScript",
	"Apex",
	"APL",
	"App Inventor for Android's visual block language",
	"AppleScript",
	"APT",
	"Arc",
	"ARexx",
	"Argus",
	"AspectJ",
	"Assembly language",
	"ATS",
	"Ateji PX",
	"AutoHotkey",
	"Autocoder",
	"AutoIt",
	"AutoLISP / Visual LISP",
	"Averest",
	"AWK",
	"Axum",
	"Active Server Pages",
	"B",
	"Babbage",
	"Ballerina",
	"Bash",
	"BASIC",
	"bc",
	"BCPL",
	"BeanShell",
	"Batch file (Windows/MSDOS)",
	"Bertrand",
	"BETA",
	"BLISS",
	"Blockly",
	"BlooP",
	"Boo",
	"Boomerang",
	"Bourne shell (including bash and ksh)",
	"BPEL",
	"Business Basic",
	"C",
	"C--",
	"C++ (C plus plus) – ISO/IEC 14882",
	"C*",
	"C# – ISO/IEC 23270",
	"C/AL",
	"Caché ObjectScript",
	"C Shell (csh)",
	"Caml",
	"Cayenne",
	"CDuce",
	"Cecil",
	"Cesil",
	"Céu",
	"Ceylon",
	"CFEngine",
	"Cg",
	"Ch",
	"Chapel",
	"Charity",
	"Charm",
	"CHILL",
	"CHIP-8",
	"chomski",
	"ChucK",
	"Cilk",
	"Citrine",
	"CL (IBM)",
	"Claire",
	"Clarion",
	"Clean",
	"Clipper",
	"CLIPS",
	"CLIST",
	"Clojure",
	"CLU",
	"CMS-2",
	"COBOL – ISO/IEC 1989",
	"CobolScript – COBOL Scripting language",
	"Cobra",
	"CoffeeScript",
	"ColdFusion",
	"COMAL",
	"Combined Programming Language (CPL)",
	"COMIT",
	"Common Intermediate Language (CIL)",
	"Common Lisp (also known as CL)",
	"COMPASS",
	"Component Pascal",
	"Constraint Handling Rules (CHR)",
	"COMTRAN",
	"Cool",
	"Coq",
	"Coral 66",
	"CorVision",
	"COWSEL",
	"CPL",
	"Cryptol",
	"Crystal",
	"Csound",
	"CSP",
	"Cuneiform",
	"Curl",
	"Curry",
	"Cybil",
	"Cyclone",
	"Cython",
	"D",
	"DASL (Datapoint's Advanced Systems Language)",
	"Dart",
	"Darwin",
	"DataFlex",
	"Datalog",
	"DATATRIEVE",
	"dBase",
	"dc",
	"DCL",
	"DinkC",
	"DIBOL",
	"Dog",
	"Draco",
	"Dragon",
	"DRAKON",
	"Dylan",
	"DYNAMO",
	"DAX (Data Analysis Expressions)",
	"E",
	"Ease",
	"Easy PL/I",
	"EASYTRIEVE PLUS",
	"eC",
	"ECMAScript",
	"Edinburgh IMP",
	"EGL",
	"Eiffel",
	"ELAN",
	"Elixir",
	"Elm",
	"Emacs Lisp",
	"Emerald",
	"Epigram",
	"EPL (Easy Programming Language)",
	"EPL (Eltron Programming Language)",
	"Erlang",
	"es",
	"Escher",
	"ESPOL",
	"Esterel",
	"Etoys",
	"Euclid",
	"Euler",
	"Euphoria",
	"EusLisp Robot Programming Language",
	"CMS EXEC (EXEC)",
	"EXEC 2",
	"Executable UML",
	"Ezhil",
	"F",
	"F#",
	"F*",
	"Factor",
	"Fantom",
	"FAUST",
	"Fjölnir"
);
?>

<?php 
// Center all items horizontally
// The background needs to be or contain a dark blue
// Make the top 2 headers white
// Make the labels for inputs and the footer a red or pink
?>

<style>
body {
	font-family:  Courier, Monaco, monospace;
	display: grid;
	place-items: center;
	background-color: #18163d;
	color: #e94f37;
	height: 95vh;
}

h1, h2 {
	color: #f6f7eb;
	background: #e94f37;
	padding: .75em;
	border-radius: 50px;
}

div {
	border-radius: 50px;
	box-shadow: -10px -8px 0px 0px #e94f37;
	padding: 2em;
	display: grid;
	place-items: center;
	grid-gap: 25px;
	background-color: #f6f7eb;
}

input, select {
	border-radius: 50px;
	border-style: none;
	padding: .5em;
	text-align: center;
	background-color: #44bba4;
	color: #f6f7eb;
}

select {
	appearance: none;
	-webkit-appearance: none;
	background-image: url(https://res.cloudinary.com/dz3p8xcr8/image/upload/v1582413651/arrow_rcufbr.svg);
	background-position:68% 68%;
	background-repeat: no-repeat;
  	background-attachment: fixed;
	background-size: 1.8% 1.8%;
	cursor: pointer;
}

select:hover {
	background-color: #369B87;
}

</style>

<h1> My Favorite Programming Languages </h1>
<h2> By: Alexander Barbati - 2/22/2020</h2>
<br />
<div>
	<?php
		// Display the time of the page loading 
		// Format: date (Month/Day/Year) and time (Hour:Minutes:Seconds)
		// Disable modifying the text box after loading
		$dateTime = "Current Date and Time";

		echo '<h3>Current Date and Time:</h3>';
		date_default_timezone_set('America/New_York');
		$dateTime = date('m/d/Y h:i:s');
		echo '<input type="text" value="'.$dateTime.'" disabled >';
	?>

	<br />
	<br />
	<br />

	<?php
	// Fill in the below Drop Down with above array data
	?>

	<h3>Favorite Programming Language:</h3>
	<select>
		<?php
			echo '<option value="Select">Select your Favorite Programming Language</option>';
			//option array function
			function options($array) {
				$length = count($array);
				for ($x = 0; $x <= $length; $x++) {
					echo "<option value='".$array[$x]."'>".$array[$x]."</option>";
				};
			};
			options($programmingLanguages);
		?>					
	</select>
</div>
<br />
<br />
<br />
<br />
<p>&#169; 2019 World Shipping, Inc.</p>
