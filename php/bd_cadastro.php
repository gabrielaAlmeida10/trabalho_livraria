<section class="page-section">
   <div class="container">
     <div class="product-item">
       <div class="product-item-title d-flex">
         <div class="bg-faded p-5 d-flex mr-auto rounded">
				<?php
					$cod = $_POST["cod"];
					$nome = $_POST["nome"];
					$autor = $_POST["autor"];
					$qtd = $_POST["qtd"];
				
					if (!$cod || !$nome || !$autor || !$qtd)
					 	 {
							 die( 'Você não preencheu todos os dados<br />');
					 	 }
					 	 @ $db = mysqli_connect('localhost:3307','root','','db_aluno'); 
					 	 if (!$db)
					 	 {
							 die('não encontrei o servidor');
					 	 }

					  	$query = "insert into livros values ('$cod','$nome','$	autor', $qtd)";
					 	 $resulty = mysqli_query($db,$query);
					  	if ($resulty){
							   echo  mysqli_affected_rows($db).'   Livro Cadastrado.</br>'; 
					 	 }else{
								echo mysqli_error($db).'Não foi possível cadastrar o livro.<br>';
						mysqli_close($db);
					  	}
					?>
				</div>
			</div>
		</div>
	</div>
</section>
