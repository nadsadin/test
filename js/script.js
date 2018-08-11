$(document).ready(function(){
    $('#form').validate({
        errorPlacement: function(error,element){}
    });
    $('#form').submit(function(e){
        e.preventDefault();
        $.ajax({
            url:'create_message.php',
            type:'POST',
            data:$('input,textarea').serialize(),
            success:function(result){
                $(".comments").append(result);
                $('#message').val('')
            }
        });
    });
});