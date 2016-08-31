$(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
    
    $('#ajouterLocataire').submit(function(e){
        e.preventDefault();
        
        var url = $("#url").val();
        console.log($(this).serialize());
        $.ajax({
            url: url,
            type: 'POST',
            data: $(this).serialize(),
            success: function(retour){
                
            },
            error: function(xhr, ajaxOptions, thrownError){
                alert(xhr.status);
                alert(thrownError);
            }
        })
    });
});



