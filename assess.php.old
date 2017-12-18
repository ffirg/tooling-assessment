<!DOCTYPE html>
<html>
<head>
	<title>Management Tooling Assessment</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="css/datatables.min.css"/>
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

<!--	<script src="js/jquery-1.10.2.js"></script>-->
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <script>
  $( function() {
    $( "#tabs" ).tabs();
  } );
  </script>

    <script>
  $( function() {
    $( "input" ).checkboxradio();
  } );
  </script>

  <style>
      #locationField, #controls {
        position: relative;
        width: 480px;
      }
      #autocomplete {
        position: absolute;
        top: 0px;
        left: 0px;
        width: 99%;
      }
      .label {
        text-align: right;
        font-weight: bold;

        color: #303030;
      }
      #address {
        border: 1px solid #000090;
        background-color: #f0f0ff;
        width: 480px;
        padding-right: 2px;
      }
      #address td {
        font-size: 10pt;
      }
      .field {
        width: 99%;
      }
      .slimField {
        width: 80px;
      }
      .wideField {
        width: 200px;
      }
      #locationField {
        height: 20px;
        margin-bottom: 2px;
      }
      .page { position: absolute;
      	top: 10;
      	left: 100;
      	visibility: hidden;
      	}

legend {
}

p { font-family: 'Inder', sans-serif; line-height: 28px; margin-bottom: 15px; color: #666; }

label {

    display:inline-block;
}
input {
  border-radius: 15px;
  margin: 10px;
}

h3 { color: #7c795d; font-family: 'Source Sans Pro', sans-serif; font-size: 28px; font-weight: 400; line-height: 32px; margin: 0 0 24px; }

    </style>

</head>
<body>

<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php"><img src="images/innovate.png">  Management Tooling</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
			</ul>
		</div>
	</div>
</nav>

  <div class="container">

<!-- Main component for a primary marketing message or call to action -->
<!--      <div class="jumbotron"> -->
<form id="tooling-assessment-form" action="tmp.php">

<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Introduction</a></li>
    <li><a href="#tabs-2">Client Details</a></li>
    <li><a href="#tabs-3">Content Management</a></li>
    <li><a href="#tabs-4">Provisioning</a></li>
    <li><a href="#tabs-5">Config Management</a></li>
    <li><a href="#tabs-6">Governance</a></li>
    <li><a href="#tabs-7">Reporting</a></li>
    <li><a href="#tabs-8">Financial Controls</a></li>
    <li><a href="#tabs-9">Self Service</a></li>
    <li><a href="#tabs-10">Application Deployment</a></li>
    <li><a href="#tabs-11">Monitoring</a></li>
    <li><a href="#tabs-12">Capacity Planning</a></li>
    <li><a href="#tabs-13">Security</a></li>
    <li><input type="submit" value="Submit"></li>
  </ul>

  <div id="tabs-1">
  <h3>Management Tooling Assessment.</h3>

    <p>
<b>AIM</b>: Help to assess current and future requirements around managing private, hybrid and cloud based infrastructure.
</p>

<p>
To complete the assessment, please use the tabs and check the comment which better suits your environment.  Once complete, click "Submit" from the Submit Tab.
</p>
  </div>

  <div id="tabs-2">
    <p>
      <label class="w3-label w3-validate">Customer Name</label>
    <input type="text" name="customerName" size="20" >

    </p>
<label class="w3-label w3-validate">Region</label>
<select name="region">
<option value=DA>DA</option>
<option value=CH>CH</option>
<option value=Benelux>Benelux</option>
<option value=UKI>UKI</option>
<option value=Nordics>Nordics</option>
<option value=CEE>CEE</option>
<option value=CIS>CIS</option>
<option value=France>France</option>
<option value=ICG>ICG</option>
<option value=Italy>Italy</option>
<option value=Iberia>Iberia</option>
<option value=MENA>MENA</option>
<option value=Turkey>Turkey</option>
</select>
  </p>
<label  class="w3-label w3-validate">Domain</label>
<select name="domain">
<option value=Government>Government</option>
<option value=Finance>Finance</option>
<option value=Retail>Retail</option>
<option value=Manufacturing>Manufacturing</option>
<option value=Health>Health</option>
<option value=Media>Media</option>
<option value=Telecoms>Telecoms</option>
<option value=Energy>Energy</option>
</select>
  </p>
  </div>

  <div id="tabs-3">
<div class="widget">
  <fieldset>
    <legend>Content Management</legend>
    <p>This should include things like single sources of truth for application code, centralised OS, patch and config repositories.</p>
    <p><b>Current Position (0-10): </b><input type="number" name="d1" min="0" max="10"></p>
<p><label>Comments: </label><input type="text" size="80" name="d1-text"></p>
  </fieldset>

  <fieldset>
    <p><b>Future Position (0-10): </b><input type="number" name="o1" min="0" max="10"></p>
<p>Best practices: SCM, central regularly and automatically synchronised repos, changes controlled.</p>
<p><label>Comments: </label><input type="text" size="80" name="o1-text"></p>
  </fieldset>
</div>
    </p>
  </div>

  <div id="tabs-4">
  <fieldset>
    <legend>Provisioning</legend>
    <p><b>Current Position (0-10): </b><input type="number" name="d2" min="0" max="10"></p>
  </fieldset>

  <fieldset>
    <p><b>Future Position (0-10): </b><input type="number" name="o2" min="0" max="10"></p>
  </fieldset>
  </div>

  <div id="tabs-5">
  <fieldset>
    <legend>Configuration Management</legend>
    <p><b>Current Position (0-10): </b><input type="number" name="d3" min="0" max="10"></p>
  </fieldset>

  <fieldset>
    <p><b>Future Position (0-10): </b><input type="number" name="o3" min="0" max="10"></p>
  </fieldset>
  </div>

  <div id="tabs-6">
  <fieldset>
    <legend>Governance/Compliance</legend>
    <p><b>Current Position (0-10): </b><input type="number" name="d4" min="0" max="10"></p>
  </fieldset>

  <fieldset>
    <p><b>Future Position (0-10): </b><input type="number" name="o4" min="0" max="10"></p>
  </fieldset>
  </div>

  <div id="tabs-7">
  <fieldset>
    <legend>Reporting</legend>
    <p><b>Current Position (0-10): </b><input type="number" name="d5" min="0" max="10"></p>
  </fieldset>

  <fieldset>
    <p><b>Future Position (0-10): </b><input type="number" name="o5" min="0" max="10"></p>
  </fieldset>
  </div>

  <div id="tabs-8">
  <fieldset>
    <legend>Financial Controls</legend>
    <p><b>Current Position (0-10): </b><input type="number" name="d6" min="0" max="10"></p>
  </fieldset>

  <fieldset>
    <p><b>Future Position (0-10): </b><input type="number" name="o6" min="0" max="10"></p>
  </fieldset>
  </div>

  <div id="tabs-9">
  <fieldset>
    <legend>Self Service</legend>
    <p><b>Current Position (0-10): </b><input type="number" name="d7" min="0" max="10"></p>
  </fieldset>

  <fieldset>
    <p><b>Future Position (0-10): </b><input type="number" name="o7" min="0" max="10"></p>
  </fieldset>
  </div>

  <div id="tabs-10">
  <fieldset>
    <legend>Application Deployments</legend>
    <p><b>Current Position (0-10): </b><input type="number" name="d8" min="0" max="10"></p>
  </fieldset>

  <fieldset>
    <p><b>Future Position (0-10): </b><input type="number" name="o8" min="0" max="10"></p>
  </fieldset>
  </div>

  <div id="tabs-11">
  <fieldset>
    <legend>Monitoring/Alerting</legend>
    <p><b>Current Position (0-10): </b><input type="number" name="d9" min="0" max="10"></p>
  </fieldset>

  <fieldset>
    <p><b>Future Position (0-10): </b><input type="number" name="o9" min="0" max="10"></p>
  </fieldset>
  </div>

  <div id="tabs-12">
  <fieldset>
    <legend>Capacity Planning</legend>
    <p><b>Current Position (0-10): </b><input type="number" name="d10" min="0" max="10"></p>
  </fieldset>

  <fieldset>
    <p><b>Future Position (0-10): </b><input type="number" name="o10" min="0" max="10"></p>
  </fieldset>
  </div>

  <div id="tabs-13">
  <fieldset>
    <legend>Security</legend>
    <p><b>Current Position (0-10): </b><input type="number" name="d11" min="0" max="10"></p>
  </fieldset>

  <fieldset>
    <p><b>Future Position (0-10): </b><input type="number" name="o11" min="0" max="10"></p>
  </fieldset>
  </div>

<!--  <div id="tabs-14">
    <p>  <input type="submit" value="Submit">
</p>
  </div>
-->
</div>

</form>

      </div>


    </div> <!-- /container -->
<?php    }
####  End of Logged on bit ######
?>



</body>
</html>
