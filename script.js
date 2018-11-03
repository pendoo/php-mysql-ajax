$(document).ready(function() {

   $("#search").keyup(function() {
    var code = $('#search').val();
       if (code == "") {
			$("#display").html("");
       }
       else {


           $.ajax({

               type: "POST",
               url: "ajax.php",

               data: {

                   search: code

               },

               success: function(html) {
                   $("#display").html(html).show();
               }

           });

       }

   });

});