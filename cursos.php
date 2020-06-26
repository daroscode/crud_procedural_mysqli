<?php include 'header.php'; ?>
<div class="col col-lg-12">
    <h2>Cadastro de cursos</h2>
    <form method="POST">
        <input type="text" name="termo" class="form-control input-sm" style="float: left; width:70%;" />
        <input type="submit" name="btnPesquisa" class="btn btn-primary" value="Pesquisar" style="margin-left: 1%;" />
    </form>
    <hr />
    <a href="new.php?t=curso" class="btn btn-secondary" style="margin-bottom: 2%;">Adicionar curso</a>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Opções</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                while($rows = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td class="md_row"><?php echo $rows['nome']; ?></td>
                <td class="sm_row">
                    <a href="update.php?t=curso&curso=<?php echo $rows['pk_curso']; ?>" class="btn btn-primary"><i class="fa fa-file" aria-hidden="true"></i></a>
                    <a href="delete.php?t=curso&curso=<?php echo $rows['pk_curso']; ?>" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                </td>
            </tr>
            <?php 
                }
            ?>
        </tbody>
    </table>
</div>
<?php include 'footer.php'; ?>