
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="initial-scale=1, minimum-scale=1, maximum-scale=1">
            <meta charset="utf-8">
                <title>Grade Calculator</title>
                <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css">
				<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
				<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
				
				<script type="text/javascript">

					$(function(){
					$.ajax(
					    {        
					        type:'get',
					        url : 'http://www.orientino.info/project/course_description.php',
					      
					        dataType : 'jsonp',
					        jsonp:"jsoncallback",
					        success  : function(data) {
					            alert("course_name£º"+ data.course_name +" descripion£º"+ data.course_description);
					        },
					        error : function() {
					            alert('fail');
					        }
					    }
					);
					})
				</script>
                
          
    </head>
    
    
    <body>
    
    	hello       
    </body>
</html>