if (localStorage.email != "undefined"){$('input[type="email"]').val(localStorage.email);}
if (localStorage.name != "undefined"){$('input[name="First Name"]').val(localStorage.name);}
if (localStorage.phone != "undefined"){$('input[type="tel"]').val(localStorage.phone);}

$(function() {
  $("[name=send]").click(function (e) {
   var btn = $(this);
   var form = $(this).closest('form');

   $(":input.error").removeClass('error');
   $(".allert").remove();

   var error;
   var ref = btn.closest('form').find('[required]');

    var leadCity;
    $.get("http://ipinfo.io", function(response) {
      leadCity = response.city + ', ' + response.country;
    }, "jsonp");

    $('[name=city]').val(leadCity);


   var lead_name = $('[name="First Name"]').val();
   $('[name=name]').val(lead_name);

   var msg = btn.closest('form').find('input, textarea, select');
   var short_msg = btn.closest('form').find('[name=project_name], [name=admin_email], [name=form_subject], [name=city], [name=page_url], [name=user_agent], [type="text"], [type="email"], [type="tel"]');
   var msg = btn.closest('form').find('input, textarea, select');
   var send_btn = btn.closest('form').find('[name=send]');
   var send_adress = btn.closest('form').find('[name=send_adress]').val();
   var send_options = btn.closest('form').find('[name=campaign_token]');;
   var formType = btn.closest('form').find('[name=form_type]').val();
   var redirect = btn.closest('form').find('[name=redirect]').val();
   var goal = btn.closest('form').find('[name=goal]').val();
   var alertImage = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 286.1 286.1"><path d="M143 0C64 0 0 64 0 143c0 79 64 143 143 143 79 0 143-64 143-143C286.1 64 222 0 143 0zM143 259.2c-64.2 0-116.2-52-116.2-116.2S78.8 26.8 143 26.8s116.2 52 116.2 116.2S207.2 259.2 143 259.2zM143 62.7c-10.2 0-18 5.3-18 14v79.2c0 8.6 7.8 14 18 14 10 0 18-5.6 18-14V76.7C161 68.3 153 62.7 143 62.7zM143 187.7c-9.8 0-17.9 8-17.9 17.9 0 9.8 8 17.8 17.9 17.8s17.8-8 17.8-17.8C160.9 195.7 152.9 187.7 143 187.7z" fill="#E2574C"/></svg>';

   var name_tl = localStorage.name = form.find('input[name="First Name"]').val();
   var email_tl = localStorage.email = form.find('input[type="email"]').val();
   var phone_tl = localStorage.phone = form.find('input[type="tel"]').val();

   if (!name_tl) { name_tl = 'Форма без имени'};
   if (!email_tl) { email_tl = 'Форма без мейла'};
   if (!phone_tl) { phone_tl = 'Форма без телефона'}


   $(ref).each(function() {
    if ($(this).val() == '') {
      var errorfield = $(this);
      $(this).addClass('error').parent('.field').append('<div class="allert"><span>Заполните это поле</span>' + alertImage + '</div>');
      error = 1;
      $(":input.error:first").focus();
      return;
    } else {
      var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
      if ($(this).attr("type") == 'email') {
        if (!pattern.test($(this).val())) {
          $("[name=email]").val('');
          $(this).addClass('error').parent('.field').append('<div class="allert"><span>Укажите коректный e-mail</span>' + alertImage + '</div>');
          error = 1;
          $(":input.error:first").focus();
        }
      }
      var patterntel = /^()[- +()0-9]{9,18}/i;
      if ($(this).attr("type") == 'tel') {
        if (!patterntel.test($(this).val())) {
          $("[name=phone]").val('');
          $(this).addClass('error').parent('.field').append('<div class="allert"><span>Укажите номер телефона в формате +3809999999</span>' + alertImage + '</div>');
          error = 1;
          $(":input.error:first").focus();
        }
      }
    }
  });
   if (!(error == 1)) {
    $(send_btn).each(function() {
      $(this).attr('disabled', true);
    });

    // Отправка в Telegram
    $.ajax({
      type: 'POST',
      url: 'https://api.telegram.org/bot387788931:AAGcrJMBBctOe7_J_h0zYZw6bbq-jDe1qBM/sendMessage?chat_id=-236556585&text=У вас новый лид c Oyka LP: ' + name_tl + ' | ' + email_tl + ' | ' + phone_tl,
    });

      // Отправка в  Zoho
      var form_data = $(this).closest('form').serializeArray();
      $.ajax({
       type: 'POST',
       url: 'https://crm.zoho.com/crm/WebToLeadForm',
       data: form_data,
       error: function() {
               // Отправка в базу данных
         $.ajax({
            type: 'POST',
            url: 'db/registration.php',
            dataType: 'json',
            data: form.serialize(),
            success: function(response) {
              setTimeout(function() {
                $("[name=send]").removeAttr("disabled");
              }, 1000);
              $('div.md-show').removeClass('md-show');
              if (response.status == 'success') {
               $('form').trigger("reset");
               window.location.href = '/lp/success';
             }
           }
         });
       }
     });

     // Отправка в Google sheets
    //  $.ajax({
    //   type: 'POST',
    //   url: '',
    //   dataType: 'json',
    //   data: msg,
    // });

    // Отправка на почту
    // $.ajax({
    //   type: 'POST',
    //   url: 'mail.php',
    //   data: short_msg,
    //   success: function() {
    //   // GTM action
    //     // dataLayer.push({
    //     //   'form_type': formType,
    //     //   'event': "form_submit"
    //     // });
    //   },
    //   error: function(xhr, str) {
    //     console.log("Erorr")
    //   }
    // });


  }
  return false;
})
});

 // Smooth scroll to anchor

 $('.scroll').click(function(){
  $('html, body').animate({
    scrollTop: $( $.attr(this, 'href') ).offset().top
  }, 1000);
  return false;
});

//  INPUT TEL MASK

jQuery(function($){
 $("input[type='tel']").mask("+38 (999) 999-9999");
});



// Scroll BAR

$(window).scroll(function() {
    // calculate the percentage the user has scrolled down the page
    var scrollPercent = 100 * $(window).scrollTop() / ($(document).height() - $(window).height());

    $('.bar-long').css('width', scrollPercent +"%"  );

  });


//YOUTUBE

$(function() {
  $(".youtube").each(function() {
    $(this).css('background-image', 'url(http://i.ytimg.com/vi_webp/' + this.id + '/hqdefault.webp)');

    $("#sec_04 .youtube").css('background-image', 'url(http://i.ytimg.com/vi/ABBD3QE3RDI/sddefault.jpg)');

    // $(this).append($('<div/>', {'class': 'play'}));

    $(document).delegate('#'+this.id, 'click', function() {
      var iframe_url = "https://www.youtube.com/embed/" + this.id + "?autoplay=1&autohide=1&rel=0&controls=0&showinfo=0";
      if ($(this).data('params')) iframe_url+='&'+$(this).data('params');

      var iframe = $('<iframe/>', {'frameborder': '0', 'src': iframe_url, 'width': $(this).width(), 'height': $(this).height() })

      $(this).replaceWith(iframe);
    });
  });
});

//  UP BUTTON

$( document ).ready(function() {
  $('#scrollup img').mouseover( function(){
    $( this ).animate({opacity: 0.65},100);
  }).mouseout( function(){
    $( this ).animate({opacity: 1},100);
  });

  $(window).scroll(function(){
    if ( $(document).scrollTop() > 0 ) {
      $('#scrollup').fadeIn('slow');
    } else {
      $('#scrollup').fadeOut('slow');
    }
  });

  $('#scrollup').click(function() {
    $('body,html').animate({scrollTop:0},1000);
  });
});

// PREVENT SCROLLING

$('.md-trigger').click(function() {
  $("body").addClass('unscroll');
});

$('.md-close').click(function() {
  $("body").removeClass('unscroll');
});

$('.md-overlay').click(function() {
  $("body").removeClass('unscroll');
});



//Sliders

$('.sec_03-slider').slick({
  slidesToShow: 1,
  dots: true,
  arrows: false,
  infinite: true,
  slidesToScroll: 1,
  fade: true,
  adaptiveHeight: true
});

$('.slider_05').slick({
  slidesToShow: 1,
  dots: true,
  arrows: false,
  slidesToScroll: 1,
  vertical: true,
  verticalSwiping: true
});

$('.slider_11').slick({
  slidesToShow: 1,
  dots: true,
  arrows: false,
  slidesToScroll: 1,
  infinite: false
});

$('.slider_12_mobile').slick({
  slidesToShow: 1,
  dots: true,
  arrows: false,
  slidesToScroll: 1
});


// Menu

$(document).ready(function() {
    (function() {
      var i, resize;

      i = setInterval(function() {
        return $("#nav .wrapper").toggleClass("cross");
    }, 1500);

      $("#nav .wrapper").click(function() {
        clearInterval(i);
        if($('#nav').hasClass('open')){
            return $("#nav .wrapper").addClass("cross");
        } else {
            return $("#nav .wrapper").removeClass("cross");
        }
    });
      $('.callback').click(function(){
        clearInterval(i);
        $("#nav .wrapper").addClass("cross");
      });
  }).call(this);

    $('#menu').click(function(){
        $('#nav').toggleClass('open');
        $('body').toggleClass('unscroll');
        setTimeout(function() {
          $('#nav .inner').toggleClass('open');
        }, 600);
    });

    $('#nav li a').click(function(){
      $('#nav').removeClass('open');
      $('#nav .inner').removeClass('open');
      $('body').removeClass('unscroll');
      $("#nav .wrapper").removeClass("cross");
    })

    $('html').keydown(function(){
      if (event.keyCode == 27) {
        $('#nav').removeClass('open');
        $('#nav .inner').removeClass('open');
        $('body').removeClass('unscroll');
        $("#nav .wrapper").removeClass("cross");
      }
    });

});


// Positioning bug fix (dont ask me why)

jQuery(document).ready(function($) {
  if($(window).width() < 1200) {
    $('#sec_09 .header').css('margin-bottom', '49px');
  } else {
    $('#sec_09 .header').css('margin-bottom', '339px');
  }

  $(window).resize(function() {
    if($(window).width() < 1200) {
      $('#sec_09 .header').css('margin-bottom', '49px');
    } else {
      $('#sec_09 .header').css('margin-bottom', '339px');
    }
  });
});