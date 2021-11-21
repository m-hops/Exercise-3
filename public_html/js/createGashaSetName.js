$(document).ready(function() {
  $("#capsule_data").submit(function(event) {

    event.preventDefault();
    console.log("button clicked");
    let form = $('#capsule_data')[0];
    let data = new FormData(form);
    //console.log(data);
    $.ajax({
      type: "POST",
      enctype: 'multipart/form-data',
      url: "createGashaSetName.php",
      data: data,
      processData: false, //prevents from converting into a query string
      contentType: false,
      cache: false,
      timeout: 600000,
      success: function(response) {
        window.location.replace("createGashaImage.php")
      },

      error: function() {

        console.log("error occurred");
      }
    });
  });
});
