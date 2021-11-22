$(document).ready (function(){

  let form = $('capsule_output');
  let data = new FormData(form);

  $.ajax({
      type:"POST",
       url: "../../db/GashaPon.db",
       data: data,
       dataType: "text", /*response will be text */
       cache: false,
       timeout: 600000,
       success: function (response) {
       console.log(parsedJSON);
      },
      error:function(){
     console.log("error occurred");
   }
 });
 });
