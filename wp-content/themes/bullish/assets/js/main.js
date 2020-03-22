jQuery(document).ready(function($) {
    
  $("a[target*='_blank']").attr('rel','noopener noreferrer');   
    
 
    
// EQUAL HEIGHT AMENITIES - see https://chicago.tagmarketingdesigns.com/
 // Select and loop the container row  of the elements you want to equalise
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
    
    
   //initialize swiper when document ready

  var alertSwiper = new Swiper ('.alert_swiper-container', {
 loop: false,
    slidesPerView: 1,
    spaceBetween: 0,
    initialSlide: 1,
    watchOverflow: true,
        autoplay: {
        delay: 5500,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.elementor-swiper-button-next',
        prevEl: '.elementor-swiper-button-prev',
      },
      scrollbar: {
        el: '.swiper-scrollbar',
        hide: false,
      }

    });


  
  
  
  
    
    
});