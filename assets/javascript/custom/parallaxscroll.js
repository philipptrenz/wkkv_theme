$('#frontpagecontent').bind('mousewheel DOMMouseScroll MozMousePixelScroll', function(e) {
    var $div = $('#parallax');
    var theEvent = e.originalEvent.wheelDelta || e.originalEvent.detail*-1;
    if(Foundation.MediaQuery.current=="small"){
        return true;
    } else if($(window).width()>=640){
        
        $div.scrollTop($div.scrollTop() - theEvent/4);
        
        if($div.scrollTop()>=739&&theEvent<0){
            return true;
        } else if ($div.scrollTop()>=0&&theEvent>0) {
            return true;    
        } else {
            return false;
        }

    } else {
        return true;
    }
        
    	
        
});