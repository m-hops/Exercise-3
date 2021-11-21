
var client_id = '3eb376fc09b440c787b4ea793dc43745';
var client_secret = '81e1506f70754067a59527ece27c53d3';

$(document).ready (function(){
  //
  // console.log(JSON.stringify({
  //   grant_type: 'client_credentials'
  // }));
  $.ajax({
    type: "POST",
    url: "https://accounts.spotify.com/api/token",
        //crossDomain: true,
     //contentType: "application/json",
    data: "grant_type=client_credentials",
    // headers:{
    //   'Authorization' : 'Basic 3eb376fc09b440c787b4ea793dc43745:81e1506f70754067a59527ece27c53d3',
    //    //'Accept': 'application/json'
    //    //'Content-Type': 'application/json'
    // },
    beforeSend: function (xhr) {
        xhr.setRequestHeader ("Authorization", "Basic " + btoa(client_id + ':' + client_secret));
        //xhr.setRequestHeader ("Accept", "application/json");
        xhr.setRequestHeader ("Content-Type", "application/x-www-form-urlencoded");
    },
    dataType: "json", /*response will be text */
    cache: false,
    timeout: 600000,
    success: onAuth,
    // function (response) {
    //   //reponse is a STRING (not a JavaScript object -> so we need to convert)
    //   console.log("we had success!");
    //   console.log(response);
    //   response.access_token
    // },
    error:function( jqXHR, textStatus, errorThrown){
      console.log("error occurred");
      console.log(jqXHR);
      console.log(textStatus);
      console.log(errorThrown);
    }
  });
});



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
      for(let i = 0; i != response.genres.length; ++i){
        console.log(response.genres[i]);
      }
    },
    error:function( jqXHR, textStatus, errorThrown){
      console.log("error occurred");
      console.log(jqXHR);
      console.log(textStatus);
      console.log(errorThrown);
    }
  });
}
   //  $.ajax({
   //      type: "GET",
   //       url: "https://api.spotify.com/v1/recommendations/available-genre-seeds",
   //       //contentType: "application/json",
   //       beforeSend: function (xhr) {
   //          xhr.setRequestHeader ("Authorization", "Bearer 3eb376fc09b440c787b4ea793dc43745");
   //      },
   //       dataType: "text", /*response will be text */
   //       cache: false,
   //       timeout: 600000,
   //       success: function (response) {
   //       //reponse is a STRING (not a JavaScript object -> so we need to convert)
   //       console.log("we had success!");
   //       console.log(response);
   //      },
   //      error:function( jqXHR, textStatus, errorThrown){
   //     console.log("error occurred");
   //    console.log(jqXHR);
   //   console.log(textStatus);
   //  console.log(errorThrown);
   //   }
   // });
