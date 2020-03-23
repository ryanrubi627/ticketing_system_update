$(document).ready(function(){
	$('.edtbtn').on('click', function(){
		$('#myModal').modal('show');

		$tr = $(this).closest('tr');

		var data = $tr.children("td").map(function(){
			return $(this).text();
		}).get();

		console.log(data);

		$('#ticket_number').val(data[0]);
		$('#pwd').val(data[2]);
		$('#comment').val(data[3]);
		$('#exampleFormControlSelect1').val(data[4]);

	});
});








