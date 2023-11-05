<template>
  <div id="modal">
    <div class="overlay">
      <div class="modal">
      <div class="modal__header">
      <h3 class="maintitle">Запросить цены</h3>
      <div class="close-btn" @click="closePrice">&#10005;</div>
    </div>
    <div class="modal__body">
      <div class="modal-subtitle mainsubtitle">
        Оставьте свои контактные данные, мы свяжемся с вами в ближайшее время
      </div>
      <form class="demoModal" @submit.prevent="onsubmit">
          <input class="inputDemo" id="name" type="text" placeholder=" Ваше имя" v-model="name">
          <input class="inputDemo" id="job" type="text" placeholder=" Компания" v-model="job">
          <input class="inputDemo" id="number" type="number" placeholder="+7 999 999 99 99" v-model="number">
          <input type="text" placeholder=" example@example.ru">
          <button id="btn" @click="sendApplication" class="send-btn btns">Отправить завку</button>
      </form>
    </div>
  </div>
  </div>
  </div>



</template>
<script>


export default {
  name: "ModalPrice",
  data(){
    return{
      name: '',
      job: '',
      number: '',
    }
  },
  methods:{
    closePrice(){
      this.$emit('closePrice')
    }
  }
}
</script>
<style scoped>


.maintitle{

  font-size: 30px;
  width:500px;
}

.demoModal{
  display: flex;
  flex-direction: column;
}
</style>