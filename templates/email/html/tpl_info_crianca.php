<div>
    <!-- <?= $this->Html->image('Logo_Inova_Prudente.png', ['alt' => 'Imagem: Lar Santa Filomena', 'style' => 'height: 80px', 'fullBase' => true]) ?> -->
    <?= $this->Html->image('https://docs.google.com/uc?id=1kQB8oh9JybHAB-YyEWhwMap1Pk96H5xl', ['alt' => 'Imagem: Fundação Inova Prudente', 'title' => 'Fundação Inova Prudente', 'style' => 'height: 80px', 'fullBase' => true]) ?>
    <br/>
    <p>Olá, <?= $padrinho ?></p>
    <p>Informações sobre a criança escolhida</p>
    <p>
        Nome: <b>"<?= $nome . ' ' . $sobrenome ?>"</b><br/>
        Sexo: <b>"<?= $sexo ?>"</b><br/>
        Idade: <b>"<?= $idade ?>"</b><br/>
        Roupa: <b>"<?= $roupa ?>"</b><br/>
        Calça: <b>"<?= $calca ?>"</b><br/>
        Calçado: <b>"<?= $calcado ?>"</b><br/>
    </p> 
</div>