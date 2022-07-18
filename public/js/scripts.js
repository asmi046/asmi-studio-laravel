function number_format() {
	let elements = document.querySelectorAll('.price_formator');
	for (let elem of elements) {
		elem.dataset.realPrice = elem.innerHTML;
		elem.innerHTML = Number(elem.innerHTML).toLocaleString('ru-RU');
	}
}

document.addEventListener("DOMContentLoaded", () => {
	number_format();
});

jQuery(document).ready(function($) { 



	$('.hamburger').click(function() {
		if($(".mobileMenu").is(':visible')) {
			$(".mobileMenu").slideToggle();
		} else {
			$(".mobileMenu").slideToggle();
		}
	});

	jQuery(".dialog-cb-button__decstop a").click(function(e){
		e.preventDefault();
		headerwin = jQuery(this).data("headerwin"); 
		
		var form = $(this).data('form');
		$('#order_site_modal input[name=form]').val(form);
		
		jQuery('#order_site_modal').arcticmodal();
	});

	
	$('.closeMobileMenu').click(function() {
		$(".mobileMenu").slideToggle();
	});
	
	$(".mobileMenu .menuClose").click(function() { 
		$(".mobileMenu").slideToggle();
	});
	
	var inputmask_96e76a5f = {"mask":"+7(999)999-99-99"};
    jQuery("input[type=tel]").inputmask(inputmask_96e76a5f);
	
	jQuery(".menu a").click(function () {
		to_block(this);
	});

	$(".qtop").click(function() {
		$(this).siblings(".otvet").slideToggle();
	});
	
	
	jQuery(".unisend_win").click(function(e){ 
		var form = $(this).data('form');
		$('#order_site_modal input[name=form]').val(form);
		ym(14710126,'reachGoal','osnwin');
		jQuery("#order_site_modal").arcticmodal();
	});
	
	jQuery(".uni_usl_win").click(function(e){ 
		e.preventDefault();
		
		var form = jQuery(this).data('form');

		jQuery("#order_uslugi_modal input[name=form]").val(form);
		if (jQuery(this).hasClass("usl_img"))
			jQuery("#order_uslugi_modal .wraper_uslugi_img").css("background-image", jQuery(this).css("background-image"));
		else 
			jQuery("#order_uslugi_modal .wraper_uslugi_img").css("background-image", jQuery(this).siblings(".usl_img").css("background-image"));
		
		jQuery("#order_uslugi_modal .wraper_uslugi_text h2").html(jQuery(this).siblings("h3").text());
		jQuery("#order_uslugi_modal .formthem").html(jQuery(this).siblings("h3").text());
		
		jQuery("#order_uslugi_modal .wraper_uslugi_text .wraper_uslugi_text_price").html(jQuery(this).siblings(".price").html());
		jQuery("#order_uslugi_modal .wraper_uslugi_text .main_text").html(jQuery(this).siblings(".uslugi_lst").html());
		ym(14710126,'reachGoal','uslwin');
		jQuery("#order_uslugi_modal").arcticmodal();
	});
	
});

jQuery(window).scroll(function () { 
	if (jQuery(this).scrollTop() > 90) {
		  jQuery('.main_banner').css("margin-top","40px");
		  jQuery('header').addClass("headfixed");
		  jQuery('header').css("position", "fixed");
		  
		console.log("v");	
	} else {
			jQuery('.main_banner').css("margin-top","0");
		  jQuery('header').removeClass("headfixed");
		  jQuery('header').css("position", "relative");
		  
		  console.log("h");
	}
});

jQuery(document).ready(function($){
/*   
   $("form").submit(function() { //устанавливаем событие отправки для формы с id=form
            var form_data = $(this).serialize(); //собераем все данные из формы
            $.ajax({
              type: "POST", //Метод отправки
              url: "https://ns.asmi-studio.ru/send.php", //путь до php фаила отправителя
              data: form_data,
              success: function() {
              	$.arcticmodal('close');
                jQuery('#messgeModal #lineIcon').html('');
                jQuery('#messgeModal #lineMsg').html("Ваша заявка отправлена.");
                jQuery('#messgeModal').arcticmodal();
              }
          });
            return false;
    });

  */
  
	jQuery('.unisend_btn').click(function(e){ 
		var persName = jQuery(this).siblings(".nameForm").val();
		var persPhone = jQuery(this).siblings(".nameTel").val();
		var fthem = jQuery(this).siblings(".formthem").val();
		
		if (persName == "") {
			jQuery(this).siblings(".nameForm").css("background-color","red");
			return;
		}
		
		if ((persPhone == "")||(persPhone.indexOf("_")>0)) {
			jQuery(this).siblings(".nameTel").css("background-color","red");
			return;
		}
		
		var fd = new FormData;
	
		
		fd.append('username', persName);
		fd.append('userphone', persPhone);
	
		console.log(persName);
		console.log(persPhone);
	
		$.ajax({
              type: "POST", //Метод отправки
              url: "../sender/send.php", //путь до php фаила отправителя
              data: {name: persName,
					phone: persPhone,
					form: fthem,
			  },
              success: function() {
              	window.location.href = "https://asmi-studio.ru/thencs.php";
				//jQuery.arcticmodal('close');
                //jQuery('#messgeModal #lineIcon').html('');
                //jQuery('#messgeModal #lineMsg').html("Ваша заявка отправлена.");
                //jQuery('#messgeModal').arcticmodal();
              }
          });
		
		
	});
	

	
if (screen.width <= 520) {		
	  $(".businness-wrapper").slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: false,
		autoplay: true,
		autoplaySpeed: 4000,	
		centerMode: true,
	  
  });
  
  
  	$('.uslugi_box_phone').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: false,
		autoplay: false,
		centerMode: true,
	});
  
}
	
	

$(".client_keys_box").slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    dots: false,
	autoplay: true,
	autoplaySpeed: 4000,
		
    responsive: [
	    
	    {
	    	breakpoint: 790,
	    	settings: {
	    		slidesToShow: 1,
				centerMode: true,
	    	}
	    }
    ]
  });
  


}); 
