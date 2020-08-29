var state= false;
function togglePassword(){
    if(state){
	document.getElementById("registerpassword").setAttribute("type","password");
	document.getElementById("togglevisibility").innerHTML='show';
	state = false;
     }
     else{
    document.getElementById("registerpassword").setAttribute("type","text");
    document.getElementById("togglevisibility").innerHTML='hide';
	state = true;
     }
}