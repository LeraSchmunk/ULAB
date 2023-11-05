<template>
  <div>
    <!-- <div class="container "> -->
      <div class="tabs "  id="tabs">
          <div class="tabs__nav ">
              <div :class="{'active' : isActive ('tab-1')}"><button  @click="setActive ('tab-1')" >Для руководителя<br> лаборатории</button></div>
              <div :class="{'active' : isActive ('tab-2')}"><button  @click="setActive ('tab-2')">Для лаборанта и СМК</button></div>
              <div :class="{'active' : isActive ('tab-3')}"><button  @click="setActive ('tab-3')">Для менеджера по<br> работе с клиентами</button></div>
              <div :class="{'active' : isActive ('tab-4')}"><button  @click="setActive ('tab-4')">Для клиента лаборатории</button></div>
          </div>

        <div class="container tabs__item ">
            <div class="tabs__item-column" >
                <div @click="setActive ('tab-5')" :class="{'activeYellow': isActive ('tab-5')}"><h4 class="tab" >ULAB руководителю</h4></div>
                <div @click="setActive ('tab-6')" :class="{'activeYellow' : isActive ('tab-6')}"><h4 class="tab" >Отчеты о деятельности лаборатории</h4></div>
                <div @click="setActive ('tab-7')" :class="{'activeYellow' : isActive ('tab-7')}"><h4 class="tab" >Взаимодействие с данными</h4></div>
            </div>
            <div class="tabs__description">
                <div class="tabs__desc" v-show="isActive('tab-5')">
                    <div class="tabs__desc-text ">— Контроль сотрудников, деятельность лаборатории</div><br>
                    <div class="tabs__desc-text ">— Автоматизация и повышение производительности</div><br>
                    <div class="tabs__desc-text ">— Снижение человеческого фактора: контроль параметров проведения испытания (температура, влажность в помещении, статус поверки оборудования и прочее)</div><br>
                    <div class="tabs__desc-text ">— Взаимодействие с государственными органами (Росаккредитация)и другими лабораториями (МСИ)</div><br>
                    <div class="tabs__desc-text ">— Планирование деятельности лаборатории: загруженность сотрудников и оборудования, финансовое планирование</div><br>
                    <div class="tabs__desc-text ">— Повышение лояльности клиентов: личный кабинет, реестр выданных документов</div><br>
                    <div class="tabs__desc-text ">— Обеспечение беспристрастностии конфиденциальности испытаний</div><br>
                </div>
                <div class="tabs__desc" v-show="isActive('tab-6')">
                    <div class="tabs__desc-text ">— Финансовая и управленческая отчетность </div><br>
                    <div class="tabs__desc-text ">— Отчеты о КПД сотрудников     </div><br>
                    <div class="tabs__desc-text ">— Отчеты о применяемых методиках    </div><br>
                    <div class="tabs__desc-text ">— Отчеты по клиентам: финансы, виды материалов, методики, производители продукции </div><br>
                </div>
                <div class="tabs__desc" v-show="isActive('tab-7')">
                    <div class="tabs__desc-text ">— Сведения о заявках на испытания (каналы продаж) </div><br>
                    <div class="tabs__desc-text ">— Реестр документов (ТЗ, счета, договоры, оплаты)</div><br>
                    <div class="tabs__desc-text ">— Сведения об испытаниях (журналы, результаты, документы)   </div><br>
                    <div class="tabs__desc-text ">— Формирование закрывающих документов (интеграция с 1С)</div><br>
                </div>
            </div>
        </div>











            <!-- <div class="tabs__item-column " v-show="isActive('tab-2')">
                <div><h4 class="tab" >Для чего U-LAB лаборанту и СМК</h4></div>
            </div>

            <div class="tabs__item-column " v-show="isActive('tab-3')">
                <div><h4 class="tab" >Для чего U-LAB менеджеру по работе с клиентами</h4></div>
                <div><h4 class="tab" >Отчеты о деятельности лаборатории</h4></div>
                <div><h4 class="tab" >Взаимодействие с данными</h4></div>
            </div>

            <div class="tabs__item-column " v-show="isActive('tab-4')">
                <div><h4 class="tab" >Для чего U-LAB клиенту</h4></div>
            </div>




                <div class="tabs__desc"  >
                    <div class="tabs__desc-text ">— Внутрилабораторный контроль, график ВЛК</div><br>
                    <div class="tabs__desc-text ">— Постановка задач персоналу на ВЛК</div><br>
                    <div class="tabs__desc-text ">— Расчет неопределенностей</div><br>
                    <div class="tabs__desc-text ">— Межлабораторные сличительные испытания</div><br>
                    <div class="tabs__desc-text ">— Составление плана МСИ на расчетный период</div><br>
                </div>
                <div class="tabs__desc" >
                    <div class="tabs__desc-text ">— Повышения качества работы отдела продаж за счет CRM-системы</div><br>
                    <div class="tabs__desc-text ">— Автоматизация и повышение производительности</div><br>
                    <div class="tabs__desc-text ">— Планирование деятельности лаборатории: загруженность сотрудников и оборудования, финансовое планирование</div><br>
                    <div class="tabs__desc-text ">— Повышение лояльности клиентов: личный кабинет, реестр выданных документовМежлабораторные сличительные испытания</div><br>
                </div>
                <div class="tabs__desc" v-show="isActive('tab-4')">
                    <div class="tabs__desc-text ">— Личный кабинет на сайте</div><br>
                    <div class="tabs__desc-text ">— Реестр проведенных испытаний и их результатов</div><br>
                    <div class="tabs__desc-text ">— Реестр документов: счета, акты, договоры</div><br>
                    <div class="tabs__desc-text ">— Формирование новых заявок в личном кабинете</div><br>
                </div> -->




        </div>
    </div>
        <div class="tabs__img">
            <!-- <img src="../../../public/img/tabs-img.png" alt=""> -->
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
        activeYellow(tab){
            return this.activeTab === tab;
        }

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
  padding-top: 100px;
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
  height: 120px;
  border: none;
  font-weight: 600;
  padding: 40px 0;
}
.tabs__nav .active button{
  background-color: #ffffff12;
  border-bottom: 4px solid #FEE176;
  color: #FEE176;
}
.tabs__nav .activeYellow button{
  background-color: #ffffff12;
  border-bottom: 4px solid #FEE176;
  color: #FEE176;
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
.tabs__item-column .activeYellow h4{
    text-transform: uppercase;
    color: #FEE176;

}
.tabs__item h4{
    padding-bottom: 80px;
    color: #ffffff12;
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