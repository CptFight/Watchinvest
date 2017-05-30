

var header = header || {
  
};


/*********************************
*   @name : bind
*   params : /
*   bind  instance  
*********************************/
header.bind = function(){
    /* Au lancement */

}

/*********************************
*   @name : init
*   params : /
*   init  instance  
*********************************/
header.init = function(){
   header.bind();
}

/*********************************
*   @name : (window).load
*   params : /
*   Call init method on windows load    
*********************************/
$(document).ready(function() {     
    header.init();

});


