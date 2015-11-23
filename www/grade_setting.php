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
					</fieldset>
				</form>
				<br><br>
				
				<form>
					<fieldset>
						<legend>set scaling factors</legend>
					    	<label for="homework_factor">Homeworks(percentage):</label>
    						<input name="homework_factor" id="homework_factor" type="range" min="0" max="100" value="50" data-highlight="true">
    						
    						<label for="lab_factor">Labs(percentage):</label>
    						<input name="lab_factor" id="lab_factor" type="range" min="0" max="100" value="50" data-highlight="true">
    						
    						<label for="project_factor">Projects(percentage):</label>
    						<input name="project_factor" id="project_factor" type="range" min="0" max="100" value="50" data-highlight="true">
    						
    						<label for="presentation_factor">Presentation(percentage):</label>
    						<input name="presentation_factor" id="presentation_factor" type="range" min="0" max="100" value="50" data-highlight="true">
    						
    						<label for="midterm_factor">Midterm(percentage):</label>
    						<input name="midterm_factor" id="midterm_factor" type="range" min="0" max="100" value="50" data-highlight="true">    						
					</fieldset>
				</form>
                <br><br>
                
                <form>
					<fieldset>
						<legend>Grade category</legend>
					    	<div data-role="rangeslider">
						        <label for="a-left">A:</label>
						        <input name="a-left" id="a-left" type="range" min="0" max="100" value="90">
						        <label for="a-right">Rangeslider:</label>
						        <input name="a-right" id="a-right" type="range" min="0" max="100" value="100">
						    </div>   						
						    
						    <div data-role="rangeslider">
						        <label for="b-left">B:</label>
						        <input name="b-left" id="b-left" type="range" min="0" max="100" value="80">
						        <label for="b-right">Rangeslider:</label>
						        <input name="b-right" id="b-right" type="range" min="0" max="100" value="89">
						    </div>
						    
						    <div data-role="rangeslider">
						        <label for="c-left">C:</label>
						        <input name="c-left" id="c-left" type="range" min="0" max="100" value="70">
						        <label for="c-right">Rangeslider:</label>
						        <input name="c-right" id="c-right" type="range" min="0" max="100" value="79">
						    </div>
						    
						    <div data-role="rangeslider">
						        <label for="d-left">D:</label>
						        <input name="d-left" id="d-left" type="range" min="0" max="100" value="60">
						        <label for="d-right">Rangeslider:</label>
						        <input name="d-right" id="d-right" type="range" min="0" max="100" value="69">
						    </div>						    
						 
						    
						    <label for="f-right">F:</label>
    						<input name="f-right" id="f-right" type="range" min="0" max="100" value="59" data-highlight="true">    						
						    
					</fieldset>
				</form>
				
                
            </div>
        </div>
        
        <script type="text/javascript" src="cordova.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>