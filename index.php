<!DOCTYPE html>
<html>
	<head>
		<title>Management Tooling Assessment</title>
		<meta content="width=device-width, initial-scale=1.0" name="viewport" >
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
		<link rel="stylesheet" type="text/css" href="css/datatables.min.css"/>
		<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

		<!--	<script src="js/jquery-1.10.2.js"></script> -->
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


		container.tabs.fieldset {
		  border: 1px solid silver;
		  margin: 0 2px;
		  padding: .35em .625em .75em;
			align: bottom
		}

		.tabs {
		  position: relative;
		  min-height: 200px; /* This part sucks */
		  clear: both;
		  margin: 25px 0;
		}
		.tab {
		  float: left;
		}
		.tab label {
		  background: #eee;
		  padding: 10px;
		  border: 1px solid #ccc;
		  margin-left: -1px;
		  position: relative;
		  left: 1px;
		}

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

				p {
					font-family: 'Inder', sans-serif;
					line-height: 28px;
					margin-bottom: 15px;
					color: #666;
				}

				label {
			    display:inline-block;
				}

				input {
				  border-radius: 15px;
				  margin: 10px;
				}

				h3 {
					color: #7c795d;
					font-family: 'Source Sans Pro', sans-serif;
					font-size: 28px;
					font-weight: 400;
					line-height: 32px;
					margin: 0 0 24px;
				}

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
				<ul class="nav navbar-nav navbar-right"></ul>
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
	    <li><a href="#tabs-2">Customer Details</a></li>
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
	To complete the assessment, please use the tabs and fill out all information. Once complete, click "Submit".
	</p>
	  </div>

	  <div id="tabs-2">

	    <label class="w3-label w3-validate">Customer Name: </label>
	    <input type="text" name="customerName" size="30" >

			<label class="w3-label w3-validate">Geographic Region: </label>
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

			<label  class="w3-label w3-validate">Industry Sector: </label>
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

	  </div>

	  <div id="tabs-3">

			<div class="container">
		  <fieldset>
		    <legend>Content Management</legend>
		    <p>
					Current Position (0-10): <input type="number" name="d5" min="0" max="10"
					<label>
						<P>Comments: </P>
					<textarea rows="2" cols="120" wrap="soft" placeholder="Current tools?" name="d5-text"></textarea>
				</label>
				</p>
				<p><em>This may include things such as:</em></p>
				<p>Single sources of truth for application code, centralised OS, patch and config repositories.</p>
				<p>Ability to push out content from centralised sources.</p>
				<p>Ability to delegate, filter and otherwise control data sources.</p>
		  </fieldset>

		  <fieldset>
				<p>Future Position (0-10): <input type="number" name="o5" min="0" max="10">
					<label>
						<P>Comments: </P>
					<textarea rows="2" cols="120" wrap="soft" placeholder="Plans? Aspirations?" name="o5-text"></textarea>
				</label>
				</p>
				<p><em>Best practices and solutions include</em>:</p>
				<p>Centralised SCM systems, CI/CD pipelining, automated content updates/refresh.</p>
				<p>Ability to control and refresh content at will or according to schedules.</p>
		  </fieldset>

			</div>

	  </div>

	  <div id="tabs-4">
		  <fieldset>
		    <legend>Provisioning</legend>
				<p>
					Current Position (0-10): <input type="number" name="d4" min="0" max="10"></p>
				<label>
					<P>Comments: </P>
				<textarea rows="2" cols="120" wrap="soft" placeholder="Current tools?" name="d4-text"></textarea>
			</label>
		</p>
			<p><em>This may include things such as:</em></p>
			<p>Golden templates (possibly many!), ability to clone.</p>
			<p>Infrastructure-as-code deployment.</p>
			<p>Ability to deploy across all environments (dev/prod/IaaS/public clouds).</p>
		  </fieldset>

			<fieldset>
				<p>Future Position (0-10): <input type="number" name="o4" min="0" max="10">
					<label>
						<P>Comments: </P>
					<textarea rows="2" cols="120" wrap="soft" placeholder="Plans? Aspirations?" name="o4-text"></textarea>
				</label>
				</p>
				<p><em>Best practices and solutions include</em>:</p>
				<p>Fully orchestrated infrastructure-as-code.</p>
				<p>Zero touch IaaS administration for new services.</p>
				<p>Utilisation of the same toolset across on premise and public clouds.</p>
			</fieldset>
	  </div>

	  <div id="tabs-5">
			<fieldset>
				<legend>Configuration Management</legend>
				<p>
					Current Position (0-10): <input type="number" name="d3" min="0" max="10"
					<label>
						<P>Comments: </P>
					<textarea rows="2" cols="120" wrap="soft" placeholder="Current tools?" name="d3-text"></textarea>
				</label>
				</p>
				<p><em>This may include things such as:</em></p>
				<p>Existing tools such as puppet, chef, ansible etc</p>
				<p>Drift remediation during and after OS rollouts.</p>
			</fieldset>

			<fieldset>
				<p>Future Position (0-10): <input type="number" name="o3" min="0" max="10">
					<label>
						<P>Comments: </P>
					<textarea rows="2" cols="120" wrap="soft" placeholder="Plans? Aspirations?" name="o3-text"></textarea>
				</label>
				</p>
				<p><em>Best practices and solutions include</em>:</p>
				<p>Full stack configuration management tooling, not just drift remediation.</p>
				<p>Tooling able to do multiple duties - provisioning, drift, apps in the same manner.</p>
		  </fieldset>
		</div>

	  <div id="tabs-6">
			<fieldset>
				<legend>Governance/Compliance</legend>
				<p>
					Current Position (0-10): <input type="number" name="d6" min="0" max="10" />
					<label>
						<P>Comments: </P>
					<textarea rows="2" cols="120" wrap="soft" placeholder="Current tools?" name="d6-text"></textarea>
				</label>
				</p>
				<p><em>This may include things such as:</em></p>
				<p>Security scanning (port, intrusion etc)</p>
				<p>Security frameworks (CIS, NIST)</p>
			</fieldset>

			<fieldset>
				<p>Future Position (0-10): <input type="number" name="o6" min="0" max="10">
					<label>
						<P>Comments: </P>
					<textarea rows="2" cols="120" wrap="soft" placeholder="Plans? Aspirations?" name="o6-text"></textarea>
				</label>
				</p>
				<p><em>Best practices and solutions include</em>:</p>
				<p>Industry specific or IT holistic frameworks.</p>
				<p>Ability to monitor and fix non-compliance at will or on schedule.</p>
			</fieldset>
	  </div>

	  <div id="tabs-7">
			<fieldset>
				<legend>Reporting</legend>
				<p>
					Current Position (0-10): <input type="number" name="d7" min="0" max="10" />
					<label>
						<P>Comments: </P>
					<textarea rows="2" cols="120" wrap="soft" placeholder="Current tools?" name="d7-text"></textarea>
				</label>
				</p>
				<p><em>This may include things such as:</em></p>
				<p>Rudimentary server/VM management allocation, using spreadsheets or the alike.</p>
				<p>Basic statistics around utilisation.</p>
			</fieldset>

			<fieldset>
				<p>Future Position (0-10): <input type="number" name="o7" min="0" max="10">
					<label>
						<P>Comments: </P>
					<textarea rows="2" cols="120" wrap="soft" placeholder="Plans? Aspirations?" name="o7-text"></textarea>
				</label>
				</p>
				<p><em>Best practices and solutions include</em>:</p>
				<p>Cloud management tooling, covering multiple providers.</p>
				<p>Capacity planning and 'What If' scenarios.</p>
			</fieldset>
	  </div>

	  <div id="tabs-8">
			<fieldset>
				<legend>Financial Control</legend>
				<p>
					Current Position (0-10): <input type="number" name="d8" min="0" max="10" />
					<label>
						<P>Comments: </P>
					<textarea rows="2" cols="120" wrap="soft" placeholder="Current tools?" name="d8-text"></textarea>
				</label>
				</p>
				<p><em>This may include things such as:</em></p>
				<p>Limited key/credential holders, limiting who can do what.</p>
				<p>Basic spreadsheet reporting, or nothing at all?</p>
			</fieldset>

			<fieldset>
				<p>Future Position (0-10): <input type="number" name="o8" min="0" max="10">
					<label>
						<P>Comments: </P>
					<textarea rows="2" cols="120" wrap="soft" placeholder="Plans? Aspirations?" name="o8-text"></textarea>
				</label>
				</p>
				<p><em>Best practices and solutions include</em>:</p>
				<p>Charge or show back.</p>
				<p>Caps, thresholds, optimised platforms/workloads based on cost.</p>
			</fieldset>
	  </div>

	  <div id="tabs-9">
			<fieldset>
				<legend>Self Service</legend>
				<p>
					Current Position (0-10): <input type="number" name="d11" min="0" max="10" />
					<label>
						<P>Comments: </P>
					<textarea rows="2" cols="120" wrap="soft" placeholder="Current tools?" name="d11-text"></textarea>
				</label>
				</p>
				<p><em>This may include things such as:</em></p>
				<p>Centralised, shared shell scripts, for the most common cases.</p>
				<p>Full individual sand-boxed resources.</p>
			</fieldset>

			<fieldset>
				<p>Future Position (0-10): <input type="number" name="o11" min="0" max="10">
					<label>
						<P>Comments: </P>
					<textarea rows="2" cols="120" wrap="soft" placeholder="Plans? Aspirations?" name="o11-text"></textarea>
				</label>
				</p>
				<p><em>Best practices and solutions include</em>:</p>
				<p>Self service catalogs, available to both technical and non-technical people.</p>
				<p>Full back-end orchestration behind the catalog items, with or without manual intervention.</p>
			</fieldset>
	  </div>

	  <div id="tabs-10">
			<fieldset>
				<legend>Application Deployments</legend>
				<p>
					Current Position (0-10): <input type="number" name="d2" min="0" max="10" />
					<label>
						<P>Comments: </P>
					<textarea rows="2" cols="120" wrap="soft" placeholder="Current tools?" name="d2-text"></textarea>
				</label>
				</p>
				<p><em>This may include things such as:</em></p>
				<p>Simple applications as part of the OS stack.</p>
				<p>Monitoring tools/agents included in builds.</p>
			</fieldset>

			<fieldset>
				<p>Future Position (0-10): <input type="number" name="o2" min="0" max="10">
					<label>
						<P>Comments: </P>
					<textarea rows="2" cols="120" wrap="soft" placeholder="Plans? Aspirations?" name="o2-text"></textarea>
				</label>
				</p>
				<p><em>Best practices and solutions include</em>:</p>
				<p>Comprehensive automation toolset which allows orchestration across stacks.</p>
				<p>Creating both OS, dependencies and applications in the same stack, using the same methods.</p>
			</fieldset>
	  </div>

	  <div id="tabs-11">
			<fieldset>
				<legend>Monitoring/Alerting</legend>
				<p>
					Current Position (0-10): <input type="number" name="d9" min="0" max="10" />
					<label>
						<P>Comments: </P>
					<textarea rows="2" cols="120" wrap="soft" placeholder="Current tools?" name="d9-text"></textarea>
				</label>
				</p>
				<p><em>This may include things such as:</em></p>
				<p>Hardware, OS and possible applications monitoring (normally agents).</p>
				<p>High/low water mark alerting (CPU/RAM etc).</p>
			</fieldset>

			<fieldset>
				<p>Future Position (0-10): <input type="number" name="o9" min="0" max="10">
					<label>
						<P>Comments: </P>
					<textarea rows="2" cols="120" wrap="soft" placeholder="Plans? Aspirations?" name="o9-text"></textarea>
				</label>
				</p>
				<p><em>Best practices and solutions include</em>:</p>
				<p>Proactive 'machine learning' tools, which help fix things before they're a problem.</p>
				<p>Consolidation of monitoring stack, reducing overheads.</p>
			</fieldset>
	  </div>

	  <div id="tabs-12">
			<fieldset>
				<legend>Capacity Planning</legend>
				<p>
					Current Position (0-10): <input type="number" name="d10" min="0" max="10" />
					<label>
						<P>Comments: </P>
					<textarea rows="2" cols="120" wrap="soft" placeholder="Current tools?" name="d10-text"></textarea>
				</label>
				</p>
				<p><em>This may include things such as:</em></p>
				<p>Simple spreadsheet, manual controls.</p>
				<p>Reliance on other teams to know limits/report.</p>
			</fieldset>

			<fieldset>
				<p>Future Position (0-10): <input type="number" name="o10" min="0" max="10">
					<label>
						<P>Comments: </P>
					<textarea rows="2" cols="120" wrap="soft" placeholder="Plans? Aspirations?" name="o10-text"></textarea>
				</label>
				</p>
				<p><em>Best practices and solutions include</em>:</p>
				<p>'What if' scenario planning.</p>
				<p>Resource movement/re-allocations to make better use of assets.</p>
			</fieldset>
	  </div>

	  <div id="tabs-13">
			<fieldset>
				<legend>Security</legend>
				<p>
					Current Position (0-10): <input type="number" name="d1" min="0" max="10" />
					<label>
						<P>Comments: </P>
					<textarea rows="2" cols="120" wrap="soft" placeholder="Current tools?" name="d1-text"></textarea>
				</label>
				</p>
				<p><em>This may include things such as:</em></p>
				<p>Drift remediation, regualar patch schedules, scheduled change/outage windows.</p>
				<p>Security team mandate fixes, using their own tools and little knowledge of systems/tools used.</p>
			</fieldset>

			<fieldset>
				<p>Future Position (0-10): <input type="number" name="o1" min="0" max="10">
					<label>
						<P>Comments: </P>
					<textarea rows="2" cols="120" wrap="soft" placeholder="Plans? Aspirations?" name="o1-text"></textarea>
				</label>
				</p>
				<p><em>Best practices and solutions include</em>:</p>
				<p>Proactive, machine learning services.</p>
				<p>Reactive fixing and proactive remediation fed back into future builds.</p>
			</fieldset>
	  </div>

	</div>

	</form>

	</div>

	</body>
</html>
