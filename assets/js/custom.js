$(document).ready(function () {

  revealPosts();

  $('.owl-carousel').owlCarousel({
    margin: 0,
    nav: true,
    dots: false,
    responsive:{
      0:{
        items:1
      },
      500:{
        items:2
      },
      600:{
        items:2
      },
      768:{
        items:3
      },
      992:{
        items:3
      },
    }
  }
    
  );
  // Search toggle
  $(".search-toggle").click(function () {
    $("body").toggleClass("search-active");
  });
  // Share Icons collapsed
  $(".show-hid").click(function () {
    $(".share-links").toggleClass("show-hidden");
  });

  $(window).scroll(function(){
    if($(window).scrollTop()){
      $('.nav-search').hide();
    }else{
      $('.nav-search').show();
    }
  });

  $(window).scroll(function(){
    if($(window).scrollTop()){
      $('.navbar').addClass('sticky');
    }else{
      $('.navbar').removeClass('sticky');
    }
  });

  //  Scroll Top
  $(window).scroll(function(){
    if($(window).scrollTop() > 160){
      $('.back-top').css({
        "display" : "block"
      });
    }else{
      $('.back-top').css({
        "display":"none"
      });
    }
  });
  $('.back-top').click(function(){
    $('html,body').animate({scrollTop:0},500);
  });

  // Subscribe Box popup
  $('#subscribe-btn, #cross-icon').click(function(){
    $('#subscribe-btn').text("Hope You've Subscribed:)");
    setTimeout(function(){
      $('.subscriber-box').addClass("hide");
    },2000);
  });

  $('.mobile-menu li.menu-item-has-children').append('<i class="las la-angle-down"></i>');

  $('.mobile-menu li.menu-item-has-children i').click(function(){
    $('.mobile-menu li.menu-item-has-children > ul.sub-menu').slideToggle();
  });


  $(document).on('click','#load_more:not(.loading)', function(){

    var that = $(this);
    var page = that.data('page');
    var newPage = page+1; 
    var ajaxurl = that.data('url');

    that.addClass('loading');
    that.find('i').addClass('spin');

    $.ajax({
      url : ajaxurl,
      type : 'post',
      data : {
        page : page,
        action : 'shohag_load_more'
      },
      error : function(response){
        console.log(response);
      },
      success : function(response){
        setTimeout(function(){
          that.data('page',newPage);
          $('.recent_widget_content').append(response);
          that.removeClass('loading');
          that.find('i').removeClass('spin');

          revealPosts();

        },1000);
        
      }

    });

  });

  // Ajax helpers

  function revealPosts(){
    var posts = $('article:not(.reveal)');
    var i = 0;
    
    setInterval(function(){
      if( i>= posts.length ) return false;
      var el = posts[i];
      $(el).addClass('reveal');
      i++;
    },100);

  }


  
}); 
