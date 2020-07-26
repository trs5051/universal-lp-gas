$.ajaxSetup({
       headers:{
         'X_CSRF_TOKEN':$('meta[name="_token"]').attr('content')
       }
      });
$(document).ready(function() {
 $('#dataForm').on('submit',function(event){
        event.preventDefault();
        $body.addClass("loading");
        var form=$('#dataForm');
        var formData=form.serialize();
        var url='/dataForm/store';
        var type='post';
        $.ajax({
            type:type,
            url:url,
            data:new FormData($("#dataForm")[0]),
            processData:false,
            contentType:false,
            success:function(data)
            {
              
              console.log(data);
              toastr.success('Have fun storming the castle!', 'Miracle Max Says')
              //window.location.href='/index';
            },
               error: function(result)
               {
                 toastr.warning("Error saving concert");
               }
        });
    }); 
}); // End document.ready




