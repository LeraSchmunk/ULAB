<template>
  <div id="navbar">
    <div class="navbar container">
      <div class="navbar__logo">
      <img src="../../../public/img/logo.png" alt="logo">
    </div>
    <ul class="navbar__list ">
        <li class="li-btn">О нас</li>
        <li class="li-btn">Внедрение</li>
        <li class="li-btn">Для кого</li>
        <li class="li-btn">Функционал</li>
        <li class="li-btn">Партнеры</li>
        <li class="li-btn">Этапы</li>
        <li class="li-btn">Уникальность</li>
    </ul>
    <div class="navbar__buttons ">
      <div class="btns wtsapp">
        <a :href="whatsapp">
          <button class="btns wtsapp-btn" >
          <img src="../../../public/img/whatsapp.png" alt="whatsapp">
        </button></a>
      </div>
      <div class="contact">
        <button class="btns contact-btn">Связаться</button>
      </div>
    </div>
    </div>

  </div>
</template>

<script>
export default {
  data:()=>({
  whatsapp:"https://wa.me/+79966908099"

}),
  name: "Header",

}

</script>

<style scoped>
#navbar {

    /* background-color: #1B1A1A; */
    padding-bottom: 100px;

    /* height: 68px; */
}
.navbar{
  color: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 20px;
}
.navbar__list {
    display: flex;
    justify-content: space-between;
    font-size: 14px;
    font-weight: 400;
}

.li-btn {
    margin-right: 40px;
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
