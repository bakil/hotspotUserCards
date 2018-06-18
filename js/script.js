$(document).ready(function(e) { 

    var page_header = $("#topnav");
    var winhigh = $(window).height();
    var winwidth = $(window).width();    
   
 

    
    
    

    

 //  movies modal process
        
  $("#gallery").on("click","article",function(){  
                                                  var namea = $(this).find("header").text(); var namee = $(this).find("footer").text();
                                                  $("#gallery_modal header").html(namea +"<br>" +namee +"<br>");
      
                                                  var durtion = $(this).data('durtion');  $("#b_durtion").text(durtion);
                                                  var date = $(this).data('date');  $("#b_date").text(date);
                                                  var type = $(this).data('type');  $("#b_type").text(type);
                                                  var starring = $(this).data('starring');  $("#b_starring").text(starring);
      
                                                  var written = $(this).data('written');  $("#b_written").text(written);
                                                  var produced = $(this).data('produced');  $("#b_produced").text(produced);
                                                  var budget = $(this).data('budget');  $("#b_budget").text(budget);

                                                  var pic = $("#gallery_img");
                                                  var winhigh = $(window).height();
                                                  var winwidth = $(window).width(); 
                                                  var modal_width;
                                                  var th_src = $(this).find("img").attr("src");
                                                  var img_src = th_src.replace("th", "300450")  ;
                                                   pic.attr("src", img_src);
                                                   $("#gallery_modal").css("display","block");
                                                if (winhigh < 470) {
                                                                     modal_width = winhigh*0.7;
                                                                     $("#gallery_modal .w3-modal-content").width(modal_width);

                                                                    }

                                            
                                              }) ;  
    
    // go to movie button
    
  $("#gallery_modal footer").on("click","#go_to_movie",function(){  
                                                            var temp_src = $("#gallery_img").attr("src");
                                                            var m_name = temp_src.replace("images/e/300450", "cartoonMov");
                                                            var m_name2 = m_name.replace("jpg", "html");
      
                                                            window.open(m_name2);
                                                            
                                                            
      
      
      
      
      
                                                });
    
    
    
    


 // Decumentryvedio modal
   
  $("#documentry").on("click","li button",function(){  
                                                       $("#video_modal .content-body section").html('<video id="myVid" width="100%" controls ><source src="" type="video/mp4"> Your browser does not support HTML5 video. </video>');
                                                  var name = $(this).data('name'); 
                                                  $("#video_modal header").text(name);
      
                                                  

                                                  
                                                  var winhigh = $(window).height();
                                                  var winwidth = $(window).width(); 
                                                  var modal_width;
                                                  
                                                  var film_src = $(this).data('path');
                                                $("#video_modal video source").attr("src", film_src);
                                                   $("#video_modal").css("display","block");
                                                if (winhigh < 470) {
                                                                     modal_width = winhigh*0.7;
                                                                     $("#gallery_modal .w3-modal-content").width(modal_width);

                                                                    }

                                            
                                              }) ;  
    $("#video_modal").on("click","footer button",function(){  
                                                      var action = $(this).data('action');
                                                       if( action == "b-close") {   
                                                                              $("#video_modal video").remove();
                                                                               console.log("close")
                                                                             }
                                                         });

    
    
    
    //documentry accourdion
  $("#documentry").on("click","button", function(){
                                                                 // $(this).parent().sibling("div.w3-accordion").removeClass("w3-show w3-green");
                                       if( $(this).next().hasClass("w3-show2") ) {
                                           $(this).next().slideUp().removeClass("w3-show2");
                                                                                 } 
                                       else {   
                                               $(this).siblings("div").slideUp().removeClass("w3-show2");
                                                  
                                               
                                            $(this).next().addClass("w3-show2").slideDown();
                                             // $(this).parent().sibling(".w3-accordion").children(".w3-accordion-content").removeClass("w3-show");
                                             }
      
                                                                     });
    
    
   // sidebar accordion process   
    
   $("nav.w3-sidenav").on("click",".w3-accordion > a", function(){
                                                                 // $(this).parent().sibling("div.w3-accordion").removeClass("w3-show w3-green");
                                       if( $(this).next().hasClass("w3-show") ) {
                                           $(this).next().removeClass("w3-show").parent().removeClass("w3-theme-light");
                                           $(this).children(".fa").addClass("fa-caret-down").removeClass("fa-caret-left");
                                                                                 } 
                                       else {   
                                               $("nav.w3-sidenav .w3-accordion-content").removeClass("w3-show");
                                               $("nav.w3-sidenav div.w3-accordion").removeClass("w3-theme-light");
                                               $("nav.w3-sidenav .fa-caret-left").removeClass("fa-caret-left").addClass("fa-caret-down");
                                               
                                            $(this).next().addClass("w3-show").parent().addClass("w3-theme-light").end();
                                            $(this).children(".fa").addClass("fa-caret-left").removeClass("fa-caret-down");
                                             // $(this).parent().sibling(".w3-accordion").children(".w3-accordion-content").removeClass("w3-show");
                                             }
      
                                                                     });  
    
  
   
    
 } );