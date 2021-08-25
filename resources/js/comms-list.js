let spin = function(){
    $('.fa-spinner').addClass('load-spinner');
}

let removeSpinner = function(){
    $('.fa-spinner').remove();
}

let getCommsForLinks = function(targetEl){
    if(typeof targetEl === 'string'){
        $(targetEl).one('click', function(){
                spin();
                return $.get('/api/comms').then(function(data){
                    removeSpinner();
                    data = JSON.parse(data);
                    data.forEach(function(comm){
                        $('.communities-menu').append(`<div><a href="/comm/${comm.slug}">${comm.name}</a></div>`);
                    });
                });
        });
    } else {
        console.error('Argument must be of type string');
    }
}

let getCommsForOptions = function(targetEl){
    if(typeof targetEl === 'string'){
        $(targetEl).one('click', function(){
                spin();
                return $.get('/api/comms').then(function(data){
                    removeSpinner();
                    data = JSON.parse(data);
                    data.forEach(function(comm){
                        $('#select-comms').append(`<option value="${comm.id}">${comm.name}</option>`);
                    });
                });
        });
    } else {
        console.error('Argument must be of type string');
    }
}

$(function(){
    getCommsForLinks('.dropdown-button');
    getCommsForOptions('#select-comms');
});