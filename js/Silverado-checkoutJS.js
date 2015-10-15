/* 

Children : 
Mon - Tue : 1pm
Wed - Fri : 6pm
Sat - Sun : 12pm

Art/Foreign : 
Mon - Tue : 6 pm 
Sat - Sun : 3 pm

Romantic Comedy :
Mon - Tue : 9 pm
Wed - Fri : 1 pm
Sat - Sun : 6 pm

Action :
Wed - Fri : 9 pm
Sat - Sun : 9 pm

*/
var timeCounter = 0;

var movies = 
[
	{
		"Type": "CH",
		"Days": [ "Monday", "Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday" ],
		"Times": [ "1pm","6pm", "12pm" ],
		

	},
	{
		"Type": "AF",
		"Days": [ "Monday", "Tuesday" , "Saturday","Sunday"],
		"Times": [ "6pm","0pm" , "3pm" ] 
	},
	{
		"Type": "RC",
		"Days": [ "Monday", "Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
		"Times": [ "9pm", "1pm","6pm" ] ,
		
	},
	{
		"Type": "AC",
		"Days": ["Wednesday","Thursday","Friday", "Saturday", "Sunday" ],
		"Times": [ "0pm","9pm","9pm" ],
		
	}
];

var tickets =
[
	{
		"Days": [ "Monday", "Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday" ],
		"Times": ["1pm","3pm","6pm","9pm","12pm"],
		"Type":["SA","SP","SC","FA","FC","B1","B2","B3"],
		"Prices1":[12,10,8,25,20,20,20,20],
		"Prices2":[18,15,12,30,25,30,30,30],
	}
	
]

// JavaScript Document

$(document).ready(function() 
{
	//Navigation bar click//
	 $(function() {
			var pull 		= $('#pull');
				menu 		= $('nav ul');
				menuHeight	= menu.height();

			$('#pull').on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
	
	// Start this page
	
	
	$(".expandButton").click(function(){
		
		var button = document.getElementById("viewMore1");
		$(".hidden").slideToggle("fast");
		if(button.value == "View More")
		{
			button.value = "View Less";
		}
		else
			button.value = "View More";
			
			$.ajax(
    		{
       			url: 'https://titan.csit.rmit.edu.au/~e54061/wp/moviesJSON.php',
       			type: 'POST',
       			success: function(data)
    			 {
           			data = $.parseJSON(data);
           			$('#ACVideo').attr("src",data['AC']['trailer']);
    
        
       				}
   
        
        
			 });

	});
	
	$(".expandButton1").click(function(){
		
		$(".hidden1").slideToggle("fast");
	    $.ajax(
    		{
       			url: 'https://titan.csit.rmit.edu.au/~e54061/wp/moviesJSON.php',
       			type: 'POST',
       			success: function(data)
    			 {
           			data = $.parseJSON(data);
           			$('#CHVideo').attr("src",data['CH']['trailer']);
    
        
       				}
   
        
        
			 });
		
	});
	
	$(".expandButton2").click(function(){
		
		$(".hidden2").slideToggle("fast");
		
	    $.ajax(
    		{
       			url: 'https://titan.csit.rmit.edu.au/~e54061/wp/moviesJSON.php',
       			type: 'POST',
       			success: function(data)
    			 {
           			data = $.parseJSON(data);
           			$('#AFVideo').attr("src",data['AF']['trailer']);
    
        
       				}
   
        
        
			 });
		
	});
	
	
	$(".expandButton3").click(function(){
		
		$(".hidden3").slideToggle("fast");
		
		    $.ajax(
    		{
       			url: 'https://titan.csit.rmit.edu.au/~e54061/wp/moviesJSON.php',
       			type: 'POST',
       			success: function(data)
    			 {
           			data = $.parseJSON(data);
           			$('#RVideo').attr("src",data['RC']['trailer']);
    
        
       				}
   
        
        
			 });
		
	});
	// End of the expanding page
	
	
	$("#movieSelect").change(resetDay);
	$("#movieSelect").change(handleMovieSelection);
	$("#sessionDays").change(resetTime);
	$("#sessionDays").change(handleDaySelection);
	$("#sessionTime").change(disabledSubmit);
	
	// Calculate the price 

	$("#SA").change(function()
	{
		$("#SAtotal").val(calculatePrice("SA", $(this).val()));
		$("#Total").val(calculateTotalPrice());	
		$("#throw").prop('disabled',false);
	});
		
	$("#SP").change(function()
	{
		$("#SPtotal").val(calculatePrice("SP",$(this).val()));
		$("#Total").val(calculateTotalPrice());
		$("#throw").prop('disabled',false);
	});

	$("#SC").change(function()
	{
		$("#SCtotal").val(calculatePrice("SC",$(this).val()));
		$("#Total").val(calculateTotalPrice());
		$("#throw").prop('disabled',false);
	});

	$("#FA").change(function()
	{
		$("#FAtotal").val(calculatePrice("FA",$(this).val()));
		$("#Total").val(calculateTotalPrice());
		$("#throw").prop('disabled',false);
	});

	$("#FC").change(function()
	{
		$("#FCtotal").val(calculatePrice("FC",$(this).val()));
		$("#Total").val(calculateTotalPrice());
		$("#throw").prop('disabled',false);
	});

	$("#B1").change(function()
		{
			$("#B1total").val(calculatePrice("B1",$(this).val()));
			$("#Total").val(calculateTotalPrice());
			$("#throw").prop('disabled',false);
		});

	$("#B2").change(function()
		{
			$("#B2total").val(calculatePrice("B2",$(this).val()));
			$("#Total").val(calculateTotalPrice());
			$("#throw").prop('disabled',false);
		});
	
	$("#B3").change(function()
		{
			$("#B3total").val(calculatePrice("B3",$(this).val()));
			$("#Total").val(calculateTotalPrice());
			$("#throw").prop('disabled',false);
		});
		
		
});

function resetDay()
{
	$("#sessionDays").val($("#sessionDays option:first").val());
}

function resetTime()
{
	timeCounter = 0;
	$("#sessionTime").val($("#sessionTime option:first").val());
}



function handleMovieSelection()
{
	var type = $("#movieSelect").val();
	
	for(var i = 0; i < movies.length; i++)
	{
		if(movies[i].Type === type)
		{
			// Disable all days.
			$("#sessionDays option").prop("disabled", true);
			for(var j = 0; j < movies[i].Days.length; j++)
			{
				$("#sessionDays option").each(function()
				{
					if($(this).val() ===  movies[i].Days[j])
					{
						$(this).prop("disabled", false);
					}
				});
				
			}
			break;
		}
	}
}

function handleDaySelection()
{
	var movie = $("#movieSelect").val();
	var days = $("#sessionDays").val();

	for(var i = 0 ; i<movies.length;i++)
	{	
	 	if(movies[i].Type === movie)
	 	{
			// Disable all the time
			$("#sessionTime option").prop("disabled",true);

			for(var j = 0 ; j < movies[i].Days.length;j++)
			{

				if(days == movies[i].Days[j])
				{
					if(days == "Monday" || days == "Tuesday")
					{
						timeCounter = 0 ;
					
					}
					else if (days == "Wednesday" ||days == "Thursday" ||days == "Friday" )
					{
						timeCounter = 1;
					
					}
					else 
					{
						timeCounter = 2;
						
					}

					$("#sessionTime option").each(function()
					{
						if($(this).val() === movies[i].Times[timeCounter])
						{
							$(this).prop("disabled",false);
						}
					});
					
				}

			}
			break;
		}
	}	
}		

function calculatePrice(typeSeat,numOfTickets)
{
	var daySession = $("#sessionDays").val();
	var timeSession = $("#sessionTime").val();
	var dayCheck = false;
	var timeCheck = false;
	var choice;


	//var SAprices = $("#SA").val();
	// Calculate the price for the tickets

	for(var i=0; i < tickets.length;i++)
	{

		for(var j = 0 ; j < tickets[i].Days.length;j++)
		{
			if(daySession == "Monday" || daySession == "Tuesday" || daySession == "Wednesday" || daySession == "Thursday" || daySession == "Friday")
			{
			//	alert(tickets[i].Days[j]);
				dayCheck = true;
				break;
			}
			
		}
		for(var j = 0 ; j < tickets[i].Times.length;j++)
		{
			if(timeSession === "1pm")
			{
			//	alert(tickets[i].Times[j]);
				timeCheck = true;
				break;
			}

		}
	
		// Start Checking 

		if(dayCheck == true && timeCheck == true)
		{
			choice = 1 ;
		}
		else 
		{
			choice = 2 ;
		}

		for(var j = 0 ; j<tickets[i].Type.length ; j++)
		{
		
			if(tickets[i].Type[j] == typeSeat)
			{
			//	alert("Yeah!!");
				
					if(choice == 1)
					{
					
							
							return tickets[i].Prices1[j] * numOfTickets;
									
					}
					else if (choice == 2)
					{

						return tickets[i].Prices2[j] * numOfTickets;
					}
			}
		}
	}


}

function calculateTotalPrice()
{
	var total = 0;
	$(".PricesAll").each(function(){
		total += Number($(this).val());
	});

	return total;

}

function disabledSubmit()
{
	var timeVal = $('#sessionTime').val();
	var valCheck = false;
	//"1pm","3pm","6pm","9pm","12pm"
	if(timeVal == '1pm'||timeVal == '3pm'||timeVal == '6pm'||timeVal == '9pm'||timeVal == '12pm')
	{
		valCheck = true;
	}
	if(valCheck == true)
	{
		$("#throw").prop('disabled',true);
	}
}


function disableContactSubmit()
{
	var checkMessage = false;
	
	if($("#messageContactUs").val() == '')
	{
		checkMessage = false;
		alert("It false ma!!");
	}
	if($("#messageContactUs").val() != '')
	{
		checkMessage = true;
		alert("It false ma!!");
	}
	
	if(checkMessage == false)
	{
		$("#contactSubmit").prop('disabled',true);
	}
	
}