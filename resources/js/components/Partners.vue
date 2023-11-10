<template>
  <div >
    <div class="container" id="partners">
      <div class="partners">
          <div class="partners-card ">
              <div class="partners-card-img"><img src="../../../public/img/smt.png " alt=" " ></div>
              <p class="keys-title ">ЛИМС в процессе внедрения в ООО «СибМосТест» произвели следующие работы:</p>
              <li class="card-list "><span>Настроили CRM</span></li>
              <li class="card-list "><span>Кабинет заказчика</span></li>
              <li class="card-list "><span>Импортировали базу оборудования в ЛИМС</span></li>
              <li class="card-list "><span>Импортировали базу методик в ЛИМС</span></li>
              <li class="card-list "><span>Настроили CRM</span></li>
              <li class="card-list "><span>Настроили права сотрудников в ЛИМС</span></li>
              <li class="card-list "><span>Создали шаблоны документов: коммерческое предложение, договор, счет, акт, протоколы</span></li>
              <li class="card-list "><span>Настроили функционал хранения документов в системе</span></li>
              <li class="card-list "><span>Обучили сотрудников работе в ЛИМС</span></li>
              <li class="card-list "><span>Проверили нормативно-техническую документацию, составили список актуальных</span></li>
              <li class="card-list "><span>Проверили печати протоколов всех видов</span></li>
          </div>

          <div class="partners-card ">
            <div class="partners-card-img"><img src="../../../public/img/stm.png " alt=" " ></div>
              <p class="partners-title ">ООО «Научно-исследовательский центр "Строительных технологий и материалов"»</p>
              <li class="card-list "><span>Настроили права сотрудников в ЛИМС</span></li>
              <li class="card-list "><span>Настроили интеграцию с 1С</span></li>
              <li class="card-list "><span>Настроили журнал заявок</span></li>
              <li class="card-list "><span>Настроили формирование счета</span></li>
              <li class="card-list "><span>Настроили журнал заявок</span></li>
              <li class="card-list "><span>Настроили формирование счета</span></li>
              <li class="card-list "><span>Создали шаблоны документов: коммерческое предложение, договор, счет, акт, протоколы</span></li>
              <li class="card-list "><span>Настроили систему контроля условий испытаний</span></li>
              <li class="card-list "><span>Внесли данные по оборудованию</span></li>
              <li class="card-list "><span>Проверили нормативно-техническую документацию, составили список актуальных</span></li>
              <li class="card-list "><span>Проверили методик в системе, составили список актуальных</span></li>
              <li class="card-list "><span>Настроили функционал постановки задач</span></li>
              <li class="card-list "><span>Обучили сотрудников работе в ЛИМС</span></li>
          </div>
          <div class="partners-card ">
            <div class="partners-card-img"><img src="../../../public/img/lador.png " alt=" " ></div>
              <p class="partners-title ">Проведено внедрение ЛИМС в НИИ ЛАДОР</p>
              <li class="card-list "><span>Настроили журнал заявок, карточки заявок и создание заявок</span></li>
              <li class="card-list "><span>Создали шаблоны документов: коммерческое предложение, договор, счет, акт, протоколы</span></li>
              <li class="card-list "><span>Настроили систему контроля условий испытаний</span></li>
              <li class="card-list "><span>Кабинет заказчика</span></li>
              <li class="card-list "><span>Настроили функционал хранения документов в системе</span></li>
              <li class="card-list "><span>Обучили сотрудников работе в ЛИМС</span></li>
              <li class="card-list "><span>Верификация и валидация методик</span></li>
              <li class="card-list "><span>Интерактивная карта</span></li>
              <li class="card-list "><span>Внутрилабораторный контроль и межлабораторные испытания</span></li>
              <li class="card-list "><span>Отчет по области аккредитации и новая область аккредитации</span></li>
          </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: "Partners"
}
</script>
<style scoped>
#partners{
  padding-bottom: 200px;
  padding-top: 100px;
}

.partners{
  display: flex;
  justify-content: space-between;
  gap: 20px;
}

.partners-card{
  width: 440px;
  border: 1px solid #ffeeb42a;
  padding: 27px ;
}

.partners-card-img img{
  width: 400px;
  text-align: center;
  margin-bottom: 32px;
}

.partners-title{
  font-size: 20px;
  color:  #FFEEB4;
  font-weight: 600;
  text-align: justify;
  padding-bottom: 24px;
  height: 70px;
}

.card-list{
  list-style-type: disc;
  line-height: 1.7;
}
.titleMonserrat{
  width: 900px;
  padding-right: 50px;
}

.subtitleRoboto{
  width: 686px;
}
.slider{
  display: flex;
  justify-content: space-between;
  align-items: end;
}
.sliders {
  width: 330px;
  text-align: right;
}
.companies {
  display: flex;
  justify-content: space-between;
  gap: 8px;
  padding-top: 60px;
}
.company-block {
  background-color: #E9ECF0;
  border-radius: 24px;
  height: 221px;
  width: 274px;
  display: flex;
  flex-direction: column;
  justify-content: space-around;
  padding-left:20px ;
}

.company-block img{
  height: 64px;
  width: 64px;
}
.company-name {
  font-family: Montserrat, sans-serif;
  font-size: 16px;
  font-weight: 600;
}
.company-description {
  font-family: Roboto, sans-serif;
  font-size: 16px;
}


</style>