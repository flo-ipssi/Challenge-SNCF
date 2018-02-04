<?php
require 'header.php';
?>
<div class="container-fluid">
		<div class="container-table100">
			<div class="wrap-table100" style="margin-top: 90px;width: 80%;">
				<h2>Commande en cours</h2>
				<div class="table100 ver4 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">Date</th>
									<th class="cell100 column2">Total</th>
									<th class="cell100 column3">Ressource</th>
									<th class="cell100 column4">Quantité (en kg)</th>
									<th class="cell100 column5">Etat de la demande</th>
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
								<?php
							  		getAllOrder($_SESSION['user']['idUser']);
							  	?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="wrap-table100" style="width: 90%;margin: -80px auto;">
				<div class="form-style-8" style="width: 100%;">
				<h2>Profil</h2>
					<?php
						getAllProfil($_SESSION['user']['idUser']);
					?>
				</div>
			</div>
		</div>
</div>
<?php
require 'footer.php';
?>