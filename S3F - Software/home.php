<?php
require 'header.php';
?>
<div class="container-fluid">
	<div class="container-table100">
		<div class="wrap-table100" style="margin: 80px auto;width: auto;">
			<div class="form-style-8">
				<h2>Passez votre commande</h2>
			  <form method="post" action="php/insertRequest.php" onsubmit="return confirmation();">
			  	<?php
			  		getSelectRessourcesRequest();
			  	?>
			    <input type="number" name="quantity" min="0" placeholder="Quantité (en kg)" required />
			    <input type="hidden" name="user" value="<?php echo $_SESSION['user']['idUser']; ?>" />
			    <input type="submit" value="Valider" />
			    <?php
			    if (isset($_GET['transaction']) && $_GET['transaction'] == "validation") {
			    	echo "<p style='color:#03660B;'>Transaction pris en charge.</p>";
			    }elseif (isset($_GET['erreur']) && $_GET['erreur'] == "validation") {
			    	echo "<p style='color:#9C0D0F;'>Erreur lors de la validation.</p>";
			    }
			    ?>
			  </form>
			</div>
		</div>
	</div>
</div>
<?php
require 'footer.php';
?>