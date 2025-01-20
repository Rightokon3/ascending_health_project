const loadButton = 
	document.getElementById('loadButton'); 
const loader = 
	document.getElementById('loader'); 
const demoForm = 
	document.getElementById('my-form'); 

loadButton.addEventListener('click', () => { 

	// Disable the button 
	// and prevent further clicks 
	loadButton.disabled = true; 
	loader.style.display = 'inline-block'; 

	setTimeout(() => { 
	
		// Restore the button state 
		//after the operation is done 
		loadButton.disabled = false; 
		loader.style.display = 'none'; 
		demoForm.reset(); 
	}, 2000); 
});
