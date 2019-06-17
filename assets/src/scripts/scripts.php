<?php
$choice = rand(1,3);
if((!has_header_image() || get_theme_mod("header_switch") == 'none') && $choice == 1){
	if(!is_front_page()){
		?>
			<script>
				function getRandom(min, max) {
					//console.log(Math.floor(Math.random() * 10));
					//to get both 1 and 10
					return Math.floor(Math.random() * (max - min + 1) + min)
				}

				let	context = backface.getContext("2d");
				let max = 100,
					min = 10,
					rad = 0;
				for(var i = 0; i < 2000;i++){
					var circleRad = Math.floor(Math.random() * (max - min + 1)+ min),
						growSpd = circleRad / 10,
						boxColorR = getRandom(0,255),
						boxColorG = getRandom(0,255),
						boxColorB = getRandom(0,255),
						trans = getRandom(0,100)/10,
						randX = getRandom(0 - circleRad,backface.width),
						randY = getRandom(0 - circleRad,backface.height);
					
					context.beginPath();
					context.arc(randX,randY,circleRad,0,2 * Math.PI);
					context.lineWidth = circleRad;
					context.fillStyle = "rgba("+boxColorR+","+boxColorG+","+boxColorB+",1)";
					context.fill();
					context.closePath();
					
				}
			</script>

		<?php
	}else{
		?><script>
			function getRandom(min, max) {
				//console.log(Math.floor(Math.random() * 10));
				//to get both 1 and 10
				return Math.floor(Math.random() * (max - min + 1) + min)
			}

			let	context = backface.getContext("2d");
			function drawBox(){
				let max = 100,
					min = 10,
					rad = 0,
					circleRad = Math.floor(Math.random() * (max - min + 1)+ min),
					growSpd = circleRad / 10,
					boxColorR = getRandom(0,255),
					boxColorG = getRandom(0,255),
					boxColorB = getRandom(0,255),
					trans = getRandom(0,100)/10,
					randX = getRandom(0 - circleRad,backface.width),
					randY = getRandom(0 - circleRad,backface.height);
				context.fillStyle = "rgba("+boxColorR+","+boxColorG+","+boxColorB+",1)";
				context.beginPath();
				context.arc(randX,randY,0,0,2 * Math.PI);
				context.fill();
				grow();
				function grow(){
					context.beginPath();
					context.arc(randX,randY,rad,0,2 * Math.PI);
					context.lineWidth = growSpd + growSpd;
					context.strokeStyle = "rgba("+boxColorR+","+boxColorG+","+boxColorB+",1)";
					context.stroke();
					context.closePath();
					rad+=growSpd;
					if(rad<=circleRad){
						requestAnimationFrame(grow);
					}else{
						requestAnimationFrame(drawBox);
					}
				}
			}
			requestAnimationFrame(drawBox);
	</script><?php
	}
}else if($choice == 2){
	if(!is_front_page()){
		?>
		<script>
			let context = backface.getContext('2d');
			function lines(){
				var values = [],
					lineWidth = 5,
					min = 100,
					max = backface.height - 50;
				for(var i = 0; i < backface.width;i++){
					values.push(1);
				}
				for(var i = 0; i < values.length;i++){
					values[i] = Math.floor(Math.random() * (max - min) ) + min;
				}
				var i = 0,
					rr = Math.floor(Math.random() * (3 - 1) ) + 1,
					rg = Math.floor(Math.random() * (3 - 1) ) + 1,
					rb = Math.floor(Math.random() * (3 - 1) ) + 1,
					r = 255,
					g = 255,
					b = 255;
				//requestAnimationFrame(function() { drawLines(i); });
				for(var i = 0; i < backface.width; i = i + lineWidth){
					if(rr == 2){
						r = Math.floor(Math.random() * (255 - 1) ) + 1;
					}else{ r = 0;}
					if(rg == 2){
						g = Math.floor(Math.random() * (255 - 1) ) + 1;
					}else{ g = 0;}
					if(rb == 2){
						b = Math.floor(Math.random() * (255 - 1) ) + 1;
					}else{ b = 0;}
					if(rr != 2 && rg != 2 && rb != 2){
						var rand = Math.floor(Math.random() * (255 - 1) ) + 1;
						r = rand;
						g = rand;
						b = rand;					
					}
					//context.clearRect(i,0, 4,backface.height);
					context.beginPath();
					context.lineWidth = lineWidth;
					context.strokeStyle = `rgba(${r},${g},${b},1)`;
					context.moveTo(i, backface.height);
					context.lineTo(i, backface.height - values[i]);
					context.stroke();
					context.closePath();
					//console.log(values[i]);
				}
			}
			lines();
			//requestAnimationFrame(lines);
		</script>

		<?php
	}else{
		?>
		<script>
			let context = backface.getContext('2d'),
				lineWidth = 5,
				min = 100,
				max = backface.height - 50;
			function lines(){
				var values = [];
				for(var i = 0; i < backface.width;i++){
					values.push(1);
				}
				for(var i = 0; i < values.length;i++){
					values[i] = Math.floor(Math.random() * (max - min) ) + min;
				}
				var i = 0,
					rr = Math.floor(Math.random() * (3 - 1) ) + 1,
					rg = Math.floor(Math.random() * (3 - 1) ) + 1,
					rb = Math.floor(Math.random() * (3 - 1) ) + 1,
					r = 255,
					g = 255,
					b = 255;
				requestAnimationFrame(function() { drawLines(i); });
				function drawLines(i){
					//change this to a for loop that works.
					if(rr == 2){
						r = Math.floor(Math.random() * (255 - 1) ) + 1;
					}else{ r = 0;}
					if(rg == 2){
						g = Math.floor(Math.random() * (255 - 1) ) + 1;
					}else{ g = 0;}
					if(rb == 2){
						b = Math.floor(Math.random() * (255 - 1) ) + 1;
					}else{ b = 0;}
					if(rr != 2 && rg != 2 && rb != 2){
						var rand = Math.floor(Math.random() * (255 - 1) ) + 1;
						r = rand;
						g = rand;
						b = rand;					
					}
					context.clearRect(i,0, 1 + lineWidth,backface.height);
					context.beginPath();
					context.lineWidth = lineWidth;
					context.strokeStyle = `rgba(${r},${g},${b},1)`;
					context.moveTo(i, backface.height);
					context.lineTo(i, backface.height - values[i]);
					context.stroke();
					context.closePath();
					//console.log(values[i]);
					if(i >= backface.width){	i = 0;requestAnimationFrame(lines);	}else{	i = i + 1 + lineWidth; requestAnimationFrame(function(){drawLines(i);});	}
					//setTimeout(function() { drawLines(i); }, 1);
				}
			}
			requestAnimationFrame(lines);
		</script>
		
		<?php
	}
} else if($choice == 3){
	if(!is_front_page()) {
		?><script>
		let context = backface.getContext("2d");
		context.canvas.width = window.innerWidth;
		context.canvas.height = window.innerHeight;

		/*function resize(){
		context.canvas.width = window.innerWidth;
		context.canvas.height = window.innerHeight;
		draw();
		}
		window.addEventListener("resize", resize,false);*/

		function getRandom(min, max) {
		return Math.floor(Math.random() * (max - min + 1) + min);
		}
		function getDist(x1, y1, x2, y2) {
		return Math.sqrt((x2 - x1) * (x2 - x1) + (y2 - y1) * (y2 - y1));
		}
		var count = 2000,
			protection = 0,
			circles = [],
			width = 3;
		while (circles.length < count) {
		var circle = {
			x: getRandom(1, backface.width),
			y: getRandom(1, backface.height),
			r: getRandom(2, 100),
			h: getRandom(1, 255),
			s: getRandom(1, 5),
			d: getRandom(1, 2)
		};
		var overLapping = false;
		for (var j = 0; j < circles.length; j++) {
			var other = circles[j];
			var d = getDist(circle.x, circle.y, other.x, other.y);
			if (d < circle.r + other.r + width) {
			overLapping = true;
			break;
			}
		}
		if (!overLapping) {
			circles.push(circle);
		}
		protection++;

		if (protection > 200000) {
			break;
		}
		}
		var i = -1;
		function draw() {
		i++;
		if(i<circles.length){
			context.beginPath();
			context.arc(circles[i].x, circles[i].y, circles[i].r, 0, 2 * Math.PI);
			context.lineWidth = width;
			context.fillStyle = `hsl(${circles[i].h},100%,50%)`;
			context.fill();
			context.closePath();
			draw();
		}
		}
		draw();

	</script>
	<?php
	} else {
		?><script>
		let context = backface.getContext("2d");
		context.canvas.width = window.innerWidth;
		context.canvas.height = window.innerHeight;

		/*function resize(){
		context.canvas.width = window.innerWidth;
		context.canvas.height = window.innerHeight;
		draw();
		}
		window.addEventListener("resize", resize,false);*/

		function getRandom(min, max) {
		return Math.floor(Math.random() * (max - min + 1) + min);
		}
		function getDist(x1, y1, x2, y2) {
		return Math.sqrt((x2 - x1) * (x2 - x1) + (y2 - y1) * (y2 - y1));
		}
		var count = 2000,
			protection = 0,
			circles = [],
			width = 3;
		while (circles.length < count) {
		var circle = {
			x: getRandom(1, backface.width),
			y: getRandom(1, backface.height),
			r: getRandom(2, 100),
			h: getRandom(1, 255),
			s: getRandom(1, 5),
			d: getRandom(1, 2)
		};
		var overLapping = false;
		for (var j = 0; j < circles.length; j++) {
			var other = circles[j];
			var d = getDist(circle.x, circle.y, other.x, other.y);
			if (d < circle.r + other.r + width) {
			overLapping = true;
			break;
			}
		}
		if (!overLapping) {
			circles.push(circle);
		}
		protection++;

		if (protection > 200000) {
			break;
		}
		}
		var i = -1;
		function draw() {
		i++;
		if(i<circles.length){
			context.beginPath();
			context.arc(circles[i].x, circles[i].y, circles[i].r, 0, 2 * Math.PI);
			context.lineWidth = width;
			context.fillStyle = `hsl(${circles[i].h},100%,50%)`;
			context.fill();
			context.closePath();
			requestAnimationFrame(draw);
		}
		}
		requestAnimationFrame(draw);
		</script>
		<?php
	}
}
?>