var num = document.getElementById('numing');
var x = document.querySelector('input');
var i = 0;
x.addEventListener('click',looop)
function looop(){
	while (i < x) {
    	num += "<br>The number is " + i;
    	i++;
	}

}

document.getElementById("demo").innerHTML = num;