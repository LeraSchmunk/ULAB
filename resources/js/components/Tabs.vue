<template>
  <div id="tabs">
    <!-- <div class="container "> -->
      <div class="tabs ">
          <div class="tabs__nav ">
              <button  @click="setActive ('tab-4')">Для руководителя<br> лаборатории</button>
              <button  @click="setActive ('tab-5')">Для лаборанта и СМК</button>
              <button  @click="setActive ('tab-6')">Для менеджера по<br> работе с клиентами</button>
              <button  @click="setActive ('tab-7')">Для клиента лаборатории</button>
          </div>

        <div class="container tabs__item ">

            <div class="tabs__item-column ">
                <div @click="setActive ('tab-1')" ><h4 class="tab" >ULAB руководителю</h4></div>
                <div @click="setActive ('tab-2')" ><h4 class="tab" >Отчеты о деятельности лаборатории</h4></div>
                <div @click="setActive ('tab-3')" ><h4 class="tab" >Взаимодействие с данными</h4></div>
            </div>

                <div class="tabs__desc" v-show="isActive('tab-1')">
                    <div class="tabs__desc-text ">— Контроль сотрудников, деятельность лаборатории</div><br>
                    <div class="tabs__desc-text ">— Автоматизация и повышение производительности</div><br>
                    <div class="tabs__desc-text ">— Снижение человеческого фактора: контроль параметров проведения испытания (температура, влажность в помещении, статус поверки оборудования и прочее)</div><br>
                    <div class="tabs__desc-text ">— Взаимодействие с государственными органами (Росаккредитация)и другими лабораториями (МСИ)</div><br>
                    <div class="tabs__desc-text ">— Планирование деятельности лаборатории: загруженность сотрудников и оборудования, финансовое планирование</div><br>
                    <div class="tabs__desc-text ">— Повышение лояльности клиентов: личный кабинет, реестр выданных документов</div><br>
                    <div class="tabs__desc-text ">— Обеспечение беспристрастностии конфиденциальности испытаний</div><br>
                </div>
                <div class="tabs__desc" v-show="isActive('tab-2')">
                    <div class="tabs__desc-text ">— Финансовая и управленческая отчетность </div><br>
                    <div class="tabs__desc-text ">— Отчеты о КПД сотрудников     </div><br>
                    <div class="tabs__desc-text ">— Отчеты о применяемых методиках    </div><br>
                    <div class="tabs__desc-text ">— Отчеты по клиентам: финансы, виды материалов, методики, производители продукции </div><br>
                </div>
                <div class="tabs__desc" v-show="isActive('tab-3')">
                    <div class="tabs__desc-text ">— Сведения о заявках на испытания (каналы продаж) </div><br>
                    <div class="tabs__desc-text ">— Реестр документов (ТЗ, счета, договоры, оплаты)</div><br>
                    <div class="tabs__desc-text ">— Сведения об испытаниях (журналы, результаты, документы)   </div><br>
                    <div class="tabs__desc-text ">— Формирование закрывающих документов (интеграция с 1С)</div><br>
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
  name: "Tabs",
  data:()=>({
        activeTab: 'tab-1',
    }),
    methods: {
        setActive(tab){
            this.activeTab = tab
        },
        isActive(tab){
            return this.activeTab === tab;
        },

    },

  // data:()=>({
  //       activeTab: 'tab-1',
  //   }),
  //   methods: {
  //       setActive(tab){
  //           this.activeTab = tab
  //       },
  //       isActive(){
  //           return this.activeTab === tab;
  //       },

  //   },

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

.tab{
  cursor: pointer;
}



</style>