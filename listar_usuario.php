<?php
include_once "conexao.php";


///Contando total de setores
$result_setor = "select setor from tb_setor order by id";
$resultado_setor = mysqli_query($conn, $result_setor);
$total =  mysqli_num_rows ( $resultado_setor);

//varrendo toda a grid com a finalizade de ordenar cada funcionario por setor
for( $id=0;$id < $total +1;$id++){
	
//Consultando o banco de dados para buscar o setor
$result_setor = "select setor,'Ramal' from tb_setor where id = $id";
$resultado_setor = mysqli_query($conn, $result_setor);

//Consultando o banco o usuario
$result_usuario = "select fr.nome,fr.ramal from tb_funcionario_ramal fr inner join tb_setor se on fr.setor = se.id where se.id = $id  order by nome ";
$resultado_usuario = mysqli_query($conn, $result_usuario);

?>

<table class="table table-sm table-hover table-bordered table-striped">
    <thead>
	
    <?php

    // verificar se encontrou resultado na tabela
	$row_cnt = mysqli_num_rows($resultado_setor);
    if (($resultado_setor) and ( $row_cnt !=0)) {

        while ($row_setor = mysqli_fetch_assoc($resultado_setor)) {
            ?>	
            <tr>
			
                <th><?php echo $row_setor ['setor'] ?></th>
				<th><?php echo $row_setor ['Ramal'] ?></th>
                
            </tr>
            <?php
        }
    }
	
    ?>
    </thead>
    <body>

    <?php

    // verificar se encontrou resultado na tabela
	
	$row_cnt1 = mysqli_num_rows($resultado_usuario);
   
    if (($resultado_usuario) and ($row_cnt1 !=0)) {

        while ($row_usuario = mysqli_fetch_assoc($resultado_usuario)) {
            ?>
            <tr>
                <th><?php echo $row_usuario ['nome'] ?></th>
                <th><?php echo $row_usuario ['ramal'] ?></th>
            </tr>
            <?php
        }
    }
    ?>
    </body>
</table>

<?php
}
?>
