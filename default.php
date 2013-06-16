<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="closing_time.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
</head>
<body>
    <div id="search_area">
        <div id="inner">
            <form action='yp-info.php' method='POST'>
            <input type="text" id='zip' name='zipcode' placeholder="Enter a location" class="location_field push_4">
            <input type="button" value="Submit" class="push_4" id="submit">
            </form>
        </div>
    </div>
    <div class="clear"></div>
    <div id="category_bar">
        <div id="category_list"> <span class="category" id="food">Food</span>
 <span class="category" id="health_home">Health and Home</span>
 <span class="category" id="finance">Finance</span>
 <span class="category" id="gas">Auto and Gas</span>
 <span class="category" id="retail">Retail</span>

        </div>
    </div>
    <div class="container_12">
        <div class="clear"></div>
        <div class="grid_7" id="result_tab">
           
        </div>
        <div class="grid_5" id="info_panel"></div>
    </div>
    <div id="footer">Closing Time 2013, Yehuda Schonfeld | Reuben Moddel </div>
    <div class="clear"></div>

<script>

//Redirect the enter button:

//Bind this keypress function to all of the input tags
$("input").keypress(function (evt) {
//Deterime where our character code is coming from within the event
          var charCode = evt.charCode || evt.keyCode;
                  if (charCode  == 13) { //Enter key's keycode
                  $('#submit').trigger('click');
                  return false;
                    }
      });

//Click Submit to see a sample result
$("#submit").click(function(){
$('#result_tab').empty();
});
                $("#submit").click(function(){
     $(function()             {$.getJSON('json-data.php',{category: $('.location_field').val()}, function(data) {
                   $(data).each(function(k,v){        
                         $('<img>',{
                           title:v.title,
                           src:v.img
                                   }).appendTo($('#result_tab'));

                                             })
                                     });
                               });
                        });   

// Click a category

//Clear the result_tab
$('.category').click(function(){
        $('#result_tab').empty();
});

//get any data
    $('.category').click(function(){
       var id = $(this).attr('id'),
               zip = $('#zip').val();
       $.getJSON('curl-test.php',{category:id,zip:zip},function(data){
               console.log(data.results);
       });
});

</script>

</body>
</html>	
