<template>
  <div id="modalPossibilities">
    <div class="overlay">
      <div class="modal">
      <div class="modal__header">
      <h3 class="maintitle">Скачать полный список возможностей U-LAB</h3>
      <div class="close-btn" @click="closePossibilities">&#10005;</div>
    </div>
    <div class="modal__body">
      <div class="modal-subtitle mainsubtitle">
        Оставьте свои контактные данные, мы отправим на указанный E-mail список всех возможностей U-LAB
      </div>
      <form class="demoModalPossibilities" @submit.prevent="onsubmit">
          <input class="inputDemo" id="name" type="text" placeholder=" Ваше имя" v-model="name">
          <input class="inputDemo" id="job" type="text" placeholder=" Должность в компании" v-model="job">
          <input class="inputDemo" id="number" type="number" placeholder="+7 999 999 99 99" v-model="number">
          <input type="text" placeholder=" example@example.ru">
          <button id="btn" @click="getPossibilities" class="send-btn btns">Получить список возможностей</button>
      </form>

    </div>

    </div>

    </div>


  </div>
</template>
<script>


export default {
  name: "ModalPossibilities",
  methods:{
    closePossibilities(){
      this.$emit('closePossibilities')
    }
  }
}
</script>
<style scoped>



.maintitle{

  font-size: 30px;
  width:500px;
}
.demoModalPossibilities{
  display: flex;
  flex-direction: column;
}

</style>