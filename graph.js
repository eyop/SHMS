const ctx = document.getElementById("myChart");
const ctx1 = document.getElementById("myChart2");
const ctx2 = document.getElementById("myChart3");
const ctx3 = document.getElementById("myChart4");

var z = 15;

// how much steps per day
  new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ['Achived','Goals'],
      datasets: [{
        label: 'NO umber of calory'+z,
        data: [152, 19],
        backgroundColor: [
          'rgb(75, 192, 192)',
          'rgb(255, 255, 55)',
          
        ]
  
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
  var a=117,b=67,c=88,d=35,e=33,f=177,g=93;
  //how much calory per month
  new Chart(ctx1, {
    type: 'line',
    data: {
      labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July','August', 'September', 'October', 'November','December'],
      datasets: [{
        label: '# of Votes',
        data: [a, b, c, d, e, f,g,a, b, c, d, e],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
  var a=117,b=67,c=88,d=35,e=33,f=177,g=93;
  //how much calory per week
  new Chart(ctx2, {
    type: 'bar',
    data: {
      labels: ['monday', 'Tusday', 'Wensday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
      datasets: [{
        label: '# of Votes',
        data: [a, b, c, d, e, f,g],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });


  var a=117,b=67,c=88,d=35,e=33,f=177,g=93;
  //how much calory per ex
  new Chart(ctx3, {
    type: 'pie',
    data: {
      labels: ['monday', 'Tusday', 'Wensday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
      datasets: [{
        label: '# of Votes',
        data: [a, b, c, d, e, f,g],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });



    