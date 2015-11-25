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
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="initial-scale=1, minimum-scale=1, maximum-scale=1">
            <meta charset="utf-8">
                <title>Grade Calculator</title>
                <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css">
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
                <script src="js/app.js"></script>
                
                <script type="text/javascript">
                	function get_course_description(){
                    	
                		var action = "action=getText";
                		var url = "course_description.php";

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
            			//ʹ��GET�����ύ����
            			xmlHttp.open("GET",url+"?"+action,true);
            			//����HTTPͷ��Ϣ
            			xmlHttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
            			//��������,�˴���GET������ͬ
            			xmlHttp.send(null);
            			//ָ���ص�����
            			xmlHttp.onreadystatechange = function(){
            				if(xmlHttp.readyState == 4){
            					var course_info = xmlHttp.responseText;
            					$("#course_info").text(course_info);            					
            					$("#course_div").show();
            					
            					//alert("str: " + text);
            					/*							
            					if(text == "success"){
            						alert("success");
            					}
            					else{
            						alert(text);
            					}
            					*/
            									
            				}
            			}
            			
                    	//alert("hello");
                    }
                </script>
    </head>
    
    
    <body>
    
    	 <div data-role="page" class="" id="student_page">
		<div data-role="header" class="">
			<h1>student info</h1>
			<input name="test" id="test"  type="button" value="test">              
            <a href="#setting_page" id='settingsButton' class="ui-btn-right" data-role="button" data-icon="gear">Settings</a>
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
	            
	              <input id="save_student_info"  name="save_student_info" type="button" value="Save">  
	            </form>
	            <br>
			    <div>
			    	<h3>CMPE235 Course Description</h3>
			    	<p id="course_description">hello world</p>
			    </div>
			</div>
			<div data-role="footer"><h1>Team Mossberg</h1>
		 	</div>
		</div>
        
    
        <div data-role="page" class="" id="mainPage">
            <div data-role="header" class="">
                <h1>Grade Calculator by team mossberg</h1>
                <input name="test" id="test"  type="button" value="test">               
                <a href="#student_info" name="show_student_info" id="show_student_info" class="ui-btn-left" data-role="button">display student info</a>
                <input onclick="get_course_description()" name="show_course_info" id="show_course_info"  type="button" value="display course info"> 
                <a href="#setting_page" id='settingsButton' class="ui-btn-right" data-role="button" data-icon="gear">Settings</a>
            </div>
            <div data-role="content" class="">
            	<h3>Please enter the points</h3>
                <form>
                    <div data-role="fieldcontain">
                    
                        <label for="homework_grades">Homeworks</label>
                        <input type="number" name="homework_grades" id="homework_grades" data-clear-btn="true" maxlength="3" value="" placeholder="Enter points here">
                        <br><br>
                        
                        <label for="lab_grades">Labs</label>
                        <input type="number" name="lab_grades" id="lab_grades" data-clear-btn="true" maxlength="3" value="" placeholder="Enter points here">
                        <br><br>
                        
                        <label for="project_grades">Project</label>
                        <input type="number" name="project_grades" id="project_grades" data-clear-btn="true" maxlength="3" value="" placeholder="Enter points here">
                        <br><br>
                        
                        <label for="presentation_grades">Presentation</label>
                        <input type="number" name="presentation_grades" id="presentation_grades" data-clear-btn="true" maxlength="3" value="" placeholder="Enter points here">
                        <br><br>
                        
                        <label for="midterm_grades">Midterm</label>
                        <input type="number" name="midterm_grades" id="midterm_grades" data-clear-btn="true" maxlength="3" value="" placeholder="Enter points here">
                        <br><br>
                        
                        <label for="final_grades">Final</label>
                        <input type="number" name="final_grades" id="final_grades" data-clear-btn="true" maxlength="3" value="" placeholder="Enter points here">
                        <br><br>
                        
                        
                     </div>
                    <p style="text-align: center;">
                    <a href="#" id="computeGrade" data-role="button" data-icon="check">Compute Grade</a>
                    </p>
                    <p class="final grade">
                    <label>Final Grade</label>
                    <span id="finalgrade">TBD</span>
                    </p>
                </form>
                
               
		  
            </div>
        </div>
        
        <div data-role="page" class="" id="setting_page">
            <div data-role="header" class="">
               
                <h1>Grade - Settings</h1>
            </div>
            <div data-role="content" class="">
                <form>                   
                        <p style="text-align: center;">
                         <a href="#" id='resetSettings' data-role="button" data-inline="true" class="ui-btn-icon-left" data-icon="delete" data-rel="back">Reset</a>
                        <a href="#student_page" id='settings_return' data-role="button" data-inline="true" class="ui-btn-icon-left" data-icon="back">Return</a>
                       
                        </p>
                </form>
                
				
				<form>
					<fieldset>
						<legend>set maximum points</legend>
					    	<label for="homework_maxpoint">Homeworks:</label>
    						<input name="homework_maxpoint" id="homework_maxpoint" type="range" min="0" max="500" value="50" data-highlight="true">
    						
    						<label for="lab_maxpoint">Labs:</label>
    						<input name="lab_maxpoint" id="lab_maxpoint" type="range" min="0" max="500" value="50" data-highlight="true">
    						
    						<label for="project_maxpoint">Projects:</label>
    						<input name="project_maxpoint" id="project_maxpoint" type="range" min="0" max="500" value="50" data-highlight="true">
    						
    						<label for="presentation_maxpoint">Presentation:</label>
    						<input name="presentation_maxpoint" id="presentation_maxpoint" type="range" min="0" max="500" value="50" data-highlight="true">
    						
    						<label for="midterm_maxpoint">Midterm:</label>
    						<input name="midterm_maxpoint" id="midterm_maxpoint" type="range" min="0" max="500" value="50" data-highlight="true">
    						
    						<label for="final_maxpoint">Final:</label>
    						<input name="final_maxpoint" id="final_maxpoint" type="range" min="0" max="500" value="50" data-highlight="true">    												
    						    												
					</fieldset>
					<input name="save_maxpoints" id="save_maxpoints"  type="button" value="Save">     
				</form>
				<br><br>
				
				<form>
					<fieldset>
						<legend>set scaling factors</legend>
					    	<label for="homework_factor">Homeworks(percentage):</label>
    						<input name="homework_factor" id="homework_factor" type="range" min="0" max="100" value="10" data-highlight="true">
    						
    						<label for="lab_factor">Labs(percentage):</label>
    						<input name="lab_factor" id="lab_factor" type="range" min="0" max="100" value="40" data-highlight="true">
    						
    						<label for="project_factor">Projects(percentage):</label>
    						<input name="project_factor" id="project_factor" type="range" min="0" max="100" value="20" data-highlight="true">
    						
    						<label for="presentation_factor">Presentation(percentage):</label>
    						<input name="presentation_factor" id="presentation_factor" type="range" min="0" max="100" value="10" data-highlight="true">
    						
    						<label for="midterm_factor">Midterm(percentage):</label>
    						<input name="midterm_factor" id="midterm_factor" type="range" min="0" max="100" value="10" data-highlight="true">
    						
    						<label for="final_factor">Final(percentage):</label>
    						<input name="final_factor" id="final_factor" type="range" min="0" max="100" value="10" data-highlight="true">    						    						
					</fieldset>
					<input name="save_factors" id="save_factors"  type="button" value="Save">  
				</form>
                <br><br>
                
                <form>
					<fieldset>
						<legend>Grade category</legend>
							<label for="a_left">A:</label>
    						<input name="a_left" id="a_left" type="range" min="0" max="100" value="90" data-highlight="true">					    
    											    
						    <div data-role="rangeslider">
						        <label for="b_left">B:</label>
						        <input name="b_left" id="b_left" type="range" min="0" max="100" value="80">
						        <label for="b_right">Rangeslider:</label>
						        <input name="b_right" id="b_right" type="range" min="0" max="100" value="89">
						    </div>
						    
						    <div data-role="rangeslider">
						        <label for="c_left">C:</label>
						        <input name="c_left" id="c_left" type="range" min="0" max="100" value="70">
						        <label for="c_right">Rangeslider:</label>
						        <input name="c_right" id="c_right" type="range" min="0" max="100" value="79">
						    </div>
						    
						    <div data-role="rangeslider">
						        <label for="d_left">D:</label>
						        <input name="d_left" id="d_left" type="range" min="0" max="100" value="60">
						        <label for="d_right">Rangeslider:</label>
						        <input name="d_right" id="d_right" type="range" min="0" max="100" value="69">
						    </div>						    
						 
						    
						    <label for="f_right">F:</label>
    						<input name="f_right" id="f_right" type="range" min="0" max="100" value="59" data-highlight="true">					    
					</fieldset>
					<input name="save_category" id="save_category"  type="button" value="Save">
					
				</form>
				
                
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