$(function(){
    $('.dropdown-button').one('click', function(){
        $.get('/api/comms', function(data){
            data = JSON.parse(data);
            data.forEach(function(comm, i){
                $('.communities-menu').append(`<div><a href="/comm/${comm.slug}">${comm.name}</a></div>`)
            });
        });
    });
});