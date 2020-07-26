$.ajaxSetup({
	headers:{
		'X_CSRF_TOKEN':$('meta[name="_token"]').attr('content')
	}
});
$(document).ready(function($) {
	var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
	$('.count').each(function () {
		$(this).prop('Counter',0).animate({
			Counter: $(this).text()
		}, {
			duration: 2500,
			easing: 'swing',
			step: function (now) {
				$(this).text(Math.ceil(now));
			}
		});
	});




	// Menu Trigger
	$('#menuToggle').on('click', function(event) {
		var windowWidth = $(window).width();   		 
		if (windowWidth<1010) { 
			$('body').removeClass('open');
			$('.left-menu-title').addClass('hide-left-menu-title');

			if (windowWidth<760){ 
				$('#left-panel').slideToggle(); 
			} else {
				$('#left-panel').toggleClass('open-menu'); 
				$('.left-menu-title').attr('hidden',false);
			} 
		} else {
			$('body').toggleClass('open');
			$('#left-panel').removeClass('open-menu'); 
			$('.left-menu-title').toggleClass('hide-left-menu-title');			
		} 

	}); 


	$(window).on("load resize", function(event) { 
		var windowWidth = $(window).width();  		 
		if (windowWidth<1010) {
			$('body').addClass('small-device'); 
		} else {
			$('body').removeClass('small-device');  
		} 
		
	});

	$('#AddAdmin_Form').on('submit',function(e){
		e.preventDefault();
		var form=$('#AddAdmin_Form');
		var formData=form.serialize();
		var url='/add/admin';
		var type='post';
		$.ajax({
			type:type,
			url:url,
			data:new FormData($("#AddAdmin_Form")[0]),
			processData:false,
			contentType:false,
			success:function(response){
				var table = $('#example').DataTable();
				var  idx= table.rows().count();
				idx++;
				var rowNode = table
				.row.add( ['<b class="serial">'+idx+'</b>', response[1]['name'],response[1]['email'],response[1]['role'],response[1]['created_by']+'<br>'+response[1]['created_at'],response[1]['updated_by']+'<br>'+response[1]['updated_at'], 
					'<button class="btn btn-info edit-admin mr-1" data-name="'+response[1]['name']+'" data-email="'+response[1]['email']+'" data-role="'+response[1]['role']+'" data-id="'+response[1]['id']+'" data-toggle="modal" data-target="#edit_template_modal"><i class="fas fa-edit"></i></button>'+
					'<button class="btn btn-danger delete-admin ml-0" data-id="'+response[1]['id']+'" data-toggle="modal" data-target="#delete_template_modal"><i class="fas fa-trash-alt"></i></button>'] )
				.order([0, 'dsc']).draw()
				.node().id = 'sms-'+idx;
				$( rowNode )
				.css( 'color', 'green' )
				.animate( { color: 'red' } );
				swal('Congratulation!',response[0],'success').then(function() {
					$('#AddAdmin_Form')[0].reset();
					$("[data-dismiss=modal]").trigger({ type: "click" });
					$(".print-error-msg").css('display','none');
				});
			},
			error:function(response){
				printSMSErrorMsg(response.responseJSON);
				swal('Oops...', 'Something went wrong!' , 'error');

			}
		});
	});


	$(document).on('click', '.edit-admin', function(){
		$('input.name').val($(this).data('name'));
		$('input.email').val($(this).data('email'));
		$('input.role').val($(this).data('role'));

		id = $(this).data('id');
		tr = $(this).parent().parent();
		tr_id=tr.attr('id');
		sl = $('#'+tr_id +" .serial").text();
	});

	$('#UpdateAdmin_Form').on('submit', function(e){
		e.preventDefault();
		var form=$('#UpdateAdmin_Form');
		var formData=form.serialize();
		var table = $('#example').DataTable();
		var url='/update/admin/'+id;
		var type='post';
		$.ajax({
			type:type,
			url:url,
			data:new FormData($("#UpdateAdmin_Form")[0]),
			processData:false,
			contentType:false,
			success:function(response){
				if(response[1]['id'] == id){
					var row_data = [
					'<b class="serial">'+sl+'</b>',
					response[1]['name'],
					response[1]['email'],
					response[1]['role'],
					response[1]['created_by']+'<br>'+
					response[1]['created_at'],
					response[1]['updated_by']+'<br>'+
					response[1]['updated_at'],
					'<button class="btn btn-info edit-admin mr-1" data-name="'+response[1]['name']+'" data-email="'+response[1]['email']+'" data-role="'+response[1]['role']+'" data-id="'+response[1]['id']+'" data-toggle="modal" data-target="#edit_template_modal"><i class="fas fa-edit"></i></button><button class="btn btn-danger delete-admin ml-0" data-id="'+response[1]['id']+'" data-toggle="modal" data-target="#delete_template_modal"><i class="fas fa-trash-alt"></i></button>'
					];
					table
					.row( 'tr#'+tr_id )
					.data(row_data)
					.draw();
					swal('Congratulation!',response[0],'success').then(function() {
						$('#UpdateAdmin_Form')[0].reset();
						$("[data-dismiss=modal]").trigger({ type: "click" });
					});
				}
			},
			error:function(response){
				printSMSErrorMsg(response.responseJSON);
				swal('Oops...', 'Something went wrong!' , 'error');
			}
		});
	});
	$(document).on('click', '.delete-admin', function(){
		var tr = $(this).parents('tr');
		var tr_id=tr.attr('id');
        // alert(tr_id+ ' '+ 'tr#'+tr_id);
        var id = $(this).data('id');
        swal({
        	title: 'Are you sure?',
        	text: "You want to delete this Admin!",
        	type: 'warning',
        	showCancelButton: true,
        	confirmButtonColor: '#3085d6',
        	cancelButtonColor: '#d33',
        	confirmButtonText: 'Yes, delete it!',
        	showLoaderOnConfirm: true,
        	preConfirm: function() {
        		return new Promise(function(resolve) {
        			$.ajax({
        				url: '/delete/admin',
        				type: 'post',
        				data: {
        					_token: CSRF_TOKEN,
        					'id':id,
        				},
        				dataType: 'json'
        			})
        			.done(function(response){
        				swal('Congratulation!',response[0],'success').then(function(){
        					var table = $('#example').DataTable();
        					table
        					.row("tr#"+tr_id)
        					.remove()
        					.draw();
        				});
        			})
        			.fail(function(response){
        				swal('Oops...', 'Something went wrong!' , 'error');
        			});
        		});
        	},
        	allowOutsideClick: false
        });
    });


});