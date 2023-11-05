<template>
  <div id="footer">
    <div class="navbar container">
      <div class="navbar__logo btnBlue">
        <img src="../../../public/img/logo.png" alt="">
      </div>
      <div class="navbar__middle">
        <ul class="navbar__list ">
          <li class="li-btn grey"> О нас</li>
          <li class="li-btn grey"> Внедрение</li>
          <li class="li-btn grey"> Для кого</li>
          <li class="li-btn grey"> Функционал</li>
          <li class="li-btn grey"> Партнеры</li>
          <li class="li-btn grey"> Этапы</li>
          <li class="li-btn grey"> Уникальность</li>
        </ul>
        <div class="navbar__buttons ">
          <button class="btns wtsapp-btn">
            <img src="../../../public/img/whatsapp.png" alt="whatsapp">

          </button>
          <button class="btns contact-btn">Связаться</button>
            <!-- <button class="btns contact-btn">&#64;  i.boldyreva@niistrom.pro</button> -->


        </div>
        <div class="grey"> ООО НИИСТРОМ (с) LIMS ULAB 2019-2023</div>

      </div>

      <div class="navbar__end">
        <img src="../../../public/img/qr.png" alt="">
      </div>
    </div>

  </div>
</template>

<script>
export default {
  name: "Footer"
}
</script>

<style scoped>
#footer {

    /* height: 238px; */
    background-color:  #242323;
    padding-bottom: 32px;

}

.navbar{
  color: #00000040;
    display: flex;
    justify-content: space-between;
    align-items: start;
    padding-top:40px ;
    padding-bottom: 0;
  }


.navbar__list {
    display: flex;
    justify-content: space-between;
    font-size: 14px;



}
.navbar__middle{
  display: flex;
  flex-direction: column;
  text-align: center;
  align-items: center;
}

.li-btn {
    margin-right: 32px;

}

.grey{
  color: #eeeeee6b;
  font-size: 14px;
  font-weight: 100;
}

.navbar__buttons{
  display: flex;
  /* justify-content: space-between; */
  align-items: center;
  gap: 8px;
  padding: 45px 0;
}

.btns{
  border: 1px solid white;
}
</style>
