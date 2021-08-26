$(function(){
    $('.delete-comment').on('click', function(){
        let commentContainer = $(this).parents('.comment-box');
        $.ajax({
            url : '/comment/delete',
            method : 'POST',
            data : { comment : $(this).attr('id') },
            dataType : 'json',
            headers : { 'X-CSRF-TOKEN' : $(this).attr('data-token') },
            beforeSend : function(){
                $(this).children().removeClass();
                $(this).children().addClass('fas fa-spinner load-spinner');
            }
        }).then(function(data){
            console.log(data.message)
                
            if(data.deleted){
                commentContainer.remove()
            }
        })
    })
})