<?php
	if(isset($_GET["action"]) and $_GET["action"]=="getText"){
	  	$res = update_student_info_DB( ); 
	  	if($res == "success") 		
	 		print 'success';
	 	else 
	 	    print $res; 	    
	  	exit();  	
  	}
	 
	$student_info = get_student_details(1); 
?>

<!doctype html>
<html>
<head>
    <title>Forms with jQuery Mobile</title>
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css">
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
    <script src="js/student_info.js"></script>
    
    <script type="text/javascript">

    	//$('#save_button').on('click', update_student_info);
     
		function update_student_info(){
			
			var firstname = document.getElementById("firstname").value;
			var lastname = document.getElementById("lastname").value;			
			var phone =  document.getElementById("phone").value;
			var sjsu_id =  document.getElementById("sjsu_id").value;
		    var student_id = 1;  
			var post = "firstname=" + firstname + "&lastname=" + lastname + 
	        "&phone=" + phone + "&sjsu_id="+sjsu_id + "&student_id=" + student_id;
			//alert("post: " + post);
	        
			var action = "action=getText";
			var url = "student_info.php";
	
			var xmlHttp = false;
			try {
				xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
			}catch(e){
			  	try{
			  		xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
				}catch(E){
					xmlHttp = false;
				}
			}
			if(!xmlHttp && typeof XMLHttpRequest != 'undefined') {
				xmlHttp = new XMLHttpRequest();
			}
			//使用GET方法提交数据
			xmlHttp.open("POST",url+"?"+action,true);
			//发送HTTP头信息
			xmlHttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
			//发送请求,此处与GET方法不同
			xmlHttp.send(post);
			//指定回调函数
			xmlHttp.onreadystatechange = function(){
				if(xmlHttp.readyState == 4){
					var text = xmlHttp.responseText;
					//alert("str: " + text);
												
					if(text == "success"){
						alert("success");
					}
					else{
						alert(text);
					}
									
				}
			}
					
		}	
	</script>	
 
</head>
<body>
	
	<div data-role="page" class="" id="student_info">
		<div data-role="header" class="">
			<h1>student info</h1>
		</div>
		<div data-role="content" class="">
            <form name="form1">
             
              <p>
                <label>First Name
                <input type="text" name="firstname" id="firstname" value="<?php echo $student_info[0]['first_name'];?>">
                </label>
              </p>            
             
              
              <p>
                <label>Last Name
                <input type="text" name="lastname" id="lastname" value="<?php echo $student_info[0]['last_name'];?>">
                </label>
              </p>
              
              <p>
                <label>phone number
                <input type="text" name="phone" id="phone" value="<?php echo $student_info[0]['phone'];?>">
                </label>
              </p>
              
              <p>
                <label>SJSU ID
                <input type="text" name="sjsu_id" id="sjsu_id" value="<?php echo $student_info[0]['sjsu_id'];?>">
                </label>
              </p>              
            
              <input onclick="update_student_info2()" id="save_student_info"  name="save_student_info" type="button" value="Save">  
            </form>
		</div>
		<div data-role="footer"><h1>Team Mossberg</h1>
	 	</div>
	</div>
</body>
</html>

<?php
	function get_student_details($student_id){
	   include_once('db_fns.php'); 
	   // query database for the books in a category
	   if ((!$student_id) || ($student_id == '')) {
	     return false;
	   }
	   
	   $conn = db_connect();
	  // $query = "select * from food where food_id = '".$food_id."'";
	   
	   $query = "select *
				 from student
				 where student_id = '".$student_id."'";
	   	   
	   $result = @$conn->query($query);
	   if (!$result) {
	     return false;
	   }
	   
	   $num_info = @$result->num_rows;
	   if ($num_info == 0) {
	      return false;
	   }      
	   $result = db_result_to_array($result);
	   return $result;
	}
	
	function update_student_info_DB(){
				
		include_once('db_fns.php'); 			
	
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$phone = $_POST['phone'];
		$sjsu_id = $_POST['sjsu_id'];
		$student_id = $_POST['student_id'];
		
		$conn = db_connect();
		$quey = null; $result = null;
	

		$query = "update student set 
				 first_name = '".$firstname."', 
				 last_name = '".$lastname."', 
				 phone ='".$phone."',
				 sjsu_id ='".$sjsu_id."'				 
				 where student_id = ".$student_id;
		//return $query;
		//write_log($query);
		$result = @$conn->query($query);
		if(!$result) return  "Error: Can't update student info";
		
		return "success";
  	}
  	
?>
