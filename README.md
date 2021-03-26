## Vamos aprender SOLID

#### Curso SOLID - Os 5 Princípios para as Boas Práticas da POO

> ### O que vamos aprender
> - [Teoria e prática SRP - Single Responsibility Principle](#srp)
> - [Teoria e prática] OCP - Open/Closed Principle
> - [Teoria e prática] LSP - Liskov Substitution Principle
> - [Teoria e prática] ISP - Interface Segregation Principle
> - [Teoria e prática] DIP - Dependency Inversion Principle

> - As melhores práticas da Programação Orientada a Objetos
> - Desenvolvimento de aplicações com baixo acoplamento e alta coesão
> - Conceitos avançados de Orientação a Objetos

##### Link do curso - [SOLID - Os 5 Princípios para as Boas Práticas da POO](https://www.udemy.com/course/solid-os-5-principios-para-as-boas-praticas-da-poo/)


1. O projeto app_carrinho_compras não aplica os principios SOLID.
2. O projeto app_carrinho_compras_b aplica os principios SOLID. 
3. Use ambos para comparar as mudanças estruturais entre um código com o SOLID e sem o SOLID

### SRP Single Responsibility Principle <a name="srp"></a>
> - Trata-se das responsabilidades de Classes
> - Este principio, diz que uma classe deve ter uma responsabilidade única. Ou seja, aqui no código de exemplo, utilizamos uma abstração de carrinho de compras. 
> - O carrinho de compras, deve possuir atributos e métodos fazendo apenas o que um carrinho de compras deveria fazer. No primeiro projeto, aplicamos uma Classe sem organização do SRP, vemos que o carrinho de compras, além de armazenar os itens de compra (que é a responsabilidade única dele) faz todo processo de pedido, criação de itens, e até envio de emails.
> - Esta abordagem é utilizada em muitos projetos que utilizam o paradgma de orientação abordagem. Trazendo uma maçaroba de atributos, métodos, e centenas de ifs que acabam tornando o código muito complicado. Além de inviabilizar a manutenção dele. 
> - No SRP, as abstrações devem focar no que elas são de fato (Abstrair objetos o máximo possível, com suas respectivas responsabilidades e nada mais que isso.). Sendo assim, temos códigos independentes, de fácil manutenção, e evitamos alterar alguma linha e quebrar outras partes do sistema. 
> -  Este principio visa: Construir códigos organizados, reutilizavél e de fácil manutenibilidade. 
