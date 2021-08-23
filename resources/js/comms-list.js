$(function(){
    $('.dropdown-button').one('click', function(){
        $('.fa-spinner').addClass('load-spinner')
        $.get('/api/comms', function(data){
            $('.fa-spinner').remove()
            data = JSON.parse(data);
            data.forEach(function(comm, i){
                $('.communities-menu').append(`<div><a href="/comm/${comm.slug}">${comm.name}</a></div>`)
            });
        });
    });
});