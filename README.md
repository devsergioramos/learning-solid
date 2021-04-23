## Vamos aprender SOLID
##### Aqui vou sintetizar conteúdos que tenho aprendido no Curso SOLID - Os 5 Princípios para as Boas Práticas da POO e no livro Clean Architecture do tio Uncle BOB
#### SOLID - Os 5 Princípios para as Boas Práticas da POO e Clean Architecture

> ### O que vamos aprender
> - [Teoria e prática SRP - Single Responsibility Principle](#srp)
> - [Teoria e prática OCP - Open/Closed Principle](#ocp)
> - [Teoria e prática] LSP - Liskov Substitution Principle
> - [Teoria e prática] ISP - Interface Segregation Principle
> - [Teoria e prática] DIP - Dependency Inversion Principle

> - As melhores práticas da Programação Orientada a Objetos
> - Desenvolvimento de aplicações com baixo acoplamento e alta coesão
> - Conceitos avançados de Orientação a Objetos
>

### SRP Single Responsibility Principle <a name="srp"></a>

1. O projeto app_carrinho_compras não aplica os principios SRP.
2. O projeto app_carrinho_compras_b aplica os principios SRP. 
3. Use ambos para comparar as mudanças estruturais entre um código com o SRP e sem o SRP

> - Trata-se das responsabilidades de Classes
> - Este principio, diz que uma classe deve ter uma responsabilidade única. 
> - Aqui no código de exemplo, utilizamos uma abstração de carrinho de compras sem os principios SRP na pasta app_carrinho_compras e uma abstração de carrinho de compras com principios SRP na pasta app_carrinho_compras_b. 
> - O carrinho de compras, deve possuir atributos e métodos fazendo apenas o que um carrinho de compras deveria fazer. No primeiro projeto, aplicamos uma Classe sem organização do SRP. Vemos que, o carrinho de compras, além de armazenar os itens de compra (que é a responsabilidade única dele) faz todo processo de pedido, criação de itens, e até envio de emails.
> - Esta abordagem é utilizada de forma errônea em muitos projetos que utilizam o paradgma de orientação a objetos atualmente. Trazendo uma maçaroba de atributos, métodos, e centenas de ifs que acabem assumindo diversos caminhos (fluxos), com baixa perfomance e extremamente complexo de dar manutenção. Uma vez que alterações nos métodos ou atributos da classe (responsabilidades), podem afetar diversos outras sem sabermos. 
> - No SRP, as abstrações devem focar no que elas são de fato (Abstrair objetos ao máximo possível, com suas respectivas responsabilidades e nada mais que isso.). Sendo assim, temos códigos independentes, reutilizaveis, de fácil manutenção (podemos alterar os méotods, atributos sem medo de ser feliz) sem quebrar outras partes do sistema. 
> -  Este principio visa: Construir códigos organizados, reutilizavél e de fácil manutenibilidade. 

### OCP Open Closed Principle <a name="ocp"></a>

1. O projeto app_etl não aplica os principios OCP.
2. O projeto app_etl_B aplica os principios OCP. 
3. Use ambos para comparar as mudanças estruturais entre um código com o OCP e sem o OCP

> - Trata-se de que Classes, módulos, funções, etc... Devem sempre estar abertas para extensões, no entanto fechados para alterações. 
> 
> - Este principio nos estimula a abstrair classes modularizando de forma a fornecer extensibilidade. 
> 
> - Mas primeiro, o que é uma alteração e expansão de código?
> 
> **Alteração**: Uma alteração ocorre quando precisamos acessar uma classe já existente para incluir comportamentos ou pra modificar comportamentos (inlcuir ou modificar métodos;)
> 
> **Expansão**: Uma expansão de código requer uma conduta de abstração de código sofisticada quando estamos criando as classes. Já devemos pensar desde então como as classes poderão ser extendidas, afim de quando houver necessidade de implementar novos comportamentos possamos usa-la extendendo-a e aplicando os novos metodos na classe filha. 
> - Temos o seguinte cenário: 
> 
> Em nosso projeto app_etl aplicamos duas classes com responsabilidade unica, a classe Leitor responsavel pela leitura dos arquivos e a classe arquivo responsavel por manipular os dados dos arquivos. Veja bem, em nossa classe arquivo houve a necessidade de ler arquivos TXT e CSV, ou seja precisamos implementar dois metodos que manipulam arquivos distinto. Isto faz parte do escopo de responsabilidade de arquivo, porém fere o principio open/closed pois sempre que precisarmos ler outro tipo de arquivo, teremos que implementar outro método responsavel por lidar com aquele tipo de arquivo. Portanto, nossa classe será alterada não respeitando a classe que deveria estar fechada para alterações
> 
> - Então, qual a melhor abordagem para que o OCP seja respeitado?
> 
> No projeto app_etl_b aplicamos o OCP, separamos uma pasta chamada "extrator" onde colocaremos nossas classes que farão a extração de dados dos diversos arquivos que houver necessidade. Criamos duas classes novas, a Csv e Txt, ambas extende a classe arquivo que agora apenas está responsável por armazenar dados, atributos e metodos estes que serão usados em ambas classes filhas (Csv e Txt). Na nossa classe Csv basicamente implementamos o método de extração de dados de arquivos csv e na classe Txt fizemos o mesmo só que para arquivos Txt. Sendo assim, abstraimos de tal forma, que nossas classes estão fechadas para alterações. Caso houver necessidade de lermos arquivos Xlsx, não precisamos alterar nenhuma classe pré-existente, criando assim nela o fluxo de tratamento de dados em arquivos Xlsx sem ferir o principio open/closed. 
>
>  O importante aqui, é basicamente entender que devemos pensar nossas classes de forma extensiva, ou seja, nossas classes precisam estar fechadas para alterações e abertas para serem extendidas. 
