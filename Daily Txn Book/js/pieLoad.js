$(document).ready(function () {
  function loadPie(divId, title, data_pie) {
    google.charts.load("current", { packages: ["corechart"] });

    async function dataChart() {
      var data =  await google.visualization.arrayToDataTable(data_pie);

      //   console.log(data);

      var options = {
        title: title,
        pieHole: 0.4,
        is3D: true,
        pieSliceTextStyle: {
          color: "white",
        },
      };

      var chart = new google.visualization.PieChart(
        document.getElementById(divId)
      );
      chart.draw(data, options);
    }

    google.charts.setOnLoadCallback(dataChart);

    //  function drawChart1() {
    //   var data =    google.visualization.arrayToDataTable([
    //     ["Task", "Hours per Day"],
    //     ["Work", 51],
    //     ["Eat", 2],
    //     ["Commute", 2],
    //     ["Watch TV", 2],
    //     ["Sleep", 7],
    //   ]);

    //   var options = {
    //     title: "My Daily Activities",
    //     // is3D: true,
    //   };
        
    //   //  var chart =  new  google.visualization.PieChart(
    //   //   document.getElementById("")
    //   // );
    //   chart.draw(data, options);
    // }

    // google.charts.setOnLoadCallback(drawChart1);
  }

  async function setDataOfPie(data, title, divId) {
    let arrForPie = [["name", "value"]];

    Object.keys(data).forEach((Element) => {
      let arr = [Element, data[Element]];
      arrForPie.push(arr);
    });

    await loadPie(divId, title, arrForPie);
  }

  $.get(
    "./phpAjax/dashboardAjax.php",
    {
      pieChartData: "pieChartData",
    },
    async function (data) { 
      console.log(data);

      let daily_txn_book = data.daily_txn_book.Indexes;

      // let grnStatus = data.grnStatus.Indexes;

      //   console.log(purchase_order);

      // await setDataOfPie(requisition_table, "PR Requests", "pr_requests");
      await setDataOfPie(daily_txn_book, "form_status", "form_status");



      





      
    },
    "json"
  ).fail(error=>{
    console.log(error);
  })
});





