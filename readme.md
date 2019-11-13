# Plugin público do Entenda Antes para Wordpress

Esse documento contém tudo que o desenvolvedor precisa saber para dar manutenção no Plugin público
do Entenda Antes para Wordpress.

## Guia de referência

`%unique_id%`: É um id que deve ser único por formulário. Pode ser gerado dinamicamente, mas não pode se repetir em dois formulários. Esse ID não é o ID do HTML.  
`Campo`: Termo para identificar qualquer `input` ou  `textarea` que contenha informação a ser enviada pelo plugin.

## Estrutura

O formulário principal é dividido em `fieldset`s, cada `fieldset` é uma etapa do formulário, e tem seus botões de 'Próximo' e 'Anterior', independente dos outros. O último `fieldset` não tem 
botões, mas contém um link que leva ao primeiro `fieldset`, para o caso de o usuário querer preencher novamente o formulário. Cada `fieldset` possui um elemento com a classe `ea-warning`, esse elemento será exibido sempre que um erro de validação ocorrer. É obrigatório.

## Funcionamento

Basta inserir o shortcode `[ea-integra-form]` ao artigo ou às matérias, no espaço onde se deseja inserir o formulário. Em algumas plataformas, é necessário que o post esteja publicado, e não no modo "Preview".

### Validação

Cada `fieldset` valida seus próprios campos. O campo deve obrigatoriamente conter a classe `ea-field` para constar na requisição final; para constar na requisição final e não ser validado, deve ter as classes `ea-field` e `ea-optional-field`. Assim que for válido, 

### Esconder/mostrar botões adicionais
Insira um botão que chame a função `switchCategories(%unique_id%, this)`. Os elementos que serão escondidos/mostrados devem conter as classes `ea-input-hidden` e `ea-input-hidden%unique_id%`.


o envio do formulário é feito no `fieldset` que contenha um button type submit, ideal que seja o penúltimo. O botão não precisa e não será clicado, apenas estando ali, o plugin entende que aquele é o último passo antes do envio do formulário. 