<template>


<div id="app" >
  <div class="container">
    <div class="navbar container">
    <div class="navbar  fixed ">
      <div class="navbar__logo">
      <img src="../../../public/img/logo.png" alt="logo">
    </div>
    <ul class="navbar__list ">


      <router-link :to="{ name: 'About', hash:'#about'}" class="li-btn">О нас</router-link>
      <router-link :to="{ name: 'Demo', hash:'#demo'}" class="li-btn">Внедрение</router-link>
      <router-link :to="{ name: 'Tabs', hash:'#tabs'}" class="li-btn">Для кого</router-link>
      <router-link :to="{ name: 'Base', hash:'#base'}" class="li-btn">Функционал</router-link>
      <router-link :to="{ name: 'Partners', hash:'#partners'}" class="li-btn">Партнеры</router-link>
      <router-link :to="{ name: 'Work', hash:'#work'}" class="li-btn">Этапы</router-link>
      <router-link :to="{ name: 'Unique', hash:'#unique'}" class="li-btn">Уникальность</router-link>



    </ul>
    <div class="navbar__buttons ">
      <div class="btns wtsapp">
        <a :href="whatsapp">
          <button class="btns wtsapp-btn" >
          <img src="../../../public/img/whatsapp.png" alt="whatsapp">
        </button></a>
      </div>
      <div class="contact">
        <button class="btns contact-btn" @click="showConnection" >Связаться</button>
      </div>
    </div>
    </div>


  </div>
  </div>
  </div>

  <!-- <router-view /> -->

</template>


<script scoped>
export default {
  data:()=>({
  whatsapp:"https://wa.me/+79966908099"


}),
methods:{
    showConnection(){
      this.$emit('showConnection')
    }
  },
  name: "Header",

}

</script>

<style scoped>
#app{
  background-color: rgba(0, 0, 0, 0.419);
}
.fixed{
  position: fixed;
    z-index: 998;
    width: 1360px;
    /* padding-top: 150px; */

    /* top: 0; */
}
.navbar {

    /* background-color: #1B1A1A; */
    padding-bottom: 10px;
    padding-top: 150px;

    /* height: 68px; */
}
.navbar{
  color: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 40px;

}
.navbar__list {
    display: flex;
    justify-content: space-between;
    font-size: 14px;
    font-weight: 400;
}

.li-btn {
    margin-right: 40px;
    cursor: pointer;
}

.navbar__logo{
  height: 24px;
  padding-top: 10px;
}

.navbar__buttons {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 8px;
}

.wtsapp-btn {
  padding: 6px 10px;
  border: 0.1px solid white;

}
.contact-btn {
  padding: 6px 14px;
  border: 0.1px solid white;
}




</style>
