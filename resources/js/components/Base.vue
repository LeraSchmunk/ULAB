<template>
  <div >
    <div class="container" id="base">
      <div class="base">
            <div class="container ">
              <div class="base__title maintitle">Базовый функционал ULAB</div>
              <div class="base__ladder">
                <div class="step step-active">Управление <br>взаимоотношениями с <br>клиентами</div>
                <div class="base__ladder-second">
                  <div class="step">Нормативная <br>документация</div>
                  <div class="step">Учет оборудования</div>
                </div>
                <div class="base__ladder-third">
                  <div class="step">Контроль условий проведения испытаний</div>
                  <div class="step">Формирование <br> документации</div>
                </div>
                <div class="base__ladder-forth">
                  <div class="step">Интеграция с <br>внешними системами</div>
                  <div class="step">Формирование <br> отчетности</div>
                  <div class="step">Личный кабинет <br> заказчика</div>
                </div>
              </div>
            </div>
        </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Base"
}
</script>
<style scoped>
#base{
  margin-bottom: 150px;
  padding-top: 130px;
}

.base{
  color: white!important;
  display: grid;
  grid-template-columns: 1fr 1fr;
}
.base__title{
  color:#FFEEB4;
  width: 576px;
}
.base__ladder{
  display: flex;
  justify-content: space-between;
  align-items: flex-end;
  padding-top: 60px;
}

.step{
  background-color: #ffffff14;
  margin-bottom: 20px;
  padding: 20px;
  width: 285px;
}
.step-active{
  background: linear-gradient(45deg, rgb(127, 58, 232), rgb(232, 84, 217) 75%);
}

</style>