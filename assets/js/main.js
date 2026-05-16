document.addEventListener('DOMContentLoaded', function() {
    // Menu Toggle Script
    var menuToggle = document.getElementById('menu-toggle');
    if (menuToggle) {
        menuToggle.addEventListener('click', function(e) {
            e.preventDefault();
            document.getElementById('wrapper').classList.toggle('toggled');
        });
    }

    // Example AJAX Function to fetch real-time data
    /*
    function fetchStockAlerts() {
        fetch('../modules/api_endpoints.php?action=get_alerts')
            .then(response => response.json())
            .then(data => {
                console.log(data);
                // Update DOM with new alerts
            })
            .catch(error => console.error('Error fetching alerts:', error));
    }
    
    // Set interval for real-time updates
    setInterval(fetchStockAlerts, 60000); // Every 60 seconds
    */
});
