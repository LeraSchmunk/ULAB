<template>
  <div>
    <!-- <div class="container "> -->
      <div class="tabs "  id="tabs">
          <div class="tabs__nav " >
              <div :class="{ 'active': isActive ('tab-1')}" @click="setActive ('tab-1')"><button  @click="showTab1">Для руководителя<br> лаборатории</button></div>
              <div :class="{ 'active': isActive ('tab-2')}" @click="setActive ('tab-2')"><button  @click="showTab2">Для лаборанта и СМК</button></div>
              <div :class="{ 'active': isActive ('tab-3')}" @click="setActive ('tab-3')"><button @click="showTab3">Для менеджера по<br> работе с клиентами</button></div>
              <div :class="{ 'active': isActive ('tab-4')}" @click="setActive ('tab-4')"><button  @click="showTab4">Для клиента лаборатории</button></div>
          </div>

        <div class="container tabs__item " v-if="tab1Visible">
            <div class="tabs__item-column" >
                <div :class="{ 'activeYellow': isActiveItem ('tab-5')}" @click="setActiveItem ('tab-5')"><h4 class="tab" @click="tabsItem1">ULAB руководителю</h4></div>
                <div :class="{ 'activeYellow': isActiveItem ('tab-6')}" @click="setActiveItem ('tab-6')"><h4 class="tab" @click="tabsItem2">Отчеты о деятельности лаборатории</h4></div>
                <div :class="{ 'activeYellow': isActiveItem ('tab-7')}" @click="setActiveItem ('tab-7')"><h4 class="tab" @click="tabsItem3">Взаимодействие с данными</h4></div>
            </div>

            <div class="tabs__description">
                <div class="tabs__desc"  v-if="tabItem1Visible">
                    <div class="tabs__desc-text ">— Контроль сотрудников, деятельность лаборатории</div><br>
                    <div class="tabs__desc-text ">— Автоматизация и повышение производительности</div><br>
                    <div class="tabs__desc-text ">— Снижение человеческого фактора: контроль параметров проведения испытания (температура, влажность в помещении, статус поверки оборудования и прочее)</div><br>
                    <div class="tabs__desc-text ">— Взаимодействие с государственными органами (Росаккредитация)и другими лабораториями (МСИ)</div><br>
                    <div class="tabs__desc-text ">— Планирование деятельности лаборатории: загруженность сотрудников и оборудования, финансовое планирование</div><br>
                    <div class="tabs__desc-text ">— Повышение лояльности клиентов: личный кабинет, реестр выданных документов</div><br>
                    <div class="tabs__desc-text ">— Обеспечение беспристрастностии конфиденциальности испытаний</div><br>
                </div>
                <div class="tabs__desc" v-if="tabItem2Visible">
                    <div class="tabs__desc-text ">— Финансовая и управленческая отчетность </div><br>
                    <div class="tabs__desc-text ">— Отчеты о КПД сотрудников     </div><br>
                    <div class="tabs__desc-text ">— Отчеты о применяемых методиках    </div><br>
                    <div class="tabs__desc-text ">— Отчеты по клиентам: финансы, виды материалов, методики, производители продукции </div><br>
                </div>
                <div class="tabs__desc" v-if="tabItem3Visible">
                    <div class="tabs__desc-text ">— Сведения о заявках на испытания (каналы продаж) </div><br>
                    <div class="tabs__desc-text ">— Реестр документов (ТЗ, счета, договоры, оплаты)</div><br>
                    <div class="tabs__desc-text ">— Сведения об испытаниях (журналы, результаты, документы)   </div><br>
                    <div class="tabs__desc-text ">— Формирование закрывающих документов (интеграция с 1С)</div><br>
                </div>
            </div>
        </div>

        <div class="container tabs__item " v-if="tab2Visible">
            <div class="tabs__item-column">
                <div :class="{ 'activeYellow': isActive ('tab-2')}" @click="setActive ('tab-2')"><h4 class="tab" >Для чего U-LAB лаборанту и СМК</h4></div>
            </div>
            <div class="tabs__description">
                <div class="tabs__desc">
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
                <div class="tabs__desc" >
                    <div class="tabs__desc-text ">— Личный кабинет на сайте</div><br>
                    <div class="tabs__desc-text ">— Реестр проведенных испытаний и их результатов</div><br>
                    <div class="tabs__desc-text ">— Реестр документов: счета, акты, договоры</div><br>
                    <div class="tabs__desc-text ">— Формирование новых заявок в личном кабинете</div><br>
                </div>
            </div>
        </div>

        <div class="container tabs__item " v-if="tab3Visible">
            <div class="tabs__item-column" >
                <div :class="{ 'activeYellow': isActiveItem ('tab-5')}" @click="setActiveItem ('tab-5')"><h4 class="tab" @click="tabs3Item1">Для чего U-LAB менеджеру по работе с клиентами</h4></div>
                <div :class="{ 'activeYellow': isActiveItem ('tab-9')}" @click="setActiveItem ('tab-9')"><h4 class="tab" @click="tabs3Item2">Отчеты о деятельности лаборатории</h4></div>
                <div :class="{ 'activeYellow': isActiveItem ('tab-10')}" @click="setActiveItem ('tab-10')"><h4 class="tab" @click="tabs3Item3">Взаимодействие с данными</h4></div>
            </div>

            <div class="tabs__description">
                <div class="tabs__desc"  v-if="tab3Item1Visible">
                    <div class="tabs__desc-text ">— Повышения качества работы отдела продаж за счет CRM-системы</div><br>
                    <div class="tabs__desc-text ">— Автоматизация и повышение производительности</div><br>
                    <div class="tabs__desc-text ">— Планирование деятельности лаборатории: загруженность сотрудников и оборудования, финансовое планирование  </div><br>
                    <div class="tabs__desc-text ">— Повышение лояльности клиентов: личный кабинет, реестр выданных документов </div><br>
                </div>
                <div class="tabs__desc" v-if="tab3Item2Visible">
                    <div class="tabs__desc-text ">— Полноценная CRM-система </div><br>
                    <div class="tabs__desc-text ">— Финансовая отчетность     </div><br>
                    <div class="tabs__desc-text ">— Отчеты по клиентам: финансы, виды материалов, методики, производители продукции    </div><br>
                </div>
                <div class="tabs__desc" v-if="tab3Item3Visible">
                    <div class="tabs__desc-text ">— Сведения о сотрудниках, оборудовании и методиках </div><br>
                    <div class="tabs__desc-text ">— База знаний</div><br>
                </div>
            </div>
        </div>

        <div class="container tabs__item " v-if="tab4Visible">
            <div class="tabs__item-column">
                <div :class="{ 'activeYellow': isActive ('tab-4')}" @click="setActive ('tab-4')"><h4 class="tab" >Для чего U-LAB клиенту</h4></div>
            </div>
            <div class="tabs__description">
                <div class="tabs__desc">
                    <div class="tabs__desc-text ">— Личный кабинет на сайте</div><br>
                    <div class="tabs__desc-text ">— Реестр проведенных испытаний и их результатов</div><br>
                    <div class="tabs__desc-text ">— Реестр документов: счета, акты, договоры</div><br>
                    <div class="tabs__desc-text ">— Формирование новых заявок в личном кабинете</div><br>
                </div>

            </div>
        </div>
        </div>
    </div>
        <div class="tabs__img">
            <!-- <img src="../../../public/img/tabs-img.png" alt=""> -->
        </div>





</template>
<script>
export default {
  name: "Tabs",
  data(){


        return{
            tab1Visible:true,
            tab2Visible:false,
            tab3Visible:false,
            tab4Visible:false,
            tabItem1Visible:true,
            tabItem2Visible:false,
            tabItem3Visible:false,
            tab3Item1Visible:true,
            tab3Item2Visible:false,
            tab3Item3Visible:false,
            activeTab: 'tab-1',
            activeItem: 'tab-5'
            // isActive:false
        }
    },
    methods: {
        showTab1(){
            this.tab1Visible=true,
            this.tab2Visible=false

        },
        showTab2(){
            this.tab1Visible=false,
            this.tab3Visible=false,
            this.tab2Visible=true
        },
        showTab3(){
            this.tab1Visible=false,
            this.tab2Visible=false,
            this.tab3Visible=true,
            this.tab4Visible=false
        },
        showTab4(){
            this.tab1Visible=false,
            this.tab2Visible=false,
            this.tab3Visible=false,
            this.tab4Visible=true
        },
        tabsItem1(){
            this.tabItem1Visible=true
        },
        tabsItem2(){
            this.tabItem1Visible=false,
            this.tabItem2Visible=true

        },
        tabs3Item3(){
            this.tabItem1Visible=false,
            this.tabItem2Visible=false,
            this.tabItem3Visible=true
        },
        tabs3Item1(){
            this.tab3Item1Visible=true
        },
        tabs3Item2(){
            this.tab3Item1Visible=false,
            this.tab3Item2Visible=true

        },
        tabs3Item3(){
            this.tab3Item1Visible=false,
            this.tab3Item2Visible=false,
            this.tab3Item3Visible=true
        },
        setActive(tab){
            this.activeTab = tab
        },
        setActiveItem(tab){
            this.activeItem = tab
        },
        isActive(tab){
            return this.activeTab === tab;
        },
        isActiveItem(tab){
            return this.activeItem === tab;
        },
        activeYellow(tab){
            return this.activeTab === tab;
        },
    },
}
</script>
<style scoped>
#tabs{
  /* background-color:  #1B1A1A; */
  /* margin-bottom: 200px; */
  padding-top: 100px;
  min-height: 300px;
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
    /* margin-bottom: 110px; */
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