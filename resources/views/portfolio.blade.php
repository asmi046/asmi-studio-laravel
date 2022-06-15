@extends('layouts.all')

@section('title', "Портфолио и кейсы нашей компании - Asmi-Studio")
@section('description', "Проекты по разработке сайтов, редизайну и web программированию. Все кейсы нашей компании с подробным описанием.")

@section('content')
    <section class = "all_portfolio">
        <div class = "content">
            <div class = "breadcrumbs" id = "breadcrumbs">
                <a href = "{{ route('home') }}">Главная</a> / <span>Портфолио</span> 
            </div>
            <h1>Портфолио</h1>
            
            <div class = "all_portfolio_wraper"  >

                <a href = "portfolio/project-wego.php" class = "portfolio_blk" style  = "background-image: url(img/portfolio/wego/wego-obl.jpg);">
                    <div class = "portfolio_descr"  style = "border-left: 15px solid #1b24ff;">
                            <h2>Сайт для проекта <br/>"We-Go"</h2>
                            <span>Сайт с посадочными страницами, регистрацией через соцсети и личным кабинетом </span>
                    </div>
                </a>

                <a href = "portfolio/project-enchi.php" class = "portfolio_blk" style  = "background-image: url(img/portfolio/enchi/enchi-obl.jpg);">
                    <div class = "portfolio_descr"  style = "border-left: 15px solid #52B491;">
                            <h2>Сайт с каталогом продукции <br/>"Энчи-Фарм"</h2>
                            <span>Сайт с каталогом продукции и переводом на китайский язык</span>
                    </div>
                </a>

                <a href = "portfolio/project-na.php" class = "portfolio_blk" style  = "background-image: url(img/portfolio/na/na-obl.jpg);">
                    <div class = "portfolio_descr"  style = "border-left: 15px solid #00549f;">
                            <h2>Интернет магазин <br/>"N-Автоматика"</h2>
                            <span>Корпоративный сайт с интегрированным интернет магазином</span>
                    </div>
                </a>
                
                <a href = "portfolio/project-clrpds.php" class = "portfolio_blk" style  = "background-image: url(img/portfolio/clrpds/clrpds-obl.jpg);">
                    <div class = "portfolio_descr"  style = "border-left: 15px solid #f8859e;">
                            <h2>Lending Page <br/>"CLR PODS"</h2>
                            <span>Посадочная страница для продажи наушников под собственным брендом.</span>
                    </div>
                </a>
                
                <a href = "portfolio/project-grand.php" class = "portfolio_blk" style  = "background-image: url(img/portfolio/grand/grand-obl.jpg);">
                    <div class = "portfolio_descr"  style = "border-left: 15px solid #c4041c;">
                            <h2>Сайт компании <br/>"N-Автоматика"</h2>
                            <span>Корпоративный сайт для консалтинговой компании</span>
                    </div>
                </a>

                <a href = "portfolio/project-verbena.php" class = "portfolio_blk" style  = "background-image: url(img/portfolio/verbena/verbena-obl.jpg);">
                    <div class = "portfolio_descr"  style = "border-left: 15px solid #84CC3A;">
                            <h2>Сайт клиники <br/>"Verbena"</h2>
                            <span>Корпоративный сайт с каталогом услуг и интеграцией с CRM системой</span>
                    </div>
                </a>
                
                <a href = "portfolio/project-samaya.php" class = "portfolio_blk" style  = "background-image: url(img/portfolio/samaya/samaya-obl.jpg);">
                    <div class = "portfolio_descr"  style = "border-left: 15px solid #db204f;">
                            <h2>Сайт образовательного проекта <br/>"Самая Самая"</h2>
                            <span>Посадочная страница для продажи франшизы на эстетически-образовательный проект.</span>
                    </div>
                </a>				
                

                
                <a href = "portfolio/project-caramel.php" class = "portfolio_blk" style  = "background-image: url(img/portfolio/caramel/caramel-obl.jpg);">
                    <div class = "portfolio_descr"  style = "border-left: 15px solid #f03c8e;">
                            <h2>Сайт магазин <br/>"Карамельная мануфактура"</h2>
                            <span>Презентационный сайт + магазин карамели.</span>
                    </div>
                </a>
                
                <a href = "portfolio/project-autotish.php" class = "portfolio_blk" style  = "background-image: url(img/portfolio/autotish/autotish-obl.jpg);">
                    <div class = "portfolio_descr"  style = "border-left: 15px solid #848f92;">
                            <h2>Сайт сервиса <br/>"Автотишина"</h2>
                            <span>Сайт компании с рубрицированным каталогом работ.</span>
                    </div>
                </a>
                
                <a href = "portfolio/project-nesterova.php" class = "portfolio_blk" style  = "background-image: url(img/portfolio/nesterova/nesterova-obl.jpg);">
                    <div class = "portfolio_descr"  style = "border-left: 15px solid #24aee1;">
                            <h2>Сайт компании <br/>"Nesterova Media"</h2>
                            <span>Сайт рекламного агентства по размещению наружной рекламы.</span>
                    </div>
                </a>
                
                <a href = "portfolio/project-lightsnab.php" class = "portfolio_blk" style  = "background-image: url(img/portfolio/lightsnab/lightsnab-obl.jpg);">
                    <div class = "portfolio_descr"  style = "border-left: 15px solid #ffe300;">
                            <h2>Сайт компании <br/>"Lightsnab"</h2>
                            <span>Сайт компании по продаже осветительного оборудования с каталогом продукции.</span>
                    </div>
                </a>
                
                

                
                <a href = "portfolio/project-evaton.php" class = "portfolio_blk" style  = "background-image: url(img/portfolio/evaton/evaton-obl.jpg);">
                    <div class = "portfolio_descr"  style = "border-left: 15px solid #0c77be;">
                            <h2>Интернет магазин <br/>"Эватон"</h2>
                            <span>Магазин по продаже штатной электроники для автомобилей.</span>
                    </div>
                </a>
                
                
                <a href = "portfolio/project-makmol.php" class = "portfolio_blk" style  = "background-image: url(img/portfolio/makmol/makmol-obl.jpg);">
                    <div class = "portfolio_descr" style = "border-left: 15px solid #b5a170;">
                        <h2>Корпоративный сайт <br/>"Русский ФабрикантЪ"</h2>
                        <span>Корпоративный сайт для группы продовольственных компаний</span>
                    </div>
                </a>
                
                <a href = "portfolio/project-tabula.php" class = "portfolio_blk" style  = "background-image: url(img/portfolio/tabula/tabula-obl.jpg);">
                    <div class = "portfolio_descr" style = "border-left: 15px solid #be1e2d;">
                        <h2>Сайт для компании <br/>"Табула Расса"</h2>
                        <span>Посадочная страница для трафика из контекстной рекламы</span>
                    </div>
                </a>
                
                <a href = "portfolio/project-1voentorg.php" class = "portfolio_blk" style  = "background-image: url(img/portfolio/vt.jpg);">
                    <div class = "portfolio_descr" style = "border-left: 15px solid #ffcb04;">
                        <h2>Сайт для магазина <br/>"1-й Военторг"</h2>
                        <span>Сайт с каталогом товаров и возможностью формировать заявки</span>
                    </div>
                </a>
                
                <a href = "portfolio/project-kuzdvor.php" class = "portfolio_blk" style  = "background-image: url(img/portfolio/kd.jpg);">
                    <div class = "portfolio_descr"  style = "border-left: 15px solid #9f7932;">
                            <h2>Сайт для кузницы <br/>"Кузнечный двор"</h2>
                            <span>Сайт с описанием услуг и каталогом готовой продукции</span>
                    </div>
                </a>
                
                <a href = "portfolio/project-boeva.php" class = "portfolio_blk" style  = "background-image: url(img/portfolio/boeva/boeva-obl.webp);">
                    <div class = "portfolio_descr" style = "border-left: 15px solid #dfba6a;">
                        <h2>Презентационный сайт <br/>КД "Боева Дача"</h2>
                        <span>Предентационный сайт для клубного дома. Концепт дизайна и логотип.</span>
                    </div>
                </a>
                
                <a href = "portfolio/project-donetskaya.php" class = "portfolio_blk" style  = "background-image: url(img/portfolio/la.jpg);">
                    <div class = "portfolio_descr"  style = "border-left: 15px solid #08a28b;">
                            <h2>Посадочная страница для <br/>косметолога</h2>
                            <span>Посадочная страница с описанием услуг для конверсии трафика из социальных сетей</span>
                    </div>
                </a>
                
                <a href = "portfolio/project-master.php" class = "portfolio_blk" style  = "background-image: url(img/portfolio/mast.jpg);">
                    <div class = "portfolio_descr"  style = "border-left: 15px solid #e31e27;">
                            <h2>Сайт для строительной компании <br/>"База мастер"</h2>
                            <span>Сайт компании с каталогом продукции и описанием услуг</span>
                    </div>
                </a>
                
                <a href = "portfolio/project-onlinemedia.php" class = "portfolio_blk" style  = "background-image: url(img/portfolio/onlinemedia/onlinemedia-obl.jpg);">
                    <div class = "portfolio_descr"  style = "border-left: 15px solid #e31e27;">
                            <h2>Сайт для рекламного агентства <br/>"OnLine - медиа"</h2>
                            <span>Презентационный сайт рекламной компании, посадочная страница под рекламу.</span>
                    </div>
                </a>
                
                <a href = "portfolio/project-potapov.php" class = "portfolio_blk" style  = "background-image: url(img/portfolio/potapov/potapov-obl.jpg);">
                    <div class = "portfolio_descr"  style = "border-left: 15px solid #c51e3a;">
                            <h2>Сайт ведущего <br/>"PotapovOfficial"</h2>
                            <span>Презентационный сайт для ведущего. Посадочная страница для рекламы и трафика из соцсетей. </span>
                    </div>
                </a>
                
                <a href = "portfolio/project-zasorovnet.php" class = "portfolio_blk" style  = "background-image: url(img/portfolio/zasorovnet/zasorovnet-obl.jpg);">
                    <div class = "portfolio_descr"  style = "border-left: 15px solid #0076c0;">
                            <h2>Сайт компании <br/>"Засоров НЕТ"</h2>
                            <span>Сайт компании по оказанию сантехнических услуг и услуг по прочистке канализации. </span>
                    </div>
                </a>
                
                
                <a href = "portfolio/project-ideastroy.php" class = "portfolio_blk" style  = "background-image: url(img/portfolio/ideastroy/ideastroy-obl.jpg);">
                    <div class = "portfolio_descr"  style = "border-left: 15px solid #d8df20;">
                            <h2>Сайт компании <br/>"IdeaStroy"</h2>
                            <span>Сайт строительной компании, соответствующий законодательству РФ. </span>
                    </div>
                </a>
                
                <a href = "portfolio/project-easy-comp.php" class = "portfolio_blk" style  = "background-image: url(img/portfolio/easycomnew/easycomnew-obl.jpg);">
                    <div class = "portfolio_descr"  style = "border-left: 15px solid #d8df20;">
                            <h2>Сайт компании <br/>"EasyComp 24"</h2>
                            <span>Сайт сервиса по ремонту компютеров и ноутбуков. </span>
                    </div>
                </a>
                
                <a href = "portfolio/project-propuska.php" class = "portfolio_blk" style  = "background-image: url(img/portfolio/propuska/propuska-obl.jpg);">
                    <div class = "portfolio_descr"  style = "border-left: 15px solid #ffc40a;">
                            <h2>Сайт сервиса <br/>"Пропуска МКАД"</h2>
                            <span>Сайт сервиса по заказу пропусков для въезда на территорию Москвы. </span>
                    </div>
                </a>
                
                <a href = "portfolio/project-samosval.php" class = "portfolio_blk" style  = "background-image: url(img/portfolio/samosval/samosval-obl.jpg);">
                    <div class = "portfolio_descr"  style = "border-left: 15px solid #e58c2e;">
                            <h2>Сайт доставки <br/>"Самосвал 46"</h2>
                            <span>Сайт службы доставки сыпучих грузов по Курску и Курской Области. </span>
                    </div>
                </a>
                
                <a href = "portfolio/project-dm.php" class = "portfolio_blk" style  = "background-image: url(img/portfolio/dmlend/dmlend-obl.jpg);">
                    <div class = "portfolio_descr"  style = "border-left: 15px solid #e58c2e;">
                            <h2>Посадочная страница <br/>"Заправка картриджей ДМ"</h2>
                            <span>Посадочная страница для контекстной рекламы сервиса по заправке картриджей компании ДМ. </span>
                    </div>
                </a>
                
                
                <a href = "portfolio/project-marhenko.php" class = "portfolio_blk" style  = "background-image: url(img/portfolio/marhenko/marhenko-obl.jpg);">
                    <div class = "portfolio_descr"  style = "border-left: 15px solid #4fad9d;">
                            <h2>Сайт психотерапевта <br/>Нины Марченко</h2>
                            <span>Личный сайт практикующего психотерапевта Нины Марченко</span>
                    </div>
                </a>
                
                <a href = "portfolio/project-interierno.php" class = "portfolio_blk" style  = "background-image: url(img/portfolio/interierno/interierno-obl.jpg);">
                    <div class = "portfolio_descr"  style = "border-left: 15px solid #33bd3d;">
                            <h2>Сайт портфолио компании <br/>"Интерьерно"</h2>
                            <span>Сайт для публикации портфолио компании производящей мебель на заказ. </span>
                    </div>
                </a>
                
                <a href = "portfolio/project-unarmy.php" class = "portfolio_blk" style  = "background-image: url(img/portfolio/unarmy/unarmy-obl.jpg);">
                    <div class = "portfolio_descr"  style = "border-left: 15px solid #db204f;">
                            <h2>Интернет магазин формы <br/>"Юнармия 46"</h2>
                            <span>Интернет-магазин формы для кадетов юнармии с возможностью заказа индивидуального пошива.</span>
                    </div>
                </a>	
                
                <a href = "portfolio/project-selenga.php" class = "portfolio_blk" style  = "background-image: url(img/portfolio/selenga/selenga-obl.jpg);">
                    <div class = "portfolio_descr"  style = "border-left: 15px solid #8865ac;">
                            <h2>Сайт коттеджного поселка <br/>"Селенга"</h2>
                            <span>Сайт строящегося коттеджного поселка "Селенга". Информационный сайт с интерактивной  картой поселка.</span>
                    </div>
                </a>
                
            </div>
        </div>
    </section>
@endsection