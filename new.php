<?php include 'header.php'; ?>
<?php if($_GET['t'] === 'aluno'): ?>
    <div class="row">
        <div class="col col-lg-12">
            <h2>FORMULÁRIO DE ALUNO NOVO</h2>
        </div>
        <div class="col col-lg-12">
            <form method="POST">
                <div class="form-group">
                    <label for="">Nome:</label>
                    <input type="text" class="form-control" name="student" aria-describedby="emailHelp" placeholder="Insira o nome do aluno">
                </div>
                <div class="form-group">
                    <label for="">Email:</label>
                    <input type="email" class="form-control" name="email" placeholder="Insira o email do aluno">
                </div>
                <div class="form-group">
                    <label for="">Cidade:</label>
                    <select name="town" class="form-control">
                    <?php 
                        while($rows = mysqli_fetch_array($result_cities)){
                    ?>
                        <option value="<?php echo $rows['pk_cidade']; ?>"><?php echo $rows['nome']; ?></option>
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
                        <option value="<?php echo $rows['pk_curso']; ?>"><?php echo $rows['nome']; ?></option>
                        <?php 
                        }
                    ?>
                    </select>
                </div>
                <button type="submit" name="btnSalvarAluno" class="btn btn-primary">Gravar registro</button>
                <a href="alunos.php" class="btn btn-default">Voltar</a>
            </form>
        </div>
    </div>
<?php else: ?>
    <div class="row">
        <div class="col col-lg-12">
            <h2>FORMULÁRIO DE CURSO NOVO</h2>
        </div>
        <div class="col col-lg-12">
            <form method="POST">
                <div class="form-group">
                    <label for="">Título:</label>
                    <input type="text" class="form-control" name="title" aria-describedby="emailHelp" placeholder="Insira o nome do curso">
                </div>
                <button type="submit" name="btnSalvarCurso" class="btn btn-primary">Gravar registro</button>
                <a href="cursos.php" class="btn btn-default">Voltar</a>
            </form>
        </div>
    </div>
<?php endif; ?>
<?php include 'footer.php'; ?>