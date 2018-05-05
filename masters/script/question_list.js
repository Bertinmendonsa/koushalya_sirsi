



function f1(object){
//    alert(object.value);
    
    var id = object.value;
    
    	var dataString = 'empid='+ id;    
		$.ajax({
			url: 'ajax_question_list.php',
			dataType: "json",
			data: dataString,  
			cache: false,
			success: function(employeeData) {
			   if(employeeData) {
                   console.log(employeeData);
                   console.log(employeeData[0]);
                   row =1;

                        for(i = 0;i<=employeeData.length;i++){
                             $("#row_"+1+row).text(employeeData[i].question_option);
                            row++;
                        }
                   
				} else {

				}   	
			} 
		});

        $.ajax({
            url:'ajax_question_correct_option.php',
            dataType: "json",
            data: dataString,
            cache:false,
            success: function(optionID){
                if(optionID){
                	console.log(optionID);
                	for(j = 0;j<=optionID.length;j++){
                		$("#row15 > b").text(optionID[j].question_option);
                	}
                }
                    
            }
        }); 
    
}