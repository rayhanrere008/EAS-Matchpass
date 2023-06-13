$(document).ready(function(){
  $.ajax({
    url: "http://localhost/uasdwo/data3.php",
    method: "GET",
    success: function(data3) {
      console.log(data3);
      var nama = [];
      var total = [];

      for(var i in data3) {
        nama.push(data3[i].nama);
        total.push(data3[i].total);
      }

      var ctx = document.getElementById("myBarChart");

      var myBarChart = new Chart(ctx, {
        type: 'bar',
  data: {
    labels: nama,
    datasets: [{
      label: "Total Pendapatan Berdasarkan Hari",
      backgroundColor: "#4e73df",
      hoverBackgroundColor: "#2e59d9",
      borderColor: "#4e73df",
      data: total,
    }],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 20,
        right: 35,
        top: 35,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 10
        },
        maxBarThickness: 25,
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 15000,
          maxTicksLimit: 6,
          padding: 6,
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: false
    },
    tooltips: {
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 15,
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 5,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 15,
    },
  }
});
    },
    error: function(data3) {
      console.log(data3);
    }
  });
});


