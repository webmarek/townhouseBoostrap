$(function(){$("#loginContainer").dialog({modal:!0,autoOpen:!0,resizable:!1,draggable:!0,show:!0,hide:!0,height:500,width:750,close:function(){$("#clue").html('wygląda na to, że formularz logowania zostal zamknięty. Naciśnij przycisk "zaloguj" by ponownie otworzyć formularz logowania')}}),$("#signIn").click(function(o){o.preventDefault(),$("#loginContainer").dialog("open")}),$("#signInForm").submit(function(){$("#loginContainer").dialog("open")})});