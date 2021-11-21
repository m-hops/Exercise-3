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
       let parsedJSON = JSON.parse(response);
       console.log(parsedJSON);
      },
      error:function(){
     console.log("error occurred");
   }
 });
 });

 // function displayPull(genres){
 //
 //   let htmlForm = $("#form_options");
 //   for(let i = 0; i != genres.length; ++i){
 //     let htmlInput = $("<input>");
 //     $(htmlInput).attr('type', 'radio');
 //     $(htmlInput).attr('name', 'capsule_mus');
 //     $(htmlInput).attr('value', genres[i]);
 //     $(htmlInput).appendTo(htmlForm);
 //     let htmlLable = $("<label>");
 //     $(htmlLable).attr('for', genres[i]);
 //     $(htmlLable).text(genres[i]);
 //     console.log(genres[i]);
 //   }
 // }
