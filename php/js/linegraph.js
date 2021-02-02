$(document).ready(function() {
  $.ajax({
    url: "http://localhost/web/php/test.php",
    type: "GET",
    success: function(data) {
      console.log(data);
      data = JSON.parse(data);

      var M_Meter = [];
      var T_Meter = [];
      var W_Meter = [];
      var WF_Meter = [];
      var W_Vermi = [];
      var Reading_Time = [];

      for (var i in data) {
        M_Meter.push(data[i].M_Meter);
        T_Meter.push(data[i].T_Meter);
        W_Meter.push(data[i].W_Meter);
        WF_Meter.push(data[i].WF_Meter);
        W_Vermi.push(data[i].W_Vermi);
      //  Reading_Time.push("Date Time " + data[i].Reading_Time);
      }

      var chartdata = {
        labels: M_Meter,
        datasets: [
          {
            label: "Moisture",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(59, 89, 152, 0.75)",
            borderColor: "rgba(59, 89, 152, 1)",
            pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
            pointHoverBorderColor: "rgba(59, 89, 152, 1)",
            data: M_Meter
          },
          {
            label: "Temperature",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(29, 202, 255, 0.75)",
            borderColor: "rgba(29, 209, 255, 1)",
            pointHoverBackgroundColor: "rgba(29, 209, 255, 1)",
            pointHoverBorderColor: "rgba(29, 202, 255, 1)",
            data: T_Meter
          },
          {
            label: "Ultrasonic",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(87, 10, 100, 0.75)",
            borderColor: "rgba(87, 10, 100, 1)",
            pointHoverBackgroundColor: "rgba(87, 10, 100, 1)",
            pointHoverBorderColor: "rgba(87, 10, 100, 1)",
            data: W_Meter
          },
          {
            label: "Waterflow",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(116, 167, 150, 0.75)",
            borderColor: "rgba(116, 167, 150, 1)",
            pointHoverBackgroundColor: "rgba(116, 167, 150, 1)",
            pointHoverBorderColor: "rgba(116, 167, 150, 1)",
            data: WF_Meter
          },
          {
            label: "Vermicast Weight",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(145, 202, 22, 0.75)",
            borderColor: "rgba(145, 201, 22, 1)",
            pointHoverBackgroundColor: "rgba(145, 201, 22, 1)",
            pointHoverBorderColor: "rgba(145, 201, 22, 1)",
            data: W_Vermi
          }
        ]
      };

      var ctx = $('#mycanvas');

      var LineGraph = new Chart(ctx, {
        type: 'line',
        data: chartdata
      });
    },

        /*options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true
              }
            }],
            xAxes: [{
              type: 'time',
              time: {
                parser: 'YYYY-MM-DD HH:mm:ss',
                unit: 'minute',
                displayFormats: {
                  'minute': 'YYYY-MM-DD HH:mm:ss',
                  'hour': 'YYYY-MM-DD HH:mm:ss'
                }
              },
              ticks: {
                source: 'data'
              }
            }]
          }
        }
      })
    },*/
    error: function(data) {

    }
  });
});
