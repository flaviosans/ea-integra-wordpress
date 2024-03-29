<?php
  $unique_id = rand(0,999);
  $referer_id = 1234567890;
  $prev_message = "Anterior";
  $next_message = "Próximo";
  $finish_message = "Finalizar";
  $api_url = $_SERVER['REMOTE_ADDR'] == '127.0.0.1' ? "http://localhost:8080" : "https://zeta.entendaantes.com.br";

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
?>



<div class="<?php echo $css_row ?>">
    <div class="<?php echo $css_center_wide ?>" style="height: 600px">
        <form name="ea-integra-form" class="ea-integra" action="<?php echo $api_url ?>/budget" id="ea-form<?php echo $unique_id ?>" method="POST" onsubmit="handleFormSubmit(event, this)">
            <fieldset class="ea-preloader" style="text-align: center">
                <h3 class="<?php echo $css_h3 ?>">Carregando o assistente...</h3>
                <p>Aguarde, nosso assistente ajudará você a realizar o seu sonho fechando o melhor negócio</p>
                <img src="<?php echo plugin_dir_url(__FILE__) ?>img/loading.gif" alt="Aguarde, carregando!">
            </fieldset>
            <fieldset  class="ea-step step<?php echo $unique_id ?> <?php echo $css_container ?> ea-integra ea-showing" >
                <div class="<?php echo $css_row ?>">
                    <div class="ea-step-title <?php echo $css_full_col ?>">
                        <h3 class="<?php echo $css_h3 ?>">Onde será feito o trabalho?</h3>
                        <span class="ea-warning">Confira os campos</span>
                    </div>
                    <div class="ea-step-content <?php echo $css_full_col ?>">
                        <div class="<?php echo $css_row ?>">
                            <input type="hidden" name="meta.refererId" value="<?php echo $referer_id ?>">
                            <input type="hidden" name="deleted" value="true">
                            <input type="hidden" name="meta.city.ibge"  class="ea-field ea-optional-field" id="ibge<?php echo $unique_id ?>" value="000000">
                            <input type="hidden" name="city" class="ea-field ea-optional-field <?php echo $css_form_control ?>" id="city<?php echo $unique_id ?>">
                            <input type="hidden" name="state" class="ea-field ea-optional-field  <?php echo $css_form_control ?>" id="state<?php echo $unique_id ?>">

                            <div class="<?php echo $css_full_col ?>">
                                <div class="<?php echo $css_form_group ?>">
                                    <label class="ea-integra" for="zipCode">CEP: <span class="ea-city-label"></span></label><br>
                                    <input type="text" name="zipCode" class="ea-field ea-masked-zipcode <?php echo $css_form_control ?>">
                                </div>
                            </div>
                            <div class="<?php echo $css_full_col ?>">
                                <div class="<?php echo $css_row ?>">
                                    <div>

                                    </div>

                                </div>
                            </div>
                            <div class="<?php echo $css_full_col ?>">
                                <div class="<?php echo $css_row ?> ea-step-footer">
                                    <div class="<?php echo $css_center ?>">
                                        <div class="<?php echo $css_form_group ?>">
                                            <a class="<?php echo $css_next_button ?>" onclick="validateStep('step<?php echo $unique_id ?>')"><?php echo $next_message ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset  class="ea-step step<?php echo $unique_id ?> <?php echo $css_container ?> ea-integra">
                <div class="<?php echo $css_row ?>">
                    <div class="ea-step-title <?php echo $css_full_col ?>">
                        <h3 class="<?php echo $css_h3 ?>">O seu orçamento se encaixa em qual categoria?</h3>
                        <span class="ea-warning">Escolha ao menos uma categoria</span>
                    </div>
                    <div class="ea-step-content <?php echo $css_full_col ?>">
                        <div class="<?php echo $css_row ?>">
                            <div class="<?php echo $css_radio_grid ?>">
                                <input onclick="validateStep('step<?php echo $unique_id ?>')" class="ea-field" id="budgetCategory.id.1<?php echo $unique_id ?>" type="radio" name="budgetCategory.id" value="1">
                                <label  onclick="validateStep('step<?php echo $unique_id ?>')" for="budgetCategory.id.1<?php echo $unique_id ?>" class="<?php echo $css_radio ?>">
                                    Construção
                                </label>
                            </div>
                            <div class="<?php echo $css_radio_grid ?>">
                                <input onclick="validateStep('step<?php echo $unique_id ?>')" class="ea-field" id="budgetCategory.id.2<?php echo $unique_id ?>" type="radio" name="budgetCategory.id" value="2">
                                <label onclick="validateStep('step<?php echo $unique_id ?>')" for="budgetCategory.id.2<?php echo $unique_id ?>" class="<?php echo $css_radio ?>">
                                    Reforma
                                </label>
                            </div>
                            <div class="<?php echo $css_radio_grid ?>">
                                <input onclick="validateStep('step<?php echo $unique_id ?>')" class="ea-field" id="budgetCategory.id.3<?php echo $unique_id ?>" type="radio" name="budgetCategory.id" value="3">
                                <label onclick="validateStep('step<?php echo $unique_id ?>')" for="budgetCategory.id.3<?php echo $unique_id ?>" class="<?php echo $css_radio ?>">
                                    Decoração
                                </label>
                            </div>
                            <div onclick="switchCategories('<?php echo $unique_id ?>', this)" class="<?php echo $css_radio_grid ?>">
                                <label class="<?php echo $css_radio ?>">
                                    Mais...
                                </label>
                            </div>
                            <div class="<?php echo $css_radio_grid ?> ea-hidden-input ea-hidden-input<?php echo $unique_id ?>">
                                <input onclick="validateStep('step<?php echo $unique_id ?>')" id="budgetCategory.id.4<?php echo $unique_id ?>" class="ea-field" type="radio" name="budgetCategory.id" value="4">
                                <label onclick="validateStep('step<?php echo $unique_id ?>')" for="budgetCategory.id.4<?php echo $unique_id ?>" class="<?php echo $css_radio ?>">
                                    Paisagismo e Jardinagem
                                </label>
                            </div>
                            <div class="<?php echo $css_radio_grid ?> ea-hidden-input ea-hidden-input<?php echo $unique_id ?>">
                                <input onclick="validateStep('step<?php echo $unique_id ?>')" id="budgetCategory.id.7<?php echo $unique_id ?>" class="ea-field" type="radio" name="budgetCategory.id" value="7">
                                <label onclick="validateStep('step<?php echo $unique_id ?>')" for="budgetCategory.id.7<?php echo $unique_id ?>" class="<?php echo $css_radio ?>">
                                    Instalações e serviços
                                </label>
                            </div>
                            <div class="<?php echo $css_radio_grid ?> ea-hidden-input ea-hidden-input<?php echo $unique_id ?>">
                                <input onclick="validateStep('step<?php echo $unique_id ?>')" id="budgetCategory.id.8<?php echo $unique_id ?>" class="ea-field" type="radio" name="budgetCategory.id" value="8">
                                <label onclick="validateStep('step<?php echo $unique_id ?>')" for="budgetCategory.id.8<?php echo $unique_id ?>" class="<?php echo $css_radio ?>">
                                    Pavimentação
                                </label>
                            </div>
                            <div class="<?php echo $css_radio_grid ?> ea-hidden-input ea-hidden-input<?php echo $unique_id ?>">
                                <input onclick="validateStep('step<?php echo $unique_id ?>')" id="budgetCategory.id.11<?php echo $unique_id ?>" class="ea-field" type="radio" name="budgetCategory.id" value="11">
                                <label onclick="validateStep('step<?php echo $unique_id ?>')" for="budgetCategory.id.11<?php echo $unique_id ?>" class="<?php echo $css_radio ?>">
                                    Outros
                                </label>
                            </div>
                            <div class="<?php echo $css_full_col ?>">
                                <div class="<?php echo $css_row ?> ea-step-footer">
                                    <div class="<?php echo $css_center ?>">
                                        <div class="<?php echo $css_form_group ?>">
                                            <a class="<?php echo $css_prev_button ?>" onclick="prev('step<?php echo $unique_id ?>')"><?php echo $prev_message ?></a>
                                            <a class="<?php echo $css_next_button ?>" onclick="validateStep('step<?php echo $unique_id ?>')"><?php echo $next_message ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input class="ea-field" type="hidden" name="budgetSubCategory.id" value="79">
                        <input class="ea-field" type="hidden" name="userIdToSend" value="8bd579a6-a27c-48f0-9151-a1a2d86e1e3e">
                    </div>
                </div>

            </fieldset>
            <fieldset  class="ea-step step<?php echo $unique_id ?> <?php echo $css_container ?> ea-integra">
                <div class="<?php echo $css_row ?>">
                    <div class="ea-step-title <?php echo $css_full_col ?>">
                        <h3 class="<?php echo $css_h3 ?>">Qual é o tipo de imóvel?</h3>
                        <div class="ea-warning">Escolha o tipo de imóvel mais adequado</div>
                    </div>
                    <div class="ea-step-content <?php echo $css_full_col ?>">
                        <div class="<?php echo $css_row ?>">
                            <div class="<?php echo $css_radio_grid ?>">
                                <input onclick="validateStep('step<?php echo $unique_id ?>')" id="propType1<?php echo $unique_id ?>" class="ea-field" type="radio" name="questions.propertyType" value="residence">
                                <label onclick="validateStep('step<?php echo $unique_id ?>')" for="propType1<?php echo $unique_id ?>" class="<?php echo $css_radio ?>"> Residencial
                                </label>
                            </div>
                            <div class="<?php echo $css_radio_grid ?>">
                                <input onclick="validateStep('step<?php echo $unique_id ?>')" id="propType2<?php echo $unique_id ?>" class="ea-field" type="radio" name="questions.propertyType" value="trade">
                                <label onclick="validateStep('step<?php echo $unique_id ?>')" for="propType2<?php echo $unique_id ?>" class="<?php echo $css_radio ?>">  Comercial</label>
                            </div>
                            <div class="<?php echo $css_radio_grid ?>">
                                <input onclick="validateStep('step<?php echo $unique_id ?>')" id="propType3<?php echo $unique_id ?>" class="ea-field" type="radio" name="questions.propertyType" value="industry">
                                <label onclick="validateStep('step<?php echo $unique_id ?>')" for="propType3<?php echo $unique_id ?>" class="<?php echo $css_radio ?>"> Industrial</label>
                            </div>
                            <div class="<?php echo $css_radio_grid ?>">
                                <input onclick="validateStep('step<?php echo $unique_id ?>')" id="propType4<?php echo $unique_id ?>" class="ea-field" type="radio" name="questions.propertyType" value="other">
                                <label onclick="validateStep('step<?php echo $unique_id ?>')" for="propType4<?php echo $unique_id ?>" class="<?php echo $css_radio ?>"> Outro</label>
                            </div>

                            <div class="<?php echo $css_full_col ?>">
                                <div class="<?php echo $css_row ?> ea-step-footer">
                                    <div class="<?php echo $css_center ?>">
                                        <div class="<?php echo $css_form_group ?>">
                                            <a class="<?php echo $css_prev_button ?>" onclick="prev('step<?php echo $unique_id ?>')"><?php echo $prev_message ?></a>
                                            <a class="<?php echo $css_next_button ?>" onclick="validateStep('step<?php echo $unique_id ?>')"><?php echo $next_message ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset  class="ea-step step<?php echo $unique_id ?> <?php echo $css_container ?> ea-integra">
                <div class="<?php echo $css_row ?>">
                    <div class="ea-step-title <?php echo $css_full_col ?>">
                        <h3 class="<?php echo $css_h3 ?>">Quando pretende começar?</h3>
                        <div class="ea-warning">Confira os campos</div>
                    </div>
                    <div class="ea-step-content <?php echo $css_full_col ?>">
                        <div class="<?php echo $css_row ?>">
                            <div class="<?php echo $css_radio_grid ?>">
                                <input onclick="validateStep('step<?php echo $unique_id ?>')" id="start1<?php echo $unique_id ?>" class="ea-field" type="radio" name="questions.start" value="afap">
                                <label onclick="validateStep('step<?php echo $unique_id ?>')" for="start1<?php echo $unique_id ?>" class="<?php echo $css_radio ?>"> O mais rápido possível
                                </label>
                            </div>
                            <div class="<?php echo $css_radio_grid ?>">
                                <input onclick="validateStep('step<?php echo $unique_id ?>')" id="start2<?php echo $unique_id ?>" class="ea-field" type="radio" name="questions.start" value="from_1_to_3_months">
                                <label onclick="validateStep('step<?php echo $unique_id ?>')" for="start2<?php echo $unique_id ?>" class="<?php echo $css_radio ?>"> Entre 1 e 3 meses
                                </label>
                            </div>
                            <div class="<?php echo $css_radio_grid ?>">
                                <input onclick="validateStep('step<?php echo $unique_id ?>')" id="start3<?php echo $unique_id ?>" class="ea-field" type="radio" name="questions.start" value="more_than_3_months">
                                <label onclick="validateStep('step<?php echo $unique_id ?>')" for="start3<?php echo $unique_id ?>" class="<?php echo $css_radio ?>"> Daqui a mais que 3 meses
                                </label>
                            </div>
                            <div class="<?php echo $css_radio_grid ?>">
                                <input onclick="validateStep('step<?php echo $unique_id ?>')" id="start4<?php echo $unique_id ?>" class="ea-field" type="radio" name="questions.start" value="dont_know">
                                <label onclick="validateStep('step<?php echo $unique_id ?>')" for="start4<?php echo $unique_id ?>" class="<?php echo $css_radio ?>"> Ainda não sei
                                </label>
                            </div>

                            <div class="<?php echo $css_full_col ?>">
                                <div class="<?php echo $css_row ?> ea-step-footer">
                                    <div class="<?php echo $css_center ?>">
                                        <div class="<?php echo $css_form_group ?>">
                                            <a class="<?php echo $css_prev_button ?>" onclick="prev('step<?php echo $unique_id ?>')"><?php echo $prev_message ?></a>
                                            <a class="<?php echo $css_next_button ?>" onclick="validateStep('step<?php echo $unique_id ?>')"><?php echo $next_message ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </fieldset>
            <fieldset  class="ea-step step<?php echo $unique_id ?> <?php echo $css_container ?> ea-integra">
                <div class="<?php echo $css_row ?>">
                    <div class="ea-step-title <?php echo $css_full_col ?>">
                        <h3 class="<?php echo $css_h3 ?>">Nos descreva seu pedido</h3>
                        <div class="ea-warning">Confira os campos</div>
                    </div>

                    <div class="ea-step-content <?php echo $css_full_col ?>">

                        <div class="<?php echo $css_form_group?>">
                            <label>Escreva o que você precisa:</label><br>
                            <input class="ea-field <?php echo $css_form_control ?>" type="text" name="title" placeholder="Ex: quero reformar meu escritório"/>
                        </div>
                        <div class="<?php echo $css_form_group?>">
                            <label for="">Escreva aqui, com mais detalhes</label><br>
                            <textarea class="ea-field <?php echo $css_form_control ?>" name="description" placeholder="Adicione os detalhes que você gostaria de explicar para o profissional. Quanto mais informações, melhor e mais rápida será a resposta!"></textarea>
                        </div>

                        <div class="<?php echo $css_full_col ?>">
                            <div class="<?php echo $css_row ?> ea-step-footer">
                                <div class="<?php echo $css_center ?>">
                                    <div class="<?php echo $css_form_group ?>">
                                        <a class="<?php echo $css_prev_button ?>" onclick="prev('step<?php echo $unique_id ?>')"><?php echo $prev_message ?></a>
                                        <a class="<?php echo $css_next_button ?>" onclick="validateStep('step<?php echo $unique_id ?>')"><?php echo $next_message ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </fieldset>
            <fieldset  class="ea-step step<?php echo $unique_id ?> <?php echo $css_container ?> ea-integra">
                <div class="<?php echo $css_row ?>">
                    <div class="ea-step-title <?php echo $css_full_col ?>">
                        <h3 class="<?php echo $css_h3 ?>">Melhor horário para contato:</h3>
                        <div class="ea-warning">Confira os campos</div>
                    </div>
                    <div class="ea-step-content <?php echo $css_full_col ?>">
                        <div class="<?php echo $css_row ?>">
                            <div class="<?php echo $css_third_col ?>">
                                <input onclick="validateStep('step<?php echo $unique_id ?>')" id="contm<?php echo $unique_id ?>" class="ea-field" type="radio" name="questions.contact_hour" value="morning">
                                <label onclick="validateStep('step<?php echo $unique_id ?>')" for="contm<?php echo $unique_id ?>"class="<?php echo $css_radio ?>"> Manhã
                                </label>
                            </div>
                            <div class="<?php echo $css_third_col ?>">
                                <input onclick="validateStep('step<?php echo $unique_id ?>')" id="conta<?php echo $unique_id ?>" class="ea-field" type="radio" name="questions.contact_hour" value="afternoon">
                                <label onclick="validateStep('step<?php echo $unique_id ?>')" for="conta<?php echo $unique_id ?>" class="<?php echo $css_radio ?>"> Tarde
                                </label>
                            </div>
                            <div class="<?php echo $css_third_col ?>">
                                <input onclick="validateStep('step<?php echo $unique_id ?>')" id="contn<?php echo $unique_id ?>" class="ea-field" type="radio" name="questions.contact_hour" value="night">
                                <label onclick="validateStep('step<?php echo $unique_id ?>')" for="contn<?php echo $unique_id ?>" class="<?php echo $css_radio ?>"> Noite
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="<?php echo $css_full_col ?>">
                                <div class="<?php echo $css_row ?> ea-step-footer">
                                    <div class="<?php echo $css_center ?>">
                                        <div class="<?php echo $css_form_group ?>">
                                            <a class="<?php echo $css_prev_button ?>" onclick="prev('step<?php echo $unique_id ?>')"><?php echo $prev_message ?></a>
                                            <a class="<?php echo $css_next_button ?>" onclick="validateStep('step<?php echo $unique_id ?>')"><?php echo $next_message ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
            </fieldset>
            <fieldset  class="ea-step step<?php echo $unique_id ?> <?php echo $css_container ?> ea-integra">
                <div class="<?php echo $css_row ?>">
                    <div class="ea-step-title <?php echo $css_full_col ?>">
                        <h3 class="<?php echo $css_h3 ?>">O pedido é para:</h3>
                        <div class="ea-warning">Confira os campos</div>
                    </div>
                    <div class="step-content <?php echo $css_full_col ?>">
                        <div class="<?php echo $css_row ?>">
                            <div class="<?php echo $css_half_col ?>">
                                <input onclick="validateStep('step<?php echo $unique_id ?>')" id="ptype1<?php echo $unique_id ?>" class="ea-field" type="radio" name="questions.person_type" value="pf">
                                <label onclick="validateStep('step<?php echo $unique_id ?>')" for="ptype1<?php echo $unique_id ?>" class="<?php echo $css_radio ?>"> Pessoa Física
                                </label>
                            </div>
                            <div class="<?php echo $css_half_col ?>">
                                <input onclick="validateStep('step<?php echo $unique_id ?>')" id="ptype2<?php echo $unique_id ?>" class="ea-field" type="radio" name="questions.person_type" value="pj">
                                <label onclick="validateStep('step<?php echo $unique_id ?>')" for="ptype2<?php echo $unique_id ?>" class="<?php echo $css_radio ?>"> Pessoa Jurídica
                                </label>
                            </div>
                        </div>
                        <div class="<?php echo $css_full_col ?>">
                            <div class="<?php echo $css_row ?> ea-step-footer">
                                <div class="<?php echo $css_center ?>">
                                    <div class="<?php echo $css_form_group ?>">
                                        <a class="<?php echo $css_prev_button ?>" onclick="prev('step<?php echo $unique_id ?>')"><?php echo $prev_message ?></a>
                                        <a class="<?php echo $css_next_button ?>" onclick="validateStep('step<?php echo $unique_id ?>')"><?php echo $next_message ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </fieldset>
            <fieldset  class="ea-step step<?php echo $unique_id ?> <?php echo $css_container ?> ea-integra">
                <div class="<?php echo $css_row ?>">
                    <div class="ea-step-title <?php echo $css_full_col ?>">
                        <h3 class="<?php echo $css_h3 ?>">Estimativa de investimento:</h3>
                        <div class="ea-warning">Confira os campos</div>
                    </div>
                    <div class="ea-step-content <?php echo $css_full_col ?>">
                        <div class="<?php echo $css_row ?>">
                            <div class="<?php echo $css_radio_grid ?>">
                                <input onclick="validateStep('step<?php echo $unique_id ?>')" id="est1<?php echo $unique_id ?>" class="ea-field" type="radio" name="estimatedPrice" value="1">
                                <label onclick="validateStep('step<?php echo $unique_id ?>')" for="est1<?php echo $unique_id ?>" class="<?php echo $css_radio ?>"> R$ 20 mil
                                </label>
                            </div>
                            <div class="<?php echo $css_radio_grid ?>">
                                <input onclick="validateStep('step<?php echo $unique_id ?>')" id="est2<?php echo $unique_id ?>" class="ea-field" type="radio" name="estimatedPrice" value="2">
                                <label onclick="validateStep('step<?php echo $unique_id ?>')" for="est2<?php echo $unique_id ?>" class="<?php echo $css_radio ?>"> R$ 40 mil
                                </label>
                            </div>
                            <div class="<?php echo $css_radio_grid ?>">
                                <input onclick="validateStep('step<?php echo $unique_id ?>')" id="est3<?php echo $unique_id ?>" class="ea-field" type="radio" name="estimatedPrice" value="3">
                                <label onclick="validateStep('step<?php echo $unique_id ?>')" for="est3<?php echo $unique_id ?>" class="<?php echo $css_radio ?>"> R$ 80 mil
                                </label>
                            </div>
                            <div class="<?php echo $css_radio_grid ?>">
                                <input onclick="validateStep('step<?php echo $unique_id ?>')" id="est4<?php echo $unique_id ?>" class="ea-field" type="radio" name="estimatedPrice" value="4">
                                <label onclick="validateStep('step<?php echo $unique_id ?>')" for="est4<?php echo $unique_id ?>" class="<?php echo $css_radio ?>"> Acima de R$ 80 mil
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="<?php echo $css_full_col ?>">
                        <div class="<?php echo $css_row ?> ea-step-footer">
                            <div class="<?php echo $css_center ?>">
                                <div class="<?php echo $css_form_group ?>">
                                    <a class="<?php echo $css_prev_button ?>" onclick="prev('step<?php echo $unique_id ?>')"><?php echo $prev_message ?></a>
                                    <a class="<?php echo $css_next_button ?>" onclick="validateStep('step<?php echo $unique_id ?>')"><?php echo $next_message ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset  class="ea-step step<?php echo $unique_id ?> <?php echo $css_container ?> ea-integra">
                <div class="<?php echo $css_row ?>">
                    <div class="ea-step-title <?php echo $css_full_col ?>">
                        <h3 class="<?php echo $css_h3 ?>">Interesse:</h3>
                        <div class="ea-warning">Confira os campos</div>
                    </div>
                    <div class="ea-step-content <?php echo $css_full_col ?>">
                        <div class="<?php echo $css_row ?>">
                            <div class="<?php echo $css_full_col ?>">
                                <input onclick="validateStep('step<?php echo $unique_id ?>')" id="interest1<?php echo $unique_id ?>" class="ea-field" type="radio" name="meta.interest" value="saber_apenas_precos_a_fim_de_comparacao">
                                <label onclick="validateStep('step<?php echo $unique_id ?>')" for="interest1<?php echo $unique_id ?>" class="<?php echo $css_radio ?>">Saber apenas preços a fim de comparação
                                </label>
                            </div>
                            <div class="<?php echo $css_full_col ?>">
                                <input onclick="validateStep('step<?php echo $unique_id ?>')" id="interest2<?php echo $unique_id ?>" class="ea-field" type="radio" name="meta.interest" value="tirar_duvidas_para_saber_melhor_o_que_desejo_fazer">
                                <label onclick="validateStep('step<?php echo $unique_id ?>')" for="interest2<?php echo $unique_id ?>" class="<?php echo $css_radio ?>">
                                    Tirar dúvidas para saber melhor o que desejo fazer
                                </label>
                            </div>
                            <div class="<?php echo $css_full_col ?>">
                                <input onclick="validateStep('step<?php echo $unique_id ?>')" id="interest3<?php echo $unique_id ?>" class="ea-field" type="radio" name="meta.interest" value="negociar_a_execucao_do_servico_com_um_profissional">
                                <label onclick="validateStep('step<?php echo $unique_id ?>')" for="interest3<?php echo $unique_id ?>" class="<?php echo $css_radio ?>">
                                    Negociar a execução do serviço com um profissional
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="<?php echo $css_full_col ?>">
                        <div class="<?php echo $css_row ?> ea-step-footer">
                            <div class="<?php echo $css_center ?>">
                                <div class="<?php echo $css_form_group ?>">
                                    <a class="<?php echo $css_prev_button ?>" onclick="prev('step<?php echo $unique_id ?>')"><?php echo $prev_message ?></a>
                                    <a class="<?php echo $css_next_button ?>" onclick="validateStep('step<?php echo $unique_id ?>')"><?php echo $next_message ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset  class="ea-step step<?php echo $unique_id ?> <?php echo $css_container ?> ea-integra" >
                <div class="<?php echo $css_row ?>">
                    <div class="ea-step-title <?php echo $css_full_col ?>">
                        <h3 class="<?php echo $css_h3 ?>">Informações de contato:</h3>
                        <span class="ea-warning">Confira os campos</span>
                    </div>
                    <div class="ea-step-content <?php echo $css_full_col ?>">
                        <div class="<?php echo $css_row ?>">
                            <div class="<?php echo $css_full_col ?>">
                                <div class="<?php echo $css_form_group ?>">
                                    <label class="ea-integra" for="userApp.name" >Nome:</label>
                                    <input type="text" name="userApp.name" class="ea-field <?php echo $css_form_control ?>"/>
                                </div>
                            </div>
                            <div class="<?php echo $css_full_col ?>">
                                <div class="<?php echo $css_form_group ?>">
                                    <label class="ea-integra" for="userApp.email">E-mail:</label><br>
                                    <input type="text" name="userApp.email" class="ea-field ea-masked-email <?php echo $css_form_control ?>"/>
                                </div>
                            </div>
                            <div class="<?php echo $css_full_col ?>">
                                <div class="<?php echo $css_form_group ?>">
                                    <label class="ea-integra" for="userApp.phone">Telefone:</label><br>
                                    <input type="text" name="userApp.phone" class="ea-field ea-masked-phone  <?php echo $css_form_control ?>">
                                </div>
                            </div>
                            <div class="<?php echo $css_full_col ?>">
                                <div class="<?php echo $css_row ?> ea-step-footer">
                                    <div class="<?php echo $css_center ?>">
                                        <div class="<?php echo $css_form_group ?>">
                                            <a class="<?php echo $css_next_button ?>" onclick="validateStep('step<?php echo $unique_id ?>')"><?php echo $finish_message ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="ea-hidden ea-button ea-submit" id="ea-submit" type="submit" value="Vai">
            </fieldset>
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