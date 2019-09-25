<?php 
  $unique_id = 'n555';
  $referer_id = 1234567890;
  $next_message = "Próximo";
  $prev_message = "Anterior";
  $api_url = "http://localhost:8080";

  // Elemento que vai conter o grid
  $css_row = "row";
  // Botão padrão
  $css_default_button = "button";
  $css_primary_button = "button primary";
  $css_secondary_button = "button secondary";
  // Botão 'anterior'
  $css_prev_button = $css_default_button;
  // Botão 'próximo'
  $css_next_button = $css_primary_button;
  // Para coluna de linha inteira
  $css_full_col = "col-md-12 col-sm-12";
  $css_half_col = "col-md-6 col-sm-6";
  $css_third_col = "col-md-4 col-sm-4";
  $css_sixth_col = "col-md-2 col-sm-2";
  $css_offset_button = "col-sm-4 col-sm-offset-8";
  // Div do Input do formulário
  $css_form_group = "form-group";
  $css_button_group = $css_form_group;
  $css_checkbox = "button primary";
  $css_radio = "button ea-full-width-item";
  $css_radio_grid = "col-sm-12 col-md-6";
  $css_form_control = "form-control";

  $css_container = "container";
?>
<div class="container">
    <div class="row">
        <form  class="ea-form col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3 col-sm-12" action="<?php echo $api_url ?>/budget" id="ea-form<?php echo $unique_id ?>" method="POST" onsubmit="handleFormSubmit(event, this)">
            <fieldset class="ea-step step<?php echo $unique_id ?> <?php echo $css_container ?>">
                <div class="<?php echo $css_row ?>">
                    <div class="ea-step-title <?php echo $css_full_col ?>">
                        <h2>Onde será feito o trabalho?</h2>
                        <span class="ea-warning">Alguns campos precisam ser preenchidos</span>
                    </div>
                    <div class="ea-step-content <?php echo $css_full_col ?>">
                        <div class="<?php echo $css_row ?>">
                            <input type="hidden" name="meta.refererId" value="<?php echo $referer_id ?>">
                            <input type="hidden" name="meta.city.ibge"  class="ea-field ea-optional-field" id="ibge<?php echo $unique_id ?>" value="000000">
                            <div class="<?php echo $css_third_col ?>">
                                <div class="<?php echo $css_form_group ?>">
                                    <label for="zipCode">CEP:</label><br>
                                    <input type="text" name="zipCode" class="ea-field ea-masked-zipcode <?php echo $css_form_control ?>">
                                </div>
                            </div>

                            <div class="<?php echo $css_half_col ?>">
                                <div class="<?php echo $css_form_group ?>">
                                    <label for="city"  class="col-sm-3">Cidade:</label>
                                    <input type="text" name="city" class="ea-field ea-optional-field <?php echo $css_form_control ?>" id="city<?php echo $unique_id ?>">
                                </div>
                            </div>

                            <div class="<?php echo $css_sixth_col ?>">
                                <div class="<?php echo $css_form_group ?>">
                                    <label for="state" class="col-sm-3">Estado:</label>
                                    <input type="text" name="state" class="ea-field ea-optional-field  <?php echo $css_form_control ?>" id="state<?php echo $unique_id ?>">
                                </div>
                            </div>
                            <div class="<?php echo $css_full_col ?>">
                                <div class="<?php echo $css_form_group ?>">
                                    <label for="userApp.name" >Nome:</label>
                                    <input type="text" name="userApp.name" class="ea-field <?php echo $css_form_control ?>"/>
                                </div>
                            </div>
                            <div class="<?php echo $css_full_col ?>">
                                <div class="<?php echo $css_form_group ?>">
                                    <label for="userApp.email">E-mail:</label><br>
                                    <input type="text" name="userApp.email" class="ea-field ea-masked-email <?php echo $css_form_control ?>"/>
                                </div>
                            </div>
                            <div class="<?php echo $css_full_col ?>">
                                <div class="<?php echo $css_form_group ?>">
                                    <label for="userApp.phone">Telefone:</label><br>
                                    <input type="text" name="userApp.phone" class="ea-field ea-masked-phone  <?php echo $css_form_control ?>">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ea-step-footer <?php echo $css_full_col ?>">
                        <div class="<?php echo $css_row ?>">
                            <div class="<?php echo $css_half_col ?>">
                                <a class="<?php echo $css_prev_button ?>" onclick="prev('step<?php echo $unique_id ?>')"><?php echo $prev_message ?></a>
                            </div>
                            <div class="<?php echo $css_half_col ?>">
                                <a class="<?php echo $css_next_button ?>" onclick="validateStep('step<?php echo $unique_id ?>')"><?php echo $next_message ?></a>
                            </div>
                        </div>
                    </div>
                </div>

            </fieldset>
            <fieldset class="ea-step step<?php echo $unique_id ?> <?php echo $css_container ?>">
                <div class="<?php echo $css_row ?>">
                    <div class="ea-step-title <?php echo $css_full_col ?>">
                        <h2>O orçamento que você deseja se encaixa em qual categoria?</h2>
                        <span class="ea-warning">Escolha ao menos uma categoria</span>
                    </div>
                    <div class="ea-step-content <?php echo $css_full_col ?>">
                        <div class="<?php echo $css_row ?>">
                            <div class="<?php echo $css_radio_grid ?>">
                                <input  class="ea-field" id="budgetCategory.id.1<?php echo $unique_id ?>" type="radio" name="budgetCategory.id" value="1">
                                <label onclick="validateStep('step<?php echo $unique_id ?>')" for="budgetCategory.id.1<?php echo $unique_id ?>" class="<?php echo $css_radio ?>">
                                    Label 1
                                </label>
                            </div>

                            <div class="<?php echo $css_radio_grid ?>">
                                <input class="ea-field" id="budgetCategory.id.2<?php echo $unique_id ?>" type="radio" name="budgetCategory.id" value="2">
                                <label onclick="validateStep('step<?php echo $unique_id ?>')" for="budgetCategory.id.2<?php echo $unique_id ?>" class="<?php echo $css_radio ?>">
                                    Label 2
                                </label>
                            </div>

                            <div class="<?php echo $css_radio_grid ?>">
                                <input class="ea-field" id="budgetCategory.id.3<?php echo $unique_id ?>" type="radio" name="budgetCategory.id" value="3">
                                <label onclick="validateStep('step<?php echo $unique_id ?>')" for="budgetCategory.id.3<?php echo $unique_id ?>" class="<?php echo $css_radio ?>">
                                    Label 3
                                </label>
                            </div>
                            <div onclick="switchCategories('<?php echo $unique_id ?>', this)" class="<?php echo $css_radio_grid ?>">
                                <label class="<?php echo $css_radio ?>">
                                    Mais...
                                </label>
                            </div>

                            <div id="ea-hidden-cats<?php echo $unique_id ?>" class="ea-hidden">
                                <div class="<?php echo $css_row ?>">
                                    <div class="<?php echo $css_radio_grid ?>">
                                        <input id="budgetCategory.id.4<?php echo $unique_id ?>" class="ea-field" type="radio" name="budgetCategory.id" value="4">
                                        <label onclick="validateStep('step<?php echo $unique_id ?>')" for="budgetCategory.id.4<?php echo $unique_id ?>" class="<?php echo $css_radio ?>">Complementar</label>
                                    </div>
                                    <div class="<?php echo $css_radio_grid ?>">
                                        <input id="budgetCategory.id.5<?php echo $unique_id ?>" class="ea-field" type="radio" name="budgetCategory.id" value="5">
                                        <label onclick="validateStep('step<?php echo $unique_id ?>')" for="budgetCategory.id.5<?php echo $unique_id ?>" class="<?php echo $css_radio ?>"> Outro complementar
                                        </label>
                                    </div>
                                    <div class="<?php echo $css_radio_grid ?>">
                                        <input id="budgetCategory.id.6<?php echo $unique_id ?>" class="ea-field" type="radio" name="budgetCategory.id" value="6">
                                        <label onclick="validateStep('step<?php echo $unique_id ?>')" for="budgetCategory.id.6<?php echo $unique_id ?>" class="<?php echo $css_radio ?>"> Mais um complementar
                                        </label>
                                    </div>
                                    <div class="<?php echo $css_radio_grid ?>">
                                        <input id="budgetCategory.id.7<?php echo $unique_id ?>" class="ea-field" type="radio" name="budgetCategory.id" value="7">
                                        <label onclick="validateStep('step<?php echo $unique_id ?>')" for="budgetCategory.id.7<?php echo $unique_id ?>" class="<?php echo $css_radio ?>"> Another
                                        </label>
                                    </div>
                                    <div class="<?php echo $css_radio_grid ?>">
                                        <input id="budgetCategory.id.8<?php echo $unique_id ?>" class="ea-field" type="radio" name="budgetCategory.id" value="8">
                                        <label onclick="validateStep('step<?php echo $unique_id ?>')" for="budgetCategory.id.8<?php echo $unique_id ?>" class="<?php echo $css_radio ?>"> One more time
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <input class="ea-field" type="hidden" name="budgetSubCategory.id" value="79">
                        </div>
                    </div>
                    <div class="ea-step-footer <?php echo $css_full_col ?>">
                        <div class="<?php echo $css_row ?>">
                            <div class="<?php echo $css_half_col ?>">

                                <a class="<?php echo $css_prev_button ?>" onclick="prev('step<?php echo $unique_id ?>')"><?php echo $prev_message ?></a>
                            </div>
                            <div class="<?php echo $css_half_col ?>">
                                <a class="<?php echo $css_next_button ?>" onclick="validateStep('step<?php echo $unique_id ?>')"><?php echo $next_message ?></a>
                            </div>
                        </div>
                    </div>
                </div>

            </fieldset>
            <fieldset class="ea-step step<?php echo $unique_id ?> <?php echo $css_container ?>">
                <div class="<?php echo $css_row ?>">
                    <div class="ea-step-title <?php echo $css_full_col ?>">
                        <h2>Qual é o tipo de imóvel?</h2>
                        <div class="ea-warning">Escolha o tipo de imóvel mais adequado</div>
                    </div>
                    <div class="ea-step-content <?php echo $css_full_col ?>">
                        <div class="<?php echo $css_row ?>">
                            <div class="<?php echo $css_radio_grid ?>">
                                <input id="propType1<?php echo $unique_id ?>" class="ea-field" type="radio" name="questions.propertyType" value="residence">
                                <label onclick="validateStep('step<?php echo $unique_id ?>')" for="propType1<?php echo $unique_id ?>" class="<?php echo $css_radio ?>"> Residencial
                                </label>
                            </div>
                            <div class="<?php echo $css_radio_grid ?>">
                                <input id="propType2<?php echo $unique_id ?>" class="ea-field" type="radio" name="questions.propertyType" value="trade">
                                <label onclick="validateStep('step<?php echo $unique_id ?>')" for="propType2<?php echo $unique_id ?>" class="<?php echo $css_radio ?>">  Comercial</label>
                            </div>
                            <div class="<?php echo $css_radio_grid ?>">
                                <input id="propType3<?php echo $unique_id ?>" class="ea-field" type="radio" name="questions.propertyType" value="industry">
                                <label onclick="validateStep('step<?php echo $unique_id ?>')" for="propType3<?php echo $unique_id ?>" class="<?php echo $css_radio ?>"> Industrial</label>
                            </div>
                            <div class="<?php echo $css_radio_grid ?>">
                                <input id="propType4<?php echo $unique_id ?>" class="ea-field" type="radio" name="questions.propertyType" value="other">
                                <label onclick="validateStep('step<?php echo $unique_id ?>')" for="propType4<?php echo $unique_id ?>" class="<?php echo $css_radio ?>"> Outro</label>
                            </div>
                        </div>
                    </div>
                    <div class="ea-step-footer <?php echo $css_full_col ?>">
                        <div class="<?php echo $css_row ?>">
                            <div class="<?php echo $css_half_col ?>">

                                <a class="<?php echo $css_prev_button ?>" onclick="prev('step<?php echo $unique_id ?>')"><?php echo $prev_message ?></a>
                            </div>
                            <div class="<?php echo $css_half_col ?>">
                                <a class="<?php echo $css_next_button ?>" onclick="validateStep('step<?php echo $unique_id ?>')"><?php echo $next_message ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset class="ea-step step<?php echo $unique_id ?> <?php echo $css_container ?>">
                <div class="<?php echo $css_row ?>">
                    <div class="ea-step-title <?php echo $css_full_col ?>">
                        <h2>Quando pretende começar?</h2>
                        <div class="ea-warning">Confira os campos</div>
                    </div>
                    <div class="ea-step-content <?php echo $css_full_col ?>">
                        <div class="<?php echo $css_row ?>">
                            <div class="<?php echo $css_radio_grid ?>">
                                <input id="start1<?php echo $unique_id ?>" class="ea-field" type="radio" name="questions.start" value="afap">
                                <label onclick="validateStep('step<?php echo $unique_id ?>')" for="start1<?php echo $unique_id ?>" class="<?php echo $css_radio ?>"> O mais rápido possível
                                </label>
                            </div>
                            <div class="<?php echo $css_radio_grid ?>">
                                <input id="start2<?php echo $unique_id ?>" class="ea-field" type="radio" name="questions.start" value="from_1_to_3_months">
                                <label onclick="validateStep('step<?php echo $unique_id ?>')" for="start2<?php echo $unique_id ?>" class="<?php echo $css_radio ?>"> Entre 1 e 3 meses
                                </label>
                            </div>
                            <div class="<?php echo $css_radio_grid ?>">
                                <input id="start3<?php echo $unique_id ?>" class="ea-field" type="radio" name="questions.start" value="more_than_3_months">
                                <label onclick="validateStep('step<?php echo $unique_id ?>')" for="start3<?php echo $unique_id ?>" class="<?php echo $css_radio ?>"> Daqui a mais que 3 meses
                                </label>
                            </div>
                            <div class="<?php echo $css_radio_grid ?>">
                                <input id="start4<?php echo $unique_id ?>" class="ea-field" type="radio" name="questions.start" value="dont_know">
                                <label onclick="validateStep('step<?php echo $unique_id ?>')" for="start4<?php echo $unique_id ?>" class="<?php echo $css_radio ?>"> Ainda não sei
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="ea-step-footer <?php echo $css_full_col ?>">
                        <div class="<?php echo $css_row ?>">
                            <div class="<?php echo $css_half_col ?>">

                                <a class="<?php echo $css_prev_button ?>" onclick="prev('step<?php echo $unique_id ?>')"><?php echo $prev_message ?></a>
                            </div>
                            <div class="<?php echo $css_half_col ?>">
                                <a class="<?php echo $css_next_button ?>" onclick="validateStep('step<?php echo $unique_id ?>')"><?php echo $next_message ?></a>
                            </div>
                        </div>
                    </div>
                </div>

            </fieldset>
            <fieldset class="ea-step step<?php echo $unique_id ?> <?php echo $css_container ?>">
                <div class="<?php echo $css_row ?>">
                    <div class="ea-step-title <?php echo $css_full_col ?>">
                        <h2>Queremos saber um pouco mais sobre seu pedido</h2>
                        <div class="ea-warning">Confira os campos</div>
                    </div>

                    <div class="ea-step-content <?php echo $css_full_col ?>">

                        <div class="<?php echo $css_form_group?>">
                            <label>Escreva o que você precisa:</label><br>
                            <input class="ea-field <?php echo $css_form_control ?>" type="text" name="title" placeholder="Ex.: quero reformar meu escritório"/>
                        </div>
                        <div class="<?php echo $css_form_group?>">
                            <label for="">Escreva aqui, com mais detalhes</label><br>
                            <textarea class="ea-field <?php echo $css_form_control ?>" name="description" placeholder="Adicione os detalhes que você gostaria de explicar para o profissional. Quanto mais informações, melhor e mais rápida será a resposta!"></textarea>
                        </div>
                    </div>
                    <div class="ea-step-footer <?php echo $css_full_col ?>">
                        <div class="<?php echo $css_row ?>">
                            <div class="<?php echo $css_half_col ?>">

                                <a class="<?php echo $css_prev_button ?>" onclick="prev('step<?php echo $unique_id ?>')"><?php echo $prev_message ?></a>
                            </div>
                            <div class="<?php echo $css_half_col ?>">
                                <a class="<?php echo $css_next_button ?>" onclick="validateStep('step<?php echo $unique_id ?>')"><?php echo $next_message ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset class="ea-step step<?php echo $unique_id ?> <?php echo $css_container ?>">
                <div class="<?php echo $css_row ?>">
                    <div class="ea-step-title <?php echo $css_full_col ?>">
                        <h2>Melhor horário para contato:</h2>
                        <div class="ea-warning">Confira os campos</div>
                    </div>
                    <div class="ea-step-content <?php echo $css_full_col ?>">
                        <div class="<?php echo $css_row ?>">
                            <div class="<?php echo $css_third_col ?>">
                                <input id="contm<?php echo $unique_id ?>" class="ea-field" type="radio" name="questions.contact_hour" value="morning">
                                <label onclick="validateStep('step<?php echo $unique_id ?>')" for="contm<?php echo $unique_id ?>"class="<?php echo $css_radio ?>"> Manhã
                                </label>
                            </div>
                            <div class="<?php echo $css_third_col ?>">
                                <input id="conta<?php echo $unique_id ?>" class="ea-field" type="radio" name="questions.contact_hour" value="afternoon">
                                <label onclick="validateStep('step<?php echo $unique_id ?>')" for="conta<?php echo $unique_id ?>" class="<?php echo $css_radio ?>"> Tarde
                                </label>
                            </div>
                            <div class="<?php echo $css_third_col ?>">
                                <input id="contn<?php echo $unique_id ?>" class="ea-field" type="radio" name="questions.contact_hour" value="night">
                                <label onclick="validateStep('step<?php echo $unique_id ?>')" for="contn<?php echo $unique_id ?>" class="<?php echo $css_radio ?>"> Noite
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="ea-step-title <?php echo $css_full_col ?>">
                        <h2>O pedido é para:</h2>
                        <div class="ea-warning">Confira os campos</div>
                    </div>
                    <div class="step-content <?php echo $css_full_col ?>">
                        <div class="<?php echo $css_row ?>">
                            <div class="<?php echo $css_half_col ?>">
                                <input id="ptype1<?php echo $unique_id ?>" class="ea-field" type="radio" name="questions.person_type" value="pf">
                                <label onclick="validateStep('step<?php echo $unique_id ?>')" for="ptype1<?php echo $unique_id ?>" class="<?php echo $css_radio ?>"> Pessoa Física
                                </label>
                            </div>
                            <div class="<?php echo $css_half_col ?>">
                                <input id="ptype2<?php echo $unique_id ?>" class="ea-field" type="radio" name="questions.person_type" value="pj">
                                <label onclick="validateStep('step<?php echo $unique_id ?>')" for="ptype2<?php echo $unique_id ?>" class="<?php echo $css_radio ?>"> Pessoa Jurídica
                                </label>
                            </div>

                        </div>
                    </div>
                    <div class="ea-step-footer <?php echo $css_full_col ?>">
                        <div class="<?php echo $css_row ?>">
                            <div class="<?php echo $css_half_col ?>">
                                <a class="<?php echo $css_prev_button ?>" onclick="prev('step<?php echo $unique_id ?>')"><?php echo $prev_message ?></a>
                            </div>
                            <div class="<?php echo $css_half_col ?>">
                                <a class="<?php echo $css_next_button ?>" onclick="validateStep('step<?php echo $unique_id ?>')"><?php echo $next_message ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset class="ea-step step<?php echo $unique_id ?> <?php echo $css_container ?>">
                <div class="<?php echo $css_row ?>">
                    <div class="ea-step-title <?php echo $css_full_col ?>">
                        <h2>Interesse:</h2>
                        <div class="ea-warning">Confira os campos</div>
                    </div>
                    <div class="ea-step-content">
                        <div class="<?php echo $css_row ?>">
                            <div class="<?php echo $css_third_col ?>">
                                <input id="interest1<?php echo $unique_id ?>" class="ea-field" type="radio" name="meta.interest" value="saber_apenas_precos_a_fim_de_comparacao">
                                <label onclick="validateStep('step<?php echo $unique_id ?>')" for="interest1<?php echo $unique_id ?>" class="<?php echo $css_radio ?>">Saber apenas preços a fim de comparação
                                </label>
                            </div>
                            <div class="<?php echo $css_third_col ?>">
                                <input id="interest2<?php echo $unique_id ?>" class="ea-field" type="radio" name="meta.interest" value="tirar_duvidas_para_saber_melhor_o_que_desejo_fazer">
                                <label onclick="validateStep('step<?php echo $unique_id ?>')" for="interest2<?php echo $unique_id ?>" class="<?php echo $css_radio ?>">
                                    Tirar dúvidas para saber melhor o que desejo fazer
                                </label>
                            </div>
                            <div class="<?php echo $css_third_col ?>">
                                <input id="interest3<?php echo $unique_id ?>" class="ea-field" type="radio" name="meta.interest" value="negociar_a_execucao_do_servico_com_um_profissional">
                                <label onclick="validateStep('step<?php echo $unique_id ?>')" for="interest3<?php echo $unique_id ?>" class="<?php echo $css_radio ?>">
                                    Negociar a execução do serviço com um profissional
                                </label>
                            </div>
                        </div>

                        <div class="ea-step-title <?php echo $css_full_col ?>">
                            <h2>Estimativa de investimento:</h2>
                            <div class="ea-warning">Confira os campos</div>
                        </div>
                        <div class="<?php echo $css_row ?>">
                            <div class="<?php echo $css_radio_grid ?>">
                                <input id="est1<?php echo $unique_id ?>" class="ea-field" type="radio" name="estimatedPrice" value="1">
                                <label onclick="validateStep('step<?php echo $unique_id ?>')" for="est1<?php echo $unique_id ?>" class="<?php echo $css_radio ?>"> R$ 20 mil
                                </label>
                            </div>
                            <div class="<?php echo $css_radio_grid ?>">
                                <input id="est2<?php echo $unique_id ?>" class="ea-field" type="radio" name="estimatedPrice" value="2">
                                <label onclick="validateStep('step<?php echo $unique_id ?>')" for="est2<?php echo $unique_id ?>" class="<?php echo $css_radio ?>"> R$ 40 mil
                                </label>
                            </div>
                            <div class="<?php echo $css_radio_grid ?>">
                                <input id="est3<?php echo $unique_id ?>" class="ea-field" type="radio" name="estimatedPrice" value="3">
                                <label onclick="validateStep('step<?php echo $unique_id ?>')" for="est3<?php echo $unique_id ?>" class="<?php echo $css_radio ?>"> R$ 60 mil
                                </label>
                            </div>
                            <div class="<?php echo $css_radio_grid ?>">
                                <input id="est4<?php echo $unique_id ?>" class="ea-field" type="radio" name="estimatedPrice" value="4">
                                <label onclick="validateStep('step<?php echo $unique_id ?>')" for="est4<?php echo $unique_id ?>" class="<?php echo $css_radio ?>"> R$ 80 mil
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="ea-step-footer <?php echo $css_full_col ?>">
                        <div class="<?php echo $css_row ?>">
                            <div class="<?php echo $css_half_col ?>">
                                <a class="<?php echo $css_prev_button ?>" onclick="prev('step<?php echo $unique_id ?>')"><?php echo $prev_message ?></a>
                            </div>
                            <div class="<?php echo $css_half_col ?>">
                                <a class="<?php echo $css_next_button ?>" onclick="validateStep('step<?php echo $unique_id ?>')"><?php echo $next_message ?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="ea-hidden ea-button ea-submit" type="submit" value="Vai cachorro">
            </fieldset>
            <fieldset class="ea-step step<?php echo $unique_id ?> <?php echo $css_container ?>">
                <fi class="<?php echo $css_row ?>">
                    <div class="ea-step-title">
                        <div class="ea-wait">
                            <h2>Aguarde, estamos gravando a sua solicitação...</h2>
                        </div>
                        <div class="ea-success ea-hidden">
                            <h2>Obrigado pelo orçamento!</h2>
                        </div>
                        <a class="<?php echo $css_primary_button ?>" onclick="validateStep('step<?php echo $unique_id ?>')">Quero fazer outro orçamento!</a>
                    </div>
            </fieldset>
        </form>
    </div>
</div>