<template>
  <div id="baner">
    <div class="baner container">
      <div class="baner-text">
        <div class="baner__title">
          Автоматизируйте лабораторию легко!
        </div>
        <div class="baner__subtitle">
          Первая лабораторная система, полностью интегрированная с ФГИС росаккредитации
        </div>
        <button class="btns baner__btn">Протестировать</button>
      </div>
      <div class="about">
        <div class="about__title maintitle">Что такое ULAB</div>

        <div class="about__subtitle mainsubtitle ">
          U-LAB — система автоматизации деятельности испытательной лаборатории, призванная минимизировать время выполнения всех бизнес-процессов, при соблюдении высоких стандартов качества.
          <br> <br>
          U-LAB соответствует требованиям ГОСТ 17025 и подходит для:
          <br>
          — Независимых испытательных лабораторий
          <br>
          — Лабораторий, работающих на внутреннего заказчика
        </div>
      </div>
    </div>
    <!-- <div class="background">
        <img src="../../../public/img/about-background.png" alt="">
      </div> -->
  </div>
</template>
<script>
export default {
  name: "Baner"
}
</script>
<style scoped>
  #baner{
    /* background-color: #1B1A1A;
    background-image: url('../img/Group17.png');
    background-repeat: no-repeat;
    background-position: center;
    background-size: 100%; */
    /* padding: 300px 0 349px 0; */
    height: 1290px;
    margin-bottom: 100px;


  }


  .baner-text{
    text-align: center;
    /* background-color: #1b1a1a00; */
  }
  .baner__title {
    font-weight: 800;
    font-size: 72px;
    text-transform: uppercase;
    /* background-color: #1b1a1a00; */
  }
  .baner__subtitle {
    font-size: 24px;
    font-weight: 400;
    text-align: center;
    margin: 24px 85px 40px 85px;
    width: 690px;
    margin-left: auto;
    margin-right: auto;
    line-height: 1.5;
  }
  .baner__btn{
    border: 0.1px solid white;
    padding: 13px 15px;
    color: #1B1A1A;
    background-color: white;
    margin-bottom: 600px;
  }

  .about{
  color: white!important;
  display: grid;
  grid-template-columns: 1fr 1fr;
}

.about__subtitle{
  width: 555px;
}

.about__title{
  color:#FFEEB4;



}


</style>