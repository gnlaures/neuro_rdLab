<?php $h1 = 'Contato'; include('components/l_headerInner.php'); ?>
<main id="page__contato" class="l-innerPage">
	<section class="s-contact">
		<div class="u-container u-containerFlex">
			<div class="s-contact__l">
				<form action="envia-contato" id="formContato" class="c-simpleForm" method="post">
					<ul>
						<li class="u-fw50">
							<label for="formContato_nome">Nome completo</label>
							<input id="formContato_nome" type="text" name="nome" class="field" placeholder="Digite seu nome" required>
						</li>
						<li class="u-fw50">
							<label for="formContato_email">E-mail</label>
							<input id="formContato_email" type="email" name="email" class="field" placeholder="example@site.com" required>
						</li>
						<li class="u-fw50">
							<label for="formContato_telefone">Telefone</label>
							<input id="formContato_telefone" type="tel" class="field foneMask" name="telefone" placeholder="(__) ____-_____" required>
						</li>
						<li class="u-fw50">
							<label for="formContato_assunto">Assunto</label>
							<input id="formContato_assunto" type="text" name="assunto" class="field" placeholder="Sobre o que gostaria de conversar?" required>
						</li>
						<li class="u-fw50 liSelect">
							<label for="formContato_estado">Estado</label>
							<select name="estado" id="formContato_estado" class="field" required>
								<option value="">Selecione</option>
								<option value="ac">Acre</option>
								<option value="al">Alagoas</option>
								<option value="ap">Amapá</option>
								<option value="am">Amazonas</option>
								<option value="ba">Bahia</option>
								<option value="ce">Ceará</option>
								<option value="df">Distrito Federal</option>
								<option value="es">Espirito Santo</option>
								<option value="go">Goiás</option>
								<option value="ma">Maranhão</option>
								<option value="ms">Mato Grosso do Sul</option>
								<option value="mt">Mato Grosso</option>
								<option value="mg">Minas Gerais</option>
								<option value="pa">Pará</option>
								<option value="pb">Paraíba</option>
								<option value="pr">Paraná</option>
								<option value="pe">Pernambuco</option>
								<option value="pi">Piauí</option>
								<option value="rj">Rio de Janeiro</option>
								<option value="rn">Rio Grande do Norte</option>
								<option value="rs">Rio Grande do Sul</option>
								<option value="ro">Rondônia</option>
								<option value="rr">Roraima</option>
								<option value="sc">Santa Catarina</option>
								<option value="sp">São Paulo</option>
								<option value="se">Sergipe</option>
								<option value="to">Tocantins</option>
							</select>
						</li>
						<li class="u-fw50 liSelect">
							<label for="formContato_cidade">Cidade</label>
							<select name="cidade" id="formContato_cidade" class="field" required>
								<option value="">Aguardando</option>
							</select>
						</li>
						<li class="u-fw100">
							<label for="formContato_mensagem">Mensagem</label>
							<textarea id="formContato_mensagem" name="mensagem" class="field" placeholder="Digite sua mensagem" required></textarea>
						</li>
						<li class="u-fw100 liBtn">
							<input type="text" name="mail" id="mail" class="field" style="display: block;border: 0;height: 0;opacity: 0"/>
							<button type="submit" id="btnContato" class="c-btn --primary">
								Enviar
							</button>
						</li>
					</ul>
					<div class="c-stsSend u-dnone" id="status-envio">
						<div class="c-stsSend__feedback c-stsSend__feedback--error  u-dnone">
							<i><?php include("media/img/boilerplate/c-stsSend_error.svg");?></i>
							<span>Formulário não enviado, tente novamente.</span>
						</div>
						<div class="c-stsSend__feedback c-stsSend__feedback--load  u-dnone">
							<i><?php include("media/img/boilerplate/c-stsSend_load.svg");?></i>
							<span>Enviando...</span>
						</div>
						<div class="c-stsSend__feedback c-stsSend__feedback--success  u-dnone">
							<i><?php include("media/img/boilerplate/c-stsSend_success.svg");?></i>
							<span>Mensagem enviada com sucesso.</span>
						</div>
					</div>
				</form>
			</div>
			<div class="s-contact__r">
				<ul class="c-infosContato">
					<li>
						<a href="#">
							<i><?php include('media/img/icons/icon_whats.svg'); ?></i>
							<span class="caption">Atendimento Whatsapp</span>
						</a>
					</li>
					<li>
						<a href="#">
							<i><?php include('media/img/icons/icon_phone.svg'); ?></i>
							<span class="caption">(48) 999.999.999</span>
						</a>
					</li>
					<li>
						<a href="#">
							<i><?php include('media/img/icons/icon_mail.svg'); ?></i>
							<span class="caption">contato@dominio.com.br</span>
						</a>
					</li>
					<li>
						<a href="#">
							<i><?php include('media/img/icons/icon_map.svg'); ?></i>
							<address class="caption">
								Av. Getúlio Vargas, 153 - Centro, Criciúma - SC, 88801-500
							</address>
						</a>
					</li>
				</ul>
				<div class="c-map u-aspectRatio u-aspectRatio--3-2">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27999.461186414177!2d-49.37759033404484!3d-28.69166127693943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9521828518fb8237%3A0x985ca9f88a8c96f!2sRio%20Deserto!5e0!3m2!1spt-BR!2sbr!4v1600579998659!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
			</div>
		</div>
	</section>
	<?php include("components/l_footer.php"); ?>
</main>