// $("frmRegister").validate();





// les éléments que j'ai besoin
/* $("#frmPass");
$("#frmPassb");
$("#frmRegister");
*/



$( "#frmPrenom" ).blur(function() {
    if($(this).val().length == 0)
    {
      alert("Veuillez remplir le champ");
      return false;
    }
});

$( "#frmPrenom" ).blur(function() {
  if( $(this).val().length == 0 )
  {
   $(this) .addClass("is-invalid");
  }else {
    $(this).removeClass("is-invalid").addClass("is-valid");
  }
});

$( "#frmNom" ).blur(function() {
  if( $(this).val().length == 0 )
  {
   $(this) .addClass("is-invalid");
  }else {
    $(this).removeClass("is-invalid").addClass("is-valid");
  }
});


$( "#frmEmail" ).blur(function() {
  if( $(this).val().length == 0 )
  {
   $(this) .addClass("is-invalid");
  }else {
    $(this).removeClass("is-invalid").addClass("is-valid");
  }
});


$( "#frmPass" ).blur(function() {
  if( $(this).val().length == 0 )
  {
    $(this) .addClass("is-invalid");
  } else {
    //teste si chaine plus petite que 6 caractères
    if( $(this).val().length < 6){

      $(this) .addClass("is-invalid");

    } else{
      if ($(this).val().length > 12) {

        $(this) .addClass("is-invalid");

      } else {
        $(this).removeClass("is-invalid").addClass("is-valid");
      }
    }
  }
});

$( "#frmPass2" ).blur(function() {
  if( $(this).val().length == 0 )
  {
   $(this) .addClass("is-invalid");
  }else {
    if ($(this).val() != $("#frmPass").val()) {
      $(this). addClass("is-invalid");
    } else {
      $(this).removeClass("is-invalid").addClass("is-valid");
    }
  }
});


