<!DOCTYPE html>
<html>
	<head>
		<title>Matriculas e Notas</title>
		<meta charset="utf-8">
        <style type="text/css">
        
        body {
            font-family: arial;
            background: #A9A9A9; 
            text-align: center; }

        h2 {
            color: white;
            display: inline-block;
            background: #2F4F4F;
            width: 60%;
            padding: 10px;
            margin-bottom: .5px; }
        
        h3 {
            color: white;
            display: inline-block;
            background: #2F4F4F;
            width: 45%; 
            padding: 8px; }
        </style>
	</head>    

    <body
        <?php

        require_once('Model/Aluno.php');
        require_once('Model/Turma.php');
        include('Function/controleNotas.php');

        //Alunos a se matricularem

        $aluno1 = new Aluno("Samuel Fenili Longo", 23, 8.5, 9.2, 4.3, 9.5);
        $aluno2 = new Aluno("Aline Beling Ghizoni", 56, 8.5, 9.5, 10.0, 9.5);
        $aluno3 = new Aluno("Catarina Ghizoni Longo", 29, 5.5, 9.2, 10.0, 9.5);
        $aluno4 = new Aluno("Stefania Fenili Longo", 33, 8.5, 9.5, 2.0, 9.5);
        $aluno5 = new Aluno("Andreia Beling Ghizoni", 73, 8.5, 3.5, 10.0, 9.5);
        $aluno6 = new Aluno("Francielle Fenili Longo", 19, 4.3, 5.8, 7.0, 9.0);

        //Abertura de turma

        $turma = new Turma("A-150");
        $dadosTurma = $turma->exibirTurma();

        //Matriculas por ordem de chegada

        $dadosAluno1 = $aluno1->exibirAluno();
        $matriculaTurma = $turma->matriculaAluno($dadosAluno1);

        $dadosAluno2 = $aluno2->exibirAluno();
        $matriculaTurma = $turma->matriculaAluno($dadosAluno2);

        $dadosAluno3 = $aluno3->exibirAluno();
        $matriculaTurma = $turma->matriculaAluno($dadosAluno3);

        $dadosAluno4 = $aluno4->exibirAluno();
        $matriculaTurma = $turma->matriculaAluno($dadosAluno4);

        $dadosAluno5 = $aluno5->exibirAluno();
        $matriculaTurma = $turma->matriculaAluno($dadosAluno5);

        $dadosAluno6 = $aluno6->exibirAluno();
        $matriculaTurma = $turma->matriculaAluno($dadosAluno6);

        //media dos alunos e da turma

        $mediaTurma = $turma->mediaTurma($aluno1->getMedia(),$aluno2->getMedia(),$aluno3->getMedia(),$aluno4->getMedia(),$aluno5->getMedia());

        ?>

        <h2>CONTROLE DE NOTAS DE TURMA</h2>
        <h3>Notas dos Alunos da Turma <?= $dadosTurma ?></h3>
        <?php echo "<p style='font-size:18px;margin:0;font-weight:bold;'>Média da Turma: " . $mediaTurma . "</p>" ?>

        <?php

        //Tabela com Notas da Turma

        $i=1;
            
        if($i<6) {
            controleNotas($dadosAluno1);
            $i++;
            } else {
            return false; }

        if($i<6) {
            controleNotas($dadosAluno2);
            $i++;
            } else {
            return false; }

        if($i<6) {
            controleNotas($dadosAluno3);
            $i++;
            } else {
            return false; }

        if($i<6) {
            controleNotas($dadosAluno4);
            $i++;
            } else {
            return false; }

        if($i<6) {
            controleNotas($dadosAluno5);
            $i++;
            } else {
            return false; }

        if($i<6) {
            controleNotas($dadosAluno6);
            $i++;
            } else {
            return false; }
        
        ?>
        
    </body>
</html>