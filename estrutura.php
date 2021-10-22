<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Trabalho Estrutura de Dados</title>
    <link rel="stylesheet" href="css/estilo.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital,wght@0,400;0,700;1,400&family=Bebas+Neue&family=Lilita+One&family=Oleo+Script:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">

</head>

<body>
    <?php 
	  include('includes/header.php');
    
	  include('includes/nav.php'); 

	 ?>
    



    <main>

        <!--QUESTÃO 1-->
        <article id="art1">


            <h2 id="per1"> 1) O que é arquivo? Dê exemplos. </h2>
            <p>Pode-se entender que um arquivo é composto por um conjunto de dados que se relacionam entre sim. Esse relacionamento dos dados descreve uma informação ou um conjnto de informações. Dessa forma, basicamente, a informação é o que o usuário observa, ela, por sua vez, é formada por dados que seguem uma estrutura ou formato que é interpretado pelo computador, por fim, a combinação de todos esses passos é o arquivo.</p>
            <p>Os arquivos podem representar vários tipos de informações, como imagens, vídeo, códigos de instrução de processamento para determinada rotina do computador, etc. Esses "vários tipos de informações" nada mais são que as diferentes extensões que os arquivos possuem, por exemplo, ".xls" ; ".html" ; ".php". Mais que o tipo de informação, essas extensões indicam a forma como os dados naquele arquivo são estruturados e devem ser interpretados, ou seja, há uma forma específica para se executar os arquivos dependendo da sua extensão, por isso não é possível, por exemplo, abrir adequadamente um arquivo ".jpg" (extensão para imagens) no "Word", que é um programa para a execução de arquivos ".doc".</p>
            <p>Cada arquivo precisa de uma identificação. Do ponto de vista de um computador, arquivos são geralmente identificados por números (como os inodes). Do ponto de vista do usuário de um computador, um arquivo é quase sempre representado por um nome. O computador guarda associações entre os nomes e os números para poder transformar o primeiro no segundo sempre que necessário.
                Como um sistema computacional costuma lidar com milhares de arquivos, é comum que vários arquivos sejam agrupados em conjuntos maiores, seguindo alguma organização que facilite a recuperação de arquivos por parte dos usuários. </p>

        </article>

        <!--QUESTÃO 2-->
        <article id="art2">

            <h2 id="per2"> 2) O que podemos gerar (arquivos), usando PHP? Dê exemplos.</h2>

            <p>Como dito na resposta anterior, arquivos são conjuntos de dados que se manifestam em uma informação. Através do PHP é possível gerar arquivos de diferentes extensões no servidor que serão utilizados durante a execução do sistema em questao, sendo que o próprio PHP que os gerou trata-se de um arquivo ".php" contendo toda a codificação necessária para a sua criação.</p>

            <p>Diversas funções nativas do PHP podem ser usadas para gerar esses arquivos, bem como configurar as permisões de visualização e edição deles, cópia, exclusão, etc. Essas funções fazem a manipulação dos arquivos, o que é necessário em algumas ocasiões, como:</p>

            <ul>

                <li>Fazer um gerenciador de arquivos remoto;</li>
                <li>Editar um arquivo .css remotamente em um sistema gerenciador de conteúdo qualquer;</li>
                <li>Salvar informações de acesso em um arquivo de log;</li>
                <li>Criar um contador para um site.</li>

            </ul>

            <p>As funções usadas para essa manipulação são principalmente as seguintes:</p>

            <table>
                <tr>
                    <th>Função </th>
                    <th>Ação</th>
                </tr>

                <tr>
                    <td>fopen()</td>
                    <td>‘Abre’ o arquivo para que possa ser manipulado</td>
                </tr>

                <tr>
                    <td>fgets()</td>
                    <td>Pega uma linha do arquivo até o máximo de 1024bytes</td>
                </tr>
                <tr>
                    <td>feof()</td>
                    <td>Durante a leitura de um arquivo, avisa se chegou ao final</td>
                </tr>
                <tr>
                    <td>file_get_contents()</td>
                    <td>Pega todo conteúdo do arquivo aberto como uma string</td>
                </tr>
                <tr>
                    <td>ftruncate()</td>
                    <td>Reduz o tamanho do arquivo. Usado para apagar seu conteúdo</td>
                </tr>
                <tr>
                    <td>fwrite()</td>
                    <td>Escreve no arquivo</td>
                </tr>
                <tr>
                    <td>unlink()</td>
                    <td>Apaga o arquivo indicado</td>
                </tr>
            </table>

            <P>Como dito anteriormente, é possível editar as permissões para os arquivos gerados com o PHP, o que é feito no momento do uso da função "fopen()" ao se colocar o modo de abertura do arquivo, conforme abaixo:</P>

            <table>
                <tr>
                    <th>Sigla </th>
                    <th>Modo de execução</th>
                </tr>

                <tr>
                    <td class="tabela">w</td>
                    <td>Abre o arquivo para apenas escrita. Assim coloca o ponteiro do arquivo no começo do arquivo e diminui(trunca) o tamanho do arquivo para zero. Se o arquivo não existe, tenta criá-lo</td>
                </tr>

                <tr>
                    <td class="tabela">w+</td>
                    <td>Abre o arquivo para leitura e escrita; Primeiro coloca o ponteiro do arquivo no começo, diminuindo (truncando) o tamanho do arquivo para zero. Se o arquivo não existe, tenta criá-lo</td>
                </tr>
                <tr>
                    <td class="tabela">r</td>
                    <td>Abre o arquivo somente para leitura; coloca o ponteiro de escrita no começo do arquivo.[Retorna um erro caso o arquivo não exista e não tenta cria-lo]</td>
                </tr>
                <tr>
                    <td class="tabela">r+</td>
                    <td>Abre para leitura e escrita; coloca o ponteiro de escrita no começo do arquivo. [Retorna um erro caso o arquivo não exista e não tenta cria-lo.]</td>
                </tr>
                <tr>
                    <td class="tabela">a</td>
                    <td>Abre para somente para escrita somente; coloca o ponteiro do arquivo no final. Se o arquivo não existir, tenta criá-lo</td>
                </tr>
                <tr>
                    <td class="tabela">a+</td>
                    <td>Abre o arquivo para leitura e escrita; coloca o ponteiro do arquivo no final. Se o arquivo não existir, tenta criá-lo</td>
                </tr>
                <tr>
                    <td class="tabela">x</td>
                    <td>Cria e abre o arquivo para escrita somente; coloca o ponteiro no início do arquivo. Se o arquivo já existe, a chamada a fopen() irá falhar, retornando FALSE, gerando um erro nível E_WARNING. Se o arquivo não existe, tenta criá-lo. Esta opção é suportada no PHP 4.3.2 e posteriores, e somente funciona em arquivos locais</td>
                </tr>
                <tr>
                    <td class="tabela">x+</td>
                    <td>Cria e abre um arquivo para escrita e leitura; coloca o ponteiro do arquivo no início. Se o arquivo já existe, a chamada a fopen() irá falhar, retornando FALSE, gerando um erro nível E_WARNING. Se o arquivo não existe, tenta criá-lo. Esta opção é suportada no PHP 4.3.2 e posteriores, e somente funciona em arquivos locais</td>
                </tr>
            </table>
        </article>

        <!--QUESTÃO 3 -->

        <article id="art3">

            <h2 id="per3">3) Para que servem Arrays? Dê exemplos </h2>
            <p>Para entender para que os arrays servem, primeiro é preciso entender o que eles são. Basicamente, um array é um mapa ordenado, ou seja, relaciona valores a uma respectiva identificação ou chave dentro, portanto, de um tipo de dado. Diferentemente de um tipo de dado "integer" ou "float", por exemplo, no array é possível inserir vários valores dentro do mesmo elemento, justamente porque eles são armazenados individualmente e relacionados através das chaves, que são a sua codificação dentro do array, podendo dessa forma serem acessados e manipulados.</p>
            <p>O fato de em um array ser possível incluir vários valores diferentes e´o que justifica o seu uso e explica a sua serventia, já que a sua utilização facilita rotinas onde anteriormente seria necessário criar um número muito grande variáveis. Num cadastro de clientes, por exemplo, se se utilizasse um outro tipo de dado, seria preciso criar uma variável específica para cada cliente, visto que seria possível armazenar apenas um valor; no entanto, ao utilizar um array, pode-se criar apenas uma variável desse tipo de dado e então cada cliente será armazenado nela mesma, recebendo uma chave de identificação que poderá ser acessada posteriormente durante as rotinas que o sistema demandar. Ou seja, os arrays tornam os processos de programação mais rápidos, organizados e arranjados dentro de uma mesma variável, ainda que estejam sendo trabalhados elementos com diversos valores diferentes.</p>


        </article>

        <!--QUESTÃO 4 -->

        <article id="art4">

            <h2 id="per4">4) O que é Estrutura de dados? Dê exemplos</h2>
            <p>Basicamente, Estrutura de Dados é a forma como os dados são armazenados dentro de um sistema, de forma que os algoritmos, ao utilizá-los, o façam de maneira a otimizar os processos, melhorando a performance do sistema como um todo. Existem diferentes formas de se estruturar os dados, formas estas que são usadas para inserir, localizar ou excluir um registro dentro do sistema. As estruturas de dados utilizadas são:</p>
            <ul>

                <li><b>Arrays</b>: conforme citado anteriormente, permitem o armazenamento de vários valores dentro de uma mesma variável;</li>
                <li><b>Lista</b>: é uma estrutura de dados linear. Uma lista ligada, também chamada de encadeada, é linear e dinâmica, é composta por nós que apontam para o próximo elemento da lista, com exceção do último, que não aponta para ninguém. Para compor uma lista encadeada, basta guardar seu primeiro elemento;</li>
                <li><b>Pilhas</b>: são estruturas baseadas no princípio LIFO (last in, first out), na qual os dados que foram inseridos por último na pilha serão os primeiros a serem removidos;</li>
                <li><b>Filas</b>: são estruturas baseadas no princípio FIFO (first in, first out), em que os elementos que foram inseridos no início são os primeiros a serem removidos;</li>
                <li><b>Árvore</b>: é uma estrutura de dados em que cada elemento tem um ou mais elementos associados, tais como ramos diferentes;</li>
                <li><b>Grafos</b>: São uma forma de representação matemática que relacionam nós ou vértices através de arestas que os conectam. Numa estrutura de dados, eles podem ser entendidos, como tipos de dados e informações diferentes que estão relacionadas entre si através de um ponto comum, por exemplo, a idade, nome e endereço de várias pessoas relacionados através de um algoritmo que os relacione numa rede social.</li>
            </ul>


        </article>

        <!--QUESTÃO 5-->

        <article id="art5">
            <h2 id="per5"> 5) De que forma utilizamos estrutura de dados? Dê exemplos</h2>

            <p>Utilizamos a estrutura de dados de forma a relacionar dados e informações, excluindo-os, alterando-os ou criando-os. Existem vários exemplos práticos onde as estruturas de dados são utilizados, como:</p>

            <ul>

                <li>Processos executados em um sistema operacional (fila);</li>
                <li>Chamadas de funções num interpretador de código (pilha);</li>
                <li>Aplicativos de pesquisa com entrada constante de dados (Árvores binárias); </li>
                <li>Redes sociais (grafos);</li>
                <li>Algoritmos de cadastros com várias entradas (arrays).</li>

            </ul>

        </article>


        <!--QUESTÃO 6-->

        <article id="art6">
            <h2 id="per6"> 6) O que é Orientação a Objeto? Dê exemplos.</h2>

            <p>
                Programação Orientada a Objetos (também conhecida pela sua sigla POO) é um modelo de análise, projeto e programação de software baseado na composição e
                interação entre diversas unidades chamadas de 'objetos'.</p>
            <p> Um objeto é um elemento computacional que representa, no domínio da solução, alguma entidade (abstrata ou concreta) do domínio de interesse do problema sob análise. Objetos similares são agrupados em classes.</p>

            <p>A POO é um dos 4 principais paradigmas de programação (as outras são programação imperativa,
                funcional e lógica).
                Os programas são arquitetados através de objetos que interagem entre si. Dentre as várias abordagens da POO, as baseadas em classes são as mais comuns:
                objetos são instâncias de classes, o que em geral também define o tipo do objeto.<br>Cada classe determina o comportamento (definido nos métodos) e estados possíveis (atributos) de seus objetos,
                assim como o relacionamento com outros objetos. A alternativa mais usual ao uso de classes é o uso de protótipos. Neste caso, objetos são cópias de outros objetos,
                não instâncias de classes. Javascript e Lua são exemplos de linguagens cuja POO é realizada por protótipos;</p>

            <p>Um programa orientado a objetos é composto por um conjunto de objetos que interagem através de "trocas de mensagens". Na prática, essa troca de mensagem traduz-se na invocação de métodos entre objetos.
            </p>

            <p><i>Abaixo, os quatro pilares da programação orientada a objetos:</i></p>

            <p><b>1 - Abstração </b><br>
                Antes de mais nada, imagine o que esse objeto irá realizar. Para isso, é preciso verificar três pontos na abstração:

                Identidade ao objeto que vai ser criado. Essa identidade deve ser única dentro do sistema, para que não haja conflito, ou seja, sem repetições.

                Característica do objeto. Dentro da programação orientada a objetos, as características são nomeadas como propriedades. Por exemplo, as propriedades de um objeto “pessoa” poderiam ser “peso”, “tamanho” e “idade”.

                Ações que o objeto irá executar, chamadas de métodos. Eles podem ser muito variados, dependendo do tipo de solução desenvolvida. </p>

            <p><b>2 - Encapsulamento </b><br>
                O encapsulamento é uma técnica que adiciona segurança à aplicação em uma programação orientada a objetos, pois esconde as propriedades, criando uma espécie de caixa preta.

                Muitas das linguagens orientadas a objetos implementam o encapsulamento baseado em propriedades privadas, por métodos chamados getters e setters, responsáveis por retornar e setar o valor da propriedade, respectivamente. Assim, se evita o acesso direto à propriedade do objeto, adicionando outra camada de segurança à aplicação.</p>

            <p><b>3 - Herança </b> <br>
                Na programação orientada por dados, o reuso de código é uma de suas vantagens de destaque e ela se dá por herança. Essa característica otimiza a produção da aplicação em tempo e linhas de código.

                Para fazer uma analogia próxima à realidade não virtual, em uma família, por exemplo, a criança herda diretamente do pai e indiretamente do avô e do bisavô. Em programação, a lógica é similar. Assim, os objetos filhos herdam as características e ações de seus ancestrais”. </p>

            <p><b>4 - Polimorfismo </b><br>
                Na natureza, existem animais que são capazes de alterar sua forma conforme a necessidade. Na orientação a objetos a ideia é a mesma.

                O poliformismo permite herdar um método de classe pai e atribuir uma nova implementação para o método pré-definido. </p>


        </article>

        <!--QUESTÃO 7-->

        <article id="art7">
            <h2 id="per7"> 7) O que é classe? Dê exemplos.</h2>

            <p>Classe é um conjunto de características e comportamentos que definem o conjunto de objetos pertencentes à essa classe.
                O principal benefício da utilização de classes é a reutilização do código, pois a cada objeto criado você não precisa criar sua estrutura novamente.</p>

            <p> Um exemplo de classe seria a classe CARRO, onde seus objetos seriam os modelos dos carros, exemplo:

                Para criar um objeto de uma classe, utilizamos o operador new. Por exemplo, para criar uma instância do Carro a a partir da classe Carro, utilizamos o seguinte código:

                Carro a = new Carro( );

                classe CARRO / objetos HB20, ELENTRA, TUCSON

            </p>



        </article>
        <!--QUESTÃO 8-->

        <article id="art8">
            <h2 id="per8"> 8) O que é método? Dê exemplos.</h2>

            <p>Um método é um trecho de código que realiza uma função específica e pode ser chamado por qualquer outro método ou classe.
                Os métodos possuem as seguintes características: </p>
                <ul>
                <li> podem ou não retornar um valor; </li>
                <li> podem ou não aceitar argumentos;</li>
                <li>após encerrar sua execução, o método retorna o fluxo de controle do programa para quem o chamou.</li>
                </ul>
           
            <p>Continuando com o exemplo da classe CARRO, seus métodos podem ser:
                ACELERAR, FREIAR, RETROCEDER.</p>





        </article>
        <!--QUESTÃO 9-->

        <article id="art9">
            <h2 id="per9"> 9) O que são pilhas em PHP? Dê exemplos.</h2>

            <p>São estruturas de dados do tipo LIFO (last-in first-out), onde o último elemento a ser inserido, será o primeiro a ser retirado. Assim, uma pilha permite acesso a apenas um item de dados - o último inserido.
                Para processar o penúltimo item inserido, deve-se remover o último.
                Numa pilha, a manipulação dos elementos é realizada em apenas uma das extremidades, chamada de topo, em oposição a outra extremidade, chamada de base.
            </p>

            <p> São exemplos de uso de pilha em um sistema: </p>
                <ul>
                <li>Funções recursivas em compiladores;</li>
                <li>Mecanismo de desfazer/refazer dos editores de texto;</li>
                <li>Navegação entre páginas Web;</li>
                </ul>
            <p><i>Exemplo:</i><br>

                ?php
                  <br>$pilhaLivros = array();

                  <br> array_push($pilhaLivros, 'Valor 1', 'Valor 2');

                  <br>print_r($pilhaLivros); // Resultado: Array ( [0] => Valor 1 [1] => Valor 2 )

                  <br>array_pop($pilhaLivros);

                  <br> print_r($pilhaLivros); // Resultado: Array ( [0] => Valor 1 )
                <br>?>

            </p>



        </article>
        <!--QUESTÃO 10-->

        <article id="art10">
            <h2 id="per10"> 10) Em que situação eu poderia utilizar as estruturas de controle e as estruturas de repetição?</h2>

            <p>Estruturas de controle são: seqüencial, condicional e de repetição.
                Uma Estrutura de Controle é um bloco de programação que analisa variáveis e escolhe uma direção para seguir baseado nos parâmetros pré-definidos.<br>
                <i>Exemplo:</i><br>

                ?php
                <br>if ($condicao1) {

                <br>// código se a condição1 for atendida

                <br>} elseif ($condicao2) {

                <br> // código se a condição2 for atendida

                <br>} else {

                <br>// código se nenhum das condições forem atendidas

                <br>}
                <br>?>
            </p>

            <p>Estrutura de Repetição: Trabalha com a repetição de comandos até que condições se satisfaçam. Esta estrutura e subdividida em 3 sub-estruturas. </p>
                <ul>
                <li> Estrutura de repetição com teste no inicio (comando while-do)</li>
                <li> Estrutura de repetição com teste no final (comando repeat-until)</li>
                <li> Estrutura de repetição automática (comando for)</li>
                </ul>
           

            <p>Utilizamos as estruturas de repetição para repetir uma série de operações semelhantes que são executadas para todos os elementos de uma lista ou de uma tabela de dados,
                ou simplesmente para repetir um mesmo processamento até que uma certa condição seja satisfeita.<br>

                Exemplos de estrutura de repetição: WHILE, DO..WHILE, FOR e FOREACH.

            </p>
            <p><i>Exemplo: <br></i>
                <br>?php
                <br> foreach ($nome_array as $variavel){
                <br> comandos; //comandos que serão repetidos
                <br> }
                <br>?>


            </p>
        </article>
    </main>


	<?php include('includes/footer.php'); ?>


</body>

</html>
