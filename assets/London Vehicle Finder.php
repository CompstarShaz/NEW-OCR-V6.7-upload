From: <Saved by Blink>
Snapshot-Content-Location: https://lvf.io/lvfhelp.php
Subject: London Vehicle Finder
Date: Fri, 2 Jan 2026 22:27:49 +0000
MIME-Version: 1.0
Content-Type: multipart/related;
	type="text/html";
	boundary="----MultipartBoundary--jBbEijWStDkI9nMewOOHurb9Sb5AFHuQX4NKHlJVBh----"


------MultipartBoundary--jBbEijWStDkI9nMewOOHurb9Sb5AFHuQX4NKHlJVBh----
Content-Type: text/html
Content-ID: <frame-76DB0B8B7436EC6FB4C684ED65019676@mhtml.blink>
Content-Transfer-Encoding: binary
Content-Location: https://lvf.io/lvfhelp.php

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US"><head profile="http://gmpg.org/xfn/11"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		
		<link rel="stylesheet" href="https://lvf.io/lvfstyle.css?t=1767392859">
		<title>London Vehicle Finder</title>
	</head>
	<body>
<div id="help" class="footerplace">
<h1>London Vehicle Finder help page</h1>
<h3>Last updated: 11/3/2025</h3>
<a class="button" href="https://lvf.io/#LDN|"><font><i><b>&nbsp;</b><u> Back</u></i></font></a>

<p> </p>
<h2>Contacting the Admin Team - Please do not email LOTS</h2>
<p> </p>
<p>If you need to contact the LVF admin team please send an email to this address :- lvf_help@hotmail.com</p>

<p> </p>
<p> ---------------------------------------------------------------- </p>
<p> &nbsp; </p>

<h2>Registration</h2>
<p>Registration is self service and one user account covers all your devices. Just go to lvf.io/register and register a free account. Watch out for the verification email ending up in your spam/junk folder. Once you have verified your account you will be put back to the LVF home screen</p>
<p>From the home screen you should see Login or Logout/Settings in the top righthand corner. If Login then you need to click the Login Button and log the session in. If this login fails then you need to go to lvf.io/forgot and set your password to something you know.</p>
<p>If you are seeing Logout/Settings and still unable to use LVF then remove the LVF cookie from the device.</p><p>
</p><p> The most common problem is trying to login before creating an account. If you haven't created an account you must do so before trying to login</p>
<p> &nbsp; </p>

<h2>Cookies</h2>
<p>‘Cookies’ are small text files stored on your computer when you use some websites, including this one.</p>
<p>LVF uses a cookie to store your user id (so you only have to login once) and your preferences</p>
<p> &nbsp; </p>

<h2>GDPR</h2>
<p>All data regarding users is stored in a manner compliant with GDPR guidelines on servers within the UK and only accessible by LVF admin personel</p>
<p>Should a user wish to have their user account deleted they will need to submit an email request to the LVF admin team to have it implemented</p>
<p> &nbsp; </p>



<h2>Modes</h2>
<p>The Vehicle Finder application currently covers London, Edinburgh (Lothian) &amp; English Regional Fleets. This single interface can access data from any of the areas covered. Data that is only dependent on an operator code can be accessed in all modes ie LRT 1-50 to list all of Lothians' Volvo 7900s or GAL WHV100-110 to list some GoAhead London Volvo/Gemini 3s work independent of the current mode. Accessing Route data and most shortcuts are mode dependent.</p>
<p>To change mode the command is "mode" followed by either "LDN", "LRT" or "RVF" for London, Lothian or Regional respectively. When the mode command is executed the banner header and help page will change.</p>
<p>In addition to London Buses the London (LDN) mode also covers Croydon Trams &amp; River boat services.</p>
<p>&nbsp; </p>

<h2>Obtaining Data from the VF application</h2>
<p>Data can be requested in a number of ways by :- </p><ul>
	<li>Registration</li>
	<li>Operator/Fleet number</li>
	<li>Route</li>
	<li>Stop Code/Stop Name</li>
	<li>Short Code</li>
</ul>

<p>A history facility is available for all except by stop (see below)</p>
<p>The entered value will attempt to match in the order:- registration, operator/fleetnumber, route, stop and lastly as a registration held by TFL, which may be different to the registration the vehicle carries eg a TFL TMP registration.</p>

<h2>Wildcards</h2>
<p>In most cases any individual character can be replaced by an underscore '_'  to create a wildcard search. The '*' character can be used to replace multiple characters..</p>

<h2>Ranges</h2>
<p>In some cases ranges can be specified. A range is signified by the "-" character. A wildcard cannot be used in a request where a range is specified.</p>
<p>In all cases of multiple output, a maximum of 180 entries will be displayed. Each of the requests is explained in detail below</p>

<h2>By Registration:</h2>
<p>Enter the registration of the vehicle you wish to lookup. Wildcards are allowed as are ranges. Example of valid ranges are YX58DXA-D, returns details of 4 vehicles or GAL E1-100, returns details of 100 vehicles. YX*DXA-D is not valid as it is potentially many ranges.</p>

<h2>By Operator/Fleetnumber:</h2>
<p>Operator codes cannot be wildcarded and must be included in any fleetnumber request. When requesting data on First London or Tower Transit vehicles class codes are optional. To lookup more than one vehicle in a request the fleet nummber may include wildcards or a range may be specified</p>

<h2>Valid Operator codes are :-</h2>
<table>
  <tbody><tr><td>AL</td><td>Arriva London</td><td>FL</td><td>First Bus London</td><td>ML </td><td>Metroline </td><td>TL</td><td> Transport UK London</td></tr>
  <tr><td>CTL </td><td>Croydon Trams</td><td>GAL</td><td>GoAhead London</td><td>SLN</td><td>Stagecoach London</td><td>UNO</td><td>University Bus (london)</td></tr>
  <tr></tr>
  <tr></tr>
  <tr><td>&nbsp; </td></tr>
</tbody></table>

<h2>Operator codes with historic data are :-</h2>

<table>
  <tbody><tr><td>AB</td><td>Abellio</td><td>CTP</td><td>CT Plus</td><td>RBS</td><td>River Boat Services</td><td>SB</td><td>Sullivan Buses</td></tr>
  <tr><td>AKE</td><td>Arriva Southern Counties</td><td>EP</td><td>Epsom Buses</td><td>RTP</td><td>RATP Transdev</td><td>TT</td><td>Tower Transit</td></tr>
  <tr><td>ASE</td><td>Arriva The Shires</td></tr>
  <tr><td>&nbsp; </td></tr>
</tbody></table>

<h2>Operator codes for other modes are :-</h2>

<table>
  <tbody><tr><td>ECB</td><td>East Coast Buses</td><td>LCY</td><td>Lothian Country</td><td>LRT</td><td>Lothian Buses</td></tr>
 <tr><td>&nbsp; </td></tr>
 </tbody></table>

<h2>Suffixes:</h2>
<p>In the London mode of LVF fleet numbers can have one of 2 suffixes. A 'b' suffix denotes a branded vehicle and the 'e' suffix denotes a vehicle with electronic blinds</p>
<h2>By Route:</h2>
<p>Any input character string less than 5 character long is checked to be a route number. If it is not found to match a valid route then further matching will take place. Wildcards are not allowed as part of the route number. 
By default information will be displayed by direction of travel and then by vehicle fleet number order. The short code ZZ can be used to toggle the way information is displayed between fleet number order and stop sequence order</p>

<h2>By Stop:</h2>
<p>Stops can be indentified by the 5 character stop codes often displayed in the output from other enquires and visible on the physical stop on a small metal plate. If 5 digit stop codes are entered then spaces and wildcards are not allowed. One or more stop code can be entered by putting a comma between the codes. However no check is made that stop codes are geographically close to each other.</p>
<p>Alternatively a stop or stops can be entered by name. Wildcards can be used as part of the name. Because special characters, eg '&amp;', ',' or '/' cannot be entered to be able to lookup somewhere like "Elephant &amp; Castle" the "&amp;" must be entered as a wildcard character.</p>
<p>Vehicles will be displayed in the order they are expected to arrive although this cannot be guaranteed. TFL still provide stop data for stops that are temporarily closed.</p>

<h2>History &amp; Fullhist:</h2>
<p>The facility exists to request the history of a vehicle, ie what routes it has worked, or the history of a route - what vehicles have been used on the route and when they were last recorded.  To obtain history data enter the keyword history (or Fullhist) followed by a registration, operator/fleetnumber or Route number. This request does not allow wildcards. The keyword History limits the historic data to data within the past 6 months whereas Fullhist will give the full history of a vehicle or route</p>
<p>With history it is possible to add date parameters to show either the vehicles on a route on a particular day (a single date) or what a vehicle worked between a range of dates. For vehicle history the first date entered sets the earliest date history is found for and if entered the second date sets the highest date history is given for. If the second date is not entered then the range is from the entered date to the present. Alternatively the parameter can be a 3 letter code for a day of the week to filter the data for that day.</p>

<h2>Journey History</h2>
<p>The facility exists to request the journeys that a vehicle, ie what journeys on which routes it has worked, or the journey history of a route - what vehicles have been used on the route and which journeys they made.  To obtain journey history data enter the keyword dethist followed by a registration, operator/fleetnumber or Route number. This request does not allow wildcards. The system only keeps detailed journey history for 14days</p>
<p>With journey history it is possible to add date parameters. If a single date is entered then the detailed history will be from that date to present. If a second date is entered then that will be the last date history is display for.</p>

<h2>ETA:</h2>
<p>The facility exists to request the current predictions for an active vehicle. The request can be by operator/fleet number or by registration. Wildcards are not valid.</p>

<h2>Rare:</h2>
<p>This command has no parameters. It looks at the currently active vehicles and looks to see whether any vehicles are operating on a route that they haven't worked on within the past 2 months.</p>

<h2>List:</h2>
<p>Lists are used to provide a number of system defines sets of data. Lists are :-</p>
<table>
  <tbody><tr><td>new</td><td> Vehicles new into service or expected into service. Once a batch of vehicles is complete into service it will be removed from the list</td></tr>
  <tr><td>ads</td><td> This list provides information on all the overall advert buses currently operating in london</td></tr>
  <tr><td>ooffs</td><td> This list provides information on "one offs" eg demonstrators</td></tr>
  <tr><td>brand</td><td> A list of all vehicles with route branding applied</td></tr>
  <tr><td>volt</td><td> A list of electric vehicles</td></tr>
  <tr><td>unused</td><td> This is a special list and is an administration tool to note vehicles that have not been used since a given date. It has a mandatory parameter of a date in "yyyy-mm-dd" format and optionally an operator code</td></tr></tbody></table>
<p>With lists it is allowed to append an operator code to filter the list for just that operator eg "List new GAL" will show just the new vehicles for GoAhead 
and "List ads RTP" will show the ads currently carried by RTP vehicles. The operator code can also be applied to the short code eg "ZA RTP" is equivalent to "List new RTP"</p>
<h2>Short codes:</h2>
<p>A number of commonly used commands are available as short codes. Currently all short codes start with the letter "Z" The following short codes are defined :-</p>

<table>
  <tbody><tr><td>ZA</td><td> List new</td></tr>
  <tr><td>ZB</td><td> List ads</td></tr>
  <tr><td>ZC</td><td> List LT ads</td></tr>
  <tr><td>ZD</td><td> List non LT ads</td></tr>
  <tr><td>ZE</td><td> Elephant and Castle stops</td></tr>
  <tr><td>ZEN,S,W,E</td><td> Elephant and Castle stops for North, South, East &amp; West approaches</td></tr>
  <tr><td>ZF</td><td> List Recent ads</td></tr>
  <tr><td>ZG</td><td> St Georges Circus stops</td></tr>
  <tr><td>ZH</td><td> Hyde Park Corner stops</td></tr>
  <tr><td>ZHW</td><td> Hyde Park Corner stops, Approaching from West</td></tr>
  <tr><td>ZM</td><td> Marble arch stops</td></tr>
  <tr><td>ZME</td><td> Marble arch East side stops</td></tr>
  <tr><td>ZMW</td><td> Marble arch West side stops</td></tr>
  <tr><td>ZN</td><td> Churchway exit from Euston stops</td></tr>
  <tr><td>ZO</td><td> Oxford Circus stops</td></tr>
  <tr><td>ZP</td><td> Paliament Square stops</td></tr>
  <tr><td>ZR</td><td> Warren Street stops</td></tr>
  <tr><td>ZRN,S,W</td><td> Warren Street stops for N,S,W approaches</td></tr>
  <tr><td>ZS</td><td> St Pauls stops</td></tr>
  <tr><td>ZSE,W</td><td> St Pauls stops Eastbound &amp; Westbound</td></tr>
  <tr><td>ZT</td><td> Trafalgar Square stops</td></tr>
  <tr><td>ZV</td><td> Toggle list output order between operator/fleet number and just fleet numbers</td></tr>
  <tr><td>ZW</td><td> Toggle list output between all vehicles and those in service vehicles</td></tr>
  <tr><td>ZX</td><td> Toggle stop output between all vehicles and those within the ads list</td></tr>
  <tr><td>ZY</td><td> Toggle list output between all vehicles and excluding withdrawn vehicles</td></tr>
  <tr><td>ZZ</td><td> Toggle route output between fleet number order and stop sequence order</td></tr>
</tbody></table>
<div id="footerpadding"></div>
</div>
<p id="footer">Data provided by Transport for London -  Web Design © 2021 Thomas &amp; Brian Cheyney</p>


</body></html>
------MultipartBoundary--jBbEijWStDkI9nMewOOHurb9Sb5AFHuQX4NKHlJVBh----
Content-Type: text/css
Content-Transfer-Encoding: binary
Content-Location: https://lvf.io/lvfstyle.css?t=1767392859

@charset "utf-8";

html { height: 100%; }

body, html { margin: 0px; }

body { background-color: rgb(247, 247, 247); color: rgb(34, 34, 34); font-family: Arial, sans-serif; min-width: 1100px; position: relative; min-height: 100%; padding-top: 20px; padding-bottom: 50px; box-sizing: border-box; text-align: center; }

body > nav { border-bottom: 1px solid rgb(187, 187, 187); position: fixed; width: 100%; background-color: rgb(247, 247, 247); top: 0px; z-index: 2; text-align: left; }

body > nav ul { list-style-type: none; width: 1060px; margin: auto; padding: 0px; border-left: 1px solid rgb(204, 204, 204); border-right: 1px solid rgb(187, 187, 187); }

body > nav li { display: inline-block; border-right: 1px solid rgb(204, 204, 204); background: rgb(249, 249, 249); font-size: 24px; text-decoration: none; vertical-align: bottom; }

body > nav a, body > nav button { display: block; padding: 3px 0.4em; color: rgb(102, 102, 102); background: none; margin: 0px !important; }

body > nav li::after { content: ""; height: 3px; display: block; background: rgb(238, 238, 238); }

@media (pointer: fine) {
  nav li:hover a, nav button:hover { color: rgb(34, 34, 34); border-bottom: 0px; }
  nav li:hover::after { background: rgb(204, 204, 204); }
}

nav li.sel::after { background: rgb(127, 189, 255); }

nav li.right { float: right; border-left: 1px solid rgb(204, 204, 204) !important; border-right: 0px !important; }

#push { min-height: 600px; }

.pad { top: 300px; }

.short { top: 30px; }

#wrapper { position: relative; z-index: 1; background-color: rgb(247, 247, 247); margin: auto; width: 1040px; }

#wrapper button { margin: 16px 0px; color: rgb(108, 117, 125); background-color: transparent; font-size: 1rem; line-height: 18px; border-radius: 0.25rem; border: 1px solid rgb(108, 117, 125); transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out; padding: 8px 12px; user-select: none; vertical-align: top; }

#b { margin: 0px 0px 7px 30px !important; }

button:not(:disabled):not(.disabled) { cursor: pointer; }

#wrapper button:hover { background-color: rgb(108, 117, 125); color: rgb(255, 255, 255); }

#wrapper button:disabled { opacity: 0.65; color: rgb(108, 117, 125); background-color: transparent; }

#wrapper button span i { padding: 3px 15px; }

.placeholder { color: rgb(170, 170, 170); }

footer { z-index: 4; position: absolute; bottom: 0px; right: 0px; margin: 5px; text-align: right; font-size: 11px; cursor: pointer; user-select: none; }

footer, footer a { color: rgb(187, 187, 187); }

footer:hover a, footer:hover { color: rgb(34, 34, 34); }

img { position: absolute; height: 120px; width: 180px; }

img.left { left: 10px; }

img.right { right: 10px; }

input, select { font-size: 18px; color: rgb(34, 34, 34); width: 300px; padding: 0.375rem 0.75rem; }

h1 { font-size: 40px; padding: 15px; margin: 0px; }

h2 { font-weight: normal; margin: 5px 0px; font-size: 24px; max-width: 800px; }

h3 { margin-bottom: 0px; }

strong { background: url("ajax.gif") center center no-repeat; width: 46px; display: none; height: 16px; margin: 10px 0px 16px 30px; }

hr { display: none; border-width: 1px 0px 0px; border-right-style: initial; border-bottom-style: initial; border-left-style: initial; border-right-color: initial; border-bottom-color: initial; border-left-color: initial; border-image: initial; border-top-style: solid; border-top-color: rgb(221, 221, 221); margin: 35px 0px 10px; }

#load { margin: 10px 0px -1px; width: 50%; border-color: rgb(25, 136, 255); display: block; opacity: 0; position: relative; text-align: left; }

#load::after { content: ""; box-shadow: rgb(16, 68, 187) 0px 0px 6px 2px; float: right; width: 5px; }

#wrapper div { text-decoration: none; text-align: center; }

#wrapper div * { text-align: left; }

#content { margin-top: 4px; }

#content > span { text-align: center; margin-bottom: 26px; }

#content span { display: inline-block; }

a { color: rgb(68, 68, 68); text-decoration: none; }

a:hover { border-bottom: 1px dashed rgb(68, 68, 68); }

.button:hover { border-bottom: 0px; }

table { width: 100%; border-spacing: 10px 0px; }

td[colspan], .sd { color: rgb(25, 136, 255); }

.sd { color: rgb(25, 136, 255); }

.sd a { color: rgb(63, 138, 219); }

button, .button { display: inline-block; padding: 3px 0px; border-width: 0px; overflow: visible; color: rgb(51, 51, 51); font-size: 21px; margin-left: 10px; cursor: pointer; }

* html button, * html .button { padding-bottom: 1px; }

html:not([lang*=""]) button, html:not([lang*=""]) .button { margin: 10px 5px; }

button font, .button font { background: rgb(249, 249, 249); z-index: 1; padding: 3px 0px; border-left: 1px solid rgb(204, 204, 204); border-right: 1px solid rgb(187, 187, 187); pointer-events: none; display: inline !important; }

* html button i, * html button font, * html .button i, * html .button font { padding-top: 0px; }

button font i, .button font i { margin: 0px; position: relative; padding: 3px 0.4em; border-width: 1px 0px; border-top-style: solid; border-top-color: rgb(204, 204, 204); border-bottom-style: solid; border-bottom-color: rgb(187, 187, 187); pointer-events: none; }

button b, .button b { background: rgb(227, 227, 227); position: absolute; z-index: 2; bottom: 0px; left: 0px; width: 100%; overflow: hidden; height: 40%; border-top: 3px solid rgb(238, 238, 238); pointer-events: none; }

* html button b, * html .button b { top: 1px; }

button u, .button u { position: relative; z-index: 3; text-decoration: none; font-style: normal; }

button:hover font, button:hover font i, .button:hover font, .button:hover font i { cursor: pointer; color: rgb(0, 0, 0); border-color: rgb(153, 204, 255) !important; }

button:active font i b, .button:active font i b { bottom: auto; top: 0px; border-top: 0px; border-bottom: 3px solid rgb(238, 238, 238); }

.l { float: left; margin-left: 200px !important; }

.r { float: right; margin-right: 200px !important; }

#help { margin: 100px auto 0px; width: 1000px; }

#help, #help h1, #help h3 { text-align: center; }

#help * { text-align: left; }

#info { text-align: center; }

#info > div { margin-top: 30px; box-shadow: rgb(221, 221, 221) 0px 0px 60px; border-radius: 5px; padding: 10px; display: inline-block; }

#info > div > div { color: rgb(204, 204, 204); border: 1px solid rgb(204, 204, 204); border-radius: 10px; display: inline-block; width: 18px; text-align: center; margin-right: 6px; }

form input[type="text"], form input[type="password"], form input[type="tel"] { border-radius: 0px; display: block; padding: 6px; margin: 10px auto 5px; border-width: 0px 0px 1px; border-top-style: initial; border-right-style: initial; border-left-style: initial; border-top-color: initial; border-right-color: initial; border-left-color: initial; border-image: initial; border-bottom-style: solid; border-bottom-color: rgb(221, 221, 221); background-color: transparent; }

form input:focus { outline: none; }

#wrapper nav { float: left; width: 200px; margin-right: 40px; text-align: left; }

#wrapper nav ul { list-style-type: none; margin: 0px; padding: 0px; }

#wrapper nav li { padding: 6px; }

#wrapper nav li::before { content: ""; display: block; background-color: rgb(221, 221, 221); width: 4px; height: 18px; float: left; margin: 0px 6px 0px 0px; }

#wrapper nav li.sel::before { background-color: rgb(127, 189, 255); }

#profile, #custom-list { float: left; width: 800px; }

#profile form { margin-bottom: 40px; text-align: center; display: inline-block; }

label { font-size: 16px; display: block; margin: 10px 0px; text-align: right !important; }

select { font-size: 12px; height: 26px; }

#profile span.error { font-size: 12px; margin: 0px 0px 10px 5px; }

#profile span#toast { color: rgb(127, 189, 255); }

.loader, .loader::after { border-radius: 50%; width: 10em; height: 10em; }

.loader { display: none; margin: 120px auto; font-size: 10px; position: relative; text-indent: -9999em; border-width: 0.5em; border-style: solid; border-color: rgba(189, 189, 189, 0.2) rgba(189, 189, 189, 0.2) rgba(189, 189, 189, 0.2) rgb(127, 189, 255); transform: translateZ(0px); animation: 1.1s linear 0s infinite normal none running load8; }

@-webkit-keyframes load8 { 
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

@keyframes load8 { 
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

#popover { position: absolute; width: 100%; height: 100%; background: rgba(50, 50, 50, 0.7); top: 0px; z-index: 10; display: none; }

#popover > div { background: rgb(238, 238, 238); width: 500px; height: 500px; margin: 200px auto; border-radius: 12px; box-shadow: rgb(56, 56, 56) 0px 0px 16px 5px; overflow: hidden; }

#popover h1 { color: rgb(34, 34, 34); padding: 17px; font-size: 24px; border-bottom: 1px solid rgb(221, 221, 221); font-weight: normal; }

#popover #list { overflow-y: auto; height: 437px; }

#popover #list div:hover { background: rgb(221, 221, 221); }

#popover #list div { padding: 16px 40px; text-align: left; transition: background 0.2s; cursor: pointer; }

input:valid + span.valid-check::before { content: ""; color: rgb(0, 128, 0); }

input:invalid + span.valid-check::before { content: ""; color: rgb(128, 0, 0); }

span.valid-check { margin-top: -30px; float: right; margin-right: 6px; }
------MultipartBoundary--jBbEijWStDkI9nMewOOHurb9Sb5AFHuQX4NKHlJVBh------
