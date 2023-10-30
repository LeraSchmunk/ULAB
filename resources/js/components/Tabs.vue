<template>
  <div id="tabs">
    <!-- <div class="container "> -->
      <div class="tabs ">
          <div class="tabs__nav ">
              <button class="active " >Для руководителя<br> лаборатории</button>
              <button>Для лаборанта и СМК</button>
              <button>Для менеджера по<br> работе с клиентами</button>
              <button>Для клиента лаборатории</button>
          </div>

        <div class="container tabs__item ">
            <div class="tabs__item-column ">
                <h4>ULAB руководителю</h4>
                <h4>Отчеты о деятельности лаборатории</h4>
                <h4>Взаимодействие с данными</h4>
            </div>

                <div class="tabs__desc ">
                    <div class="tabs__desc-text ">— Контроль сотрудников, деятельность лаборатории</div><br>
                    <div class="tabs__desc-text ">— Автоматизация и повышение производительности</div><br>
                    <div class="tabs__desc-text ">— Снижение человеческого фактора: контроль параметров проведения испытания (температура, влажность в помещении, статус поверки оборудования и прочее)</div><br>
                    <div class="tabs__desc-text ">— Взаимодействие с государственными органами (Росаккредитация)и другими лабораториями (МСИ)</div><br>
                    <div class="tabs__desc-text ">— Планирование деятельности лаборатории: загруженность сотрудников и оборудования, финансовое планирование</div><br>
                    <div class="tabs__desc-text ">— Повышение лояльности клиентов: личный кабинет, реестр выданных документов</div><br>
                    <div class="tabs__desc-text ">— Обеспечение беспристрастностии конфиденциальности испытаний</div><br>
                </div>
        </div>
    </div>
        <div class="tabs__img">
            <!-- <img src="../../../public/img/tabs-img.png" alt=""> -->
        </div>


  </div>


</template>
<script>
export default {
  name: "Tabs"
}
</script>
<style scoped>
#tabs{
  /* background-color:  #1B1A1A; */
  margin-bottom: 200px;
}
.tabs__nav{
  display: flex;
  justify-content: space-between;
  background-color: #1B1A1A
}

.tabs__nav button{
  color: #ffffff;
  background-color:  #1B1A1A;
  text-transform: uppercase;
  width: 355px;
  border: none;
  font-weight: 600;
  padding: 40px 0;
}
.tabs__item{
    display: grid;
    grid-template-columns: 1fr 1fr;
    /* justify-content: space-between; */
    gap: 290px;
    margin-top: 110px;
    margin-bottom: 110px;
}

.tabs__item-column{
    text-transform: uppercase;

}
.tabs__item h4{
    padding-bottom: 80px;
    color: #FFFFFF;
}

.tabs__desc-text{
    line-height: 1.1;
}

.tabs__img{
    background-image: url(../../../public/img/tabs-img.png);
    background-repeat: no-repeat;
    background-position: center;
    background-size: 100%;
    height: 822px;
    padding-bottom: 200px;

    /* padding: 199px 0 349px 0; */
}


</style>