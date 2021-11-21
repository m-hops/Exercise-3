$(document).ready (function(){

  let form = $('#capsule_data')[0];
  let data = new FormData(form);

  $.ajax({
       url: "../../db/GashaPon.db",
       data: data,
       dataType: "text", /*response will be text */
       cache: false,
       timeout: 600000,
       success: function (response) {
       //reponse is a STRING (not a JavaScript object -> so we need to convert)
       console.log("we had success!");
       console.log(response);
      },
      error:function(){
     console.log("error occurred");
   }
 });
 });
