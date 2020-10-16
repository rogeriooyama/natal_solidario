<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <div class="users index content">
<h3><b>Manual do sistema Natal de Luz</b></h3>
O software é composto por dois módulos: <br>
    &emsp;- Exibição da árvore com as crianças.<br>
	&emsp;- Módulo de gerenciamento. <br><br><br>
	
<h4><b>Módulo de exibição da árvore</b></h1>
<h5><b>Funcionamento:</b></h5>
    <p align="justify">&emsp;- A árvore sempre irá exibir 20 bolas com o nome da criança e idade. </p>
    <p align="justify">&emsp;- Se nenhuma criança está cadastrada, serão exibidas bolas "falsas" para sempre manter a árvore completa. </p>
    <p align="justify">&emsp;- Toda vez que a árvore é carregada, a sua disposição é alterada de forma aleatória. </p>
    <p align="justify">&emsp;- Conforme a maioria das crianças são presenteadas, o sistema irá priorizar as não presenteadas. </p>
	<p align="justify">&emsp;- Sempre será exibido ao menos 5 crianças já presenteadas, caso não exista nenhuma ou menos que 5, a árvore será completada com bolas "falsas". </p><br><br>

<h4><b>Módulo de gerenciamento</b></h4>
    <p align="justify">Esse módulo é responsável pelo cadastro dos administradores do sistema e das crianças que serão presenteadas. </p><br>
	<h5><b>Administradores:</b></h5>
        <p align="justify">&emsp;- Funcionalidades implementadas: cadastro de novo administrador, visualização, edição e exclusão. </p><br>
		
	<h5><b>Crianças:</b></h5>
        <p align="justify">&emsp;- Funcionalidades implementadas: cadastro de nova criança, visualização, edição e exclusão. </p>
		<p align="justify">&emsp;- Os seguintes campos são obrigatórios para o cadastro da criança: Nome, Sobrenome, Sexo, Idade, Tamanho da roupa, Tamanho do calçado e Cartinha. </p>
		<p align="justify">&emsp;- Na funcionalidade "Editar criança", além das informações cadastradas relativas à criança, serão exibidos campos relativos ao padrinho da mesma que somente serão preenchidos
		automaticamente no momento que a criança for escolhida para ser presenteada através do módulo de exibição da árvore.</p> <br>
    </div>
</div>
