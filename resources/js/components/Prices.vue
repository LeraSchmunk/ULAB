<template>
  <div id="prices">
    <div class="container">
      <div class="prices">
        <div>Стоимость лицензии на 12 пользователей составляет от 399 000 рублей,<br> на 50 пользователей - от 799 000 рублей.</div>
        <div class="maintitle">Ценообразование U-LAB формируется при учете следующих факторов</div>
        <button class="btns baner__btn" @click="showPrice">Узнать цену</button>
      </div>
      <div class="icons">
        <div class="icon">
          <img src="../../../public/img/icon-arrow.png" alt="">
          <div class="icon-text">
            Базовый функционал <br>U-Lab
          </div>
        </div>
        <div class="icon icon-bird">
          <img src="../../../public/img/icon-bird.png" alt="">
          <div class="icon-text">
            Количество <br>сотрудников

          </div>
        </div>
        <div class="icon">
          <img src="../../../public/img/icon-scheme.png" alt="">
          <div class="icon-text">
            Дополнительные <br>модули

          </div>
        </div>
        <div class="icon">
          <img src="../../../public/img/icon-micro.png" alt="">
          <div class="icon-text">
            Персональные <br>доработки системы
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Prices",
  methods:{
    showPrice(){
      this.$emit('showPrice')
    }
  }
}
</script>
<style scoped>
#prices{
  padding-bottom: 200px;
  padding-top: 300px;
}

.icon{
  text-align: center;
  height: 180px;
  margin-bottom: 100px;
}
.icons{
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-top: 120px;
}

.icon img{
  width: 84px;
  height: 84px;
  align-content: center;
}
.icon img{
  height: 100px;
  width: 100px;}
.icon-text{
  font-size: 28px;
}

.prices{
  text-align: center;
  display: flex;
  flex-direction: column;
  align-items: center
}
.maintitle{
  width: 1130px;
  font-size: 48px;
  text-align: center;
  padding: 40px 0;
  color: #FFEEB4;
}
.btns {
  border: 1px solid #FFEEB4;
  color: #FFEEB4;
}
</style>