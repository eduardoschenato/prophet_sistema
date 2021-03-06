		<form action="<?php echo BASE_URL; ?>/tabelaPreco/atualizarFim/<?php echo $dtoTabelaPreco->getCdnTabelaPreco(); ?>" method="post">
			<div class="col-md-12 form-group">
				<label for="nomTabelaPreco" class="control-label">Nome da tabela de preço</label>
				<input type="text" name="nomTabelaPreco" class="form-control" value="<?php echo $dtoTabelaPreco->getNomTabelaPreco(); ?>">
			</div>

			<?php
				foreach($arrProcedimentosFim as $nomAreaAtuacao => $arrProcedimentos){
			?>
			<div class="col-md-12 page-header">
				<h2><?php echo $nomAreaAtuacao; ?></h2>
			</div>
			<?php
					foreach($arrProcedimentos as $arrProcedimento){
			?>
			<div class="col-md-4 form-group">
				<label for="<?php echo $arrProcedimento['cdnProcedimento']; ?>" class="control-label"><?php echo $arrProcedimento['nomProcedimento']; ?></label>
				<input required type="text" class="form-control mask-money" name="<?php echo $arrProcedimento['cdnProcedimento']; ?>" value="R$<?php echo $arrProcedimento['valPreco']; ?>">
			</div>
			<?php
					}
				}

			?>
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<button type="submit" class="btn btn-lg btn-primary btn-block">
						Editar
					</button>
				</div>
			</div>
		</form>