document.addEventListener("DOMContentLoaded", function() {
    fetchSalesData();
  });
  
  function fetchSalesData() {
    // Make an AJAX request to fetch sales data from PHP script
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "p.php", true);
    xhr.onreadystatechange = function() {
      if (xhr.readyState == 4 && xhr.status == 200) {
        // Parse response JSON data
        var response = JSON.parse(xhr.responseText);
        // Update meter with fetched sales data
        updateMeter(response.sales);
      }
    };
    xhr.send();
  }
  
  function updateMeter(sales) {
    var meterValue = sales * 0.0002; // Adjust scale for meter
    
    // Limit maximum value to 100
    if (meterValue > 100) {
      meterValue = 100;
    }
    
    // Update meter indicator
    document.querySelector('.indicator').style.height = `${meterValue}%`;
    
    // Update sales value display
    document.querySelector('.value').textContent = sales;
    
    // Show/hide low sales message
    var messageElement = document.querySelector('.message');
    if (sales < 20) {
      messageElement.style.display = 'block';
    } else {
      messageElement.style.display = 'none';
    }
  }
  