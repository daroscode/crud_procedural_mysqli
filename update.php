<?php include 'header.php'; ?>
<?php if($_GET['t'] === 'aluno'): ?>
    <div class="row">
        <div class="col col-lg-12">
            <h2>FORMULÁRIO DE ALUNO ATUALIZAR</h2>
        </div>
        <div class="col col-lg-12">
            <form method="POST">
                <?php 
                    while($rows_set = mysqli_fetch_array($result_student)){
                ?>
                <div class="form-group">
                    <label for="">Nome:</label>
                    <input type="text" class="form-control" name="student" aria-describedby="emailHelp" value="<?php echo $rows_set['nome']; ?>" />
                </div>
                <div class="form-group">
                    <label for="">Email:</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $rows_set['email']; ?>" />
                </div>
                <div class="form-group">
                    <label for="">Cidade:</label>
                    <select name="town" class="form-control">
                    <?php 
                        while($rows = mysqli_fetch_array($result_cities)){
                    ?>
                        <option value="<?php echo $rows['pk_cidade']; ?>" <?php echo ($rows_set['fk_cidade'] == $rows['pk_cidade']) ? 'selected="selected"' : '' ?>><?php echo $rows['nome']; ?></option>
                        <?php 
                        }
                    ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Curso:</label>
                    <select name="course" class="form-control">
                    <?php 
                        while($rows = mysqli_fetch_array($result_courses)){
                    ?>
                        <option value="<?php echo $rows['pk_curso']; ?>" <?php echo ($rows_set['fk_curso'] == $rows['pk_curso']) ? 'selected="selected"' : '' ?>><?php echo $rows['nome']; ?></option>
                        <?php 
                        }
                    ?>
                    </select>
                </div>
                <?php 
                    }
                ?>
                <button type="submit" name="btnAtualizarAluno" class="btn btn-primary">Atualizar registro</button>
                <a href="alunos.php" class="btn btn-default">Voltar</a>
            </form>
        </div>
    </div>
<?php else: ?>
    <div class="row">
        <div class="col col-lg-12">
            <h2>FORMULÁRIO DE CURSO ATUALIZAR</h2>
        </div>
        <div class="col col-lg-12">
            <form method="POST">
                <?php 
                    while($rows_set = mysqli_fetch_array($result_course)){
                ?>
                <div class="form-group">
                    <label for="">Título:</label>
                    <input type="text" class="form-control" name="title" aria-describedby="emailHelp" value="<?php echo $rows_set['nome']; ?>" />
                </div>
                <?php 
                    }
                ?>
                <button type="submit" name="btnAtualizarCurso" class="btn btn-primary">Atualizar registro</button>
                <a href="cursos.php" class="btn btn-default">Voltar</a>
            </form>
        </div>
    </div>
<?php endif; ?>
<?php include 'footer.php'; ?>