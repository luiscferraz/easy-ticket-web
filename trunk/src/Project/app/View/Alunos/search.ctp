<h1>Consultar Aluno</h1> 
<?php  
    echo $form->create("Aluno",array('action' => 'search')); 
    echo $form->input("q", array('label' => 'Search for')); 
    echo $form->end("Search"); 
?> 
<p><?php echo $html->link("Add Aluno", "/alunos/add"); ?> 
<table> 
    <tr> 
        <th>CPF</th> 
        <th>Nome</th> 
        <th>Telefone</th> 
        <th>Data de nascimento</th> 
    </tr> 



<?php foreach ($results as $objAluno): ?> 
    <tr> 
        <td><?php echo $objAluno['Aluno']['id']; ?></td> 
        <td> 
            <?php echo $html->link($objAluno['Aluno']['cpf'],'/alunos/view/'.$objAluno['Aluno']['id']);?> 
                </td> 
                <td> 
            <?php echo $html->link( 
                'Delete',  
                "/alunos/delete/{$objAluno['Aluno']['id']}",  
                null,  
                'Are you sure?' 
            )?> 
            <?php echo $html->link('Edit', '/alunos/edit/'.$objAluno['Aluno']['id']);?> 
        </td> 
        <td><?php echo $objAluno['Aluno']['created']; ?></td> 
    </tr> 
<?php endforeach; ?> 
</table> 