<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="initial-scale=1, minimum-scale=1, maximum-scale=1">
            <meta charset="utf-8">
                <title>Grade Calculator</title>
                <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css" />
                <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
                <script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
                
            <script>
            
	        	$(document).ready(function(){ 
	            	$('#save_maxpoints').on('click', saveMaxpoints);
	       	 		$('#save_factors').on('click', saveFactors);
	       	 		$('#save_category').on('click', saveCategories);
	            });
            
	       	 	var saveMaxpoints = function()
		       	 {
			       	 alert("caonima");
		       	    try {
		       	        var homework_maxpoint = parseInt($('#homework_maxpoint').val());
		       	        localStorage.setItem('homework_maxpoint', homework_maxpoint);
		       	        
		       	        var lab_maxpoint = parseInt($('#lab_maxpoint').val());
		       	        localStorage.setItem('lab_maxpoint', lab_maxpoint);
		       	        
		       	        var project_maxpoint = parseInt($('#project_maxpoint').val()); 
		       	        localStorage.setItem('project_maxpoint', project_maxpoint);
		       	        
		       	        var presentation_maxpoint = parseInt($('#presentation_maxpoint').val());
		       	        localStorage.setItem('presentation_maxpoint', presentation_maxpoint);
		       	        
		       	        var midterm_maxpoint = parseInt($('#midterm_maxpoint').val());
		       	        localStorage.setItem('midterm_maxpoint', midterm_maxpoint);   
		       	        
		       	        var final_maxpoint = parseInt($('#final_maxpoint').val());
		       	        localStorage.setItem('final_maxpoint', final_maxpoint);   
		       	        
		       	        
		       	        alert("#" + homework_maxpoint + "#" + lab_maxpoint + "#" + project_maxpoint + "#" + midterm_maxpoint + "#" + presentation_maxpoint + "#" + final_maxpoint + "#");
		       	       
		       	      
		       	    } catch (ex)
		       	    {
		       	        alert('Points must be a decimal value');
		       	    }
		       	 };
		       	 
		       	 var saveFactors = function()
		       	 {
		       	    try {
		       	        var homework_factor = parseInt($('#homework_factor').val());                
		       	        var lab_factor = parseInt($('#lab_factor').val());
		       	        var project_factor = parseInt($('#project_factor').val()); 
		       	        var presentation_factor = parseInt($('#presentation_factor').val());
		       	        var midterm_factor = parseInt($('#midterm_factor').val());
		       	        var final_factor = parseInt($('#final_factor').val());
		       	        
		       	        
		       	        var total_percents = homework_factor + lab_factor + project_factor + presentation_factor + midterm_factor + final_factor;
		       	        //alert("total: " + total_percents);
		       	        
		       	        if(homework_factor == 0 || lab_factor == 0 || project_factor == 0 || presentation_factor == 0 || midterm_factor == 0 || final_factor == 0)
		       	        	alert("Wrong inputs, every factor should not be 0");
		       	        else if(total_percents != 100) 
		       	        	alert("Wrong inputs, the total percents should be 100 percents");
		       	        else{
		       	        	localStorage.setItem('homework_factor', homework_factor);
		       	            localStorage.setItem('lab_factor', lab_factor);       
		       	            localStorage.setItem('project_factor', project_factor);       
		       	            localStorage.setItem('presentation_factor', presentation_factor);       
		       	            localStorage.setItem('midterm_factor', midterm_factor);              
		       	            localStorage.setItem('final_factor', final_factor);
		       	            
		       	            alert("#" + homework_factor + "#" + lab_factor + "#" + project_factor + "#" + presentation_factor + "#" + midterm_factor + "#" + final_factor);
		       	        }         
		       	    } catch (ex)
		       	    {
		       	        alert('Points must be a decimal value');
		       	    }
		       	 };
		       	 
		       	 var saveCategories = function()
		       	 {
		       	    try {
		       	        var a_left = parseInt($('#a_left').val());                
		       	        var b_left = parseInt($('#b_left').val());
		       	        var b_right = parseInt($('#b_right').val()); 
		       	        var c_left = parseInt($('#c_left').val());
		       	        var c_right = parseInt($('#c_right').val());
		       	        var d_left = parseInt($('#d_left').val());
		       	        var d_right = parseInt($('#d_right').val());
		       	        var f_right = parseInt($('#f_right').val());
		       	        
		       	        alert("#" + a_left + "  " + b_left + "#" + b_right + "  " + c_left + "#" + c_right + "  " + d_left + "#" + d_right + "  " + f_right + "#");
		       	        
		       	        if(a_left == 0 || b_left == 0 || b_right == 0 || c_left == 0 || c_right == 0 || d_left == 0 || d_right == 0 || f_right == 0)
		       	        	alert("Wrong inputs, every input should not be 0");
		       	        else if(b_right + 1 != a_left || c_right + 1 != b_left || d_right + 1 != c_left || f_right + 1 != d_left) 
		       	        	alert("Please follow \"higher category.lower == lower category. higher + 1\"");
		       	        else{
		       	        	localStorage.setItem('a_left', a_left);
		       	            localStorage.setItem('b_left', b_left);
		       	            localStorage.setItem('b_right', b_right);       
		       	            localStorage.setItem('c_left', c_left);       
		       	            localStorage.setItem('c_right', c_right);
		       	            localStorage.setItem('d_left', d_left);
		       	            localStorage.setItem('d_right', d_right);             
		       	            localStorage.setItem('f_right', f_right);
		       	        }       
		       	    } catch (ex)
		       	    {
		       	        alert('Points must be a decimal value');
		       	    }
		       	 };

		       
            </script>     
               
    </head>   
    <body>    
     
        
        <div data-role="page" class="" id="settingsPage" data-add-back-btn="true" >
            <div data-role="header" class="">
                <a href="main.php" id='cancelSettings' class="ui-btn ui-icon-delete ui-btn-icon-left" data-rel="back">Cancel</a>
                <h1>Grade - Settings</h1>
            </div>
            <div data-role="content" class="">
                <form>
                    <input type="number" name="gradeCutOff" id="gradeCutOff" value="" placeholder="Grade Cutoff at">
                        <p style="text-align: center;">
                        <a href="main.php" id='saveSettings' data-role="button" data-inline="true" data-icon="check">Save</a>
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
        
        <script type="text/javascript" src="cordova.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>