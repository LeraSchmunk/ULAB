<template>
  <div id="demo-second">
    <div class="container">
      <div class="demo-second">

             <div>
              <img src="../../../public/img/demo-second.png" alt="">
             </div>
             <div class="mainsubtitle">
              <span>А также</span> интеграция с внешними системами, Формирование отчетности, Личный кабинет заказчика и прочие. <br> <br>
              Всего более <span>50 модулей</span>, отвечающих за хранение, обработку и предоставление данных о деятельности лаборатории. <u>Сведения, необходимые для эксплуатации ЛИМС U-LAB (инструкция пользователя)</u>
              <div class="demo__subtitle">
                <button class="btns baner__btn" @click="showDemo">Запросить демонстрацию</button>
                <div class="save-btn" >
                  <img src="../../../public/img/save-yellow.png" alt="">
                  <button class="download" @click="showModules">  Скачать полный список модулей</button>
                </div>
              </div>
            </div>


    </div>
  </div>
  </div>
</template>

<script>
export default {
  name: "DemoSecond",
  methods:{
    showDemo(){
      this.$emit('showDemo')
    },

    showModules(){
      this.$emit('showModules')
      console.log('ok');
    }
  }
}
</script>
<style scoped>
#demo-second{
  /* background-color:  #1B1A1A; */
  margin-bottom: 150px;
  padding-top: 300px;

  /* background-image: url('../img/demosecond-background.png');
  background-repeat: no-repeat;
  background-position:top center;
  background-size: 100%; */
}

.demo-second{
  display: grid;
    grid-template-columns: 1fr 1fr;
    /* justify-content: space-between; */
    gap: 101px;
    align-items: center;

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
  color: white!important;
  display: grid;
  grid-template-columns: 1fr 1fr;

  /* gap: 76px 65px;
  grid-template-areas:
    "percent work__title work__title"
    "work-step01 work-step02 work-step03";
  padding: 36px 0 60px 0; */

}

.base__ladder{
  display: flex;
  justify-content: space-between;
  align-items: flex-end
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