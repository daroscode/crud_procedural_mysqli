<?php include 'header.php'; ?>
<?php if($_GET['t'] === 'aluno'): ?>
    <div class="row">
        <div class="col col-lg-12">
            <h2>FORMULÁRIO DE ALUNO DELETAR</h2>
        </div>
        <div class="col col-lg-12">
            <h3>TEM CERTEZA?</h3>
            <form method="POST">
                <?php 
                    while($rows_set = mysqli_fetch_array($result_student)){
                ?>
                <div class="form-group">
                    <label for="">Nome:</label>
                    <input type="text" class="form-control" name="student" aria-describedby="emailHelp" value="<?php echo $rows_set['nome']; ?>" readonly="readonly" />
                </div>
                <?php 
                    }
                ?>
                <button type="submit" name="btnDeletarAluno" class="btn btn-danger">Deletar registro</button>
                <a href="alunos.php" class="btn btn-default">Voltar</a>
            </form>
        </div>
    </div>
<?php else: ?>
    <div class="row">
        <div class="col col-lg-12">
            <h2>FORMULÁRIO DE CURSO DELETAR</h2>
        </div>
        <div class="col col-lg-12">
            <h3>TEM CERTEZA?</h3>
            <form method="POST">
                <?php 
                    while($rows_set = mysqli_fetch_array($result_course)){
                ?>
                <div class="form-group">
                    <label for="">Título:</label>
                    <input type="text" class="form-control" name="title" aria-describedby="emailHelp" value="<?php echo $rows_set['nome']; ?>" readonly="readonly" />
                </div>
                <?php 
                    }
                ?>
                <button type="submit" name="btnDeletarCurso" class="btn btn-danger">Deletar registro</button>
                <a href="cursos.php" class="btn btn-default">Voltar</a>
            </form>
        </div>
    </div>
<?php endif; ?>
<?php include 'footer.php'; ?>