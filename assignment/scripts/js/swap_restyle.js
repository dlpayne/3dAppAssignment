
var counter = 0;
$(document).ready(function() {
	
	selectPage();
	selectModel();

	function selectPage() {

		$('#home').show();
		$('#about').hide();
		$('#models').hide();
		$('#interaction').hide();
		$('#spriteDescription').hide();
		$('#snesDescription').hide(); 
		$('#coffeeDescription').hide(); 
		$('#chairDescription').hide(); 
		$('#spriteDescriptionn').hide();
		$('#spriteDescriptionn').hide(); 
		$('#coffeeDescriptionn').hide(); 
		$('#chairDescriptionn').hide(); 


		$('#navHome').click(function(){
			$('#home').show();
			$('#about').hide();
			$('#models').hide();
			$('#interaction').hide();
			$('#spriteDescription').hide();
			$('#snesDescription').hide(); 
			$('#coffeeDescription').hide(); 	
			$('#chairDescription').hide();
			$('#spriteDescriptionn').hide();
		$('#snesDescriptionn').hide(); 
		$('#coffeeDescriptionn').hide(); 
		$('#chairDescriptionn').hide();  	  
		});

		$('#navAbout').click(function(){
			$('#home').hide();
			$('#about').show();
			$('#models').hide();
			$('#interaction').hide(); 
			$('#spriteDescription').hide();
			$('#snesDescription').hide(); 
			$('#coffeeDescription').hide(); 
			$('#chairDescription').hide(); 
			$('#spriteDescriptionn').hide();
		$('#snesDescriptionn').hide(); 
		$('#coffeeDescriptionn').hide(); 
		$('#chairDescriptionn').hide(); 	  
		});

		$('#navModels').click(function(){
			$('#home').hide();
			$('#about').hide();
			$('#models').show();
			$('#interaction').show(); 
			$('#spriteDescription').show();
			$('#snesDescription').hide(); 
			$('#coffeeDescription').hide(); 
			$('#chairDescription').hide(); 
			$('#spriteDescriptionn').show();
			$('#snesDescriptionn').hide(); 
			$('#coffeeDescriptionn').hide(); 
			$('#chairDescriptionn').hide(); 
			$('#one').show();
			$('#two').hide();
			$('#three').hide();
			$('#four').hide();
		});

		$('#navModels1').click(function(){
			$('#home').hide();
			$('#about').hide();
			$('#models').show();
			$('#interaction').show(); 
			$('#spriteDescription').show();
			$('#snesDescription').hide(); 
			$('#coffeeDescription').hide(); 
			$('#chairDescription').hide(); 
			$('#spriteDescriptionn').show();
			$('#snesDescriptionn').hide(); 
			$('#coffeeDescriptionn').hide(); 
			$('#chairDescriptionn').hide(); 
			$('#one').show();
			$('#two').hide();
			$('#three').hide();
			$('#four').hide();
		});

		$('#navModels2').click(function(){
			$('#home').hide();
			$('#about').hide();
			$('#models').show();
			$('#interaction').show(); 
			$('#spriteDescription').show();
			$('#snesDescription').hide(); 
			$('#coffeeDescription').hide(); 
			$('#chairDescription').hide(); 
			$('#spriteDescriptionn').show();
			$('#snesDescriptionn').hide(); 
			$('#coffeeDescriptionn').hide(); 
			$('#chairDescriptionn').hide(); 
			$('#one').show();
			$('#two').hide();
			$('#three').hide();
			$('#four').hide();
		});

		$('#navModels3').click(function(){
			$('#home').hide();
			$('#about').hide();
			$('#models').show();
			$('#interaction').show(); 
			$('#spriteDescription').show();
			$('#snesDescription').hide(); 
			$('#coffeeDescription').hide(); 
			$('#chairDescription').hide(); 
			$('#spriteDescriptionn').show();
			$('#snesDescriptionn').hide(); 
			$('#coffeeDescriptionn').hide(); 
			$('#chairDescriptionn').hide(); 
			$('#one').show();
			$('#two').hide();
			$('#three').hide();
			$('#four').hide();
		});

		$('#navModels4').click(function(){
			$('#home').hide();
			$('#about').hide();
			$('#models').show();
			$('#interaction').show(); 
			$('#spriteDescription').show();
			$('#snesDescription').hide(); 
			$('#coffeeDescription').hide(); 
			$('#chairDescription').hide(); 
			$('#spriteDescriptionn').show();
			$('#snesDescriptionn').hide(); 
			$('#coffeeDescriptionn').hide(); 
			$('#chairDescriptionn').hide(); 
			$('#one').show();
			$('#two').hide();
			$('#three').hide();
			$('#four').hide();
		});
	}

	function selectModel() {

		$('#navSprite').click(function(){
			$('#sprite').show();
			$('#one').show();
			$('#two').hide();
			$('#three').hide();
			$('#four').hide();
			$('#snes').hide();
			$('#coffee').hide();
			$('#chair').hide();
			$('#interaction').show(); 
			$('#spriteDescription').show();
			$('#snesDescription').hide(); 
			$('#coffeeDescription').hide(); 
			$('#chairDescription').hide(); 
			$('#spriteDescriptionn').show();
			$('#snesDescriptionn').hide(); 
			$('#coffeeDescriptionn').hide(); 
			$('#chairDescriptionn').hide(); 
		});

		$('#navSnes').click(function(){
			$('#sprite').hide();
			$('#snes').show();
			$('#coffee').hide();
			$('#chair').hide();
			$('#interaction').show();  
			$('#spriteDescription').hide();
			$('#snesDescription').show();
			$('#coffeeDescription').hide(); 
			$('#chairDescription').hide(); 
			$('#spriteDescriptionn').hide();
			$('#snesDescriptionn').show(); 
			$('#coffeeDescriptionn').hide(); 
			$('#chairDescriptionn').hide(); 
			$('#one').hide();
			$('#two').show();
			$('#three').hide();
			$('#four').hide(); 	  	  
		});

		$('#navCoffee').click(function(){
			$('#sprite').hide();
			$('#snes').hide();
			$('#coffee').show();
			$('#chair').hide();
			$('#interaction').show(); 
			$('#spriteDescription').hide();
			$('#snesDescription').hide(); 
			$('#coffeeDescription').show(); 
			$('#chairDescription').hide(); 
			$('#spriteDescriptionn').hide();
			$('#snesDescriptionn').hide(); 
			$('#coffeeDescriptionn').show(); 
			$('#chairDescriptionn').hide(); 
			$('#one').hide();
			$('#two').hide();
			$('#three').show();
			$('#four').hide();	   
		});

		$('#navChair').click(function(){
			$('#sprite').hide();
			$('#snes').hide();
			$('#coffee').hide();
			$('#chair').show();
			$('#interaction').show();
			$('#spriteDescription').hide();
			$('#snesDescription').hide(); 
			$('#coffeeDescription').hide(); 
			$('#chairDescription').show();
			$('#spriteDescriptionn').hide();
			$('#snesDescriptionn').hide(); 
			$('#coffeeDescriptionn').hide(); 
			$('#chairDescriptionn').show();  
			$('#one').hide();
			$('#two').hide();
			$('#three').hide();
			$('#four').show();	   
		});
	}

});

function changeLook() {
	counter += 1;
	switch (counter) {
		case 1:
			document.getElementById('bodyColor').style.backgroundColor = '#88bdbc';
			document.getElementById('headerColor').style.backgroundColor = '#88bdbc';
			document.getElementById('footerColor').style.backgroundColor = 'grey';
			break;
		case 2:
			counter = 0;
			document.getElementById('bodyColor').style.backgroundColor = 'grey';
			document.getElementById('headerColor').style.backgroundColor = '#88bdbc';
			document.getElementById('footerColor').style.backgroundColor = '#88bdbc';
			break;

	}
}

function changeBack() {
	document.getElementById('bodyColor').style.backgroundColor = '#f7f9fb';
	document.getElementById('headerColor').style.backgroundColor = '#88bdbc';
	document.getElementById('footerColor').style.backgroundColor = 'grey';
}

