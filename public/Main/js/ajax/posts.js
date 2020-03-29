var counter = Number('1');
			
function add(counter) {
	$.ajax({
		method: 'POST',
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		},
		url: "/",
		data: { addPost: counter }
	}).done(function(data) {
		$('#refresh').html(data);
	}).fail(function() {
		alert("Sorry, something is wrong with our page...\nWe cannot show you any of our posts for now.");
	});
}

$(document).on('click', '#addPost', function(event) {
	event.preventDefault();
	
	var value = Number('1');
	counter += value;
	
	add(counter);
});