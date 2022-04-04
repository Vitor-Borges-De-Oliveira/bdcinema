
<section class="caixa mt-4">
				<div class="titulo h5 mb-0"> <h2>Lista de Filmes</h2></div>
				<div class="base-lista">
					<div>
						<div class="text-end d-flex">
							<a href="<?php echo URL_BASE."cinema/create" ?>" class="btn btn-verde d-inline-block mb-2 mx-1"><i class="fas fa fa-plus-circle" aria-hidden="true"></i> Cadastrar Filme</a>
							<a href="" class="btn btn-azul d-inline-block mb-2 filtro"><i class="fas fa fa-filter" aria-hidden="true"></i> Filtrar</a>
						</div>
					</div>
						
				<div class="tabela-responsiva tabela">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" id="dataTable">
						<thead> 
						  <tr>
						    <th>ID</th>
							<th>Filme</th>
							<th>Preço</th>
							<th>Tempo</th>
							<th>Sessão</th>
							<th>Artistas</th>
							<th>Diretor</th>
							<th>Sinopse</th>
							<th>Dia</th>
							<th>Ação</th>
						  </tr>
						</thead> 
						<tbody>
							<?php  foreach($lista as $cinema) { ?>
							<tr>
								<td><?php echo $cinema->idfilme; ?></td>
								<td><?php echo $cinema->filme; ?></td>
								<td><?php echo $cinema->preco; ?></td>
								<td><?php echo $cinema->tempo; ?></td>
								<td><?php echo $cinema->sessao; ?></td>
								<td><?php echo $cinema->artistas; ?></td>
								<td><?php echo $cinema->diretor; ?></td>
								<td><?php echo $cinema->sinopse; ?></td>
								<td><?php echo $cinema->dia; ?></td>
								<td align="center">
									<a href="<?php echo URL_BASE ."cinema/edit/". $cinema->idfilme ?>" class="btn btn-editar" title="Editar"></a>
									<a href="formulario.html" class="btn btn-exlcuir" title="excluir"></a>
								</td>
							</tr>
							<?php } ?>	
												
						</tbody> 
					</table>
					</div>
								
					</div>
				</div>
			</section>