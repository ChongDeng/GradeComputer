<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="initial-scale=1, minimum-scale=1, maximum-scale=1">
            <meta charset="utf-8">
                <title>Grade Calculator</title>
                <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css" />
                <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
                <script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
                <script src="js/app.js"></script>
                </head>
    
    
    <body>
    
        <div data-role="page" class="" id="mainPage">
            <div data-role="header" class="">
                <h1>Grade Calculator by team mossberg</h1>
                <input name="test" id="test"  type="button" value="test">
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
                <a href="#" id='cancelSettings' class="ui-btn ui-icon-delete ui-btn-icon-left" data-rel="back">Cancel</a>
                <h1>Grade - Settings</h1>
            </div>
            <div data-role="content" class="">
                <form>
                    <input type="number" name="gradeCutOff" id="gradeCutOff" value="" placeholder="Grade Cutoff at">
                        <p style="text-align: center;">
                        <a href="#mainPage" id='saveSettings' data-role="button" data-inline="true" data-icon="check">Save</a>
                       
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
        
        
        
        
        
        <div data-role="page" class="" id="settingsPage" data-add-back-btn="true" >
            <div data-role="header" class="">
                <a href="#" id='cancelSettings' class="ui-btn ui-icon-delete ui-btn-icon-left" data-rel="back">Cancel</a>
                <h1>Grade - Settings</h1>
            </div>
            <div data-role="content" class="">
                <form>
                    <input type="number" name="gradeCutOff" id="gradeCutOff" value="" placeholder="Grade Cutoff at">
                        <p style="text-align: center;">
                        <a href="#" id='saveSettings' data-role="button" data-inline="true" data-icon="check">Save</a>
                        </p>
                        </form>
            </div>
        </div>
        
       
    </body>
</html>