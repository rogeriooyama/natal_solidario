<div>
    <?= $this->Html->image('https://docs.google.com/uc?id=1AR2wgHBjfmTPCe2apsKc6RaNr4-H8FbO', ['alt' => 'Imagem: Natal de Luz', 'title' => 'Fundação Inova Prudente', 'style' => 'height: 80px', 'fullBase' => true]) ?>
    <br/>
    <p>Olá, <?= $padrinho ?></p>
    <p>Nós, do Lar Santa Filomena, ficamos muito felizes em saber que se interessou em presentear uma de nossas crianças.</p>
    <p>Abaixo estão as informações sobre a criança escolhida</p>
    <p>
        Nome: <b>"<?= $nome . ' ' . $sobrenome ?>"</b><br/>
        Sexo: <b>"<?= $sexo ?>"</b><br/>
        Idade: <b>"<?= $idade ?>"</b><br/>
        Roupa: <b>"<?= $roupa ?>"</b><br/>
        Calça: <b>"<?= $calca ?>"</b><br/>
        Calçado: <b>"<?= $calcado ?>"</b><br/>
    </p> 
</div>