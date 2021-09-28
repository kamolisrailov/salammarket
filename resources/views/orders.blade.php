<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flexslider.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chosen.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-01.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" integrity="sha512-aEe/ZxePawj0+G2R+AaIxgrQuKT68I28qh+wgLrcAJOz3rxCP+TwrK5SPN+E5I+1IQjNtcfvb96HDagwrKRdBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.css" integrity="sha512-8czuHxKbajKuQfbgBv5iwqftC1PbeLPmgVOYo8ZDlcOdi0OV18E+BbGQdqXs490kV9ZmJQTNupd0kvW8hokJlw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body>
    <main id="main" class="main-site left-sidebar">
        <div class="container">

            <style>
p{
    font-size: 10px;
    color: black;
}
.A4 {
    width: 212mm;
    min-height: 297mm;
    padding: 0mm;
    margin: 6mm auto;
}
body{
    font-color
}


            </style>
            <div class="row A4">

                @if (Cart::instance('order')->content()->count()>0)

                <table class="table table-bordered">
                   <h5 class="text-center">СЧЕТ-ДОГОВОР № какой-то</h5>
                   <div style="position: absolute;">г.Ташкент</div>     <div style="text-align: right;"> <?php echo date("Y/m/d"); ?></div>
                   <br>
                   <p>     ООО  "KANSLER", именуемое в дальнейшем «ПОСТАВЩИК», в лице Директора  Расулова У.И., действующего на основании Доверенности №3 от 17.06.2021г.
                    с одной стороны, и OOO "INTERNATIONAL MEDIA SERVICE", именуемое(ый) в дальнейшем «ПОКУПАТЕЛЬ», в лице __________________________, действующего на
                     основании __________________________ с другой стороны, совместно именуемые "Стороны", заключили настоящий договор о нижеследующем:</p>

                     <h5 class="text-center"> 1. ПРЕДМЕТ ДОГОВОРА </h5>
                     <p>1.1. Поставщик обязуется поставить товары, а Покупатель обязуется оплатить и принять их на условиях, установленных настоящим договором согласно следующей Спецификации:
                    </p>
                    <thead>
                      <tr>
                          <th>id</th>
                        <th>Наименование товаров</th>
                        <th>Ед.изм.</th>
                        <th>'Кол-во</th>
                        <th>Цена без НДС</th>
                        <th>Ставка НДС</th>
                        <th>Ставка НДС</th>
                        <th>Ставка НДС</th>
                        <th>Ставка НДС</th>
                        <th>Цена с НДС</th>
                      </tr>
                    </thead>


                    @foreach (Cart::instance('order')->content() as $item)



                    <tbody>
                      <tr>

                        <td>{{$item->model->id}}</td>
                        <td>{{$item->model->name}}</td>
                        <td>штук</td>
                        <td>{{$item->qty}}</td>
                        <td>{{$item->model->regular_price}}</td>
                        <td>{{$item->model->regular_price}}</td>
                        <td>{{$item->model->regular_price}}</td>
                        <td>15%</td>
                        <td>{{$item->model->regular_price}}</td>
                        <td>{{$item->subtotal}}</td>
                      </tr>

                    </tbody>

                    @endforeach
                </table>
                <h5 class="text-center"> 2. ОБЩАЯ СУММА И ПОРЯДОК ОПЛАТЫ.</h5>
                <p>2.1. Общая сумма договора определена: Два миллиона шестьсот шестьдесят шесть тысяч восемьсот сум 00 тийин с НДС. 2.2. Покупатель обязан произвести предоплату
                     путём перечисления денежных средств в размере 100% в течение 5 банковских дней с даты заключения договора. 2.3. Цена услуг,
                      указанная в 2.1 настоящего договора, является неизменной при условии своевременного выполнения Покупателем обязательств по оплате товаров,
                      а также стабильности курса национальной валюты Республики Узбекистан сум к доллару США. В случае нарушения условий оплаты или изменения
                      курса национальной валюты Республики Узбекистан сум к доллару США на даты заключения настоящего договора и фактической оплаты оставшейся
                      суммы в сторону увеличения, цена товаров подлежит увеличению в одностороннем порядке со стороны Поставщика пропорционально росту курса доллара
                       США к национальной валюте Республики Узбекистан сум с даты заключения настоящего договора и до даты последней оплаты оставшейся суммы. При
                       этом, Покупатель обязуется подписать все необходимые документы, в том числе дополнительные соглашения и измененные накладные - счета-фактуры. </p>

                       <h5 class="text-center"> 3. СРОКИ И ПОРЯДОК ПОСТАВКИ ТОВАРОВ.</h5>
                       <p>3.1. Товар должен быть поставлен Покупателю в течение 30  дней с момента поступления денежных средств на счет Поставщика на оплаченную сумму.
                           3.2. Поставка ТОВАРА осуществляется одним из следующих способов, который определяется ПОСТАВЩИКОМ ТОВАРА: а) самовывозом ПОКУПАТЕЛЕМ со склада
                            ПОСТАВЩИКА – отгрузка ТОВАРА производится силами и средствами ПОСТАВЩИКА; б) доставкой силами и средствами ПОСТАВЩИКА товара на склад ПОКУПАТЕЛЯ
                             в пределах административных границ города Ташкент, выгрузка товара производится силами и средствами ПОКУПАТЕЛЯ; 3.3. Товар может выбираться
                              Покупателем несколькими партиями в течении действия срока договора. </p>

                              <h5 class="text-center"> 4. ПОРЯДОК  ПРИЁМ-ПЕРЕДАЧИ ТОВАРА.</h5>
                              <p>4.1. Качество поставляемого товара в установленных законодательством случаях подтверждается соответствующими сертификатами. 4.2. Покупатель обязан проверить комплектность и качества товара при получении в присутствии Поставщика.
                                   4.3. Приём-передача товара  считается завершенной после подписания уполномоченным представителем Покупателя  накладных\счет фактур, выписанных Поставщиком.
                                4.4 Представитель Покупателя при получении товара должен предъявить оформленный договор, паспорт и правильно оформленную доверенность. 4.5. С момента подписания
                                 накладной/счет-фактуры риск по хранению товара переходит к Покупателю.
                                  4.6. В случае неоплаты суммы по договору в течении периода, указанного в п.п 2.2 настоящего договора Поставщик не гарантирует наличие товара на складе, при этом
                                   ассортимент товара можно изменить. 4.7. Изменение ассортимента товара возможно и по соглашению сторон. Фактом изменения ассортимента является
                                   факт получения товара по товарно-отгрузочным документам.
                                </p>

                                <h5 class="text-center"> 5. ОТВЕТСТВЕННОСТЬ  СТОРОН</h5>
                                <p>5.1. За просрочку оплаты  покупаемого товара Покупатель уплачивает поставщику пеню в размере 0,4 % от суммы просроченного платежа за каждый день просрочки,
                                     но не более 20% суммы просроченного платежа. 5.2. В случае просрочки поставки товара Поставщик оплачивает Покупателю пеню в размере 0,4 % за неисполненную
                                     обязательств за каждый день просрочки, но не более 20% от стоимости недопоставки. 5.3. В случае не выборки товаров Покупателем (необоснованного отказа
                                     от получения товара) стороны подписывают Акт сверки, на основании которого Поставщик осуществляет возврат денежных средств. При этом с Покупателя
                                     удерживается штраф в размере 10% от стоимости невыбранных товаров. 5.4. Ответственность, не предусмотренная данным договором, регулируется Законом РУз
                                     «О договорно-правовой базе деятельности хозяйствующих субъектов». 5.5. В случае возникновения разногласий все вопросы решаются путём двухсторонних
                                     переговоров, а при невозможности прийти к согласию, все споры подлежат рассмотрению Ташкентским межрайонным экономическим судом г. Ташкента. </p>


                                     <h5 class="text-center"> 6. ОСОБЫЕ УСЛОВИЯ.</h5>
                                     <p>6.1. В случае, когда Покупатель не забирает товар в течение 10 дней с момента оплаты, Продавец оставляет за собой право распорядиться товаром по своему усмотрению. </p>


                                     <h5 class="text-center"> 7. ФОРС-МАЖОР.</h5>
                                     <p>7.1. Ни одна из сторон не несёт ответственности за полное или частичное невыполнение своих обязательств по договору, если это произошло вследствие
                                         наводнения, пожара, землетрясения, транспортной катастрофы, забастовок, изменения налогообложения, таможенных правил, постановлений и указов
                                          законодательной и исполнительной власти, неисполнения платежных поручений банком, введение военного положения, а также войны или военных действий,
                                           террористических актов, возникших после подписания настоящего договора. 7.2  Если одно из вышеупомянутых обстоятельств повлияет на выполнение
                                            настоящего договора в течение времени его действия, срок выполнения работ по договору продлевается на время действия обстоятельств. 7.3.
                                            Сторона, для которой выполнение обстоятельств стало невозможным, должна в течение пяти суток проинформировать другую сторону о начале,
                                            продолжительности и времени прекращения упомянутых выше обстоятельств в письменном виде, с предоставлением справки официальных органов об
                                            имевшем месте случае. </p>



                                     <h5 class="text-center">8. ЗАКЛЮЧИТЕЛЬНЫЕ ПОЛОЖЕНИЯ. </h5>
                                     <p>8.1. Все изменения и дополнения к настоящему договору совершаются в письменной форме и должны быть подписаны обеими сторонами и заверены печатью.
                                          8.2. Настоящий договор составлен в двух экземплярах, по одному для каждой из сторон, имеющих одинаковую юридическую силу. В случаях, не
                                          предусмотренных настоящим договором, стороны руководствуются действующим гражданским законодательством Республики Узбекистан. 8.3. Поставщик
                                          не несёт ответственности за нарушение Правил торговли и финансовые ( платёжные, расчетные, бухгалтерские и др ) нарушения, допущенные Покупателем
                                           в процессе реализации или использования товара. </p>




                                     <h5 class="text-center">9. СРОК ДЕЙСТВИЯ  ДОГОВОРА.</h5>
                                     <p>9.1. Настоящий Договор вступает в силу с момента подписания его Сторонами и действует до момента выполнения сторонами своих обязательств
                                         по данному Договору и урегулирования всех расчетов между собой. </p>

                                         <h5 class="text-center">10. АДРЕСА, РЕКВИЗИТЫ  И  ПОДПИСИ СТОРОН.</h5>
                                         <div style="position: absolute">
                                            <h5 class="text-center"><b> ПОСТАВЩИК</b></h5>
                                            <p>ПОСТАВЩИК ПОКУПАТЕЛЬ ООО  "KANSLER"
                                                <p> OOO "INTERNATIONAL MEDIA SERVICE"</p>
                                                 <p> Юр. адрес:  г.Ташкент, ул. Авлиё-Ота,7</p>
                                                 <p> г.Ташкент Мирабадский район, ул.Авлиё-Ота,7 </p>
                                                 <p> Тел: ( +99878) 148-44-44 Тел: 908052837</p>
                                                 <p> Р/сч:  р/сч 20208000900644728004 в ОПЕРУ  АКБ "КАПИТАЛБАНК",</p>
                                                  <p> Код банка 00974, Тошкент </p>
                                                  <p> ИНН: 304144925, ОКЭД: 46660 </p>
                                                  <p> Код НДС: 326010002151 </p>
                                               <p> Подпись _________________________ Расулов У.И </p>
                                            </p>
                                         </div>
                                         <div style="padding: 0px 0px 0px 474px;">
                                            <h5 class="text-center"><b> ПОКУПАТЕЛЬ</b></h5>
                                            <p>
                                            <h5 class="text-center"> OOO "INTERNATIONAL MEDIA SERVICE"</h5>

                                                 <p> Юр. адрес:  г.Ташкент, ул. Авлиё-Ота,7</p>
                                                 <p> г.Ташкент Мирабадский район, ул.Авлиё-Ота,7 </p>
                                                 <p> Тел: ( +99878) 148-44-44 Тел: 908052837</p>
                                                 <p> Р/сч:  р/сч 20208000900644728004 в ОПЕРУ  АКБ "КАПИТАЛБАНК",</p>
                                                  <p> Код банка 00974, Тошкент </p>
                                                  <p> ИНН: 304144925, ОКЭД: 46660 </p>
                                                  <p> Код НДС: 326010002151 </p>
                                               <p> Подпись _________________________ Расулов У.И </p>
                                            </p>
                                         </div>

                @else
                    <h4>No item in wishlist</h4>
                @endif
            </div>

        </div>
    </main>
    <script src="{{ asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
	<script src="{{ asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.flexslider.js') }}"></script>
	<script src="{{ asset('assets/js/chosen.jquery.min.js') }}"></script>
	<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
	<script src="{{ asset('assets/js/functions.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js" integrity="sha512-GDey37RZAxFkpFeJorEUwNoIbkTwsyC736KNSYucu1WJWFK9qTdzYub8ATxktr6Dwke7nbFaioypzbDOQykoRg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.js" integrity="sha512-0Z2o7qmtl7ixxWcEQxxTCT8mX4PsdffSGoVJ7A80zqt6DvdEHF800xrsSmKPkSoUaHtlIhkLAhCPb/tkf78SCA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>



</html>



