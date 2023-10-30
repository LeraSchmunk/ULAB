<template>
  <div id="banerLower">
    <div class="banerLower container">
      <div class="banerLower__img">
        <img src="img/banerLower-woman.png" alt="">
      </div>
      <div class="banerLower__text">
        <div class="titleMonserrat">ПУСТЬ ВАШ ПУТЬ БУДЕТ УСПЕШЕН</div>
     <div class="subtitleRoboto">Наш проект создан не только с целью помочь желающим найти подходящие заказы, но и для того, чтобы каждый участник имел возможность встретиться здесь со своими коллегами, обсудить профессиональные вопросы. <br>
Выбрать необходимый инструментарий и просто получить удовольствие от общения с коллегами, рассказать о своих достижениях, поделиться своими проблемами.</div>
<div class="titleMonserrat titleMonserrat--small">НАДЕЕМСЯ НА УДАЧНОЕ И ПРОДОЛЖИТЕЛЬНОЕ СОТРУДНИЧЕСТВО</div>
<div class="subtitleRoboto">Мы счастливы видеть вас на нашем сайте. С удовольствием выслушаем ваши отзывы о проекте. Внимательно отнесемся к замечаниям и пожеланиям. Присылайте их нам или высказывайте на Форуме.</div>

    </div>
      </div>

  </div>
</template>
<script>
export default {
  name: "BanerLower"
}
</script>
<style scoped>
#banerLower{
  background-color: #F4F5F7;
  /* height: 610px; */
  /* background-image: url('../img/banerLower-cloud.png');
  background-repeat: no-repeat;
  background-position: left;
  background-size: 60%; */
}

.banerLower{
  display: flex;
  justify-content: space-between;
  padding: 68px 0 88px 0;
  /* align-items: center; */
}

.baner-text{
  width: 520px;
  padding-top: 101px;
}


.subtitleRoboto{
  margin: 32px 0 40px 0;

  font-weight: 16px;
}

.titleMonserrat{
  padding-bottom: 32px;
  width: 500px;
}

</style>