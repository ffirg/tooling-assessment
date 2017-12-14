<!DOCTYPE html>
<html>
<head>
    <script src="Chart.bundle.js"></script>
    <script src="utils.js"></script>
    <script src="raphael-2.1.4.min.js"></script>
    <script src="justgage.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <title>Red Hat Management Tooling Assessment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

<style>

body {

    margin: 5px auto;
    font-family: 'trebuchet MS', 'Lucida sans', Arial;
    font-size: 14px;
    color: #444;
    display: block;
    margin: auto;
}

.header-contents {
  font-family: 'trebuchet MS', 'Lucida sans', Arial;
  height: 50px;
}

.chart-dashboard {
float: left;
position: static;
}

.chart-main {
position: static;
clear: both;
}

.product.info {
float: right;
position: static;
}

</style>

</head>

<body>

  <script>

      function getQueryVariable(variable)
  {
         var query = window.location.search.substring(1);
         var vars = query.split("&");
         for (var i=0;i<vars.length;i++) {
                 var pair = vars[i].split("=");
                 if(pair[0] == variable){return decodeURI(pair[1]);}
         }
         return(false);
  }

      var customerName = getQueryVariable("name")


      var d1 = getQueryVariable("d1")
      var d2 = getQueryVariable("d2")
      var d3 = getQueryVariable("d3")
      var d4 = getQueryVariable("d4")
      var d5 = getQueryVariable("d5")
      var d6 = getQueryVariable("d6")
      var d7 = getQueryVariable("d7")
      var d8 = getQueryVariable("d8")
      var d9 = getQueryVariable("d9")
      var d10 = getQueryVariable("d10")
      var d11 = getQueryVariable("d11")
      var totalCurrent = Number(d1) + Number(d2) + Number(d3) + Number(d4) + Number(d5) + Number(d6) + Number(d7) + Number(d8) + Number(d9) + Number(d10) + Number(d11)

      var o1 = getQueryVariable("o1")
      var delta1 = o1 - d1
      var o2 = getQueryVariable("o2")
      var delta2 = o2 - d2
      var o3 = getQueryVariable("o3")
      var delta3 = o3 - d3
      var o4 = getQueryVariable("o4")
      var delta4 = o4 - d4
      var o5 = getQueryVariable("o5")
      var delta5 = o5 - d5
      var o6 = getQueryVariable("o6")
      var delta6 = o6 - d6
      var o7 = getQueryVariable("o7")
      var delta7 = o7 - d7
      var o8 = getQueryVariable("o8")
      var delta8 = o8 - d8
      var o9 = getQueryVariable("o9")
      var delta9 = o9 - d9
      var o10 = getQueryVariable("o10")
      var delta10 = o10 - d10
      var o11 = getQueryVariable("o11")
      var delta11 = o11 - d11
      var totalFuture = (+o1) + (+o2) + (+o3) + (+o4) + (+o5) + (+o6) + (+o7) + (+o8) + (+o9) + (+o10) + (+o11)
      var totalDelta = delta1 + delta2 + delta3 + delta4 + delta5 + delta6 + delta7 + delta8 + delta9 + delta10 + delta11

      var chartTitle = "Management Tooling Chart - " + customerName

      var randomScalingFactor = function() {
          return Math.round(Math.random() * 4);
      };

      var color = Chart.helpers.color;
  </script>

<div class="container">
  <div class="row header-contents">
      <div id="header" class="header col-xs-12">
        <header>
            <h2>Management Tooling Assessment for <?php echo $_GET['name']; ?></h2>
        </header>
      </div>
  </div>

  <div class="row main-contents">
      <div id="chart1" class="chart1 col-md-2">
        <script>
            var f = new JustGage({
                id: "chart1",
                counter: true,
                width: 150,
                height: 150,
                value: totalCurrent,
                min: 0,
                max: 110,
                title: "Current Position",
                levelColors: ['#CE1B21', '#D0532A', '#FFC414', '#85A137']
            });
          </script>
      </div>

      <div id="chart2" class="chart2 col-md-2">
        <script>
        var d = new JustGage({
            id: "chart2",
            counter: true,
            width: 150,
            height: 150,
            value: totalDelta,
            min: 0,
            max: 110,
            title: "Delta Improvement",
            levelColors: ['#CE1B21', '#D0532A', '#FFC414', '#85A137']
        });
        </script>
      </div>

      <div id="chart3" class="chart3 col-md-2">
        <script>
        var c = new JustGage({
            id: "chart3",
            counter: true,
            width: 150,
            height: 150,
            value: totalFuture,
            min: 0,
            max: 110,
            title: "Future Position",
            levelColors: ['#CE1B21', '#D0532A', '#FFC414', '#85A137']
        });
        </script>
      </div>
      <div id="spacer" class="spacer col-md-6"></div>
    </div>

<!-- <div class="row chart-main"> -->
  <div id="chart4" class="chart4 col-md-7">
      <img id="tooling-assessment-chart"></img>
    <script>

        var current = {
            x:  ["Security", "App Deploy", "Config Mgt", "Provisioning", "Content Mgt", "Governance", "Reporting", "Financial Control", "Monitoring", "Capacity Planning", "Self Service"],
            y: [d1,d2,d3,d4,d5,d6,d7,d8,d9,d10,d11],
            name: 'Current',
            type: 'bar'
        };

        var future = {
          x:  ["Security", "App Deploy", "Config Mgt", "Provisioning", "Content Mgt", "Governance", "Reporting", "Financial Control", "Monitoring", "Capacity Planning", "Self Service"],
          y: [delta1,delta2,delta3,delta4,delta5,delta6,delta7,delta8,delta9,delta10,delta11],
          name: 'Future',
          type: 'bar'
        };

        var data = [current, future];

        var layout = {
          barmode: 'stack',
          bargap: 0.15,
          bargroupgap: 0.1,
          height: 400,
          width: 600,
          hovermode:'closest',
          title: 'Current Position vs. Future State',
          xaxis: {
            tickangle: -45
          },
        };

        // var d3 = Plotly.d3;
        // var img_png = d3.select('#tooling-assessment-chart');

        var myChart = document.getElementById('chart4');
        Plotly.plot('chart4', data, layout);
        // Plotly.plot('chart4', data, layout).then(function(gd){
        //  Plotly.toImage(gd,{height:400,width:600})
        //    .then(function(url){
        //      img_png.attr("src", url);
        //      return Plotly.toImage(gd,{format:'png',height:400,width:600});
        //    })
        //  });

        myChart.on('plotly_click', function() {
          $("#myLink").load("products.html");
          });

      </script>

      <p>
        <center>
        <a href="#" id="myLink">Solutions</a>
        </center>
      </p>

      <script>
        $("#myLink").on("click", function(){
          $('#myLink').load('products.html');
        });
      </script>

    </div>
      <div id="product-info" class="product-info col-md-5"></div>
    </div>

</body>
</html>
