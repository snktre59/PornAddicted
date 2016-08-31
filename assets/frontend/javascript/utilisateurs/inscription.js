$(document).ready(function() {
    $('select').material_select();

    $("input#pwd").on("focus keyup", function () {
            var score = 0;
            var a = $(this).val();
            var desc = new Array();
    
            // strength desc
            desc[0] = "Trop court";
            desc[1] = "Faible";
            desc[2] = "Bon";
            desc[3] = "Sécurisé";
            desc[4] = "Parfait !";
    
            $("#pwd_strength_wrap").fadeIn(400);
            
            // password length
            if (a.length >= 6) {
                $("#length").removeClass("invalid").addClass("valid");
                score++;
            } else {
                $("#length").removeClass("valid").addClass("invalid");
            }
    
            // at least 1 digit in password
            if (a.match(/\d/)) {
                $("#pnum").removeClass("invalid").addClass("valid");
                score++;
            } else {
                $("#pnum").removeClass("valid").addClass("invalid");
            }
    
            // at least 1 capital & lower letter in password
            if (a.match(/[A-Z]/) && a.match(/[a-z]/)) {
                $("#capital").removeClass("invalid").addClass("valid");
                score++;
            } else {
                $("#capital").removeClass("valid").addClass("invalid");
            }
    
            // at least 1 special character in password {
            if ( a.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/) ) {
                    $("#spchar").removeClass("invalid").addClass("valid");
                    score++;
            } else {
                    $("#spchar").removeClass("valid").addClass("invalid");
            }
    
    
            if(a.length > 0) {
                    //show strength text
                    $("#passwordDescription").text(desc[score]);
                    // show indicator
                    $("#passwordStrength").removeClass().addClass("strength"+score);
            } else {
                    $("#passwordDescription").text("Mot de passe non saisi");
                    $("#passwordStrength").removeClass().addClass("strength"+score);
            }
    });
    
    $("input#pwd").blur(function () {
            $("#pwd_strength_wrap").fadeOut(400);
    });
});