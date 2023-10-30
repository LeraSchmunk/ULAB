<template>
  <div id="differences">
    <div class="container">
      <div class="differences">

        <div class="differences__title">
          <div class="maintitle">Чем мы отличаемся от других LIMS</div>
          <img src="../../../public/img/differences-logo.png" alt="">
        </div>

        <div class="differences__column">

          <div class="column1">
            <li>Полная интеграция с ФГИС ФСА по API</li><br>
            <li>Интеграция с 1С и 1С-Битрикс24</li><br>
            <li>Мощный модуль CRM</li><br>
            <li>Облачная версия</li><br>
            <li>Разработчики - крупный испытательный центр УралНИИстром</li><br>
            <li>Доказанная экономия времени - 30%</li><br>
          </div>
          <div class="column2">
            <li> QR-кодирование и защита протоколов от подделки</li><br>
            <li>Автоматизированное ведение журналов учета</li><br>
            <li>Финансовая статистика</li><br>
            <li>Безопасность, гарантированная наличием лицензий ФСТЭК</li><br>
            <li>Система на постоянной основе проходит аудит действующих экспертов Росаккредитации</li><br>
          </div>
        </div>




    </div>
  </div>
  </div>
</template>

<script>
export default {
  name: "Differences"
}
</script>
<style scoped>
#differences{
  /* background-color:  #1B1A1A; */
  padding-bottom: 200px;


  /* background-image: url('../img/about-background.png');
  background-repeat: no-repeat;
  background-position:top center;
  background-size: 100%; */
}

.differences{
  /* display: grid;
    grid-template-columns: 1fr 1fr; */
    /* justify-content: space-between; */
    /* gap: 101px; */
    /* align-items: center; */

}
.differences__title{
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding-bottom: 100px;
  padding-top: 224px;
  /* position: absolute; */

}

/* .differences img{
  width: 100px;
  height: 70px;
} */

.differences__column{
  display: flex;
  justify-content: space-between;
  gap: 212px;

}

.differences__column div{
  padding-left: 24px;
  border-left: 4px solid #F9B4FF ;
  line-height: 1.1;
  font-size: 20px;
  width: 470px;

}

.column2{
  position: relative;
  top: 65px;
}
.maintitle{
color: #F9B4FF;
font-size: 48px;
width: 590px;
}

.demo-second img{
  padding-left: 120px;
}
.mainsubtitle{
  width: 530px;
  font-weight: 500;
}
.mainsubtitle span{
  color:#75FF8B
}
.mainsubtitle u{
  text-decoration: underline;}

.demo__subtitle{
  padding-top: 40px;

}

.btns {
  border: 1px solid #FFE175;
  color: #FFE175;
}
.download{
  color: #FFE175;
  background-color: rgba(255, 255, 255, 0);
  border: none;
  width: 163px;
  text-align: left;
}


.base{
  /* color: white!important;
  display: grid;
  grid-template-columns: 1fr 1fr; */

  /* gap: 76px 65px;
  grid-template-areas:
    "percent work__title work__title"
    "work-step01 work-step02 work-step03";
  padding: 36px 0 60px 0; */

}

.base__ladder{
  /* display: flex;
  justify-content: space-between;
  align-items: flex-end */
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