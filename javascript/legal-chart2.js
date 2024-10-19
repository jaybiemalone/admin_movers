const ctx = document.getElementById('legalchart2');
const legalchart2 = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Safety Measures', 'Vehicle Maintenance', 'insurance Coverage', 'Background Checks', 'App Functionality'],
        datasets: [{
            label: 'User Compliance',
            backgroundColor: "rgb(44, 101, 187)",
            data: [85, 92, 78, 95, 88]
        }, {
            label: 'Driver Compliance',
            backgroundColor: "#f7760c",
            data: [90, 88, 95, 92, 85]
        }]
    },
    options: {
        scales: {
            yAxes:[{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});