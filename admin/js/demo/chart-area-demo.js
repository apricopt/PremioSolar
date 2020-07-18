
var data = 1;

var result = [];
// ajax code starts from here

var xhr = new XMLHttpRequest();


xhr.open('GET', 'fetcher.php?chart=bar', true);

xhr.onload = function () {
    if (this.status == 200) {
        // 200 means okay 404 means not found
        // we are here so it means content found


        data = JSON.parse(this.responseText);
        // data = this.responseText;
        //  var result = data[0].concat(data[1]);
        for (var i = 0; i < 30; i++) {
            //     // var alpha = data[i].name;
            var gamma = [1, 2, 3];
            result.push(data[i]);

        }

        //  console.log(gamma);
        console.log(data);



        // all code here 
        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'My First dataset',
                    backgroundColor: 'rgb(255, 99, 132)',
                    borderColor: 'rgb(255, 99, 132)',
                    data: [0, 10, 5, 2, 20, 30, 45]
                }]
            },

            // Configuration options go here
            options: {}
        });

        // all code ends







    }

}





xhr.send();







// ajax code ends from here 



//  this is the variable



// Area Chart Example

