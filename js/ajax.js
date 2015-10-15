$(function (){
   var requestAll;
   var requestAF;
   var requestCH;
   var requestRC;
   // AF CH RC AC
   var requestAC;
   var $CH= $('#MS_MOVIE_CH');
   /*
   requestAll =  $.ajax({
       url: 'https://titan.csit.rmit.edu.au/~e54061/wp/moviesHTML.php',
       type: 'POST',
       success: function(data)
       {
           
        
           console.log('success',data);
       }
   }) */
   
requestAF = $.ajax(
    {
       url: 'https://titan.csit.rmit.edu.au/~e54061/wp/moviesJSON.php',
       type: 'POST',
       success: function(data)
       {
           data = $.parseJSON(data);
           console.log('Success Loading AF ',data);
           $("#AFPoster").attr("src",data['AF']['poster']);
           $("#AFRating").attr("src",data['AF']['rating']);
            $("#AFTitle").text(data['AF']['title']);
           $("#AFDescription").text(data['AF']['description']);

        
       }
   
        
        
    });
   
   requestCH = $.ajax(
    {
       url: 'https://titan.csit.rmit.edu.au/~e54061/wp/moviesJSON.php',
       type: 'POST',
       success: function(data)
       {
           data= $.parseJSON(data);
           console.log('Success Loading CH ',data);
           $("#CHPoster").attr("src",data['CH']['poster']);
           $("#CHRating").attr("src",data['CH']['rating']);
           $("#CHTitle").text(data['CH']['title']);
           $("#CHDescription").text(data['CH']['description']);
           
       }
   
        
    });
       

       
   requestRC = $.ajax(
    {
       url: 'https://titan.csit.rmit.edu.au/~e54061/wp/moviesJSON.php',
       type: 'POST',
       success: function(data)
       {
           data = $.parseJSON(data);
           console.log('Success Loading AF ',data);
           $("#RCPoster").attr("src",data['RC']['poster']);
           $("#RCRating").attr("src",data['RC']['rating']);
            $("#RCTitle").text(data['RC']['title']);    
           $("#RCDescription").text(data['RC']['description']);
            
           console.log('Success Loading RC ',data);
       }
   
        
    });
       
   requestAC = $.ajax(
    {
       url: 'https://titan.csit.rmit.edu.au/~e54061/wp/moviesJSON.php',
       type: 'POST',
       success: function(data)
       {
           data = $.parseJSON(data);
           $("#ACPoster").attr("src",data['AC']['poster']);
           $("#ACRating").attr("src",data['AC']['rating']);
           $("#ACTitle").text(data['AC']['title']);    
           $("#ACDescription").text(data['AC']['description']);
          
           console.log('Success Loading AC ',data);
       }
   
        
    });
});