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
      <form class="demoModal" @submit.prevent="price">
        <input class="inputDemo" id="name" type="text" placeholder= "  * Ваше имя" v-model.trim="name" >
        <input class="inputDemo" id="company" type="text" placeholder="  * Компания" v-model.trim="company">
        <input class="inputDemo" id="number" type="tel" placeholder="  * +7 999 999 99 99" v-model.trim="number">
        <input type="email" placeholder="   * example@example.ru" id="email" v-model.trim="email">
        <button id="btn" @click="sendApplication" class="send-btn btns">Отправить завку</button>
      </form>
    </div>
  </div>
  </div>
  </div>



</template>
<script>
import useVuelidate from '@vuelidate/core'
import {required,email, numeric} from '@vuelidate/validators'


export default {
  name: "ModalPrice",
  data(){
    return{
      v$: useVuelidate(),
      name: '',
      company: '',
      number: '',
      email:''
    }
  },
  validations(){
    return{
      name: {required},
      company:{required},
      number:{required, numeric},
      email:{required, email}
    }},
  methods:{
    closePrice(){
      this.$emit('closePrice')
    },
    price(){
      this.v$.$validate()
      if(!this.v$.$error){

      } else {
        alert('Пожалуйста, заполните все поля')
      }
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