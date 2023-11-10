<template>
  <div id="modalModules">
    <div class="overlay">
      <div class="modal">
        <div class="modal__header">
          <h3 class="maintitle">Скачать полный список модулей U-LAB</h3>
          <div class="close-btn" @click="closeModules">&#10005;</div>
        </div>
        <div class="modal__body">
          <div class="modal-subtitle mainsubtitle">
            Оставьте свои контактные данные, мы отправим на указанный E-mail список всех модулей U-LAB
          </div>
          <form class="demoModalModules" @submit.prevent="modules">
            <input class="inputDemo" id="name" type="text" placeholder= "  * Ваше имя" v-model.trim="name" >
              <input class="inputDemo" id="company" type="text" placeholder="  * Компания" v-model.trim="company">
              <input class="inputDemo" id="number" type="tel" placeholder="  * +7 999 999 99 99" v-model.trim="number">
              <input type="email" placeholder="   * example@example.ru" id="email" v-model.trim="email">
              <button id="btn" @click="sendContacts" class="send-btn btns">Получить список модулей</button>
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
  name: "ModalModules",
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
    closeModules(){
      this.$emit('closeModules')
    },

    sendContacts() {
        let dataResponse = {
            name: this.name,
            company: this.company,
            email: this.email,
            number: this.number
        }

      console.log(dataResponse);

        axios.post('/connection' , dataResponse)
          .then((response)=>{
            console.log(response.data)
            // this.close()
          }).catch(e=>{
            console.log(e)
          })
        },



    modules(){
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
.demoModalModules{
  display: flex;
  flex-direction: column;
}

</style>