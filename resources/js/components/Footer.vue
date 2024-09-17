<template>
  <div id="footer">
    <div class="navbar">
      <div class="navbar__logo btnBlue">
        <img src="../../../public/img/ULAB_logo_white.png" alt="">
      </div>
      <div class="navbar__middle">
        <p class="contact_as_tel">8-800-333-25-29</p>
        <p class="contact_as">sales@niistrom.pro</p>
      </div>
      <div class="navbar__buttons ">
        <a :href="whatsapp">
          <button class="btns wtsapp-btn">
          <img src="../../../public/img/whatsapp.png" alt="whatsapp">
          <!-- telegram -->
        </button>
        </a>
        <a :href = "telegram">
          <button class="btns wtsapp-btn">
          <img src="../../../public/img/telegram.png" alt="telegram">
        </button>
        </a>
        <button class="btns contact-btn" @click ="showConnection">Оставить заявку на консультацию</button>
      </div>
    </div>
    <div class="grey">454047, Челябинская область, г. Челябинск, Ул. Сталеваров, д. 5, стр. 3, офис 5<br> <br>ООО НИИСТРОМ (с) LIMS ULAB 2019-2024 </div>
  </div>
</template>

<script>
export default {
  name: "Footer",

  data: () => ({
        whatsapp: "https://wa.me/+79966908099",
        telegram: "https://t.me/LIMS_ULAB_consultation",
    }),

    methods: {
        showConnection() {
            this.$emit("showConnection");
        },
    },
}
</script>

<style scoped>
#footer {
    height: 200px;
    background-color:  #242323;
    padding-bottom: 32px;

}

.navbar {
  height: 150px;
  display: flex;
  align-items: center;
}

.navbar__logo{
  margin-top: 60px;
}
.navbar__middle{
  margin-top: 60px;
  margin-left: 70px;
  width: 400px;
  display: flex;
  justify-content: space-around;
  text-align: center;
  align-items: center;
}

.navbar__middle p {
  font-size: 18px;
}

.navbar__buttons {
  margin-top: 60px;
  width: 400px;
  display: flex;
  align-items: center;
  justify-content: space-around;
}

.btns {
  border: 1px solid white;
}

.grey{
  text-align: center;
    color: #eeeeee6b;
    font-size: 18px;
    font-weight: 100;
    margin-left: 60px;
}
</style>
