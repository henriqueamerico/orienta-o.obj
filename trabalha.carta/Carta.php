<?php

// Classe Carta
class Carta
{
    private $numero;
    private $nome;
    private $dica;

    //GETs e SETs
    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero): self
    {
        $this->numero = $numero;
        return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): self
    {
        $this->nome = $nome;
        return $this;
    }

    public function getDica()
    {
        return $this->dica;
    }

    public function setDica($dica): self
    {
        $this->dica = $dica;
        return $this;
    }
}
//Programa principal

do {
    echo "\n-----------MENU-----------\n";
    echo "1- Jogar\n";
    echo "2- Tutorial\n";
    echo "0- Sair\n";

    $opcao = readline("Informe a opção: ");
    echo "\n";

    if ($opcao == 1) {
        $baralho = array();

        for ($i = 1; $i <= 10; $i++) {
            $carta = new Carta();
            $carta->setNumero($i);


            if ($i == 1 or $i == 10) {
                $carta->setNome("Copas");
                $carta->setDica("O número da carta está em um dos extremos."); //1 ou 10
            } elseif ($i == 2 or $i == 9) {
                $carta->setNome("Ouros");
                $carta->setDica("O número da carta está próximo dos extremos."); //2 ou 9
            } elseif ($i == 3 or $i == 8) {
                $carta->setNome("Paus");
                $carta->setDica("O número da carta é intermediário  ."); //3 ou 8
            } elseif ($i == 4 or $i == 7) {
                $carta->setNome("Espadas");
                $carta->setDica("O número da carta não está perto do início, nem perto do fim."); //4 ou 7
            } else {
                $carta->setNome("Copas");
                $carta->setDica("O número da carta está no centro do baralho."); //5 ou 6
            }

            $baralho[] = $carta;
        }

        $cartaSorteada = $baralho[array_rand($baralho)];

        echo "Cartas disponíveis:\n";
        foreach ($baralho as $c) {
            echo "Número: " . $c->getNumero() . " | Naipe: " . $c->getNome() . "\n";
        }

        // Jogar
        do {
            $escolha = readline("Qual o número da carta sorteada? (0 para sair, D para pedir dica): ");

            if ($escolha == $cartaSorteada->getNumero()) {
                print "Parabéns!! Você acertou a carta sorteada!!";
                break;
            } elseif ($escolha == "D") {
                echo " Dica: " . $cartaSorteada->getDica() . "\n";
            } elseif ($escolha == 0) {
                echo "Nossa... Você dessistiu muito rápido.\n";
                break;
            } else {
                echo "Vc errou! Tente novamente.\n";
            }
        } while ($opcao != 0);
    } elseif ($opcao == 2) {
        echo "======== TUTORIAL ========\n";
        echo "O objetivo do jogo é adivinhar qual carta foi sorteada.\n";
        echo "1 - O programa mostra uma lista de cartas disponíveis.\n";
        echo "2 - Uma carta é escolhida secretamente pelo computador.\n";
        echo "3 - Você deve digitar o NÚMERO da carta que acha ser a correta.\n";
        echo "4 - Se acertar, você vence o jogo!\n";
        echo "5 - Se errar, voc pode tentar de novo até conseguir.\n";
        echo "6 - Se vc quiser sair,  escolha a opção 0 no menu.\n";
        echo "==========================\n";
    } elseif ($opcao == 0) {
        echo "Nossa... Você dessistiu muito rápido.\n";
        break;
    }
} while ($opcao != 0);
