
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
//Today Score
      var chartdata4 = {
        labels: exercisetype,
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
            data: calories,
          }
        ]
      };

      var ctx4 = $("#myChart4");

      var barGraph = new Chart(ctx4, {
        type: 'pie',
        data: chartdata4
      });
    },
    error: function(data) {
      console.log(data);
    }
  });
});

      



// $(document).ready(function(){
//   $.ajax({
//     url: "http://localhost/SHMS/Totalexdata.php",
//     method: "GET",
//     success: function(data) {
//       console.log(data);
//       // var exercisetype = [];
//       // var duration = [];
//       var calories = [];
//       var time = [];
     
//       for(var i in data) {
//         exercisetype.push(data[i].exercisetype);
//         // duration.push(data[i].duration);
//         calories.push(data[i].calories);
//         time.push(data[i].time);
//       }

//       var chartdata6 = {
//         labels:calories,
//         datasets : [
//           {
//             label: 'alll Score',
//             backgroundColor: [
//               'rgb(255, 99, 132)',
//               'rgb(54, 162, 235)',
//               'rgb(255, 205, 86)'
//             ],
//             borderColor: 'rgba(200, 200, 200, 0.75)',
//             hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
//             hoverBorderColor: 'rgba(200, 200, 200, 1)',
//             hoverOffset: 50,
//             data: time,
//           }
//         ]
//       };

//       var ctx6 = $("#myChart6");

//       var barGra = new Chart(ctx6, {
//         type: 'line',
//         data: chartdata6
//       });
//     },
//     error: function(data) {
//       console.log(data);
//     }
//   });
// });
      
    //   var heartrate = [];
    //   var tim= [];
      
    //   var m =data.split("S");
      
    //   var b=m[0].split(",");
    //   var c=m[1].split(",");
      
      
    //   console.log(b);
    //   for(var i=0;i<b.length;i++)
    //  {
        
    //     heartrate.push( b[i]);
    //   }
    //   for(var i=0;i<c.length;i++)
    //  {
        
    //   tim.push( c[i]);
    //   }
     
     
     
    //  console.log(heartrate);
     
    
      // console.log(tim);
// 
      







// // how much steps per day
//   new Chart(ctx, {
//     type: 'doughnut',
//     data: {
//       labels: ['Achived','Goals'],
//       datasets: [{
//         label: 'NO umber of calory'+z,
//         data: [152, 19],
//         backgroundColor: [
//           'rgb(75, 192, 192)',
//           'rgb(255, 255, 55)',
          
//         ]
  
//       }]
//     },
//     options: {
//       scales: {
//         y: {
//           beginAtZero: true
//         }
//       }
//     }
//   });
//   var a=117,b=67,c=88,d=35,e=33,f=177,g=93;
//   //how much calory per month
  

//   new Chart(ctx1, {
//     type: 'line',
//     data: {
//       labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July','August', 'September', 'October', 'November','December'],
//       datasets: [{
//         label: '# of Votes',
//         data: [a, b, c, d, e, f,g,a, b, c, d, e],
//         borderWidth: 1
//       }]
//     },
//     options: {
//       scales: {
//         y: {
//           beginAtZero: true
//         }
//       }
//     }
//   });

//   var a=117,b=67,c=88,d=35,e=33,f=177,g=93;
//   //how much calory per week
//   new Chart(ctx2, {
//     type: 'bar',
//     data: {
//       labels: ['monday', 'Tusday', 'Wensday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
//       datasets: [{
//         label: '# of Votes',
//         data: [a, b, c, d, e, f,g],
//         borderWidth: 1
//       }]
//     },
//     options: {
//       scales: {
//         y: {
//           beginAtZero: true
//         }
//       }
//     }
//   });


//   var a=117,b=67,c=88,d=35,e=33,f=177,g=93;
//   //how much calory per ex
//   new Chart(ctx3, {
//     type: 'pie',
//     data: {
//       labels: ['monday', 'Tusday', 'Wensday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
//       datasets: [{
//         label: '# of Votes',
//         data: [a, b, c, d, e, f,g],
//         borderWidth: 1
//       }]
//     },
//     options: {
//       scales: {
//         y: {
//           beginAtZero: true
//         }
//       }
//     }
//   });



    