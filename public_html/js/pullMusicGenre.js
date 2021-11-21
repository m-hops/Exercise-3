
var client_id = '3eb376fc09b440c787b4ea793dc43745';
var client_secret = '81e1506f70754067a59527ece27c53d3';

$(document).ready (function(){

  $.ajax({
    type: "POST",
    url: "https://accounts.spotify.com/api/token",
    data: "grant_type=client_credentials",
    beforeSend: function (xhr) {
        xhr.setRequestHeader ("Authorization", "Basic " + btoa(client_id + ':' + client_secret));
        xhr.setRequestHeader ("Content-Type", "application/x-www-form-urlencoded");
    },
    dataType: "json", /*response will be text */
    cache: false,
    timeout: 600000,
    success: onAuth,
    error:function( jqXHR, textStatus, errorThrown){
      console.log("error occurred");
      console.log(jqXHR);
      console.log(textStatus);
      console.log(errorThrown);
    }
  });
});


// when spotify authorisation is successful.
function onAuth(response){

  console.log("we had success!~~");
  console.log(response);


  $.ajax({
    type: "GET",
    url: "https://api.spotify.com/v1/recommendations/available-genre-seeds",
    //contentType: "application/json",
    beforeSend: function (xhr) {
      xhr.setRequestHeader ("Authorization", "Bearer " + response.access_token);
    },
    dataType: "json", /*response will be text */
    cache: false,
    timeout: 600000,
    success: function (response) {

      //reponse is a STRING (not a JavaScript object -> so we need to convert)
      console.log("we had success!");
      console.log(response);
      displayGenre(response.genres);
    },
    error:function( jqXHR, textStatus, errorThrown){
      console.log("error occurred");
      console.log(jqXHR);
      console.log(textStatus);
      console.log(errorThrown);
    }
  });
}

function displayGenre(genres){

  let htmlForm = $("#form_options");
  for(let i = 0; i != genres.length; ++i){
    let htmlInput = $("<input>");
    $(htmlInput).attr('type', 'radio');
    $(htmlInput).attr('name', 'capsule_mus');
    $(htmlInput).attr('value', genres[i]);
    $(htmlInput).appendTo(htmlForm);
    let htmlLable = $("<label>");
    $(htmlLable).attr('for', genres[i]);
    $(htmlLable).text(genres[i]);
    console.log(genres[i]);
  }
}
