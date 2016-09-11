<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Europcar</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />  
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" type="text/css">
    
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/accordion.css') }}" rel="stylesheet">
	
</head>

<body>

	<div class="container container-large">
		
		<div class="row">
			<div class="col-sm-12">
				<img src="{{ asset('assets/img/banner.jpg') }}" class="img-responsive banner" />
			</div>
		</div>

		<div class="clearfix"></div>
		
		<div class="row">
			<div class="col-sm-12">
				<ul class="accordion">
					<li>
						<!-- Programma de Fidelizacao para Oficinas -->
						<div class="input-group" data-id="1">
							<span class="input-group-addon accordion-icon" style="border-radius: 7px;">
								<img src="{{ asset('assets/img/icon-gift.png') }}" />
							</span>
							<div class="accordion-spacer"></div>
							<div class="accordion-label">
								<div>
									Programa de Fidelizacao para Oficinas
								</div>
							</div>
							<span class="input-group-btn accordion-group-btn">
								<button class="btn accordion-btn">
									saiba mais
									<i class="fa fa-angle-down"></i>
								</button>
							</span>
						</div>
						<div class="accordion-1 accordion-details">
							<div class="row">
								<div class="col-xs-6">
									<h3>A chave para ganhar muitos premios esta na Europcar.</h3>
									<p>O Programa de Fidelizacao Oficina Rent permite-lhe acumular pontos que podem ser trocados por premios e garante aos seus clientes as melhores condicoes para o aluguer de veiculos de subsituicao. Recomende os servicos da Europcar e assim esta a oferecer a chave para a solucao dos problemas dos seus clientes, ao mesmo tempo que escolhe os premios que quer ganhar!</p>
									<p>&nbsp;</p>
								</div>
								<div class="col-xs-6">
									<h3>Quanto mais vezes participar, mais pontos acumula e mais premios pode ganhar.</h3>
									<p>Para aderir ao Programa de Fidelizacao Oficina Rent, basta preencher na totalidade a ficha de inscricao e, num periodo de 24 horas, recebera uma confirmacao por e-mail. A partir deste momento podera aceder a ficha de participacao online e enviar as reservas para a Europcar.</p>
									<p>Ao acumular alugueres, acumula mais hipoteses de ganhar premios. So tem que preencher a ficha de participacao indicando os 25 registos de aluguer que conseguir junta e enviar para a Europcar. Com a Europcar, basta acumular alugueres para ganhar premios!</p>
								</div>
							</div>
						</div>
					</li>
					<li>
						<!-- Inscreva-se -->
						<div class="input-group" data-id="2">
							<span class="input-group-addon accordion-icon" style="border-radius: 7px;">
								<img src="{{ asset('assets/img/icon-avatar.png') }}" />
							</span>
							<div class="accordion-spacer"></div>
							<div class="accordion-label">
								<div>
									Inscreva-se
								</div>
							</div>
							<span class="input-group-btn accordion-group-btn">
								<button class="btn accordion-btn">
									saiba mais
									<i class="fa fa-angle-down"></i>
								</button>
							</span>
						</div>
						<div class="accordion-2 accordion-details">
							<div class="row">
								<form id="formInscrevaSe" class="form-horizontal" style="padding: 10px 20px"
									action="{{ action('WelcomeController@InscrevaSe') }}"
									method="POST">
									<input type="hidden" name="_token" value="{{ csrf_token() }}" />
									<div class="col-xs-6">
										<h3>Dados do Participante</h3>
										<div class="form-group">
											<label for="inscreva_nome_do_participante" class="col-lg-12 control-label">Nome do participante*</label>
											<input id="inscreva_nome_do_participante" name="inscreva_nome_do_participante" type="text" class="form-control" />
											<small class="input-invalid invalid_inscreva_nome_do_participante">Please enter a valid nome.</small>
										</div>
										<div class="form-group">
											<label for="inscreva_funcao" class="col-lg-12 control-label">Funcao*</label>
											<input id="inscreva_funcao" name="inscreva_funcao" type="text" class="form-control" value="" />
											<small class="input-invalid invalid_inscreva_funcao">Please enter a valid funcao.</small>
										</div>
										<div class="form-group">
											<label for="inscreva_telemovel" class="col-lg-12 control-label">Telemovel*</label>
											<input id="inscreva_telemovel" name="inscreva_telemovel" type="text" class="form-control" value="" />
											<small class="input-invalid invalid_inscreva_telemovel">Please enter a valid telemovel.</small>
										</div>
										<div class="form-group">
											<label for="inscreva_email" class="col-lg-12 control-label">Email*</label>
											<input id="inscreva_email" name="inscreva_email" type="text" class="form-control" value="" />
											<small class="input-invalid invalid_inscreva_email">Please enter a valid email.</small>
										</div>
										<p>&nbsp;</p>
										<h3>Dados da Oficina</h3>
										<div class="form-group">
											<label for="inscreva_nome_da_oficina" class="col-lg-12 control-label">Nome da Oficina*</label>
											<input id="inscreva_nome_da_oficina" name="inscreva_nome_da_oficina" type="text" class="form-control" value="" />
											<small class="input-invalid invalid_inscreva_nome_da_oficina">Please enter a valid nome da oficina.</small>
										</div>
										<div class="form-group">
											<label for="inscreva_morada" class="col-lg-12 control-label">Morada*</label>
											<input id="inscreva_morada" name="inscreva_morada" type="text" class="form-control" value="" />
											<small class="input-invalid invalid_inscreva_morada">Please enter a valid morada.</small>
										</div>
										<div class="form-group">
											<label for="inscreva_codigo_postal" class="col-lg-12 control-label">Codigo Postal*</label>
											<input id="inscreva_codigo_postal" name="inscreva_codigo_postal" type="text" class="form-control" value="" />
											<small class="input-invalid invalid_inscreva_codigo_postal">Please enter a valid codigo postal.</small>
										</div>
										<div class="form-group">
											<label for="inscreva_localidade" class="col-lg-12 control-label">Localidade*</label>
											<input id="inscreva_localidade" name="inscreva_localidade" type="text" class="form-control" value="" />
											<small class="input-invalid invalid_inscreva_localidade">Please enter a valid localidade.</small>
										</div>
										<div class="form-group">
											<label for="inscreva_telefone" class="col-lg-12 control-label">Telefone*</label>
											<input id="inscreva_telefone" name="inscreva_telefone" type="text" class="form-control" value="" />
											<small class="input-invalid invalid_inscreva_telefone">Please enter a valid telefone.</small>
										</div>
									</div>
									<div class="col-xs-6">
										<p>* Todos os campos sao de preenchimento obrigatorio. Serao contabilizadas apenas as reservas que tenham gerado aluguer.</p>
										<button class="btn btn-lg btn-green" type="submit">
											Submeter
										</button>
									</div>
								</form>
							</div>
						</div>
					</li>
					<li>
						<!-- Participe -->
						<div class="input-group" data-id="3">
							<span class="input-group-addon accordion-icon" style="border-radius: 7px;">
								<img src="{{ asset('assets/img/icon-key.png') }}" />
							</span>
							<div class="accordion-spacer"></div>
							<div class="accordion-label">
								<div>
									Participe
								</div>
							</div>
							<span class="input-group-btn accordion-group-btn">
								<button class="btn accordion-btn">
									saiba mais
									<i class="fa fa-angle-down"></i>
								</button>
							</span>
						</div>
						<div class="accordion-3 accordion-details">
							<div class="row">
								<form id="formParticipe" class="form-horizontal" style="padding: 10px 20px"
									action="{{ action('WelcomeController@Participe') }}"
									method="POST">
									<input type="hidden" name="_token" value="{{ csrf_token() }}" />
									<div class="col-xs-6">
										<div class="form-group">
											<label for="participe_nome" class="col-lg-12 control-label">Nome do participante*</label>
											<input id="participe_nome" name="participe_nome" type="text" class="form-control" value="" />
											<small class="input-invalid invalid_participe_nome">Please enter a valid nome.</small>
										</div>
										<div class="form-group">
											<label for="participe_telemovel" class="col-lg-12 control-label">Telemovel*</label>
											<input id="participe_telemovel" name="participe_telemovel" type="text" class="form-control" value="" />
											<small class="input-invalid invalid_participe_telemovel">Please enter a valid telemovel.</small>
										</div>
										<div class="form-group">
											<label for="participe_email" class="col-lg-12 control-label">Email*</label>
											<input id="participe_email" name="participe_email" type="text" class="form-control" value="" />
											<small class="input-invalid invalid_participe_email">Please enter a valid email.</small>
										</div>
										<div class="form-group">
											<label for="participe_nome_da_oficina" class="col-lg-12 control-label">Nome da Oficina*</label>
											<input id="participe_nome_da_oficina" name="participe_nome_da_oficina" type="text" class="form-control" value="" />
											<small class="input-invalid invalid_participe_nome_da_oficina">Please enter a valid nome da oficina.</small>
										</div>
										<p>&nbsp;</p>
										<h3>Alugueres</h3>
										<div class="caption">Os numeros de reserva sao compostos por 10 digitos.</div>
										<div class="form-group">
											<input id="participe_alugueres" name="participe_alugueres" type="text" class="form-control" value="" />
										</div>
										<p>&nbsp;</p>
									</div>
									<div class="col-xs-6">
										<p>* Todos os campos sao de preenchimento obrigatorio. Serao contabilizadas apenas as reservas que tenham gerado aluguer.</p>
										<button class="btn btn-lg btn-green" type="submit">
											Submeter
										</button>
									</div>
								</form>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>

		<p>&nbsp;</p>
		
		<div class="row">
			<div class="col-sm-12">
				<center>
					<a class="btn btn-lg btn-green" href="#">
						Europcar da premios
					</a>
				</center>
			</div>
		</div>

		<p>&nbsp;</p>

	</div>

	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/js/accordion.js') }}"></script>
	<script src="{{ asset('assets/js/forms.js') }}"></script>

</body>
</html>
