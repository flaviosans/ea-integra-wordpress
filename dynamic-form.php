<?php
$unique_id = rand(0,999);
$referer_id = 1234567890;
$prev_message = "Anterior";
$api_url = $_SERVER['REMOTE_ADDR'] == ('127.0.0.1' || 'localhost') ? "http://localhost:8080" : "https://zeta.entendaantes.com.br";

// Elemento que vai conter o grid
$css_row = "row-ea-integra";
// Botão padrão
$css_default_button = "button-ea-integra";
$css_primary_button = "button-ea-integra primary";
$css_secondary_button = "button-ea-integra secondary";
$css_prev_button = $css_default_button;
$css_next_button = $css_primary_button . " ea-next-button";

$css_h3 = "ea-integra " . $css_full_col;

$css_full_col = "col-md-12 col-sm-12";
$css_half_col = "col-lg-6 col-md-6 col-sm-12";
$css_ever_half_col = "col-lg-6 col-md-6 col-sm-6";
$css_third_col = "col-lg-4 col-md-4 col-sm-12";
$css_sixth_col = "col-lg-2 col-md-2 col-sm-12";
$css_center = "col-sm-12 col-md-6 col-md-offset-3";
$css_center_wide = "col-sm-12 col-md-8 col-md-offset-2";
// Div do Input do formulário
$css_form_group = "form-group-ea-integra";
$css_button_group = $css_form_group;
$css_checkbox = "button-ea-integra primary";
$css_radio = "button-ea-integra ea-full-width-item";
$css_radio_grid = "col-sm-12 col-md-6";
$css_form_control = "form-control";

$css_container = "container ea-container";

$steps = [
            [
                "step_title" => "Onde será feito o trabalho?",
                "question_fields" => [
                    [
                        "tag" => "input",
                        "type" => "hidden",
                        "name" => "deleted",
                        "value" => "true",
                        "class" => ""
                    ],
                    [
                        "tag" => "input",
                        "type" => "hidden",
                        "name" => "meta.city.ibge",
                        "value" => "000000",
                        "class" => "ea-field ea-optional-field",
                        "id" => "ibge" . $unique_id
                    ],
                    [
                        "tag" => "input",
                        "type" => "hidden",
                        "name" => "budgetSubCategory.id",
                        "value" => "79",
                        "class" => ""
                    ],
                    [
                        "tag" => "input",
                        "type" => "hidden",
                        "name" => "userIdToSend",
                        "value" => "8bd579a6-a27c-48f0-9151-a1a2d86e1e3e",
                        "class" => "ea-field ea-optional-field",
                        "id" => "ibge" . $unique_id
                    ],
                    [
                        "tag" => "input",
                        "type" => "hidden",
                        "name" => "city",
                        "value" => "000000",
                        "class" => "ea-field ea-optional-field " . $css_form_control,
                        "id" => "city" . $unique_id
                    ],
                    [
	                    "tag" => "input",
	                    "type" => "hidden",
	                    "name" => "meta.refererId",
	                    "value" => $referer_id
                    ],
                    [
	                    "tag" => "input",
	                    "type" => "text",
	                    "name" => "zipCode",
                        "label" => "CEP:",
                        "has_span" => true,
                        "class" => "ea-field ea-masked-zipcode",
	                    "value" => ""
                    ]
                ]
            ],
            [
                "step_title" => "Qual categoria o orçamento se encaixa?",
                "question_fields" => [
                        [
                                "type" => "radio",
                                "name" => "budgetCategory.id",
                                "options" => [
	                                [
		                                "label" => "Construção",
		                                "value" => "1"
	                                ],
	                                [
		                                "label" => "Reforma",
		                                "value" => "2"
	                                ],
	                                [
		                                "label" => "Decoração",
		                                "value" => "3"
	                                ],
	                                [
		                                "label" => "Paisagismo e jardinagem",
		                                "value" => "4"
	                                ],
	                                [
		                                "label" => "Instalações/serviços",
		                                "value" => "7"
	                                ],
	                                [
		                                "label" => "Pavimentação",
		                                "value" => "8"
	                                ],
	                                [
		                                "label" => "Outros",
		                                "value" => "11"
	                                ]
                                ]
                        ]
                ]
            ],
            [
                "step_title" => "Qual é o tipo de imóvel?",
                "question_fields" => [
                    [
                        "type" => "radio",
                        "name" => "propType",
                        "options" => [
                            [
                                    "label" => "Residencial",
                                    "value" => "residence"
                            ],
                            [
                                "label" => "Comercial",
                                "value" => "trade"
                            ],
                            [
                                "label" => "Industrial",
                                "value" => "industry"
                            ],
                            [
                                "label" => "Outro",
                                "value" => "other"
                            ]
                        ]
                    ]
                ]
            ],
            [
                "step_title" => "Quando pretende começar?",
                "question_fields" => [
                    [
                        "type" => "radio",
                        "name" => "questions.start",
                        "options" => [
                            [
                                "label" => "O mais rápido possível",
                                "value" => "afap"
                            ],
                            [
                                "label" => "De 1 a 3 meses",
                                "value" => "from_1_to_3_months"
                            ],
                            [
                                "label" => "Mais que 3 meses",
                                "value" => "more_than_3_months"
                            ],
                            [
                                "label" => "Ainda não sei",
                                "value" => "dont_know"
                            ]
                        ]
                    ]
                ]
            ],
            [
                "step_title" => "Nos descreva seu pedido",
                "question_fields" => [
	                [
		                "tag" => "input",
		                "type" => "text",
		                "name" => "title",
                        "placeholder" => "Ex: quero reformar meu escritório",
		                "label" => "Escreva o que você precisa:",
		                "class" => "",
		                "value" => ""
	                ],
                    [
		                "tag" => "input",
		                "type" => "textarea",
		                "name" => "description",
                        "placeholder" => "Adicione os detalhes que você gostaria de explicar para o profissional. Quanto mais informações, melhor e mais rápida será a resposta!",
		                "label" => "Escreva aqui, com mais detalhes:",
		                "class" => "",
		                "value" => ""
	                ]
                ]
            ],
            [
                "step_title" => "Melhor horário para contato:",
                "question_fields" => [
	                [
		                "type" => "radio",
		                "name" => "questions.contact_hour",
		                "options" => [
			                [
				                "label" => "Manhã",
				                "value" => "morning"
			                ],
			                [
				                "label" => "Tarde",
				                "value" => "afternoon"
			                ],
			                [
				                "label" => "Noite",
				                "value" => "night"
			                ]
		                ]
	                ]
                ]
            ],
            [
                "step_title" => "O pedido é para:",
                "question_fields" => [
	                [
		                "type" => "radio",
		                "name" => "questions.person_type",
		                "options" => [
			                [
				                "label" => "Pessoa física",
				                "value" => "pf"
			                ],
			                [
				                "label" => "Pessoa jurídica",
				                "value" => "pj"
			                ]
		                ]
	                ]
                ]
            ],
            [
                "step_title" => "Estimativa de investimento:",
                "question_fields" => [
	                [
		                "type" => "radio",
		                "name" => "estimatedPrice",
		                "options" => [
			                [
				                "label" => "R$ 20 mil",
				                "value" => "1"
			                ],
			                [
				                "label" => "R$ 40 mil",
				                "value" => "2"
			                ],
			                [
				                "label" => "R$ 80 mil",
				                "value" => "3"
			                ],
			                [
				                "label" => "Acima de R$ 80 mil",
				                "value" => "4"
			                ]
		                ]
	                ]
                ]
            ],
            [
                "step_title" => "Interesse:",
                "question_fields" => [
	                [
		                "type" => "radio",
		                "name" => "meta.interest",
		                "options" => [
			                [
				                "label" => "Saber apenas preços a fim de comparação",
				                "value" => "saber_apenas_precos_a_fim_de_comparacao"
			                ],
                            [
				                "label" => "Tirar dúvidas para saber melhor o que desejo fazer",
				                "value" => "tirar_duvidas_para_saber_melhor_o_que_desejo_fazer"
			                ],
			                [
				                "label" => "Negociar a execução do serviço com um profissional",
				                "value" => "negociar_a_execucao_do_servico_com_um_profissional"
			                ]
		                ]
	                ]
                ]
            ],
            [
                "step_title" => "Informações de contato:",
                "question_fields" => [
	                [
		                "tag" => "input",
		                "type" => "text",
		                "name" => "userApp.name",
		                "placeholder" => "",
		                "label" => "Nome:",
		                "class" => "",
		                "value" => ""
	                ],
	                [
		                "tag" => "input",
		                "type" => "text",
		                "name" => "userApp.email",
		                "placeholder" => "",
		                "label" => "E-mail:",
		                "class" => "ea-masked-email",
		                "value" => ""
	                ],
	                [
		                "tag" => "input",
		                "type" => "text",
		                "name" => "userApp.phone",
		                "placeholder" => "",
		                "label" => "Telefone:",
		                "class" => "ea-masked-phone",
		                "value" => ""
	                ],
                ]
            ],
];
?>

<div class="<?php echo $css_row ?>">
    <div class="<?php echo $css_center_wide ?>" style="height: 600px">
        <form name="ea-integra-form" class="ea-integra" action="<?php echo $api_url ?>/budget" id="ea-form<?php echo $unique_id ?>" method="POST" onsubmit="handleFormSubmit(event, this)">
            <fieldset class="ea-preloader" style="text-align: center">
                <h3 class="<?php echo $css_h3 ?>">Carregando o assistente...</h3>
                <p>Aguarde, nosso assistente ajudará você a realizar o seu sonho fechando o melhor negócio</p>
                <img src="<?php echo plugin_dir_url(__FILE__) ?>img/loading.gif" alt="Aguarde, carregando!">
            </fieldset>

            <?php foreach ($steps as $count => $each_step) { ?>

                <fieldset  class="ea-step step<?php echo $unique_id ?> <?php echo $css_container ?> ea-integra<?php echo $count === 0 ? " ea-showing" : "" ?>">
                <div class="<?php echo $css_row ?>">
                    <div class="ea-step-title <?php echo $css_full_col ?>">
                        <h3 class="<?php echo $css_h3 ?>"><?php echo $each_step["step_title"] ?></h3>
                        <span class="ea-warning">Confira os campos</span>
                    </div>
                    <div class="ea-step-content <?php echo $css_full_col ?>">
                        <div class="<?php echo $css_row ?>">

                        <?php foreach( $each_step["question_fields"] as $item ) { ?>

                            <?php if($item["type"] == "hidden") { ?>

                                <input type="hidden"
                                       name="<?php echo $item["name"] ?>"
                                       class="<?php echo $item["class"] . " " .  $css_form_control ?>"
                                       id="<?php echo $item["id"] ?>">

                            <?php } elseif ($item["type"] == "text") { ?>

                                <div class="<?php echo $css_full_col ?>">
                                    <div class="<?php echo $css_form_group ?>">
                                        <label class="ea-integra"
                                               for="<?php echo $item["name"] ?>">
                                            <?php echo $item["label"] ?>

                                        <?php if ( $item["has_span"] ){ ?>
                                            <span class="ea-city-span"></span>
                                        <?php } ?>

                                        </label><br>
                                        <input type="text"
                                               name="<?php echo $item["name"] ?>"
                                               class="ea-field <?php echo $item["class"] . " " . $css_form_control ?>">

                                    </div>
                                </div>

                            <?php } elseif ($item["type"] == "radio") { ?>

                                <?php foreach ( $item["options"] as $option ) { ?>

                                    <div class="<?php echo $css_radio_grid ?>">
                                        <input onclick="validateStep('step<?php echo $unique_id ?>')"
                                               class="ea-field"
                                               id="<?php echo $item["name"] . $option["value"] .  $unique_id ?>"
                                               type="radio"
                                               name="<?php echo $item["name"] ?>"
                                               value="<?php echo $item["value"] ?>"
                                        >

                                        <label  onclick="validateStep('step<?php echo $unique_id ?>')"
                                                for="<?php echo $item["name"] . $option["value"] .  $unique_id ?>"
                                                class="<?php echo $css_radio ?>">
                                                    <?php echo $option["label"] ?>
                                        </label>
                                    </div>

                                <?php } ?>

                            <?php } elseif ($item["type"] == "textarea") { ?>
                                <div class="<?php echo $css_form_group?>">
                                    <label for="<?php echo $item["name"] . $unique_id ?>"><?php echo $item["label"] ?></label><br>
                                    <textarea class="ea-field <?php echo $css_form_control ?>"
                                              name="<?php echo $item["name"] ?>"
                                              placeholder="<?php echo $item["placeholder"] ?>"
                                              id="<?php echo $item["name"] . $unique_id ?>">
                                    </textarea>
                                </div>

                            <?php } ?>

                        <?php } ?>
                            <div class="<?php echo $css_full_col ?>">
                                <div class="<?php echo $css_row ?> ea-step-footer">
                                    <div class="<?php echo $css_center ?>">
                                        <div class="<?php echo $css_form_group ?>">
	                                        <?php if( $count !== 0 ) { ?>
                                                <a class="<?php echo $css_prev_button ?>" onclick="prev('step<?php echo $unique_id ?>')"><?php echo $prev_message ?></a>
                                            <?php } ?>
                                            <a class="<?php echo $css_next_button ?>"
                                               onclick="validateStep('step<?php echo $unique_id ?>')">

                                                <?php if ($count === count( $steps ) - 1) {
                                                    echo "Finalizar!";
                                                } else {
                                                    echo "Próxima Etapa: " . ($count + 2);
                                                } ?>

                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php if( $count === count($steps) - 1) { ?>
                    <button class="ea-hidden ea-button ea-submit" id="ea-submit" type="submit" value="Vai">
                <?php } ?>

            </fieldset>

            <?php } ?>

            <fieldset  class="ea-step step<?php echo $unique_id ?> <?php echo $css_container ?> ea-integra">
                <div class="<?php echo $css_row ?>">
                    <div class="ea-step-title">
                        <div class="ea-wait" style="text-align: center">
                            <h3 class="<?php echo $css_h3 ?>">Aguarde, estamos gravando a sua solicitação...</h3>
                            <img src="<?php echo plugin_dir_url(__FILE__) ?>img/loading.gif" alt="Aguarde, carregando!">
                        </div>
                        <div class="ea-success ea-hidden" style="text-align: center">
                            <h3 class="<?php echo $css_h3 ?>">Obrigado pelo orçamento!</h3>
                            <p>Em breve, um profissional entrará em contato com você</p>
                            <a class="<?php echo $css_primary_button ?>" onclick="validateStep('step<?php echo $unique_id ?>')">Quero fazer outro orçamento!</a>
                        </div>

                    </div>
            </fieldset>
        </form>
    </div>
</div>