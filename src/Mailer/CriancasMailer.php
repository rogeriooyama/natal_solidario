<?php
declare(strict_types=1);

namespace App\Mailer;

use Cake\Mailer\Mailer;

/**
 * Users mailer.
 */
class CriancasMailer extends Mailer
{
    /**
     * Mailer's name.
     *
     * @var string
     */
    public static $name = 'Criancas';

    public function infoCrianca($crianca)
    {
        $this
            ->setTo($crianca->email_padrinho)
            ->setProfile('email_profile')
            ->setEmailFormat('html')
            ->setSubject(sprintf('Natal de Luz - Lar Santa Filomena'))
            ->setViewVars([
                'nome' => $crianca->nome, 
                'sobrenome' => $crianca->sobrenome, 
                'sexo' => $crianca->sexo, 
                'idade' => $crianca->idade, 
                'roupa' => $crianca->tamanho_roupa, 
                'calca' => $crianca->tamanho_calca, 
                'calcado' => $crianca->tamanho_calcado, 
                'padrinho' => $crianca->nome_padrinho
                ])
            ->viewBuilder()
                ->setLayout('default')
                ->setTemplate('tpl_info_crianca');
    }
    
}