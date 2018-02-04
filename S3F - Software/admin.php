<?php
require 'header.php';
?>
<div class="container-fluid">
	<div class="container-table100">
			<div class="wrap-table100" style="margin-top: 40px;">
				<h2>En cours de validation</h2>
				<div class="table100 ver4 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">Nom de l'entreprise</th>
									<th class="cell100 column2">Ressource</th>
									<th class="cell100 column3">Quantité (kg)</th>
									<th class="cell100 column4">Prix</th>
									<th class="cell100 column5">Etat de la demande</th>
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
								<?php getTableWaitRequest(); ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="wrap-table100" style="border-left: 2px solid #427bdc;padding-left: 20px;">
				<h2>Validée / En cours de traitement</h2>
				<div class="table100 ver4 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">Nom de l'entreprise</th>
									<th class="cell100 column2">Ressource</th>
									<th class="cell100 column3">Quantité (kg)</th>
									<th class="cell100 column4">Prix</th>
									<th class="cell100 column5">Etat de la demande</th>
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
								<?php getTableValidateRequest() ; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
	</div>
	<hr class="style-eight" />
	<div class="wrap-table100" style="width: 95%;text-align: center;">
		<h2>Ressources disponibles</h2>
			<div class="table100 ver4 m-b-110">
				<div class="table100-head">
					<table>
						<thead>
							<tr class="row100 head">
								<th class="cell100 column1">Ressource</th>
								<th class="cell100 column2">Quantité (kg)</th>
								<th class="cell100 column3">Prix/Tonnes</th>
							</tr>
						</thead>
					</table>
				</div>
				<div class="table100-body js-pscroll">
					<table>
						<tbody>
							<?php getTableMaterial(); ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
require 'footer.php';
?>