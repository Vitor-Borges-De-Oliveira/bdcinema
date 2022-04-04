<section class="mt-4">
			<div class="titulo h5 mb-0"><h2>Formulario de cadastro</h2></div>
				<div class="base-form">
					<div class="caixa-form">
						<form action="<?php echo URL_BASE."cinema/salvar" ?>" method="POST">				
							<div class="rows">
								<div class="col-12 d-flex text-justify-center">
									<span href="" class="msg msg-verde mx-3"><i class="fas fa-check"></i> Cadastro realizado com sucesso <a href="javascrip:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></span>
									<span href="" class="msg msg-vermelho mx-3"><i class="fas fa-exclamation-triangle"></i> O campo é obrigatório <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></span>
				
								</div>				
							</div>				
							<div class="rows msg-form">	
							  <div class="col-3 position-relative">									
									<img src="img/img-usuario.png" class="img-fluido foto">
									<div  class="foto-file">
										<input type="file" id="editarFoto"><label for="editarFoto"><span>Editar foto</span></label>
									</div>
									<small class="d-block text-center pt-1 pb-2"><b>Filme</b></small>
								</div>
								
								<div class="col-9">
								<div class="rows">
									<div class="col-8">
										<label>Filme</label>
										<input name="filme" value="<?php echo isset($cinema) ? $cinema->filme : "" ?>" type="text" placeholder="Insira o filme" class="form-campo">
									</div>
								<div class="col-4">
									<label>Preço</label>
									<input name="preco" value="<?php echo isset($cinema) ? $cinema->preco : "" ?>" type="text" placeholder="Insira o preço" class="form-campo">
								</div>									
									<div class="col-3">
										<label>Tempo</label>
										<input name="tempo" value="<?php echo isset($cinema) ? $cinema->tempo : "" ?>" type="text" placeholder="Insira o tempo" class="form-campo">
									</div>							
													
								<div class="col-3">
									<label>Sessão</label>
									<input name="sessao" value="<?php echo isset($cinema) ? $cinema->sessao : "" ?>" type="text" placeholder="Insira a sessão" class="form-campo">
								</div>
									
									<div class="col-6">
										<label>Artistas</label>
										<input name="artistas" value="<?php echo isset($cinema) ? $cinema->artistas : "" ?>" type="text" placeholder="Insira os artistas" class="form-campo">
									</div>
									<div class="col-3">
										<label>Diretor</label>
										<input name="diretor" value="<?php echo isset($cinema) ? $cinema->diretor : "" ?>" type="text" placeholder="Insira o diretor" class="form-campo">
									</div>
									
									<div class="col-9">				
										<label>Sinopse</label>
										<input name="sinopse" value="<?php echo isset($cinema) ? $cinema->sinopse : "" ?>" type="text" placeholder="Insira a sinopse" class="form-campo">
									</div>
									<div class="col-6">
									<label>Dia</label>
									<input name="dia" value="<?php echo isset($cinema) ? $cinema->dia : "" ?>" type="date" placeholder="Insira o dia" class="form-campo">	
								</div>

								<div class="col-4 m-auto">
									<input type="text" name="idfilme" value="<?php echo isset($cinema) ? $cinema->idfilme : NULL ?>" />
									<input type="submit" value="Cadastrar" class="btn btn-verde width-100">
								</div>
								
								</div>
								</div>
								
						</form>
					</div>
				</div>
			</div>
</section>