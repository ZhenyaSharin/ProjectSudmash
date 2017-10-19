			$(document).ready(function(){
		        //Скрыть PopUp при загрузке страницы    
		        PopUpHide();
		    });
		    //Функция отображения PopUp
		    function PopUpShow(){
		        $("#popup1").show();
		    }
		    //Функция скрытия PopUp
		    function PopUpHide(){
		        $("#popup1").hide();
    		}

    		$(document).ready(function(){  
		        LicHide();
		    });
		    function LicShow(){
		    	$("#dir1").hide();
		        // $("#lic1").show();
		        $("#lic1").fadeIn();
		    }
		    function LicHide(){
		        $("#lic1").hide();
    		}

    		//скрипт руководства предприятия
    		$(document).ready(function(){  
		        DirHide();
		    });
		    function DirShow(){
		        $("#lic1").hide();
		        // $("#dir1").show();
		        $("#dir1").fadeIn()
		    }
		    function DirHide(){
		        $("#dir1").hide();
    		}