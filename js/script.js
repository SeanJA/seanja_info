/* Author: 

*/
function show_helicopter(){
    if($('#frame').length === 0){
        var iframe='<iframe id="frame" name="widget" src ="helicopter/index.html" width="500" height="410" marginheight="0" marginwidth="0" frameborder="no" scrolling="no"></iframe>';
        $('#ch-ch-ch-ch-ch').html(iframe);
    }
    else
    if($('#frame').is(':hidden')){
        $('#frame').show();
    }
    else {
        $('#frame').hide();
    }
}