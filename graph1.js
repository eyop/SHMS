
// let uidm = document.getElementById('uid').valye;
let uidm= document.getElementById('uid').value;
  $(document).ready(function(){
    $.ajax({
      url: "http://localhost/SHMS/data.php",
      method: "GET",
      success: function(data) {
        console.log(data);
        console.log(uidm);

        var heartrates = [];
        var bloodoxygen = [];
        var glucose = [];
        var bmi = [];
        var times = [];
        
  
        for(var i in data) {
          if(uidm==data[i].uid)
          {
            // colsole.log(id);
            heartrates.push(data[i].heartrate);
            bloodoxygen.push(data[i].bloodoxygen);
            glucose.push(data[i].glucose);
            bmi.push(data[i].bmi);
            times.push(data[i].time);
          }
         
  
        }

        //heartrates Score

        var chartdata = {
          labels: times,
          datasets : [
            {
              label: 'heartrates Score',
              // backgroundColor: 'rgba(200, 200, 200, 0.75)',
              // borderColor: 'rgba(200, 200, 200, 0.75)',
              hoverBackgroundColor: 'rgba(20, 100, 80, 1)',
              hoverOffset: 50,
              // hoverBorderColor: 'rgba(200, 200, 200, 1)',
              data: heartrates
            }
          ]
        };

        
        //bloodoxygen Score
        

        var chartdata1 = {
          labels: times,
          datasets : [
            {
              label: 'bloodoxygen Score',
              // backgroundColor: 'rgba(200, 200, 200, 0.75)',
              // borderColor: 'rgba(200, 200, 200, 0.75)',
              hoverBackgroundColor: 'rgba(20, 100, 80, 1)',
              hoverOffset: 50,
              // hoverBorderColor: 'rgba(200, 200, 200, 1)',
              data: bloodoxygen
            }
          ]
        };

        
        //glucose Score
        

        var chartdata2 = {
          labels: times,
          datasets : [
            {
              label: 'glucose Score',
              // backgroundColor: 'rgba(200, 200, 200, 0.75)',
              // borderColor: 'rgba(200, 200, 200, 0.75)',
              hoverBackgroundColor: 'rgba(20, 100, 80, 1)',
              // hoverBorderColor: 'rgba(200, 200, 200, 1)',
              data: glucose
            }
          ]
        };

        
        //bmi Score
        

        var chartdata3 = {
          labels: times,
          datasets : [
            {
              label: 'bmi Score',
              // backgroundColor: 'rgba(200, 200, 200, 0.75)',
              // borderColor: 'rgba(200, 200, 200, 0.75)',
              hoverBackgroundColor: 'rgba(20, 100, 80, 1)',
              hoverOffset: 50,
              // hoverBorderColor: 'rgba(200, 200, 200, 1)',
              data: bmi
            }
          ]
        };

        var ctx = $("#mycanvas");
        var ctx1 = $("#myChart1");
        var ctx2 = $("#myChart2");
        var ctx3 = $("#myChart3");
      

                //bloodoxygen Score
        

var barGraph = new Chart(ctx1, {
  type: 'doughnut',
  data: chartdata1
});



        //heartrates Score


var barGraph = new Chart(ctx, {
  type: 'line',
  data: chartdata
});

    
        //glucose Score
        
        var barGraph = new Chart(ctx2, {
          type: 'bar',
          data: chartdata2
        });

    
        //bmi Score
        
        var barGraph = new Chart(ctx3, {
          type: 'bar',
          data: chartdata3
        });
},
error: function(data) {
console.log(data);
}
});
});


$(document).ready(function(){
  $.ajax({
    url: "http://localhost/SHMS/Todayexdata.php",
    method: "GET",
    success: function(data) {
      console.log(4);
      console.log(data);
      console.log(7);
      var exercisetypeT = [];
     
      var caloriesT = [];
  
      for(var i in data) {
        if(uidm==data[i].uid)
          {
        exercisetypeT.push(data[i].exercisetype);
        // duration.push(data[i].duration);
        caloriesT.push(data[i].calories);
          }
      }
//Today Score
      var chartdata7 = {
        labels: exercisetypeT,
        datasets : [
          {
            label: 'Today Score',
            backgroundColor: [
              'rgb(255, 99, 132)',
              'rgb(54, 162, 235)',
              'rgb(255, 205, 86)'
            ],
            borderColor: 'rgba(200, 200, 200, 0.75)',
            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
            hoverBorderColor: 'rgba(200, 200, 200, 1)',
            hoverOffset: 50,
            data: caloriesT,
          }
        ]
      };

      var ctx7 = $("#myChart4");

      var barGraph = new Chart(ctx7, {
        type: 'doughnut',
        data: chartdata7
      });
    },
    error: function(data) {
      console.log(data);
    }
  });
});

      


$(document).ready(function(){
  $.ajax({
    url: "http://localhost/SHMS/Totalexdata.php",
    method: "GET",
    success: function(data) {
      console.log(data);
      var exercisetype = [];
     
      var calories = [];
  
      for(var i in data) {
        if(uidm==data[i].uid)
          {
        exercisetype.push(data[i].exercisetype);
        // duration.push(data[i].duration);
        calories.push(data[i].calories);
          }
      }
//Total Score
      var chartdata5 = {
        labels: exercisetype,
        datasets : [
          {
            label: 'Total Score',
            backgroundColor: [
              'rgb(255, 99, 132)',
              'rgb(54, 162, 235)',
              'rgb(255, 205, 86)'
            ],
            borderColor: 'rgba(200, 200, 200, 0.75)',
            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
            hoverBorderColor: 'rgba(200, 200, 200, 1)',
            hoverOffset: 50,
            data: calories,
          }
        ]
      };

      var ctx5 = $("#myChart5");

      var barGraph = new Chart(ctx5, {
        type: 'pie',
        data: chartdata5
      });
    },
    error: function(data) {
      console.log(data);
    }
  });
});

