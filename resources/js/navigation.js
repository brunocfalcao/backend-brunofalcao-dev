function open_sidebar(){
	$('#mobile-sidebar-background').removeClass('hidden');
	$('#mobile-sidebar-menu-parent').removeClass('hidden');

	setTimeout(function(){
		$('#mobile-sidebar-background').removeClass('opacity-0').addClass('opacity-100');
		$('#mobile-sidebar-menu').removeClass('-translate-x-full').addClass('translate-x-0');
		$('#mobile-sidebar-close').removeClass('opacity-0').addClass('opacity-100')
	}, 100);
}

function close_sidebar(){
	$('#mobile-sidebar-background').addClass('opacity-0').removeClass('opacity-100');
	$('#mobile-sidebar-menu').addClass('-translate-x-full').removeClass('translate-x-0');
	$('#mobile-sidebar-close').addClass('opacity-0').removeClass('opacity-100')

	setTimeout(function(){
		$('#mobile-sidebar-background').addClass('hidden');
		$('#mobile-sidebar-menu-parent').addClass('hidden');
	}, 500);
}

$(document).ready(function(){
	$('#mobile-sidebar-menu-parent').on('click', function(e) {
		if (e.target !== this)
		  return;
		
		close_sidebar();
	});
});

window.open_sidebar = open_sidebar;
window.close_sidebar = close_sidebar;