function toastMessage(type, message, delay){
    if (type == "green"){
        logo = "done";
    } else if(type == "red"){
        logo = "error_outline";
    } else if (type == "blue"){
        logo = "info_outline";
    } else {
        logo = "warning";
    }
    $('#main-container').prepend('<div id="card-alert" class="removeClass card '+type+'"><div class="card-content white-text"><p>'+
    '<i class="material-icons left">'+logo+'</i> '+ message +'</p></div>' +
    '<button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">' +
    '<span aria-hidden="true">×</span></button></div>').find('.removeClass').delay(delay).fadeOut();
}

function toastModalMessage(type, message, delay){
    if (type == "green"){
        logo = "done";
    } else if(type == "red"){
        logo = "error_outline";
    } else if (type == "blue"){
        logo = "info_outline";
    } else {
        logo = "warning";
    }
    $('.modal-content h4').after('<div id="card-alert" class="removeModalClass card '+type+'"><div class="card-content white-text"><p>'+
    '<i class="material-icons left">'+logo+'</i> '+ message +'</p></div>' +
    '<button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">' +
    '<span aria-hidden="true">×</span></button></div>').find('#card-alert').delay(delay).fadeOut();
}

