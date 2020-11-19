<?php
require_once('head.php');
?>

<div class="dr-container">

    <section class="dr-section">
        <div class="dr-row">
            <div class="dr-col-12">
                <!--information delivery text-->
                <p class="heading-h3 font-secondary_bold text-center mb-15">
                    Информация о доставке
                </p>
                <p class="dr-text__big c-brown_light text-center max-w-550">
                    Для отображения информации о доставке и оплате Вашего
                    города / региона - выберите его в списке
                </p>
                <div class="dr-form-group max-w-430">
                    <p class="dr-form-label dr-form-label_new dr-text__small">Выберите город или регион</p>
                    <div class="dr-form-control">
                        <div class="simple-select simple-select_new">
                            <div class="simple-select-main" tabindex="0" role="combobox" aria-expanded="false">
                                <input hidden required type="text" name="sort-view" value="1" data-default-value="1">
                                <p class="simple-select-selected" data-placeholder="Москва">
                                    <button type="button" data-id="plan-payment" class="tab">Москва</button>
                                </p>
                                <div class="simple-select-btn-drop">
                                    <svg width="11" height="6" viewBox="0 0 11 6"  xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.35139 5.64556L1.05168 1.34571C0.778022 1.07219 0.778022 0.628717 1.05168 0.355327C1.32509 0.0819156 1.76854 0.0819156 2.04193 0.355327L5.84652 4.16003L9.65098 0.355438C9.9245 0.0820266 10.3679 0.0820266 10.6413 0.355438C10.9148 0.62885 10.9148 1.0723 10.6413 1.34582L6.34153 5.64567C6.20476 5.78238 6.02569 5.85065 5.84654 5.85065C5.6673 5.85065 5.4881 5.78224 5.35139 5.64556Z" fill="inherit"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="simple-select-drop">
                                <div class="simple-select-drop-inner">
                                    <ul class="simple-select-list" role="listbox">
                                        <li class="simple-select-item is-active" data-value="1" role="option">
                                            <button type="button" data-id="point1" class="tab">Москва</button>
                                        </li>
                                        <li class="simple-select-item" data-value="2" role="option">
                                            <button type="button" data-id="point2" class="tab">Москва2</button>
                                        </li>
                                        <li class="simple-select-item" data-value="3" role="option">
                                            <button type="button" data-id="poin3" class="tab">Москва3</button>
                                        </li>
                                        <li class="simple-select-item" data-value="3" role="option">
                                            <button type="button" data-id="poin3" class="tab">Москва4</button>
                                        </li>
                                        <li class="simple-select-item" data-value="3" role="option">
                                            <button type="button" data-id="poin3" class="tab">Москва5</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--information delivery text-->

                <!--information delivery table-->
                <div class="dr-t_flex dr-t_6-3-3 mt-30">
                    <div class="dr-t__head bg-gray__extralight">
                        <div class="dr-t__row">
                            <div class="dr-t__cell">
                                <div class="dr-t__cell_inner">Тип доставки</div>
                            </div>
                            <div class="dr-t__cell">
                                <div class="dr-t__cell_inner">Сроки доставки</div>
                            </div>
                            <div class="dr-t__cell">
                                <div class="dr-t__cell_inner">Стоимость доставки</div>
                            </div>
                        </div>
                    </div>
                    <div class="dr-t__body">
                        <div class="dr-t__row">
                            <div class="dr-t__cell">
                                <div class="dr-t__head_responsive bg-gray__extralight">
                                    <div class="dr-t__row">
                                        <div class="dr-t__cell">Тип доставки</div>
                                    </div>
                                </div>
                                <div class="dr-t__cell_inner">
                                    <div class="d-flex align-items-start">
                                        <div class="mark mark-relative mark-left"><div>Потратить возможно не более 20% от покупки, при этом скидка на отдельно взятый товар не должна быть более 80% от базовой цены</div></div>
                                        <b class="mt-3">Доставка курьером</b>
                                    </div>
                                </div>
                            </div>
                            <div class="dr-t__cell">
                                <div class="dr-t__head_responsive bg-gray__extralight">
                                    <div class="dr-t__row">
                                        <div class="dr-t__cell">Тип доставки</div>
                                    </div>
                                </div>
                                <div class="dr-t__cell_inner">
                                    <b>от 3-5 рабочих дней</b>
                                </div>
                            </div>
                            <div class="dr-t__cell">
                                <div class="dr-t__head_responsive bg-gray__extralight">
                                    <div class="dr-t__row">
                                        <div class="dr-t__cell">Тип доставки</div>
                                    </div>
                                </div>
                                <div class="dr-t__cell_inner">
                                    <p class="c-black_superlight">
                                        при сумме заказа
                                        более 7000 руб. - <b class="c-black no-wrap">БЕСПЛАТНО</b>
                                    </p>
                                    <p class="c-black_superlight">
                                        при сумме заказа
                                        до 7000 руб.  - <b class="c-black no-wrap">от ХХХ руб.</b>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="dr-t__row">
                            <div class="dr-t__cell">
                                <div class="dr-t__head_responsive bg-gray__extralight">
                                    <div class="dr-t__row">
                                        <div class="dr-t__cell">Тип доставки</div>
                                    </div>
                                </div>
                                <div class="dr-t__cell_inner">
                                    <div class="d-flex align-items-start">
                                        <div class="mark mark-relative mark-left"><div>Потратить возможно не более 20% от покупки, при этом скидка на отдельно взятый товар не должна быть более 80% от базовой цены</div></div>
                                        <b class="mt-3">Доставка курьером</b>
                                    </div>
                                </div>
                            </div>
                            <div class="dr-t__cell">
                                <div class="dr-t__head_responsive bg-gray__extralight">
                                    <div class="dr-t__row">
                                        <div class="dr-t__cell">Тип доставки</div>
                                    </div>
                                </div>
                                <div class="dr-t__cell_inner">
                                    <b>от 3-5 рабочих дней</b>
                                </div>
                            </div>
                            <div class="dr-t__cell">
                                <div class="dr-t__head_responsive bg-gray__extralight">
                                    <div class="dr-t__row">
                                        <div class="dr-t__cell">Тип доставки</div>
                                    </div>
                                </div>
                                <div class="dr-t__cell_inner">
                                    <p class="c-black_superlight">
                                        при сумме заказа
                                        более 7000 руб. - <b class="c-black no-wrap">БЕСПЛАТНО</b>
                                    </p>
                                    <p class="c-black_superlight">
                                        при сумме заказа
                                        до 7000 руб.  - <b class="c-black no-wrap">от ХХХ руб.</b>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="dr-t__row">
                            <div class="dr-t__cell">
                                <div class="dr-t__head_responsive bg-gray__extralight">
                                    <div class="dr-t__row">
                                        <div class="dr-t__cell">Тип доставки</div>
                                    </div>
                                </div>
                                <div class="dr-t__cell_inner">
                                    <div class="d-flex align-items-start">
                                        <div class="mark mark-relative mark-left"><div>Потратить возможно не более 20% от покупки, при этом скидка на отдельно взятый товар не должна быть более 80% от базовой цены</div></div>
                                        <b class="mt-3">Доставка курьером</b>
                                    </div>
                                </div>
                            </div>
                            <div class="dr-t__cell">
                                <div class="dr-t__head_responsive bg-gray__extralight">
                                    <div class="dr-t__row">
                                        <div class="dr-t__cell">Тип доставки</div>
                                    </div>
                                </div>
                                <div class="dr-t__cell_inner">
                                    <b>от 3-5 рабочих дней</b>
                                </div>
                            </div>
                            <div class="dr-t__cell">
                                <div class="dr-t__head_responsive bg-gray__extralight">
                                    <div class="dr-t__row">
                                        <div class="dr-t__cell">Тип доставки</div>
                                    </div>
                                </div>
                                <div class="dr-t__cell_inner">
                                    <p class="c-black_superlight">
                                        при сумме заказа
                                        более 7000 руб. - <b class="c-black no-wrap">БЕСПЛАТНО</b>
                                    </p>
                                    <p class="c-black_superlight">
                                        при сумме заказа
                                        до 7000 руб.  - <b class="c-black no-wrap">от ХХХ руб.</b>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="dr-t__row">
                            <div class="dr-t__cell">
                                <div class="dr-t__head_responsive bg-gray__extralight">
                                    <div class="dr-t__row">
                                        <div class="dr-t__cell">Тип доставки</div>
                                    </div>
                                </div>
                                <div class="dr-t__cell_inner">
                                    <div class="d-flex align-items-start">
                                        <div class="mark mark-relative mark-left"><div>Потратить <a href="#">возможно не более 20%</a> от покупки, при этом скидка на отдельно взятый товар не должна быть более 80% от базовой цены</div></div>
                                        <b class="mt-3">Доставка курьером</b>
                                    </div>
                                </div>
                            </div>
                            <div class="dr-t__cell">
                                <div class="dr-t__head_responsive bg-gray__extralight">
                                    <div class="dr-t__row">
                                        <div class="dr-t__cell">Тип доставки</div>
                                    </div>
                                </div>
                                <div class="dr-t__cell_inner">
                                    <b>от 3-5 рабочих дней</b>
                                </div>
                            </div>
                            <div class="dr-t__cell">
                                <div class="dr-t__head_responsive bg-gray__extralight">
                                    <div class="dr-t__row">
                                        <div class="dr-t__cell">Тип доставки</div>
                                    </div>
                                </div>
                                <div class="dr-t__cell_inner">
                                    <p class="c-black_superlight">
                                        <b class="c-black no-wrap">БЕСПЛАТНО</b>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="c-brown_light dr-text__normal mt-30 mb-0">
                    * - рабочих дней с момента подтверждения заказа оператором интернет-магазина
                </p>
                <!--information delivery table-->

                <!-- information delivery notice -->
                <div class="bg-gray__extralight w-100 panel-notice mt-30">
                    <p class="c-black dr-text__normal">
                        Доставка осуществляется только на физические адреса – квартиры, частные дома, офисы.
                        Мы не доставляем на пустыри и в метро.
                        <br><br>
                        Доставка оплачивается, если Вы отказываетесь от товара не по вине Продавца
                        (т.е. если причины отказа не связаны с несоответствием товара заказанному или с наличием внешних недостатков)
                        <br><br>
                        Любые возникшие вопросы Вы можете задать нашим операторам по телефонам
                        <a href="tel:8 499 271-05-03" class="c-black"><b>8 499 271-05-03</b></a>, <a href="tel:8 800 600-77-07" class="c-black"><b>8 800 600-77-07</b></a>
                        <br><br>
                        Цены и акции на заказанные Вами това ры, будут зафиксированы в заказе и сохранены до момента оплаты заказа не зависимо от типа доставки и срока комплектации.
                    </p>
                </div>
                <!-- information delivery notice -->

                <!-- information payment text -->
                <p class="heading-h3 font-secondary_bold text-center mt-50 mb-15">
                    Информация о способах оплаты
                </p>
                <p class="dr-text__big c-brown_light text-center max-w-550">
                    Вы можете оплатить Вашу покупку несколькими способами:
                </p>
                <div class="dr-row align-items-start">
                    <div class="dr-col-md-6 dr-col-12">
                        <p class="dr-text__normal">
                            <b class="c-black d-flex w-100 mb-5">Оплата при получении заказа</b>
                            <span class="c-black_superlight">
                                оплатить свою покупку можно при получении заказа наличными или банковской картой.
                            </span>
                        </p>
                    </div>
                    <div class="dr-col-md-6 dr-col-12">
                        <p class="dr-text__normal">
                            <b class="c-black d-flex w-100 mb-5">Оплата Online </b>
                            <span class="c-black_superlight">
                                оплатить покупку можно на сайте сразу при оформлении заказа, а также позже до передачи вашего заказа в курьерскую службу (для этого попросите менеджера интернет-магазина выслать вам ссылку для оплаты online).  К оплате принимаются банковские карты VISA, MASTERCARD, МИР, JCB. Платежи производятся через сервис Яндекс.Касса*. (партнером по приему платежей является ООО НКО Яндекс.Деньги, лицензия № 3510-К от 27.03.2015, 115035, город Москва, Садовническая улица, дом 82, строение 2)
                            </span>
                        </p>
                    </div>
                </div>
                <!-- information payment text -->

                <!-- information payment notice -->
                <div class="bg-gray__extralight w-100 panel-notice mt-30">
                    <ul class="payments-pist mb-15">
                        <li class="payment-item">
                            <img class="payment-item__img" src="./image/pay_visa.svg" alt="">
                        </li>
                        <li class="payment-item">
                            <img class="payment-item__img" src="./image/pay_mc.svg" alt="">
                        </li>
                        <li class="payment-item">
                            <img class="payment-item__img" src="./image/pay_mir.svg" alt="">
                        </li>

                    </ul>
                    <p class="dr-text__big c-black text-uppercase text-center max-w-600">
                        БЕЗОПАСНОСТЬ ПЛАТЕЖЕЙ ГАРАНТИРУЕТСЯ СЕРТИФИКАТОМ
                        <b>PCI DSS (PAYMENT CARD INDUSTRY DATA SECURITY STANDARD, PCI DSS)
                            ВЕРСИИ 3.2.1.</b>
                        <br>
                        ДЛЯ ЗАЩИТЫ ПЛАТЕЖЕЙ СО СЧЕТОВ БАНКОВСКИХ КАРТ
                        <b>ИСПОЛЬЗУЮТСЯ ТЕХНОЛОГИИ 3D-SECURE ОТ VISA
                            И SECURECODE ОТ MASTERCARD.</b>
                    </p>
                </div>
                <!-- information payment notice -->
            </div>
        </div>
    </section>
</div>

<?php
require_once("footer.php");
require_once('foot.php');?>
