<?php
require_once 'conexoes.php';
require_once 'utils.php';


$stmt = $conn->prepare('SELECT id_aluno, a.nome, nascimento, salario, c.nome AS nome_curso, foto
        FROM aluno a
        JOIN curso c ON a.id_curso=c.id_curso
        WHERE id_aluno = :id_aluno ');

list($idAluno, $nome, $nascimento, $salario, $curso, $foto) = $aluno;

$sexos = ['m' => 'Masculino', 'f' => 'Feminino', 'n' => 'Não informado'];
$sexo = $sexos[$aluno['sexo']];
$ativo = $aluno['ativo'] ? 'Sim' : 'Não';


<li><b>Id: </b><?= $idAluno ?></li>
<li><b>Nome: </b><?= $nome ?></li>
<li><b>Nascimento: </b><?= $nascimento ?></li>
<li><b>Salário: </b><?= $salario ?></li>
<li><b>Sexo: </b><?= $sexo ?></li>
<li><b>Ativo: </b><?= $ativo ?></li>
<li><b>Curso: </b><?= $curso ?></li>
