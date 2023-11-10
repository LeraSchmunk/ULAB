<template>
  <div >
    <div class="baner container" >
      <div class="baner-text">
        <div class="baner__title">
          Автоматизируйте лабораторию легко!
        </div>
        <div class="baner__subtitle">
          Первая лабораторная система, полностью интегрированная с ФГИС Росаккредитации
        </div>
        <button type="button" class="btns baner__btn" @click="showDemo" >Протестировать</button>
      </div>
      <div class="about" id="about">
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
  </div>
</template>

<script>
export default {
  name: "About",
  data () {
    return{

    }
  },
  methods:{
    showDemo(){
      this.$emit('showDemo')
    }
  }
}
</script>
<style scoped>
  #about{
    margin-bottom: 250px;
    padding-top: 150px;
  }

  .baner{
    padding-top: 150px;
  }


  .baner-text{
    text-align: center;
  }
  .baner__title {
    font-weight: 800;
    font-size: 72px;
    text-transform: uppercase;
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
    margin-bottom: 450px;
  }

  .about{
  color: white!important;
  display: grid;
  grid-template-columns: 1fr 1fr;
}

.about__subtitle{
  width: 555px;
  line-height: 1.3em;
}

.about__title{
  color:#FFEEB4;
}

.baner__btn{
  color: black;
}


</style>