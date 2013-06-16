<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="closing_time.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
</head>
<body>
    <div id="search_area">
        <div id="inner">
            <form action='maptestnew.php' method='POST'>
            <input type="text" name='zipcode' placeholder="Enter a location" id='location_field' class="location_field push_4">
            <input type="button" value="Submit" class="push_4" id="submit">
            </form>
        </div>
    </div>
    <div class="clear"></div>
    <div id="category_bar">
        <div id="category_list"> <span class="category" id="food">Food</span>
 <span class="category" id="health_home">Health and Home</span>
 <span class="category" id="finance">Finance</span>
 <span class="category" id="auto_and_gas">Auto and Gas</span>
 <span class="category" id="retail">Retail</span>

        </div>
    </div>
    <div class="container_12">
        <div class="clear"></div>
        <div class="grid_7" id="result_tab">
           
        </div>
        <div class="grid_5" id="info_panel"></div>
    </div>
    <div id="footer">Closing Time 2013, Yehuda Schonfeld</div>
    <div class="clear"></div>

<script>

$("#submit").click(function(){
$('#result_tab').empty();
});
                $("#submit").click(function(){
     $(function()             {$.getJSON('json-data.php', function(data) {
                   $(data).each(function(k,v){        
                         $('<img>',{
                           title:v.title,
                           src:v.img
                                   }).appendTo($('#result_tab'));

                                             })
                                     });
                               });
                        });   


//get auto data
            
            $("#auto_and_gas").click(function(){
$('#result_tab').empty();
});
                $("#auto_and_gas").click(function(){
     $(function()             {$.getJSON('json-auto.php',$('#location_field').val(), function(data) {
                   $(data).each(function(k,v){        
                         $('<img>',{
                           title:v.title,
                           src:v.img
                                   }).appendTo($('#result_tab'));

                                             })
                                     });
                               });
                        });

//get food data
            
$("#food").click(function(){
$('#result_tab').empty();
});
            
                $("#food").click(function(){
     $(function(){$.getJSON('json-food.php', function(data) {
                   $(data).each(function(k,v){        
                         $('<img>',{
                           title:v.title,
                           src:v.img
                                   }).appendTo($('#result_tab'));

                                             })
                                        });
                                   });
                             });


//get House and Home data
            
$("#retail").click(function(){
$('#result_tab').empty();
});
            
                $("#retail").click(function(){
     $(function(){$.getJSON('json-retail.php', function(data) {
                   $(data).each(function(k,v){        
                         $('<img>',{
                           title:v.title,
                           src:v.img
                                   }).appendTo($('#result_tab'));

                                             })
                                        });
                                   });
                             });

//get inance data
            
$("#finance").click(function(){
$('#result_tab').empty();
});
            
                $("#finance").click(function(){
     $(function(){$.getJSON('json-finance.php', function(data) {
                   $(data).each(function(k,v){        
                         $('<img>',{
                           title:v.title,
                           src:v.img
                                   }).appendTo($('#result_tab'));

                                             })
                                        });
                                   });
                             });

</script>

 
</body>
</html>
