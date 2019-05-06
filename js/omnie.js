var non_IT_vis = true;

function switch_non_IT(){
	if(non_IT_vis == false) {
		non_IT_vis = true;
		var obj = document.getElementsByClassName("non_IT");
		var i;
		for (i = 0; i < obj.length; i++) {
			obj[i].style.display = "inline";
		}
		document.getElementById("change_sign").innerText ="-";
	}
	else {
		non_IT_vis = false;
		var obj = document.getElementsByClassName("non_IT");
		var i;
		for (i = 0; i < obj.length; i++) {
			obj[i].style.display = "none";
		}
		document.getElementById("change_sign").innerText ="+";
	}	
}