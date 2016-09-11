/* 
 * Porto v1.0.0
 *
 * @author: SEBASTIAN A. NJOSE
 * @profile: http://www.freelancer.com/u/njose.html
 *
 **/

$(document).ready(function(){

	/* ---- Inscreva-se ---- */
	$('#formInscrevaSe').on('submit', function(e) {

		e.preventDefault();

		if (!isValid('inscreva_nome_do_participante')) return false;
		if (!isValid('inscreva_funcao')) return false;
		if (!isValid('inscreva_telemovel', /^9[1236][0-9]{7}|2[1-9][0-9]{7}$/)) return false;
		if (!isValid('inscreva_email', /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/)) return false;
		if (!isValid('inscreva_nome_da_oficina')) return false;
		if (!isValid('inscreva_morada')) return false;
		if (!isValid('inscreva_codigo_postal', /^\d{4}(-\d{3})?$/)) return false;
		if (!isValid('inscreva_localidade')) return false;
		if (!isValid('inscreva_telefone', /^9[1236][0-9]{7}|2[1-9][0-9]{7}$/)) return false;

		// submit form data
		var __action = $(this).prop('action'),
			__method = $(this).prop('method'),
			__data = {
	  			"_token" : $("input[name=_token]").val(),
	  			"inscreva_nome_do_participante" : $("input[name=inscreva_nome_do_participante]").val(),
				"inscreva_funcao" : $("input[name=inscreva_funcao]").val(),
	  			"inscreva_telemovel" : $("input[name=inscreva_telemovel]").val(),
	  			"inscreva_email" : $("input[name=inscreva_email]").val(),
	  			"inscreva_nome_da_oficina" : $("input[name=inscreva_nome_da_oficina]").val(),
	  			"inscreva_morada" : $("input[name=inscreva_morada]").val(),
	  			"inscreva_codigo_postal" : $("input[name=inscreva_codigo_postal]").val(),
	  			"inscreva_localidade" : $("input[name=inscreva_localidade]").val(),
	  			"inscreva_telefone" : $("input[name=inscreva_telefone]").val()
	  		};

  		$.ajax({
  			type: 		__method,
  			url: 		__action,
  			data: 		__data,
  			dataType: 	"json",
  			encode: 	true
  		})
  		// callback
  		.done(function(data){
  			if (data.status == 200) {
	  			$('#formInscrevaSe').html('<div class="success"><i class="fa fa-check-circle"></i><p>Your details have been submitted successfully.</p></div>');
	  		}
  		});

	});

	/* ---- Participe ---- */
	$('#formParticipe').on('submit', function(e) {

		e.preventDefault();

		if (!isValid('participe_nome')) return false;
		if (!isValid('participe_telemovel', /^9[1236][0-9]{7}|2[1-9][0-9]{7}$/)) return false;
		if (!isValid('participe_email', /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/)) return false;
		if (!isValid('participe_nome_da_oficina')) return false;
		//if (!isValid('participe_alugueres')) return false;

		// submit form data
		var __action = $(this).prop('action'),
			__method = $(this).prop('method'),
			__data = {
	  			"_token" : $("input[name=_token]").val(),
	  			"participe_nome" : $("input[name=participe_nome]").val(),
				"participe_telemovel" : $("input[name=participe_telemovel]").val(),
	  			"participe_email" : $("input[name=participe_email]").val(),
	  			"participe_nome_da_oficina" : $("input[name=participe_nome_da_oficina]").val(),
	  			"participe_alugueres" : $("input[name=participe_alugueres]").val()
	  		};

  		$.ajax({
  			type: 		__method,
  			url: 		__action,
  			data: 		__data,
  			dataType: 	"json",
  			encode: 	true
  		})
  		// callback
  		.done(function(data){
  			console.log(data);
  			if (data.status == 200) {
	  			$('#formParticipe').html('<div class="success"><i class="fa fa-check-circle"></i><p>Your details have been submitted successfully.</p></div>');
	  		}
  		});

	});

	/* ---- Validates input fields ---- */
	var isValid = function(name, regexPattern = null) {

		var field = 'input[name=' + name + ']',
			value = $(field).val(),
			regex = (regexPattern) ? regexPattern.test(value) : true;

		if (regex === false || $.trim(value) == "") {

			// highlight field 'red'
			$(field).css('border-color', '#F00');
			$(field).focus();
			
			// display error
			$('.invalid_' + name).show();

			return false;
		}

		// remove error
		$(field).css('border-color', '#0C0');
		$('.invalid_' + name).hide();

		return true;
	};
	
});