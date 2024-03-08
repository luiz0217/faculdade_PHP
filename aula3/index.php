
1)
<?php
// Crie uma classe chamada 'Livro' com propriedades privadas 'titulo' e 'autor'.
// Implemente um método construtor para inicializar essas propriedades.
// Em seguida, crie um objeto da classe 'Livro' e exiba suas propriedades.

class Livro
{
    private $titulo;   
    private $autor;   

    public function __construct($titulo,$autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }
    
    public function getAutor(){
        return $this->autor;
    }

    public function setAutor($autor){
        $this->autor = $autor;
    }
}


$lv = new Livro('titulo','author');

echo $lv->getAutor() . "  " . $lv->getTitulo();

?>
<br><br>
2)
<?php
// Modifique a classe 'Livro' do exercício anterior.
// Adicione métodos públicos 'setTitulo($novoTitulo)' e 'setAutor($novoAutor)' que permitem modificar as propriedades.
// Use esses métodos para alterar o título e o autor do objeto criado.

$lv->setAutor("author2");
$lv->setTitulo("titulo2");

echo $lv->getAutor() . "  " . $lv->getTitulo();


?>
<br><br>
3)
<?php
// Crie uma classe base chamada 'Animal' com propriedades privadas 'nome' e 'idade'.
// Implemente um método construtor e métodos públicos para acessar e modificar essas propriedades.
// Crie uma classe derivada chamada 'Cachorro' que herda de 'Animal' e sobrescreva o método de acesso à propriedade 'idade'.
// Crie um objeto da classe 'Cachorro' e exiba suas propriedades.

class Animal
{
    protected $nome;
    protected $idade;

    public function __construct($nome,$idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function getNome(){
        return $this->nome;
    }
    
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function setIdade($idade){
        $this->idade = $idade;
    }

}

class Cachorro extends Animal
{
    public function setIdade($idade){
        $this->idade = ($idade >= 0) ? $idade : 0;
    } 
}

$ch = new Cachorro("sabao",1);

echo $ch->getNome() ." ". $ch->getIdade();

?>
<br><br>
4)
<?php
// Modifique a classe 'Cachorro' do exercício anterior.
// Torne as propriedades 'nome' e 'idade' protegidas e utilize métodos getters e setters para acessá-las e modificá-las.

$ch->setNome("enaldinho");
$ch->setIdade(2);

echo $ch->getNome() ." ". $ch->getIdade();

?>
<br><br>
5)
<?php
// Crie uma classe chamada 'Calculadora' com um método estático chamado 'soma' que recebe dois números e retorna a soma.
// Não é necessário instanciar a classe para utilizar o método 'soma'.
// Demonstre a utilização deste método.

class Calculadora
{
    public static function soma($n1,$n2){
        return $n1 + $n2;
    }
}

echo Calculadora::soma(1,2);

?>
<br><br>
1)
<?php
// Defina uma classe base 'Veiculo' com propriedades como 'marca' e 'modelo'.
// Crie duas classes derivadas, 'Carro' e 'Moto', que herdam de 'Veiculo'.
// Implemente métodos específicos para cada classe e um método comum para exibir informações gerais.
// Demonstre o polimorfismo chamando o método comum com objetos de ambas as classes derivadas.

class Veiculo
{
    public $marca;
    public $modelo;

    public function exibirInfo(){
        echo "marca: " . $this->marca;
        echo "<br>modelo: " . $this->modelo;
    }
}

class Carro extends Veiculo
{
    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function abrirPorta(){
        echo 'abrindo a porta';
    }
}

class Moto extends Veiculo
{
    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function Capacete(){
        echo 'eh obrigatório usar capacete';
    }
}

$car = new Carro("Chevrolet","Cruze");
$mot = new Moto("Honda","150");

$car->exibirInfo();
echo "<br>";
$mot->exibirInfo();
?>
<br><br>
2)
<?php
// Crie uma trait chamada 'Mensagens' que define um método 'enviarMensagem'.
// Crie duas classes, 'EmailSender' e 'SMSSender', que utilizam a trait 'Mensagens'.
// Demonstre a utilização da trait em ambas as classes.

trait Mensagens
{
    public function enviarMensagem(){
        echo "mensagem";
    }
}

class EmailSender
{
    use Mensagens;
}

class SMSSender
{
    use Mensagens;
}

$email = new EmailSender();
$email->enviarMensagem();
echo "<br>";
$sms = new SMSSender();
$sms->enviarMensagem();

?>
<br><br>
3)
<?php
// Crie duas classes, 'Cliente' e 'Pedido', no namespace 'Loja'.
// Em seguida, crie uma classe 'Pagamento' em um namespace diferente, por exemplo, 'Financeiro'.
// Demonstre a utilização das classes em seus respectivos namespaces.

include('Loja.php');


class Pagamento
{
    public function estatisticas($n){
        echo $n;
    }
}

$fin = new Pagamento();

$n = \Loja\Cliente::pagar();
$fin->estatisticas($n);
?>
<br><br>
4)
<?php
// Crie uma classe base 'Animal' com um método 'emitirSom'.
// Crie duas classes derivadas, 'Cachorro' e 'Gato', que herdam de 'Animal'.
// Sobrescreva o método 'emitirSom' em ambas as classes derivadas para representar o som característico.
// Demonstre o polimorfismo chamando o método comum com objetos de ambas as classes derivadas.

class Animal2
{
    public function emitirSom(){}
}

class Cachorro2 extends Animal2
{
    public function emitirSom(){
        $som = "A";
        for ($i=0; $i < 100; $i++) { 
            $som .= 'uuuuuuuuuuuuu';
        }
        echo $som;
    }
}

class Gato extends Animal2
{
    public function emitirSom(){
        echo 'Miau';
    }
}

$ch = new Cachorro2();
$gt = new Gato();

$ch->emitirSom();
echo '<br>';
$gt->emitirSom();


?>
<br><br>
5)
<?php
// Crie duas traits, 'LogErro' e 'LogInfo', ambas com um método 'registrarLog'.
// Em seguida, crie uma classe 'Registro' que utiliza ambas as traits.
// Demonstre o uso da classe e resolva possíveis conflitos de métodos.

trait LogErro
{
    public static function registrarLog(){echo "erro";}
}

trait LogInfo
{
    public static function registrarLog(){echo "info";}
}

class Registro
{
    public function logI(){
        LogInfo::registrarLog();
    }
    public function logE(){
        LogErro::registrarLog();
    }
}

$rg = new Registro();
$rg->logE();
$rg->logI();


?>