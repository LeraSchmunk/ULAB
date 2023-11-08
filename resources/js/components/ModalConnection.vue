<template>
  <div id="modal">
    <div class="overlay">
      <div class="modal">
      <div class="modal__header">
      <h3 class="maintitle">Форма обратной связи</h3>
      <div class="close-btn" @click="closeConnection">&#10005;</div>
    </div>
    <div class="modal__body">
      <div class="modal-subtitle mainsubtitle">
        Оставьте свои контактные данные, мы свяжемся с вами в ближайшее время
      </div>
      <form class="demoModal" @submit.prevent="connection">
          <input class="inputDemo" id="name" type="text" placeholder= "  * Ваше имя" v-model.trim="name" >
          <input class="inputDemo" id="company" type="text" placeholder="  * Компания" v-model.trim="company">
          <input class="inputDemo" id="number" type="tel" placeholder="  * +7 999 999 99 99" v-model.trim="number">
          <input type="email" placeholder="   * example@example.ru" id="email" v-model.trim="email">
          <button type="submit" id="btn" @click="sendApplication" class="send-btn btns">Связаться</button>
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
  name: "ModalConnection",

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
    }


  },
  methods:{
    closeConnection(){
      this.$emit('closeConnection')
    },
    connection(){

      axios.post('/api/connection' , {
        "name": this.name,
        "company": this.company,
        "email": this.email,
        "number": this.number
      }).then(res=>{
        console.log(res)
      }).catch(e=>{
        console.log(e)
      })
      // if (this.$v.$invalid){
      //   this.$v.$touch()
      //   return
      // }
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

input{
  color: black;
}
</style>