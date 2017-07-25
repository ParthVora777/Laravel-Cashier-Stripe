$(document).ready(function() {
	$('#subscription-plan').on('change', function() {
		var name = $("#subscription-plan option:selected").data('name');
		var amount = $("#subscription-plan option:selected").data('amount');
		$('#stripe-js').data('name', name);
		$('#stripe-js').data('amount', amount);
	});
});