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
                <a href="grade_setting.php" id='settingsButton' class="ui-btn-right" data-role="button" data-icon="gear">Settings</a>
            </div>
            <div data-role="content" class="">
                <form>
                    <div data-role="fieldcontain">
                        <label for="Points">Points</label>
                        <input type="number" name="points" id="points" data-clear-btn="true" maxlength="3" value="" placeholder="Enter points here">
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
        
        <script type="text/javascript" src="cordova.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>