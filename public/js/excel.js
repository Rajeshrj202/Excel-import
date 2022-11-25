 $(document).ready(function(){

    $('#upload-excel').submit(function(event){

          event.preventDefault();
          var form = document.forms.namedItem("upload-excel");
          var formdata = new FormData(form);
         
          $.ajax({
             async: true,
             type: "POST",
             dataType: "json", 
             contentType: false, 
             url: ajax.excelupload,
             data: formdata,
             processData: false,
             success: function (data) {

               if(data.status)
               {  

                  $('#preview-excel').html(data.html);
               }
               
                

             },
            
         });

    });


    $(document).on('click','.make-noneditable', function(event){

          event.preventDefault();
          var tr=$(this).closest('tr');
          var td=tr.find('td');
          td.find('.row-excel').removeClass('editable');
          td.find('.row-excel').addClass('non-editable');
          tr.find('.make-editable').removeClass('hide-field');
          tr.find('.make-noneditable').addClass('hide-field');


         
          var form = document.forms.namedItem("verify-excel");
          var formdata = new FormData(form);
         
          $.ajax({
             async: true,
             type: "POST",
             dataType: "json", 
             contentType: false, 
             url: ajax.excelverify,
             data: formdata,
             processData: false,
             success: function (data) {

               if(data.status)
               {  

                  $('#preview-excel').html(data.html);
               }

             },
            
         });

    });


    $(document).on('click','#store-excel', function(event){

          event.preventDefault();
          var tr=$(this).closest('tr');
          var td=tr.find('td');
          td.find('.row-excel').removeClass('editable');
          td.find('.row-excel').addClass('non-editable');
          tr.find('.make-editable').removeClass('hide-field');
          tr.find('.make-noneditable').addClass('hide-field');


         
          var form = document.forms.namedItem("verify-excel");
          var formdata = new FormData(form);
         
          $.ajax({
             async: true,
             type: "POST",
             dataType: "json", 
             contentType: false, 
             url: ajax.excelstore,
             data: formdata,
             processData: false,
             success: function (data) {

               if(data.status)
               {  

                  window.location.href = data.redirect;
               }

             },
            
         });

    });


    $(document).on('click','.make-editable', function(event){
          
          event.preventDefault();
          var tr=$(this).closest('tr');
          var td=tr.find('td');
          td.find('.row-excel').removeClass('non-editable');
          td.find('.row-excel').addClass('editable');
          tr.find('.make-noneditable').removeClass('hide-field');
          tr.find('.make-editable').addClass('hide-field');
          

          
         

    });
    $(document).on('click','.make-delete', function(event){
          
          event.preventDefault();
          var tr=$(this).closest('tr');
          tr.remove();
          
          var form = document.forms.namedItem("verify-excel");
          var formdata = new FormData(form);
         
          $.ajax({
             async: true,
             type: "POST",
             dataType: "json", 
             contentType: false, 
             url: ajax.excelverify,
             data: formdata,
             processData: false,
             success: function (data) {

               if(data.status)
               {  

                  $('#preview-excel').html(data.html);
               }

             },
            
         });
   });

});