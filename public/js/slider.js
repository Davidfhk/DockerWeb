

	var progress = $('.progress .progress-bar');
	var slider = $('#containers-range');


	slider.on('click mousedown mouseup',()=>{
		var value = parseInt(slider.val())
		console.log(value);
		progress.attr({'aria-valuenow':value});
		progress.css('width',value + '%');
		progress.html(value);		
	})





