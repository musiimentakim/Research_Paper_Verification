// Line Graph: Papers Submitted Over Time
document.addEventListener("DOMContentLoaded", function () {
    var ctx = document.getElementById("lineChart").getContext("2d");

    var lineChart = new Chart(ctx, {
        type: "line",
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [
                {
                    label: "Papers Submitted",
                    data: [120, 150, 180, 210, 230, 200, 190, 250, 300, 310, 320, 350], // Sample data
                    borderColor: "blue",
                    backgroundColor: "rgba(0, 0, 255, 0.1)",
                    borderWidth: 2,
                    pointRadius: 4,
                    pointBackgroundColor: "blue",
                    pointBorderColor: "#fff",
                    fill: true,
                    tension: 0.4, // Smooth curve
                },
            ],
        },
        options: {
            responsive: true,
            plugins: {
                tooltip: {
                    callbacks: {
                        label: function (tooltipItem) {
                            return `Papers Submitted: ${tooltipItem.raw}`;
                        },
                    },
                },
            },
        },
    });
});

// Pie Chart: Distribution of Papers Verified, Accepted, and Rejected
document.addEventListener("DOMContentLoaded", function () {
    var ctx = document.getElementById("pieChart").getContext("2d");

    var pieChart = new Chart(ctx, {
        type: "pie",
        data: {
            labels: ["Verified Papers", "Accepted Papers", "Rejected Papers"],
            datasets: [
                {
                    label: "Paper Distribution",
                    data: [60, 25, 15], // Example percentages
                    backgroundColor: ["#33FF57", "#3357FF", "#FF5733"], // Green for verified, Blue for accepted, Red for rejected
                    borderWidth: 1,
                },
            ],
        },
        options: {
            responsive: true,
            plugins: {
                tooltip: {
                    callbacks: {
                        label: function (tooltipItem) {
                            return `${tooltipItem.label}: ${tooltipItem.raw}%`;
                        },
                    },
                },
                legend: {
                    position: "bottom",
                },
            },
        },
    });
});
