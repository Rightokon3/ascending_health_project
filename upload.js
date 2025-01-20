document.getElementById("uploadForm").addEventListener("submit", function(event) {
    event.preventDefault();

    var formData = new FormData(this);

    // AJAX for image upload
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "eating_admin.php", true);

    xhr.onload = function() {
        if (xhr.status === 200) {
            alert('successfully posted');document.location.href="display_eating.php";
        } else {
            alert("Upload failed. Please try again.");
        }
    };

    xhr.send(formData);
});
