$(document).ready(function(){
	$('.episode-list-grid').flickity({
		// options
		cellAlign: 'left',
		pageDots: false,
		prevNextButtons: false,
		wrapAround: false,
		contain: true
	});

	$(document).on('click', '.fancy-toggle', function(){
		let selector = 'input[name=' + $(this).attr('data-controls') + ']';
		$(this).parent().find(selector).prop('checked', !$(this).parent().find(selector).prop('checked'));
		$(this).parent().find(selector).trigger('change');
	});

	$(document).on('change', 'input[type=checkbox]', function(){
		let name = $(this).attr('name');
		let selector = '.fancy-toggle[data-controls=' + name + ']';
		if($(this).prop('checked')){
			$(this).parent().find(selector).removeClass('bg-gray-200').addClass('bg-primary-600');
			$(this).parent().find(selector + ' span').removeClass('translate-x-0').addClass('translate-x-5');
		}else{
			$(this).parent().find(selector).addClass('bg-gray-200').removeClass('bg-primary-600');
			$(this).parent().find(selector + ' span').addClass('translate-x-0').removeClass('translate-x-5');
		}
	});
});