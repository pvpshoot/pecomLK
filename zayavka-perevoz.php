<?php include 'header.php'; ?>

<div class="row">
    <div class="col-md-14">
        <div class="content">
            <form>
              <div class="row">
                  <div class="col-md-14">
                      <h3>Заявка на перенаправку груза</h3>
                  </div>
                  <div class="row">
                      <div class="col-md-2 label-wrapper">
                          <label class="required">Код груза</label>
                      </div>

                      <div class="col-md-5">
                          <div class="form-group">
                              <input type="text" class="form-control" required/>
                          </div>
                      </div>
                      <div class="col-md-7">
                          <p class="additional-txt">В случае если Договор заключен с ООО «ПЭК Север», ООО «ПЭК Юг», ООО
                              «ПЭК СП», ООО «ПЭК Северо-Запад», ООО «ПЭК Сибирь», ООО «ПЭК Урал», ООО «ПЭК Южный регион»,
                              ООО «ПЭК Поволжье» - указывается наименование той компании, с которой заключен Договор</p>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-md-2 label-wrapper">
                          <label class="required">Филиал ПЭК</label>
                      </div>

                      <div class="col-md-5">
                          <div class="form-group">
                              <input type="text" class="form-control" required/>
                          </div>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-md-2 label-wrapper">
                          <label class="required">Отправитель - юр. лицо</label>
                      </div>

                      <div class="col-md-5">
                          <div class="checkbox">
                              <div class="form-group">
                                  <label><input type="checkbox" name="ur-face">Отправитель является юр.лицом или
                                      ИП</label>

                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-md-2 label-wrapper">
                          <label class="required">Заявитель</label>
                      </div>

                      <div class="col-md-5">
                          <div class="form-group">
                              <input type="text" class="form-control" required/>
                              <small>для юр. лиц – наименование; для физ. лиц – ФИО</small>
                          </div>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-md-2 label-wrapper">
                          <label class="required">Данные заявителя</label>
                      </div>

                      <div class="col-md-5">
                          <div class="form-group">
                              <input type="text" class="form-control" required/>
                              <small>для юр. лиц – ИНН; для физ. лиц – паспортные данные</small>
                          </div>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-md-2 label-wrapper"><label class="required">Телефон отправителя</label></div>
                      <div class="col-md-5">
                          <div class="form-group"><input type="tel" class="form-control" required/></div>
                      </div>
                  </div>

                  <br>

                  <div class="row">
                      <div class="col-md-2 label-wrapper">
                          <label class="">Генеральный директор</label>
                      </div>

                      <div class="col-md-5">
                          <div class="form-group">
                              <input type="tel" class="form-control" required/>

                          </div>
                      </div>
                      <div class="col-md-7">
                          <p class="additional-txt">Либо иное уполномоченное лицо, с обязательным приложением действующей
                              доверенности, либо приказа, дающего полномочия на подписание письма</p>
                      </div>

                  </div>

                  <div class="row">
                      <div class="col-md-2 label-wrapper"><label class="required">Перенаправка из филиала</label></div>
                      <div class="col-md-5">
                          <div class="form-group with-select">
                              <select name="" id="" class="select form-control" required>
                                  <option value="123" name="test1">ФГАОУ ВГ</option>
                                  <option value="123" name="test1">ФГАОУ ВГ</option>
                                  <option value="123" name="test1">ФГАОУ ВГ</option>
                                  <option value="123" name="test1">ФГАОУ ВГ</option>
                                  <option value="123" name="test1">ФГАОУ ВГ</option>
                              </select>
                          </div>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-md-2 label-wrapper"><label class="required">Маршрут следования груза</label></div>
                      <div class="col-md-5">
                          <div class="form-group"><input type="tel" class="form-control" required/></div>
                      </div>
                      <div class="col-md-7"><p class="additional-txt">Маршрут следования груза должен включать: город отправителя, первоначальный город получателя, новый город получателя</p></div>
                  </div>




                  <div class="row">
                      <div class="col-md-2 label-wrapper">
                          <label class="required">Получатель - юр. лицо</label>
                      </div>

                      <div class="col-md-5">
                          <div class="checkbox">
                              <div class="form-group">
                                  <!-- TODO: сделать js чекбоксов   -->
                                  <label><input type="checkbox" name="ur-face">Получатель является юр.лицом или
                                      ИП</label>

                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-md-2 label-wrapper">
                          <label class="required">Получатель</label>
                      </div>

                      <div class="col-md-5">
                          <div class="form-group">
                              <input type="text" class="form-control" required/>
                              <small>для юр. лиц – наименование; для физ. лиц – ФИО</small>
                          </div>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-md-2 label-wrapper">
                          <label class="required">Данные получателя</label>
                      </div>

                      <div class="col-md-5">
                          <div class="form-group">
                              <input type="text" class="form-control" required/>
                              <small>для юр. лиц – ИНН; для физ. лиц – паспортные данные</small>
                          </div>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-md-2 label-wrapper"><label class="required">Телефон получателя</label></div>
                      <div class="col-md-5">
                          <div class="form-group"><input type="tel" class="form-control" required/></div>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-md-2 label-wrapper"><label class="required">Наименование филиала-получателя</label></div>
                      <div class="col-md-5">
                          <div class="form-group with-select">
                              <select name="" id="" class="select form-control" required>
                                  <option value="123" name="test1">ФГАОУ ВГ</option>
                                  <option value="123" name="test1">ФГАОУ ВГ</option>
                                  <option value="123" name="test1">ФГАОУ ВГ</option>
                                  <option value="123" name="test1">ФГАОУ ВГ</option>
                                  <option value="123" name="test1">ФГАОУ ВГ</option>
                              </select>
                          </div>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-md-2 label-wrapper"><label class="required">Адрес получателя</label></div>
                      <div class="col-md-5">
                          <div class="form-group"><textarea name="adress-resiver" rows="5" class="form-control"></textarea></div>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-md-2 label-wrapper"><label class="required">Вид перевозки</label></div>
                      <div class="col-md-5">
                          <div class="form-group with-select">
                              <select name="" id="" class="select form-control" required>
                                  <option value="123" name="test1">ФГАОУ ВГ</option>
                                  <option value="123" name="test1">ФГАОУ ВГ</option>
                                  <option value="123" name="test1">ФГАОУ ВГ</option>
                                  <option value="123" name="test1">ФГАОУ ВГ</option>
                                  <option value="123" name="test1">ФГАОУ ВГ</option>
                              </select>
                          </div>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-md-2 label-wrapper"><label class="required">Плательщик</label></div>
                      <div class="col-md-5">

                              <div class="form-group with-select">
                                  <select name="" id="" class="select form-control" required>
                                      <option value="123" name="test1">ФГАОУ ВГ</option>
                                      <option value="123" name="test1">ФГАОУ ВГ</option>
                                      <option value="123" name="test1">ФГАОУ ВГ</option>
                                      <option value="123" name="test1">ФГАОУ ВГ</option>
                                      <option value="123" name="test1">ФГАОУ ВГ</option>
                                  </select>
                              </div>

                      </div>
                  </div>

                  <div class="row">
                      <div class="col-md-2 label-wrapper"><label class="">КПП плательщика</label></div>
                      <div class="col-md-5">
                          <div class="form-group with-select">
                              <select name="" id="" class="select form-control" required>
                                  <option value="123" name="test1">ФГАОУ ВГ</option>
                                  <option value="123" name="test1">ФГАОУ ВГ</option>
                                  <option value="123" name="test1">ФГАОУ ВГ</option>
                                  <option value="123" name="test1">ФГАОУ ВГ</option>
                                  <option value="123" name="test1">ФГАОУ ВГ</option>
                              </select>
                          </div>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-md-2 label-wrapper"><label class="required">Банковские реквизиты плательщика</label></div>
                      <div class="col-md-5">
                          <div class="form-group"><textarea name="adress-resiver" rows="5" class="form-control"></textarea></div>
                      </div>

                      <div class="col-md-7"><p class="additional-txt">Расчетный счет, наименование банка, корреспондирующий счет, БИК</p></div>
                  </div>
                  <div class="row">
                    <div class="col-md-5 col-md-offset-2">
                      <a class="btn btn-img-link" href=""><i class="icon-list"></i>Подготовить заявление</a>
                    </div>
                  </div>

                  <br>

                  <div class="row">
                    <div class="col-md-5 col-md-offset-2">
                      <h4>Прикрепленные файлы</h4>
                      <p>Если желаете прикрепить к заявке схему проезда или другие файлы, воспользуйтесь ссылкой «Добавить файл».</p>
                      <p>Максимальный размер одного файла: <b>2,00 Мб</b>, максимальный размер всех файлов: <b>2,00 Мб</b></p>
                      <div class="file-add">
                        <span class="btn btn-img-link js__file-add" href=""><i class="icon-file-add"></i>Прикрепить файл</span>
                        <p class="file-add-result"></p>
                        <input type="file" multiple name="name" value="">
                      </div>

                      <br>
                      <br>
                      <input type="submit" name="sbForm" value="Отправить" class="btn btn-primary">
                    </div>
                  </div>




              </div>
            </form>
        </div>
    </div>
</div>



<?php include 'footer.php'; ?>
