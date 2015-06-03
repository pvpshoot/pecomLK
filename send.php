<?php include 'header.php'; ?>

<div class="row">
<div class="col-md-14">
<div class="content">
<div class="full-width">
    <ul class="content-menu">
        <li><a href="#"><i class="icon-reload"></i>Обновить статусы грузов</a></li>
        <li><a href="#"><i class="icon-x-point"></i>Перенаправка груза</a></li>
        <li><a href="#"><i class="icon-man"></i>Смена грузополучателя</a></li>
    </ul>
</div>
<div class="send-content">
    <form>

        <div class="row">
            <div class="col-md-3 label-wrapper">
                <label class="">Дата</label>
            </div>

            <div class="col-md-6 ovv">
                <div class="form-group date-pick ovv">
                    <span class="fck-from">От</span>
                    <input type="text" class="form-control" placeholder="25.04.2015"/>

                    <input type="text" class="form-control" placeholder="25.05.2015"/>
                    <span class="fck-to">До</span>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-3 label-wrapper">
                <label class="">Код груза</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="КИСОАЗП-1/2504"/>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 label-wrapper">
                <label class="">Отправитель</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control"/>
                </div>
            </div>
            <div class="col-md-5">
                <div class="item">
                    <p>Я отправитель</p>

                    <div class="checkbox">
                        <div class="form-group">
                            <label><input type="checkbox" name="ur-face">Точное соответствие</label>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 label-wrapper">
                <label class="">Получатель</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control"/>
                </div>
            </div>
            <div class="col-md-5">
                <div class="item">
                    <p>Я получатель</p>

                    <div class="checkbox">
                        <div class="form-group">
                            <label><input type="checkbox" name="ur-face">Точное соответствие</label>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 label-wrapper">
                <label class="">Плательщик</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control"/>
                </div>
            </div>
            <div class="col-md-5">
                <div class="item">
                    <p>Я плательщик</p>

                    <div class="checkbox">
                        <div class="form-group">
                            <label><input type="checkbox" name="ur-face">Точное соответствие</label>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 label-wrapper"><label class="required">Статус груза</label></div>
            <div class="col-md-6">
                <div class="form-group with-select">
                    <select name="" id="" class="select form-control" required>
                        <option value="123" name="test1">Не фильтровать</option>
                        <option value="123" name="test1">ФГАОУ ВГ</option>
                        <option value="123" name="test1">ФГАОУ ВГ</option>
                        <option value="123" name="test1">ФГАОУ ВГ</option>
                        <option value="123" name="test1">ФГАОУ ВГ</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 label-wrapper"><label class="required">Филиал отправителя</label></div>
            <div class="col-md-6">
                <div class="form-group with-select">
                    <select name="" id="" class="select form-control" required>
                        <option value="123" name="test1">Не фильтровать</option>
                        <option value="123" name="test1">ФГАОУ ВГ</option>
                        <option value="123" name="test1">ФГАОУ ВГ</option>
                        <option value="123" name="test1">ФГАОУ ВГ</option>
                        <option value="123" name="test1">ФГАОУ ВГ</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 label-wrapper"><label class="required">Филиал получателя</label></div>
            <div class="col-md-6">
                <div class="form-group with-select">
                    <select name="" id="" class="select form-control" required>
                        <option value="123" name="test1">Не фильтровать</option>
                        <option value="123" name="test1">ФГАОУ ВГ</option>
                        <option value="123" name="test1">ФГАОУ ВГ</option>
                        <option value="123" name="test1">ФГАОУ ВГ</option>
                        <option value="123" name="test1">ФГАОУ ВГ</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="checkbox">
                    <div class="form-group">
                        <label><input type="checkbox" name="ur-face">Отображать только возвратные
                            документы</label>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 label-wrapper"><label class="required">Возврат документов</label></div>
            <div class="col-md-6">
                <div class="form-group with-select">
                    <select name="" id="" class="select form-control" required>
                        <option value="123" name="test1">Не фильтровать</option>
                        <option value="123" name="test1">ФГАОУ ВГ</option>
                        <option value="123" name="test1">ФГАОУ ВГ</option>
                        <option value="123" name="test1">ФГАОУ ВГ</option>
                        <option value="123" name="test1">ФГАОУ ВГ</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <a class="btn btn-primary">Фильтровать</a>
                <a class="btn btn-default">Сбросить</a>
            </div>
        </div>
    </form>

    <div class="legend">
        <h5>Статус перевозки</h5>
        <ul>
            <li><span class="mark mark-accsepted"></span>Принят</li>
            <li><span class="mark mark-toDelivery"></span>Выдан на доставку</li>
            <li><span class="mark mark-noComplect"></span>Некомплект</li>
            <li><span class="mark mark-returnToSender"></span>Возвращен отправителю</li>
            <li><span class="mark mark-delivered"></span>Выдан</li>
            <li><span class="mark mark-onWay"></span>В пути</li>
            <li><span class="mark mark-resycle"></span>Утилизирован</li>
            <li><span class="mark mark-arived"></span>Прибыл</li>
            <li><span class="mark mark-given"></span>Вручен</li>
        </ul>
    </div>
</div>
<div class="send-result">
    <div class="full-width">
        <ul class="content-menu">
            <li><a href="#"><i class="icon-pen"></i>Настроить колонки таблицы</a></li>
            <li><a href="#"><i class="icon-cross"></i>Сбросить настройки</a></li>
            <li><a href="#"><i class="icon-blank"></i>Экспорт в Excel (.csv)</a></li>
            <li class="right select-cnt">
                <div class="form-group with-select">
                    <select name="" id="" class="select form-control" required>
                        <option value="123" name="test1">50 записей на странице</option>
                        <option value="123" name="test1">ФГАОУ ВГ</option>
                        <option value="123" name="test1">ФГАОУ ВГ</option>
                        <option value="123" name="test1">ФГАОУ ВГ</option>
                        <option value="123" name="test1">ФГАОУ ВГ</option>
                    </select>
                </div>
            </li>
        </ul>
    </div>
    <p class="tetx-result">Всего за период: <b>46 405,99</b> руб., <b>51 642,29</b> кг, <b>168,24</b> м<sup>3</sup>, <b>4419</b>
        мест</p>

    <table class="table">
        <thead>
        <tr>
            <td>
                <div class="checkbox">
                    <div class="form-group">
                        <label><input type="checkbox" name="ur-face">Точное соответствие</label>

                    </div>
                </div>
            </td>
            <td>Дата <br/> сдачи</td>
            <td>Дата <br/> прибытия</td>
            <td>Дата <br/>выдачи</td>
            <td>Код <br/>груза</td>
            <td>Дата <br/> сдачи</td>
            <td>Дата <br/> сдачи</td>
            <td>Дата <br/> сдачи</td>
        </tr>
        </thead>
    </table>

</div>
</div>
</div>
</div>



<?php include 'footer.php'; ?>
