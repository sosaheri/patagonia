$(function ($) {
    "use strict";
jQuery(document).ready(function () {



//  ----------------- Date ------------------//
let dateStart = '';
        let dateEnd = '';
        let countDate = 0;
        let facilities = [];
		let extra_price = 0.00;
		let check = 0;

        $(document).on('click','.applyBtn',function(){

            let date    = $('.date_range').val();
            date        = date.split("-");
            dateStart   = date[0];
            dateEnd     = date[1];
            countDate   = showDays(dateStart,dateEnd) + 1;

			if(!countDate){
				$.notify('Please Select Your Booking Date');
            }else{
                $.ajax({
                    type: "GET",
                    url: $('#applyBtnUrl').val(),
                    data : {'space_id' : $('#space_id_ajax').val() , 'start_date' : dateStart,  'end_date' : dateEnd },
                    success: function(data)
                    {
                        if(data.status == 1){
							check = data.status;
							booking();
							getTotalPrice();
							$.notify(data.message,'success');
						}else{
							countDate = 0;
							getTotalPrice();
							dateshow(0);
							check = data.status;
							booking();
							$.notify(data.message,'error');
						}
                    }
                });
            }


        })

        // DAYS COUNT FUNCTION
        function showDays(dateStart,secondDate){
                var startDay            = new Date(dateStart);
                var endDay              = new Date(secondDate);
                var millisecondsPerDay  = 1000 * 60 * 60 * 24;
                var millisBetween       = startDay.getTime() - endDay.getTime();
                var days                = millisBetween / millisecondsPerDay;
                return Math.abs(Math.floor(days));
            }

//  ----------------- Date ------------------//


$(document).on('click','.space_extra_prices',function(){
		if(check == 1){
            if ($(this).is(":checked")) {
                facilities.push($(this).val());
                extra_price += parseFloat($(this).attr('data-href'));
           }else{
                facilities.splice( $.inArray($(this).val(), facilities), 1 );
                extra_price -= parseFloat($(this).attr('data-href'));
           }
            getTotalPrice();

		} else {
			$(this).attr('checked', false);
			$.notify('Please Select Your Booking Date');
		
		}
           
        })


		function getTotalPrice()
        {
            let total = 0;
			let upprice = $('#spaceUpPriceAjax').val();
			total = upprice * countDate ;
			total += extra_price;
            $('.total_price').html(total.toFixed(2));
            dateshow(1);
        }

		function dateshow(e){
			if(e == 1){
				$('.date_show').removeClass('d-none');
				$('.start_date_show').html(dateStart)
				$('.end_date_show').html(dateEnd)
			}else{
				$('.date_show').addClass('d-none');
				$('.start_date_show').html('')
				$('.end_date_show').html('')
			}
		}



$(document).on('click','.book_button',function(){
let formData = new FormData();
   
	if(!countDate || check ==0){
	    $.notify('Please Select Your Booking Date');
		return true;
	}else{
		$('.book_button').attr('disabled',false);
	}

	formData.append('night', countDate);
	formData.append('start_date', dateStart);
	formData.append('end_date', dateEnd);
	formData.append('space_id', $('#space_id_ajax').val());
	formData.append('facilities', facilities);

$.ajaxSetup({
   headers: {
	   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
});

$.ajax({
		   type: "POST",
		   url: mainurl + '/space/book/store',
		   data: formData,
		   processData: false,
		   contentType:false,
		   success: function(data)
			{
				if(data.login){
					window.location.href = data.login;
				}
				if(data.error){
					$.notify(data.error);
				}
				if(data.success){
					window.location.href = data.success;
				}
				
			}
		});
	})

	
	function booking (){
		if(!countDate || check ==0){
		$('.book_button').attr('disabled',true);
		}else{
			$('.book_button').attr('disabled',false);
		}
	}




});

});