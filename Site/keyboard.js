KEY_DOWN = 40; 
KEY_UP  = 38; 
KEY_LEFT = 37; 
KEY_RIGHT = 39; 

KEY_END  = 35; 
KEY_BEGIN = 36; 



KEY_BACK_TAB  = 8; 
KEY_TAB    = 9; 
KEY_SH_TAB   = 16; 
KEY_ENTER   = 13; 
KEY_ESC    = 27; 
KEY_SPACE   = 32; 
KEY_DEL    = 46; 

KEY_A  = 65; 
KEY_B  = 66; 
KEY_C  = 67; 
KEY_D  = 68; 
KEY_E  = 69; 
KEY_F  = 70; 
KEY_G  = 71; 
KEY_H  = 72; 
KEY_I  = 73; 
KEY_J  = 74; 
KEY_K  = 75; 
KEY_L  = 76; 
KEY_M  = 77; 
KEY_N  = 78; 
KEY_O  = 79; 
KEY_P  = 80; 
KEY_Q  = 81; 
KEY_R  = 82; 
KEY_S  = 83; 
KEY_T  = 84; 
KEY_U  = 85; 
KEY_V  = 86; 
KEY_W  = 87; 
KEY_X  = 88; 
KEY_Y  = 89; 
KEY_Z  = 90; 

KEY_PF1  = 112; 
KEY_PF2  = 113; 
KEY_PF3  = 114; 
KEY_PF4  = 115; 
KEY_PF5  = 116; 
KEY_PF6  = 117; 
KEY_PF7  = 118; 
KEY_PF8  = 119; 

REMAP_KEY_T = 5019; 
  
function checkEventObj ( _event_ ){ 
 if ( window.event ) 
  return window.event; 
 else 
  return _event_; 
} 
function applyKey (_event_){ 
  
 var winObj = checkEventObj(_event_); 
  
 var intKeyCode = winObj.keyCode; 
 var intAltKey = winObj.altKey; 
 var intCtrlKey = winObj.ctrlKey; 
   
 if (intAltKey || intCtrlKey) { 
   
  if ( intKeyCode == KEY_RIGHT || intKeyCode == KEY_LEFT ){ 
  $(".container-grande-mapa").css("display" , "block");
  $(".container-grande-votacao").css("display" , "block");
  $(".container-grande-insta").css("display" , "block");
  $("#rodape").css("display" , "block");
  $("#topo-pc").css("display" , "block");
  $("#site-pc").css("padding" , "1% 5.51% 0");
    $(".container-grande-video").css("width" , "65%");
    $(".container-grande-video").css("height" , "460px");
    $(".container-grande-video").css("margin" , "0 0 1% 0");
   winObj.keyCode = intKeyCode = REMAP_KEY_T; 
   winObj.returnValue = false; 
   return false; 
  } 
   
 } 
 else { 
   
  if ( intKeyCode == KEY_RIGHT || intKeyCode == KEY_LEFT ){ 
  $(".container-grande-mapa").css("display" , "none");
  $(".container-grande-votacao").css("display" , "none");
  $(".container-grande-insta").css("display" , "none");
  $("#rodape").css("display" , "none");
  $("#topo-pc").css("display" , "none");
  $("#site-pc").css("padding" , "0");
    $(".container-grande-video").css("width" , "100%");
    $(".container-grande-video").css("height" , "1012px");
    $(".container-grande-video").css("margin" , "0");
   winObj.keyCode = intKeyCode = REMAP_KEY_T; 
   winObj.returnValue = false; 
   return false; 
  } 
   
 } 
 
 
  if ( intKeyCode == KEY_Q ){
    $("#rodape-direita h3").css("margin" , "0 8% 0 0");
    $("#resolution").css("width" , "1349px");
    $("#owl-demo div.owl-wrapper-outer div div div p ").css("top", "8px");
    $("#owl-demo div.owl-wrapper-outer div div div p ").css("font-size" ,  "1em");
    $("#owl-demo div.owl-wrapper-outer div div div p ").css("right" ,  "138px");
    $("#owl-demo div.owl-wrapper-outer div div div p ").css("width" ,  "38%");
    $("#map1").css("display" ,  "none");
    $("#map2").css("display" ,  "block");
    winObj.keyCode = intKeyCode = REMAP_KEY_T; 
   winObj.returnValue = false; 
   return false; 
}
 
  if ( intKeyCode == KEY_A ){
    $("#rodape-direita h3").css("margin" , "0 12% 0 0");
    $("#resolution").css("width" , "1800px");
        $("#owl-demo div.owl-wrapper-outer div div div p ").css("top", "42px");
    $("#owl-demo div.owl-wrapper-outer div div div p ").css("font-size" ,  "1.2em");
    $("#owl-demo div.owl-wrapper-outer div div div p ").css("right" ,  "10px");
    $("#owl-demo div.owl-wrapper-outer div div div p ").css("width" ,  "60%");
        $("#map1").css("display" ,  "block");
     $("#map2").css("display" ,  "none");
    winObj.keyCode = intKeyCode = REMAP_KEY_T; 
   winObj.returnValue = false; 
   return false; 
  } 
 if ( intKeyCode == KEY_M ){
    $("#mapa-01").css("display" , "block");
    $(".container-grande-video").css("position" , "absolute");
    $(".container-grande-video").css("width" , "40%");
    $(".container-grande-video").css("height" , "380px");
    $(".container-grande-video").css("top" , "623px");
    $(".container-grande-video").css("left" , "100px");
    $(".container-grande-mapa").css("display" , "none");
  $(".container-grande-votacao").css("display" , "none");
  $(".container-grande-insta").css("display" , "none");
  $("#rodape").css("display" , "none");
  $("#topo-pc").css("display" , "none");
    winObj.keyCode = intKeyCode = REMAP_KEY_T; 
   winObj.returnValue = false; 
   return false; 
}
 if ( intKeyCode == KEY_N ){
    $("#mapa-01").css("display" , "none");
    $(".container-grande-video").css("position" , "relative");
    $(".container-grande-video").css("display" , "block");
    $(".container-grande-mapa").css("display" , "block");
    $(".container-grande-video").css("width" , "65%");
    $(".container-grande-video").css("height" , "460px");
    $(".container-grande-video").css("top" , "0px");
    $(".container-grande-video").css("left" , "0px");
  $(".container-grande-votacao").css("display" , "block");
  $(".container-grande-insta").css("display" , "block");
  $("#rodape").css("display" , "block");
  $("#topo-pc").css("display" , "block");
    winObj.keyCode = intKeyCode = REMAP_KEY_T; 
   winObj.returnValue = false; 
   return false; 
}
 if ( intKeyCode == KEY_X ){

    winObj.keyCode = intKeyCode = REMAP_KEY_T; 
   winObj.returnValue = false; 
   return false; 
}
}
