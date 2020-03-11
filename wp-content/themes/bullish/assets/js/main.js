jQuery(document).ready(function($) {
    
  $("a[target*='_blank']").attr('rel','noopener noreferrer');   
    
 
    
// EQUAL HEIGHT AMENITIES - see https://chicago.tagmarketingdesigns.com/
 // Select and loop the container element of the elements you want to equalise
    $('.equal_wrap').each(function(){  
      
      // Cache the highest
      var highestBox = 0;
      
      // Select and loop the elements you want to equalise
      $('.equal_item', this).each(function(){
        
        // If this box is higher than the cached highest then store it
        if($(this).height() > highestBox) {
          highestBox = $(this).height(); 
        }
      
      });  
            
      // Set the height of all those children to whichever was highest 
      $('.equal_item',this).height(highestBox);
                    
    });     
    
    
   

  
  
  
  
    
    
});