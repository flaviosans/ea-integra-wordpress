# Plugin público do Entenda Antes para Wordpress

Esse documento contém tudo que o desenvolvedor precisa saber para dar manutenção no Plugin público
do Entenda Antes para Wordpress.

## Guia de referência

`%unique_id%`: É um id que deve ser único por formulário. Pode ser gerado dinamicamente, mas não pode se repetir em dois
formulários. Esse ID não é o ID do HTML.
## Estrutura

O formulário principal é dividido em `fieldset`s, cada `fieldset` é uma etapa do formulário, e tem seus botões de 'Próximo' e 'Anterior', independente dos outros. O último `fieldset` não tem 
botões, mas contém um link que
leva ao primeiro `fieldset` para o caso de o usuário querer preencher novamente o formulário.
O `fieldset` que contiver um `button` com a classe `ea-submit` irá enviar o formulário para a API, 
automaticamente, além de avançar para o `fieldset` seguinte. Esse `button` já está posicionado no
penúltimo `fieldset`, onde ele envia os dados para a API e avança para o último `fieldset`  
Cada `fieldset` possui um elemento com a classe `ea-warning`, esse elemento será exibido sempre que um erro de validação ocorrer. É obrigatório.

## Funcionamento

### Validação


Cada `fieldset` valida seus próprios campos. Para ser validado, o `input` ou  `textarea` deve
conter a classe `ea-field`.

### Esconder/mostrar botões adicionais
 Insira um elemento chamando a função `switchCategories(%unique_id%, this)`. Os elementos que iniciam escondidos devem conter as
 classes `ea-input-hidden` e `ea-input-hidden%unique_id%`.

Para utilizar a funcionalidade de esconder/mostrar botões adicionais, 


o envio do formul�rio � feito no step que contenha um button type submit. Ap�s o envio, o formul�rio avan�a automaticamente.