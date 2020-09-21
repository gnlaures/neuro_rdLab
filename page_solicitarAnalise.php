<?php $h1 = 'Solicitar Análise'; include('components/l_headerInner.php'); ?>
<main id="page__solicitarAnalise" class="l-innerPage">
	<section class="s-ctaAnalyse">
		<div class="u-container u-containerFlex">
			<div class="s-ctaAnalyse__l">
				<h2>Atendemos a necessidade<br>de cada cliente</h2>
				<ul>
					<li>
						<div class="c-cardCtaAnalyse">
							<i>01</i>
							<h3>Orçamento</h3>
							<p>A proposta é elaborada e encaminhada ao cliente para aprovação.</p>
						</div>
					</li>
					<li>
						<div class="c-cardCtaAnalyse">
							<i>02</i>
							<h3>Amostragem</h3>
							<p>Se necessário a Divisão Laboratório oferece o serviço de coleta de amostras, conforme a necessidade do cliente.</p>
						</div>
					</li>
					<li>
						<div class="c-cardCtaAnalyse">
							<i>03</i>
							<h3>Análise</h3>
							<p>As amostras são inspecionadas e posteriormente se inicia os ensaios conforme as instruções de trabalhos e registros.</p>
						</div>
					</li>
					<li>
						<div class="c-cardCtaAnalyse">
							<i>04</i>
							<h3>Resultados</h3>
							<p>Os relatórios de análises são liberados para o cliente por e-mail. Caso necessário é possível encaminhar de forma impressa.</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="s-ctaAnalyse__r">
				<form action="#" class="c-simpleForm">
					<ul>
						<li class="u-fw100 liCheckbox">
							<span class="fakeLabel">Selecione os serviços que você precisa</span>
							<div>
								<label for="option1">Analise de água potável, bruta e tratada.</label>
								<input type="checkbox" id="option1">
							</div>
							<div>
								<label for="option2">Analise de efluentes líquidos</label>
								<input type="checkbox" id="option2">
							</div>
							<div>
								<label for="option3">Analise de fertilizantes e corretivos de acidez</label>
								<input type="checkbox" id="option3">
							</div>
							<div>
								<label for="option4">Analise de carvão, coque, moinha e rejeitos</label>
								<input type="checkbox" id="option4">
							</div>
							<div>
								<label for="option5">Analise de solo</label>
								<input type="checkbox" id="option5">
							</div>
							<div>
								<label for="option6">Analise de resíduos sólidos</label>
								<input type="checkbox" id="option6">
							</div>
							<div>
								<label for="option7">Coleta de amostras: Carvão, águas, efluentes, solos.</label>
								<input type="checkbox" id="option7">
							</div>
							<div>
								<label for="option8">Analise de argilominerais</label>
								<input type="checkbox" id="option8">
							</div>
						</li>
						<li class="u-fw100">
							<label for="formId_nome">Nome completo</label>
							<input id="formId_nome" type="text" name="nome" class="field" placeholder="Digite seu nome" required>
						</li>
						<li class="u-fw100">
							<label for="formId_email">E-mail</label>
							<input id="formId_email" type="email" name="email" class="field" placeholder="example@site.com" required>
						</li>
						<li class="u-fw100">
							<label for="formId_telefone">Telefone</label>
							<input id="formId_telefone" type="tel" class="field foneMask" name="telefone" placeholder="(__) ____-_____" required>
						</li>
						<li class="u-fw100">
							<label for="formId_mensagem">Observações (opcional)</label>
							<textarea id="formId_mensagem" name="mensagem" class="field" placeholder="Digite sua mensagem" required></textarea>
						</li>
						<li class="u-fw100 liBtn">
							<button class="c-btn --primary">Solicitar</button>
						</li>
					</ul>
				</form>
			</div>
		</div>
	</section>
	<?php include("components/l_footer.php"); ?>
</main>