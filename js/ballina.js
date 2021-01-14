const images = [
		'arberia.jpg',
		'matiqan.jpg',
		];
		var slider = document.getElementById('slider');
		var divs =  document.getElementsByClassName('info');
		var counter = 0;
		function moveImg(i){
			if(i==1){
					counter++;
					if(counter > images.length - 1)counter = 0;
					slider.src = "images/" + images[counter];
					document.getElementById("right").style.backgroundColor = "#84ccdb";
					document.getElementById("left").style.backgroundColor = "#84ccdb";
					document.getElementById("left").classList.add("disabled");
					document.getElementById("right").classList.remove("disabled");

					divs[1].classList.add("hide");
					divs[1].classList.remove("show");

					divs[0].classList.add("show");
					divs[0].classList.remove("hide");

				}
			else if(i==-1){
					counter--;
					if(counter < 0) counter = images.length - 1;
					slider.src = "images/" + images[counter];
					document.getElementById("right").style.backgroundColor = "#e25345";
					document.getElementById("left").style.backgroundColor = "#e25345";
					document.getElementById("right").classList.add("disabled");
					document.getElementById("left").classList.remove("disabled");

					divs[0].classList.add("hide");
					divs[0].classList.remove("show");

					divs[1].classList.add("show");
					divs[1].classList.remove("hide");
			}
	}