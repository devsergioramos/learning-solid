## Vamos aprender SOLID
##### Aqui vou sintetizar conteúdos que tenho aprendido no Curso SOLID - Os 5 Princípios para as Boas Práticas da POO e no livro Clean Architecture do tio Uncle BOB
#### SOLID - Os 5 Princípios para as Boas Práticas da POO e Clean Architecture

> ### O que vamos aprender
> - [Teoria e prática SRP - Single Responsibility Principle](#srp)
> - [Teoria e prática] OCP - Open/Closed Principle
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
> - Esta abordagem é utilizada de forma errada em muitos projetos que utilizam o paradgma de orientação a objetos atualmente. Trazendo uma maçaroba de atributos, métodos, e centenas de ifs que acabam tornando o código muito complicado, com baixa perfomance e extremamente complexo de dar manutenção. Uma vez que alterações nos métodos ou atributos da classe (responsabilidades), podem afetar diversos outras sem sabermos. 
> - No SRP, as abstrações devem focar no que elas são de fato (Abstrair objetos ao máximo possível, com suas respectivas responsabilidades e nada mais que isso.). Sendo assim, temos códigos independentes, reutilizaveis,  de fácil manutenção (podemos alterar os méotods, atributos sem medo de ser feliz) sem quebrar outras partes do sistema. 
> -  Este principio visa: Construir códigos organizados, reutilizavél e de fácil manutenibilidade. 
