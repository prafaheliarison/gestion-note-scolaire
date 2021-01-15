"use strict"

var self = module.exports = {
		
	removeStudent:() => {
		
		$('a.remove').click(function(e){
			e.preventDefault();
			if ( confirm('Supprimer cet élève ?') ) {
				$('#form-remove').find('[name="id"]').val($(this).data('id'));
				$('#form-remove').submit();
			}
		});
				
	}
}