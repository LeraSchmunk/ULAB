<template>
  <div id="app" >
    <div class="navbar-background" id="home">
      <div class="navbar">
        <div class="navbar__logo">
          <router-link :to="{ name: 'Home', hash:'#home'}" class="li-btn"><img src="../../../public/img/logo.png" alt="logo"></router-link>
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

.navbar {
  position: fixed;
  width: 100%;
  padding-bottom: 10px;
  padding-top: 150px;
}
.navbar{
  color: white;
  display: flex;
  justify-content: space-around;
  align-items: center;
  padding-top: 40px;
  background-color: rgba(0, 0, 0, 0.622);
}

.navbar__list {
  display: flex;
  justify-content: space-between;
  font-size: 14px;
  font-weight: 400;
  text-decoration: none;
}

.li-btn {
  margin-right: 40px;
  cursor: pointer;
  text-decoration: none;
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

router-link{
  text-decoration: none;
}
</style>
