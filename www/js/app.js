(function($) {
 "use strict";
 
 var gApoint = 90.0;
 
 var computeGrade = function()
 {
	 var homework_grades = Number( $('#homework_grades').val() );
	 var lab_grades = Number( $('#lab_grades').val() );
	 var project_grades = Number( $('#project_grades').val() );
	 var presentation_grades = Number( $('#presentation_grades').val() );
	 var midterm_grades = Number( $('#midterm_grades').val() );
	 var final_grades = Number( $('#final_grades').val());
	 
	 var homework_maxpoint = parseInt(localStorage.getItem('homework_maxpoint'));     
	 var lab_maxpoint = parseInt(localStorage.getItem('lab_maxpoint'));
	 var project_maxpoint = parseInt(localStorage.getItem('project_maxpoint'));
	 var presentation_maxpoint = parseInt(localStorage.getItem('presentation_maxpoint'));
	 var midterm_maxpoint = parseInt(localStorage.getItem('midterm_maxpoint'));	
	 var final_maxpoint = parseInt(localStorage.getItem('final_maxpoint'));	 
	 
	 
	 //alert("homework_grades: " + homework_grades + " homework_maxpoint: " + homework_maxpoint);
	 if(homework_grades == "" || lab_grades == "" ||  project_grades == "" ||  presentation_grades == "" ||  midterm_grades == "" || final_grades == "")
		alert("Please input every grade!");
	 else if(homework_grades > homework_maxpoint || lab_grades > lab_maxpoint ||  project_grades > project_maxpoint ||  presentation_grades > presentation_maxpoint ||  midterm_grades > midterm_maxpoint || final_grades > final_maxpoint)
		alert("The grade you input should not larger than the full score!");
	 else{
		 
		 var homework_factor = localStorage.getItem('homework_factor');
		 var lab_factor = localStorage.getItem('lab_factor');
		 var project_factor = localStorage.getItem('project_factor');
		 var presentation_factor = localStorage.getItem('presentation_factor');
		 var midterm_factor = localStorage.getItem('midterm_factor');
		 var final_factor = localStorage.getItem('final_factor');
		 
		 var grade_denominator = homework_maxpoint * homework_factor + lab_maxpoint * lab_factor +
		 						 project_maxpoint * project_factor + presentation_maxpoint * presentation_factor +
		 						 midterm_maxpoint * midterm_factor + final_maxpoint * final_factor;
		 
		 var grade_numerator =  homework_grades * homework_factor + lab_grades * lab_factor +
		 						project_grades * project_factor + presentation_grades * presentation_factor +
		 						midterm_grades * midterm_factor + final_grades * final_factor;
		 
		 var percentage = grade_numerator * 100 / grade_denominator;
		 
		 
		 var grade_A = localStorage.getItem('a_left');
		 var grade_B = localStorage.getItem('b_left');
		 var grade_C = localStorage.getItem('c_left');
		 var grade_D = localStorage.getItem('d_left');
		 
		 if(percentage >= grade_A)	 	 $('#finalgrade').text("A");
		 else if(percentage >= grade_B)	 $('#finalgrade').text("B");
		 else if(percentage >= grade_C)	 $('#finalgrade').text("C");
		 else if(percentage >= grade_D)	 $('#finalgrade').text("D");
		 else           	             $('#finalgrade').text("F");
		 
		 
		 alert("percentage: " + percentage);
		 //alert("grade_denominator: " + grade_denominator + " grade_numerator: " + grade_numerator); 
	 }
	 
	 //alert("val: " + homework_factor + " " + lab_factor + " " + project_factor + " " + presentation_factor + " " + midterm_factor + " " + final_factor);
     
	 
	 
	 
     //alert("val: " + homework_grades + " " + lab_grades + " " + project_grades + " " + presentation_grades + " " + midterm_grades + " " + final_grades);
    
   
    
    /*
     var currentPoints = Number( $('#points').val() );
    var currentGrade = "NA";
 
    if (currentPoints >= gApoint)
    {
        currentGrade = "A";
    }
    else
    {
        currentGrade = "F";
    }
    $('#finalgrade').text(currentGrade);
   */
 };
 
 var saveSettings = function()
 {
    try {
        var aPoint = parseFloat( $('#gradeCutOff').val() );
 
        localStorage.setItem('gradeCutOff', aPoint);
        gApoint = aPoint;
        window.history.back();
    } catch (ex)
    {
        alert('Points must be a decimal value');
    }
 };

 var cancelSettings = function()
 {
    localStorage.clear();
 };

 var saveMaxpoints = function(){   	
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
	 
	 var show_student_info = function(){
		 alert("fuck");
	 }
	 
	 var test_func = function()
	 {
		 var homework_maxpoint = parseInt(localStorage.getItem('homework_maxpoint'));     
		 var lab_maxpoint = parseInt(localStorage.getItem('lab_maxpoint'));
		 var project_maxpoint = parseInt(localStorage.getItem('project_maxpoint'));
		 var presentation_maxpoint = parseInt(localStorage.getItem('presentation_maxpoint'));
		 var midterm_maxpoint = parseInt(localStorage.getItem('midterm_maxpoint'));	 
		 var final_maxpoint = parseInt(localStorage.getItem('final_maxpoint'));
		 
	     alert("max: #" + homework_maxpoint + "#" + lab_maxpoint + "#" + project_maxpoint + "#" + midterm_maxpoint + "#" + presentation_maxpoint + "#" + final_maxpoint);
	     
	     var grade_A = localStorage.getItem('a_left');
		 var grade_B = localStorage.getItem('b_left');
		 var grade_C = localStorage.getItem('c_left');
		 var grade_D = localStorage.getItem('d_left');
		 alert("category: #" + grade_A + "#" + grade_B + "#" + grade_C + "#" + grade_D + "#");
	   
	 };
	 
	 
 // Setup the event handlers
 $( document ).on( "ready", function()
                  {
                  
                  //$('#saveSettings').on('click', saveSettings);
                  $('#cancelSettings').on('click', cancelSettings);
                  
                  $('#save_maxpoints').on('click', saveMaxpoints);
	       	 	  $('#save_factors').on('click', saveFactors);
	       	 	  $('#save_category').on('click', saveCategories);
	       	 	  $('#computeGrade').on('click', computeGrade);
	       	 	  //$('#show_student_info').on('click', show_student_info);
	       	 	  $('#test').on('click', test_func);
	       	 	

                  var gradeCutOffSetting = localStorage.getItem('gradeCutOff');
                  
                  if (gradeCutOffSetting)
                  {
                    gApoint = parseFloat(gradeCutOffSetting);
                  }
                  
                  $('#gradeCutOff').val(gApoint);
                  
                  });

 // Load plugin
 $( document ).on( "deviceready", function(){
                  StatusBar.overlaysWebView( false );
                  StatusBar.backgroundColorByName("gray");
                  });
 }

 
 )(jQuery);
