<?php
include_once './animal.php';
include_once './Gato.php';
include_once './Cachorro.php';
include_once './Adotante.php';




// animal
echo "<h3>Animal</h3>";
/*$animal  = new Animal();
$animal->nome = 'Harry';
$animal->especie = 'gato';
$animal->idade = 4;
$animal->sexo = 'macho';
$animal->peso = 7;
$animal->cor = 'frajola';
$animal->status = 'adotado';
$animal->chipado = 'nao possui chip de identificação';

echo  $animal->exibirFicha();
echo $animal->verificarPeso();
echo $animal->verificarStatus();
echo $animal->verificarIdade();
echo $animal->marcarComoChipado();
echo $animal->desmarcarChipado();
echo $animal->resumoAnimal();
echo $animal->verificarSexo();*/

//GATO
echo "<h3>Gato</h3>";
$Gato = new Gato();
$Gato->nome = 'Garfild';
$Gato->pelagem = 'laranja';
$Gato->castrado = 'sim';
$Gato->independente = 'sim';
$Gato->vacinado = 'sim';
$Gato->curioso = 'muito';
$Gato->adoraColo = 'não';
$Gato->usaCaixaDeAreia = 'sim';

echo $Gato->exibirFicha();
echo $Gato->verificarcadastro();
echo $Gato->verificarindependente();
echo $Gato->verificarvacina();
echo $Gato-> marcarcaracteristicas();

//CACHORRO
echo "<h3>Cachorro</h3>";
$Cachorro = new Cachorro();
$Cachorro->nome = 'Fofinho';
$Cachorro->especie = 'lhasa';
$Cachorro->porte = 'médio';
$Cachorro->nivelEnergia = '6';
$Cachorro->vacinado = 'sim';
$Cachorro->vermifugado = 'sim';
$Cachorro->sociavel = 'não';
$Cachorro->adestrado = 'sim';
$Cachorro->sexo = 'macho';


echo $Cachorro->exibirFicha();
echo $Cachorro->atualizarPorte();
echo $Cachorro->verificarNivelDeEnergia();
echo $Cachorro->verificarSociavel();
echo $Cachorro-> verificaradestrado();
echo $Cachorro-> verificarvacina();
echo $Cachorro-> marcarComoVermifugado();
echo $Cachorro-> desmarcarVermifugado();
echo $Cachorro-> resumoAnimal();
echo $Cachorro-> verificarSexo();


//ADOTANTE
echo "<h3>Adotante</h3>";
$Adotante = new Adotante();
$Adotante->nome = 'Bianca';
$Adotante->Idade = '18';
$Adotante->telefone = '5551992747603';
$Adotante->email = 'Bibilinda@gmail.com';
$Adotante->endereco = 'shopping total';
$Adotante->temOutrosAnimais= 'sim';
$Adotante->ExperienciaComPets = 'sim';
$Adotante->AnimalAdotado = 'Fofinho';


echo $Adotante->exibirFicha();
echo $Adotante->verificarcadastro();
echo $Adotante->verificarAnimais();
echo $Adotante->verificarExperiencia();
echo $Adotante->verificarAnimalAdotado();
?>