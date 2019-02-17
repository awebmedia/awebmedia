<!DOCTYPE html>
<html lang="ru">
<head>  
    <title>A-WEBmedia</title>
    <script type="text/javascript">
        (function(){
    //     if (typeof(window.orientation) !== 'undefined'){
    //         window.addEventListener("orientationchange", function() {
    //         	 if (window.orientation == 0 || window.orientation == 180)
    //               document.getElementsByTagName('meta')["viewport"].content = "width=device-widt, initial-scale=0.7, maximum-scale=0.7"; //document.write('<meta name="viewport" content="width=device-widt, initial-scale=0.7, maximum-scale=0.7">');
    //             else
    //               document.getElementsByTagName('meta')["viewport"].content = "width=device-widt, initial-scale=1, maximum-scale=1"; //document.write('<meta name="viewport" content="width=device-widt, initial-scale=1, maximum-scale=1">');
    //         }, false);
            
    //         if (window.orientation == 0 || window.orientation == 180)
    //           document.write('<meta name="viewport" content="width=device-widt, initial-scale=0.7, maximum-scale=0.7">');
    //         else
    //           document.write('<meta name="viewport" content="width=device-widt, initial-scale=1, maximum-scale=1">');
    //     }
      })();
    </script>
	<meta HTTP-EQUIV="Content-Type" CONTENT="text/html;" charset="UTF-8">
	<meta http-equiv="Cache-Control" content="no-cache, no-store, max-age=0,  must-revalidate"/>
    <meta http-equiv="Pragma" content="no-cache"/>
    <meta name="viewport" content="width=device-widt, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="/scr/css/reset.css">
	<link rel="stylesheet" href="/dist/css/calc.css"> 
<!--	<script src="/dist/"></script>-->
	<? include_once(ROOT.'/views/pattern/storage_control.php');?>
</head>
<body>            
   
   <? include_once(ROOT.'/views/pattern/header.php');?>
   
    <main class="main" role="main">
        <h1 class="main__headline" >
            Расчет сайта
        </h1>
        <h2 class="main__subheadline">
            Закажите разработку сейчас и <span class="t_NUM">3</span> месяца хостинга в подарок!
        </h2>
        <form action="" class="calc" id="calc">
            <section class="calc__step-window step-window step-window_action" data-s="0" id="step-window_1">
                <h3 class="step-window__headline">У Вас уже есть сайт?</h3>
                <div class="step-window__calc-c calc-c">
                    <div class="calc-c__control">
                        <div class="clac-c__f-el f-el">
                            <div class="calc-c__option option " data-f="f1" data-q="1">
                                <div class="option__line option__line_radio" data-a="1"> 
                                    <div class="option__radio"></div
                                    ><div class="option__label"><span>Да</span></div>
                                </div>
                                <div class="option__line option__line_radio option__line_selected" data-a="2"> 
                                    <div class="option__radio"></div
                                    ><div class="option__label"><span>Нет</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="calc-c__message"></div>
                        <div class="calc-c__button button_next button button_t1">
                            <span>Далее</span>
                        </div>
                    </div>
                    <div class="calc-c__info"></div>
                </div>
            </section>
            <section class="calc__step-window step-window " data-s="0" id="step-window_2">
                <h3 class="step-window__headline">Какой Вам нужен сайт?</h3>
                <div class="step-window__calc-c calc-c">
                    <div class="calc-c__control">
                        <div class="clac-c__f-el f-el">
                            <div class="calc-c__option option" data-f="f1" data-q="2">                               
                                <div class="option__line option__line_radio option__line_selected" data-a="1"> 
                                    <div class="option__radio"></div><div class="option__label"><span>Сайт-визитка</span></div>
                                </div>
                                <div class="option__line option__line_radio" data-a="2"> 
                                    <div class="option__radio"></div><div class="option__label"><span>Промо-сайт</span></div>
                                </div>
                                <div class="option__line option__line_radio" data-a="3"> 
                                    <div class="option__radio"></div><div class="option__label"><span>Лендинг</span></div>
                                </div>
                                <div class="option__line option__line_radio" data-a="4"> 
                                    <div class="option__radio"></div><div class="option__label"><span>Корпоративный</span></div>
                                </div>
                                <div class="option__line option__line_radio" data-a="5"> 
                                    <div class="option__radio"></div><div class="option__label"><span>Интернет-магазин</span></div>
                                </div>
                                <div class="option__line option__line_radio" data-a="6"> 
                                    <div class="option__radio"></div><div class="option__label"><span>Агрегатор</span></div>
                                </div>
                                <div class="option__line option__line_radio" data-a="7"> 
                                    <div class="option__radio"></div><div class="option__label"><span>Такого нет в списке</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="calc-c__message"></div>
                        <div class="calc-c__button button button_t1 button_next">
                            <span>Далее</span>
                        </div>
                    </div>
                    <div class="calc-c__info"></div>
                </div>
            </section>
            <section class="calc__step-window step-window " data-s="0" id="step-window_3">
                <h3 class="step-window__headline">Что у Вас есть для наполнеия сайта?</h3>
                <div class="step-window__calc-c calc-c">
                    <div class="calc-c__control">
                        <div class="clac-c__f-el f-el">
                            <div class="calc-c__option option" data-f="f2" data-q="3">
                                <div class="option__line option__line_flag" data-a="1"> 
                                    <div class="option__flag"></div
                                    ><div class="option__label"><span>Текст</span></div>
                                </div>
                                <div class="option__line option__line_flag" data-a="2"> 
                                    <div class="option__flag"></div
                                    ><div class="option__label"><span>Фото материалы или графика</span></div>
                                </div>
                                <div class="option__line option__line_flag" data-a="3"> 
                                    <div class="option__flag"></div
                                    ><div class="option__label"><span>Видео материалы</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="calc-c__message"></div>
                        <div class="calc-c__button button button_t1 button_next">
                            <span>Далее</span>
                        </div>
                    </div>
                    <div class="calc-c__info"></div>
                </div>
            </section>
            <section class="calc__step-window step-window " data-s="0" id="step-window_4">
                <h3 class="step-window__headline">В дальнейшем Вам потребуется поддержка сайта?</h3>
                <div class="step-window__calc-c calc-c">
                    <div class="calc-c__control">
                        <div class="clac-c__f-el f-el">
                            <div class="calc-c__option option" data-f="f1" data-q="4">
                                <div class="option__line option__line_radio option__line_selected" data-a="1"> 
                                    <div class="option__radio"></div
                                    ><div class="option__label"><span>Да</span></div>
                                </div>
                                <div class="option__line option__line_radio" data-a="2"> 
                                    <div class="option__radio"></div
                                    ><div class="option__label"><span>Нет</span></div>
                                </div>
                                <div class="option__line option__line_radio" data-a="3"> 
                                    <div class="option__radio"></div
                                    ><div class="option__label"><span>Затрудняюсь ответить</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="calc-c__message"></div>
                        <div class="calc-c__button button button_t1 button_next">
                            <span>Далее</span>
                        </div>
                    </div>
                    <div class="calc-c__info"></div>
                </div>
            </section>
            <section class="calc__step-window step-window" data-s="0" id="step-window_5">
                 <h3 class="step-window__headline">У Вас уже есть хостинг и домен?</h3>
                <div class="step-window__calc-c calc-c">
                    <div class="calc-c__control">
                        <div class="clac-c__f-el f-el">
                            <div class="calc-c__option option" data-f="f1" data-q="5">
                                <div class="option__line option__line_radio option__line_selected" data-a="1"> 
                                    <div class="option__radio"></div
                                    ><div class="option__label"><span>Да</span></div>
                                </div>
                                <div class="option__line option__line_radio" data-a="2"> 
                                    <div class="option__radio"></div
                                    ><div class="option__label"><span>Есть только хостинг</span></div>
                                </div>
                                <div class="option__line option__line_radio" data-a="3"> 
                                    <div class="option__radio"></div
                                    ><div class="option__label"><span>Есть только домен</span></div>
                                </div>
                                <div class="option__line option__line_radio" data-a="4"> 
                                    <div class="option__radio"></div
                                    ><div class="option__label"><span>Нет</span></div>
                                </div>
                                <div class="option__line option__line_radio" data-a="5"> 
                                    <div class="option__radio"></div
                                    ><div class="option__label"><span>Затрудняюсь ответить</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="calc-c__message"></div>
                        <div class="calc-c__button button button_t1 button_next">
                            <span>Далее</span>
                        </div>
                        
                    </div>
                    <div class="calc-c__info"></div>
                </div>
            </section>
            <section class="calc__step-window step-window " data-s="0" id="step-window_6">
                 <h3 class="step-window__headline">Вам потребуется маркетинговое сопровождение сайта?</h3>
                <div class="step-window__calc-c calc-c">
                    <div class="calc-c__control">
                        <div class="clac-c__f-el f-el">
                            <div class="calc-c__option option" data-f="f1" data-q="6">
                                <div class="option__line option__line_radio option__line_selected" data-a="1"> 
                                    <div class="option__radio"></div
                                    ><div class="option__label"><span>Да</span></div>
                                </div>
                                <div class="option__line option__line_radio" data-a="2"> 
                                    <div class="option__radio"></div
                                    ><div class="option__label"><span>Нет</span></div>
                                </div>
                                <div class="option__line option__line_radio" data-a="3">
                                    <div class="option__radio"></div
                                    ><div class="option__label"><span>Обьясните для чего это необходимо</span></div>
                                </div>
                            </div>
                        </div> 
                        <div class="calc-c__message"></div>
                        <div class="calc-c__button button button_t1 button_next">
                            <span>Далее</span>
                        </div>                        
                    </div>
                    <div class="calc-c__info"></div>
                </div>
            </section>
            <section class="calc__step-window step-window" data-s="0" id="step-window_7">
                <h3 class="step-window__headline">Оставьте Ваши контактные данные</h3>
                <div class="step-window__calc-c calc-c">
                    <div class="calc-c__control">
                        <div class="clac-c__f-el f-el">
                            <div class="calc-c__option option" data-f="fc" data-q="">
                                <div class="option__logical-part" data-f="f3">
                                    <div class="option__line option__line_input" data-a="1"> 
                                        <div class="option__warn"></div
                                        ><div class="option__input"><input type="text" name="name" value=""></div
                                        ><div class="option__label"><span>Имя*</span></div>
                                    </div>
                                    <div class="option__line option__line_input" data-a="2"> 
                                        <div class="option__warn">Введите корректный email.</div
                                        ><div class="option__input"><input type="text" name="email" value=""></div
                                        ><div class="option__label"><span>Email</span></div>
                                    </div>
                                    <div class="option__line option__line_input" data-a="3"> 
                                        <div class="option__warn"></div
                                        ><div class="option__input"><input data-t="" type="text" name="phone" value=""></div
                                        ><div class="option__label"><span>Телефон*</span></div>
                                    </div>
                                </div>
                                <div class="option__logical-part" data-f="f2">
                                    <div class="option__line option__line_flag" data-a="4"> 
                                        <div class="option__flag"></div
                                        ><div class="option__label"><span>Я согласен на обработку моих персональных данных</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="calc-c__message"></div> 
                        <div class="calc-c__button button button_t1" id="send_form">
                            <span>Отправить</span>
                        </div>
                        
                    </div>
                    <div class="calc-c__info"></div>
                </div>
            </section>
            <style>
                .form_set-status{
                    height: 462px;                    
                }
                .form-status{
                    height: 100%;
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                    color: white;
                    font: 700 20px/1.3 'Raleway', sans-serif;                    
                    background-color: #303030;
                }
                .form-status a, .form-status .re-send{
                    cursor: pointer;
                    text-decoration: underline
                }
                .form-status > * {
                    text-align: center;
                    padding: 10px 0;
                }
                .form-status p span, .form-status a{
                    color: #FFD000;
                }
                .form_set-status > *{
                    display: none;
                }
                .form_set-status_error > .form-status_error{
                    display: flex;
                }
                
                .form_set-status_done > .form-status_done{
                    display: flex;
                }
            </style>
            <section class="calc__step-window step-window form_set-status" data-s="0" id="step-window_8">
                <div class="form-status form-status_done">
                    <img src="/dist/img/pic/cherry-done.png" alt="">
                    <p><span>Спасибо,</span> Ваша заявка отправлена!<br>Наш менеджер <span>скоро свяжется</span> с Вами. </p>
                </div>
                <div class="form-status form-status_error">
                    <img src="/dist/img/pic/cherry-no-messages.png" alt="">
                    <p>Произошла ошибка, <span class="re-send" id="">повторите попытку</span><br>или <span>свяжитесь</span> с нами по телефону:</p>
                    <a href="tel:+78124268812" class="t_NUM">+7 (812) 426-88-12</a>
                </div>
            </section>
            <div class="calc__step-line step-line">
                <div class="step-line__step step-line__step_current step-line__step_action" id="step-line_1"><span>1</span></div>
                <div class="step-line__step" id="step-line_2"><span>2</span></div>
                <div class="step-line__step" id="step-line_3"><span>3</span></div>
                <div class="step-line__step" id="step-line_4"><span>4</span></div>
                <div class="step-line__step" id="step-line_5"><span>5</span></div>
                <div class="step-line__step" id="step-line_6"><span>6</span></div>
                <div class="step-line__step" id="step-line_7"><span>7</span></div>
            </div>            
        </form>
    </main>
    
    <? include_once(ROOT.'/views/pattern/footer.php');?>
    
</body>

<script src="/dist/js/calc.js"></script>
</html>