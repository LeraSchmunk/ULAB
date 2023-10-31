<template>
  <div id="work">
    <div class="container">
      <div class="work">
        <img src="../../../public/img/logo.png" alt="">
        <div class="maintitle">Порядок проведения работ по внедрению U-LAB</div>
        <button class="btns baner__btn" @click="showDemo">Запросить демонстрацию</button>
      </div>
      <div class="work__scheme">
        <div class="work-titel work01">
          <div class="number">01</div>
          Демонстрация системы
        </div>
        <div class="work-titel work03">
          <div class="number">03</div>
          Формирование предложения по внедрению U-LAB
        </div>
        <div class="work-titel work05">
          <div class="number">05</div>
          Внедрение с последующим обновлением системы, добавление новых модулей, клиентская поддержка 24/7
        </div>
        <img src="../../../public/img/scheme.png" alt="">
        <div class="work-titel work02">
          Сбор данных о лаборатории
          <div class="number">02</div>
        </div>
        <div class="work-titel work04">
          Заключение договора и формирование технического задания
          <div class="number">04</div>
        </div>
      </div>

    </div>

  </div>
</template>

<script>
export default {
  name: "Work",
  methods:{
    showDemo(){
      this.$emit('showDemo')
    }
  }
}
</script>
<style scoped>
#work{
  /* background-color:  #1B1A1A; */
  padding-bottom: 240px;


  /* background-image: url('../img/about-background.png');
  background-repeat: no-repeat;
  background-position:top center;
  background-size: 100%; */
}

.work{

  /* margin: 0 auto; */
  text-align: center;
  display: flex;
  flex-direction: column;
  align-items: center;
  padding-bottom: 82px;
}
.maintitle{
  width: 780px;
  font-size: 48px;
  text-align: center;
  padding-bottom: 40px;
}
.btns {
  border: 1px solid #ffffff;
  color: #ffffff;
}

.work__scheme img{
  position: relative;
  padding: 200px 0 50px 0;

}

.number{
  font-size: 24px;
  color: #ffffff40;
  padding: 36px 0;
  font-weight: 600;
}
.work-titel{
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 291px;
  text-align: center;
}
.work01{
  position: absolute;
  left: 171px;
  /* top: 20px; */
}
.work03{
  position: absolute;
  left: 569px;
}
.work05{
  position: absolute;
  left: 1058px;
}
.work02{
  position: absolute;
  left: 394px;
}
.work04{
  position: absolute;
  left: 815px;
}
</style>