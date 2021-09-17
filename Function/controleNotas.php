<?php

    function controleNotas($alunos) {

?>

    <p style="font-size:20px;font-weight:bolder;margin-top:30px;margin-bottom:0;"><?= $alunos['nome'] ?></p>

            <table style="border-collapse: collapse;border: 1px solid #2F4F4F; display:inline-block;margin:0">
                <tr style="border: 1px solid #2F4F4F; background:#2F4F4F;font-size:13px;color:white;">
                    <td style="border: 1px solid #2F4F4F;padding:3px 10px 3px 10px;">Nota1</td>
                    <td style="border: 1px solid #2F4F4F;padding:3px 10px 3px 10px;">Nota2</td>
                    <td style="border: 1px solid #2F4F4F;padding:3px 10px 3px 10px;">Nota3</td>
                    <td style="border: 1px solid #2F4F4F;padding:3px 10px 3px 10px;">Nota4</td>
                    <td style="border: 1px solid #2F4F4F;padding:3px 10px 3px 10px;">Média</td>
                </tr>
                <tr>
                    <td style="border: 1px solid #2F4F4F"><?= $alunos['nota1'] ?></td>
                    <td style="border: 1px solid #2F4F4F"><?= $alunos['nota2'] ?></td>
                    <td style="border: 1px solid #2F4F4F"><?= $alunos['nota3'] ?></td>
                    <td style="border: 1px solid #2F4F4F"><?= $alunos['nota4'] ?></td>
                    <td style="border: 1px solid #2F4F4F;font-weight:bold"><?php
                        $mediaAluno = ($alunos['nota1']+$alunos['nota2']+$alunos['nota3']+$alunos['nota4'])/4;
                        echo $mediaAluno;
                    ?></td>
                </tr>
            </table>
                    
<?php   
} 
?>