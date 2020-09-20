<?php $h1 = 'Análises'; include('components/l_headerInner.php'); ?>
<main id="page__analises" class="l-innerPage">
	<section class="s-analyse">
		<div class="u-container">
			<ul class="c-responsiveGrid"
					data-maxw-breaks="1000, 780, 560"
					data-maxw-cols="4, 3, 2"
					data-cols-init="5">
				<li>
					<a href="#analise-de-agua-potavel-bruta-e-tratada" class="c-cardAnalyse --analiseAgua js-openModalAnalyse">
						<figure class="c-cardAnalyse__figure">
							<img src="media/img/icons/icon_analise_agua.svg" alt="Água potável, bruto e tratada.">
						</figure>
						<div class="c-cardAnalyse__title">
							<h2>Água potável, bruta e tratada.</h2>
						</div>
					</a>
				</li>
				<li>
					<a href="#analise-de-efluentes-liquidos" class="c-cardAnalyse --analiseEfluentes js-openModalAnalyse">
						<figure class="c-cardAnalyse__figure">
							<img src="media/img/icons/icon_analise_efluentes.svg" alt="Efluentes líquidos">
						</figure>
						<div class="c-cardAnalyse__title">
							<h2>Efluentes líquidos</h2>
						</div>
					</a>
				</li>
				<li>
					<a href="#analise-de-fertilizantes-e-corretivos-de-acidez" class="c-cardAnalyse --analiseFertilizantes js-openModalAnalyse">
						<figure class="c-cardAnalyse__figure">
							<img src="media/img/icons/icon_analise_fertilizantes.svg" alt="Fertilizantes e corretivos de acidez">
						</figure>
						<div class="c-cardAnalyse__title">
							<h2>Fertilizantes e corretivos de acidez</h2>
						</div>
					</a>
				</li>
				<li>
					<a href="#analise-de-carvao-coque-moinha-e-rejeitos" class="c-cardAnalyse --analiseCarvao js-openModalAnalyse">
						<figure class="c-cardAnalyse__figure">
							<img src="media/img/icons/icon_analise_carvao.svg" alt="Carvão, Coque, Moinha e Rejeitos">
						</figure>
						<div class="c-cardAnalyse__title">
							<h2>Carvão, Coque, Moinha e Rejeitos</h2>
						</div>
					</a>
				</li>
				<li>
					<a href="#analise-de-solo" class="c-cardAnalyse --analiseSolo js-openModalAnalyse">
						<figure class="c-cardAnalyse__figure">
							<img src="media/img/icons/icon_analise_solo.svg" alt="Solo">
						</figure>
						<div class="c-cardAnalyse__title">
							<h2>Solo</h2>
						</div>
					</a>
				</li>
				<li>
					<a href="#analise-de-residuos-solidos" class="c-cardAnalyse --analiseResiduos js-openModalAnalyse">
						<figure class="c-cardAnalyse__figure">
							<img src="media/img/icons/icon_analise_residuos.svg" alt="Resíduos sólidos">
						</figure>
						<div class="c-cardAnalyse__title">
							<h2>Resíduos sólidos</h2>
						</div>
					</a>
				</li>
				<li>
					<a href="#coleta-de-amostras" class="c-cardAnalyse --analiseAmostras js-openModalAnalyse">
						<figure class="c-cardAnalyse__figure">
							<img src="media/img/icons/icon_analise_amostra.svg" alt="Coleta de amostras: Carvão, águas, efluentes, solos.">
						</figure>
						<div class="c-cardAnalyse__title">
							<h2>Coleta de amostras: Carvão, águas, efluentes, solos.</h2>
						</div>
					</a>
				</li>
				<li>
					<a href="#analise-de-argilominerais" class="c-cardAnalyse --analiseArgilominerais js-openModalAnalyse">
						<figure class="c-cardAnalyse__figure">
							<img src="media/img/icons/icon_analise_argilomateriais.svg" alt="Argilominerais">
						</figure>
						<div class="c-cardAnalyse__title">
							<h2>Argilominerais</h2>
						</div>
					</a>
				</li>
			</ul>
		</div>
	</section>
	<?php include("components/l_footer.php"); ?>
</main>
<?php include('components/m_analiseContent.php');?>