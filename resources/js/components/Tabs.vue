<template>
    <div>
        <div class="tabs" id="tabs">
            <div class="tabs__nav">
                <div
                    :class="{ active: isActive('tab-1') }"
                    @click="setActive('tab-1')"
                >
                    <button @click="setIdTab(1)">
                        Для руководителя<br />
                        лаборатории
                    </button>
                </div>
                <div
                    :class="{ active: isActive('tab-2') }"
                    @click="setActive('tab-2')"
                >
                    <button @click="setIdTab(2)">Для лаборанта и СМК</button>
                </div>
                <div
                    :class="{ active: isActive('tab-3') }"
                    @click="setActive('tab-3')"
                >
                    <button @click="setIdTab(3)">
                        Для менеджера по<br />
                        работе с клиентами
                    </button>
                </div>
                <div
                    :class="{ active: isActive('tab-4') }"
                    @click="setActive('tab-4')"
                >
                    <button @click="setIdTab(4)">
                        Для клиента лаборатории
                    </button>
                </div>
            </div>

            <!-- <div class="container tabs__item" v-if="tab1Visible">


                <div class="tabs__description">

                    <div class="tabs__desc" v-if="tabItem2Visible">
                        <div class="tabs__desc-text">
                            — Финансовая и управленческая отчетность
                        </div>
                        <br />
                        <div class="tabs__desc-text">
                            — Отчеты о КПД сотрудников
                        </div>
                        <br />
                        <div class="tabs__desc-text">
                            — Отчеты о применяемых методиках
                        </div>
                        <br />
                        <div class="tabs__desc-text">
                            — Отчеты по клиентам: финансы, виды материалов,
                            методики, производители продукции
                        </div>
                        <br />
                    </div>


                    <div class="tabs__desc" v-if="tabItem3Visible">
                        <div class="tabs__desc-text">
                            — Сведения о заявках на испытания (каналы продаж)
                        </div>
                        <br />
                        <div class="tabs__desc-text">
                            — Реестр документов (ТЗ, счета, договоры, оплаты)
                        </div>
                        <br />
                        <div class="tabs__desc-text">
                            — Сведения об испытаниях (журналы, результаты,
                            документы)
                        </div>
                        <br />
                        <div class="tabs__desc-text">
                            — Формирование закрывающих документов (интеграция с
                            1С)
                        </div>
                        <br />
                    </div>


                </div>
            </div>

            <div class="container tabs__item" v-if="tab2Visible">
                <div class="tabs__item-column">
                    <div
                        :class="{ activeYellow: isActive('tab-2') }"
                        @click="setActive('tab-2')"
                    >
                        <h4 class="tab">Для чего ULAB лаборанту и СМК</h4>
                    </div>
                </div>
                <div class="tabs__description">

                    <div class="tabs__desc">
                        <div class="tabs__desc-text">
                            — Повышения качества работы отдела продаж за счет
                            CRM-системы
                        </div>
                        <br />
                        <div class="tabs__desc-text">
                            — Автоматизация и повышение производительности
                        </div>
                        <br />
                        <div class="tabs__desc-text">
                            — Планирование деятельности лаборатории:
                            загруженность сотрудников и оборудования, финансовое
                            планирование
                        </div>
                        <br />
                        <div class="tabs__desc-text">
                            — Повышение лояльности клиентов: личный кабинет,
                            реестр выданных документовМежлабораторные
                            сличительные испытания
                        </div>
                        <br />
                    </div>
                    <div class="tabs__desc">
                        <div class="tabs__desc-text">
                            — Личный кабинет на сайте
                        </div>
                        <br />
                        <div class="tabs__desc-text">
                            — Реестр проведенных испытаний и их результатов
                        </div>
                        <br />
                        <div class="tabs__desc-text">
                            — Реестр документов: счета, акты, договоры
                        </div>
                        <br />
                        <div class="tabs__desc-text">
                            — Формирование новых заявок в личном кабинете
                        </div>
                        <br />
                    </div>
                </div>
            </div>

            <div class="container tabs__item" v-if="tab3Visible">
                <div class="tabs__item-column">
                    <div
                        :class="{ activeYellow: isActiveItem('tab-5') }"
                        @click="setActiveItem('tab-5')"
                    >
                        <h4 class="tab" @click="tabs3Item1">
                            Для чего ULAB менеджеру по работе с клиентами
                        </h4>
                    </div>
                    <div
                        :class="{ activeYellow: isActiveItem('tab-9') }"
                        @click="setActiveItem('tab-9')"
                    >
                        <h4 class="tab" @click="tabs3Item2">
                            Отчеты о деятельности лаборатории
                        </h4>
                    </div>
                    <div
                        :class="{ activeYellow: isActiveItem('tab-10') }"
                        @click="setActiveItem('tab-10')"
                    >
                        <h4 class="tab" @click="tabs3Item3">
                            Взаимодействие с данными
                        </h4>
                    </div>
                </div>

                <div class="tabs__description">
                    <div class="tabs__desc" v-if="tab3Item1Visible">

                        <br />
                    </div>
                    <div class="tabs__desc" v-if="tab3Item2Visible">
                        <div class="tabs__desc-text">
                            — Полноценная CRM-система
                        </div>
                        <br />
                        <div class="tabs__desc-text">
                            — Финансовая отчетность
                        </div>
                        <br />
                        <div class="tabs__desc-text">
                            — Отчеты по клиентам: финансы, виды материалов,
                            методики, производители продукции
                        </div>
                        <br />
                    </div>
                    <div class="tabs__desc" v-if="tab3Item3Visible">
                        <div class="tabs__desc-text">
                            — Сведения о сотрудниках, оборудовании и методиках
                        </div>
                        <br />
                        <div class="tabs__desc-text">— База знаний</div>
                        <br />
                    </div>
                </div>
            </div>

            <div class="container tabs__item" v-if="tab4Visible">
                <div class="tabs__item-column">
                    <div
                        :class="{ activeYellow: isActive('tab-4') }"
                        @click="setActive('tab-4')"
                    >
                        <h4 class="tab">Для чего ULAB клиенту</h4>
                    </div>
                </div>
                <div class="tabs__description">
                    <div class="tabs__desc">

                        <br />
                    </div>
                </div>
            </div>
        </div>
    </div>
     -->
        </div>
        <div class="tabs-options">
            <component :is="addItems(this.idTab)" class="component"></component>
            <!-- <component
                :is="addItemsDesc(this.idTab)"
                class="component"
            ></component> -->
        </div>

        <!-- <div class="tabs__img">
        </div> -->
        <img
            src="../../../public/img/tabsMan-bg.png"
            alt=""
            class="tabs__img"
        />
    </div>
</template>
<script>
import { defineAsyncComponent } from "vue";

export default {
    name: "Tabs",

    data() {
        return {
            // tab1Visible: true,
            // tab2Visible: false,
            // tab3Visible: false,
            // tab4Visible: false,
            // tabItem1Visible: true,
            // tabItem2Visible: false,
            // tabItem3Visible: false,
            // tab3Item1Visible: true,
            // tab3Item2Visible: false,
            // tab3Item3Visible: false,
            activeTab: "tab-1",
            idTab: 1,
            // activeItem: "tab-5",
            // isActive:false
        };
    },
    methods: {
        setIdTab(idTab) {
            this.idTab = idTab;
        },
        addItems(idTab) {
            let nameItem = "";
            switch (idTab) {
                case 1:
                    nameItem = "Supervisor";
                    break;
                case 2:
                    nameItem = "Laborant";
                    break;
                case 3:
                    nameItem = "Manager";
                    break;
                case 4:
                    nameItem = "Client";
                    break;
            }
            return defineAsyncComponent(() =>
                import(`./async/${nameItem}.vue`)
            );
        },
        addItemsDesc(idTab) {
            let nameItemDesc = "";
            switch (idTab) {
                case 1:
                    nameItemDesc = "SupervisorDesc";
                    break;
                case 2:
                    nameItemDesc = "LaborantDesc";
                    break;
                case 3:
                    nameItemDesc = "ManagerDesc";
                    break;
                case 4:
                    nameItemDesc = "ClientDesc";
                    break;
            }
            return defineAsyncComponent(() =>
                import(`./async/${nameItemDesc}.vue`)
            );
        },
        showTab1() {
            (this.tab1Visible = true), (this.tab2Visible = false);
        },
        showTab2() {
            (this.tab1Visible = false),
                (this.tab3Visible = false),
                (this.tab2Visible = true),
                (this.tab4Visible = false);
        },
        showTab3() {
            (this.tab1Visible = false),
                (this.tab2Visible = false),
                (this.tab3Visible = true),
                (this.tab4Visible = false);
        },
        showTab4() {
            (this.tab1Visible = false),
                (this.tab2Visible = false),
                (this.tab3Visible = false),
                (this.tab4Visible = true);
        },
        tabsItem1() {
            this.tabItem1Visible = true;
        },
        tabsItem2() {
            (this.tabItem1Visible = false), (this.tabItem2Visible = true);
        },
        tabs3Item3() {
            (this.tabItem1Visible = false),
                (this.tabItem2Visible = false),
                (this.tabItem3Visible = true);
        },
        tabs3Item1() {
            this.tab3Item1Visible = true;
        },
        tabs3Item2() {
            (this.tab3Item1Visible = false), (this.tab3Item2Visible = true);
        },
        tabs3Item3() {
            (this.tab3Item1Visible = false),
                (this.tab3Item2Visible = false),
                (this.tab3Item3Visible = true);
        },
        setActive(tab) {
            this.activeTab = tab;
        },
        setActiveItem(tab) {
            this.activeItem = tab;
        },
        isActive(tab) {
            return this.activeTab === tab;
        },
        isActiveItem(tab) {
            return this.activeItem === tab;
        },
        activeYellow(tab) {
            return this.activeTab === tab;
        },
    },
};
</script>
<style scoped>
#tabs {
    background-color: rgba(0, 0, 0, 0.622);
    background-image: url("../../../public/img/tabs-bg.png");
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
}
.tabs-options {
    /* display: grid; */
    grid-template-columns: 1fr 1fr;
    background-color: rgba(0, 0, 0, 0.622);
    background-image: url("../../../public/img/supervisor-bg.png");
    background-repeat: no-repeat;
    background-position: center;
    background-size: 100% 100%;
}

.tabs__nav button {
    color: #ffffff;
    background-color: #1b1a1a;
    text-transform: uppercase;
    width: 100%;
    height: 120px;
    border: none;
    font-weight: 600;
    padding: 40px 0;
}
.tabs__nav .active button {
    background-color: #ffffff12;
    border-bottom: 4px solid #fee176;
    color: #fee176;
}
.tabs__nav .activeYellow button {
    background-color: #ffffff12;
    border-bottom: 4px solid #fee176;
    color: #fee176;
}

.tabs__item {
    display: grid;
    grid-template-columns: 1fr 1fr;
    /* justify-content: space-between; */
    gap: 290px;
    margin-top: 110px;
    /* margin-bottom: 110px; */
}

.tabs__item-column {
    text-transform: uppercase;
}
.tabs__item-column .activeYellow h4 {
    text-transform: uppercase;
    color: #fee176;
}
.tabs__item h4 {
    padding-bottom: 80px;
    color: #ffffff12;
}

.tabs__desc-text {
    line-height: 1.1;
}

.tabs__img {
    width: 100%;
    /* height: 1061px; */
    /* padding-bottom: 200px; */
    /* padding-top: 169px; */

    /* padding: 199px 0 349px 0; */
}

.tabs-options {
    /* height: 1000px; */
    background-image: url(../../../public/img/supervisor-bg.png);
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    min-height: 500px;
}

.tab {
    cursor: pointer;
}
@media (max-width: 900px) {
    .baner__title {
        font-size: 40px;
    }
    .baner__subtitle {
        font-size: 18px;
    }
    #main {
        background-size: cover;
    }
    .tabs__nav button {
        font-size: 12px;
    }
    .maintitle {
        font-size: 30px;
    }
    .base__ladder {
        margin-top: 50px;
    }
    .partners-title {
        height: px;
        font-size: 15px;
    }
    .card-list {
        font-size: 12px;
    }
    .unique__title img {
        height: 100px;
    }
    .unique__column div {
        font-size: 18px;
    }
    .icon-text {
        font-size: 20px;
    }
    .prices {
        padding-bottom: 100px;
    }
    .icons {
        margin-top: 0px;
    }
}

@media (min-width: 900px) {
    .li-btn {
        margin-right: 10px;
    }
    .baner__title {
        font-size: 72px;
    }
    .baner__subtitle {
        font-size: 24px;
    }
    #main {
        background-size: 100% 100%;
    }
    .maintitle {
        font-size: 48px;
    }
    .partners-title {
        font-size: 20px;
        /* height: 70px; */
    }
    .unique__column div {
        font-size: 20px;
    }
    .icon-text {
        font-size: 28px;
    }
    .prices {
        padding-bottom: 200px;
    }
    .about {
        color: white !important;
        display: grid;
        grid-template-columns: 1fr 1fr;
    }
    .tabs__nav {
        display: grid;
        background-color: #1b1a1a;
        border-top: 2px solid rgba(255, 255, 255, 0.163);
        grid-template-columns: 1fr 1fr 1fr 1fr;
    }
    .work-titel-bottom {
        margin-left: 300px;
        /* width: 80%; */
    }
    .unique__column {
        gap: 212px;
    }
    .work-titel-top {
        gap: 117px;
    }
    .unique__title {
        padding-bottom: 100px;
    }
    .base__ladder {
        display: flex;
        justify-content: space-between;
        align-items: flex-end;
        margin-top: 150px;
    }
    .demo__options {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }
    .icons {
        display: flex;
        justify-content: space-between;
        align-items: center;
        /* margin-top: 120px; */
    }
    .navbar__list {
        display: flex;
        justify-content: space-between;
        font-size: 14px;
    }
    .work-titel-top {
        margin-left: 100px;
        width: 80%;
    }
    #about {
        padding-bottom: 250px;
        padding-top: 150px;
    }
    .demo {
        padding-top: 160px;
    }
    .unique {
        padding-top: 50px;
    }
    .tabs {
        padding-top: 100px;
    }
    .partnersWrapper {
        padding-top: 150px;
        padding-bottom: 200px;
        display: grid;
        justify-content: space-between;
        gap: 20px;
        grid-template-columns: 1fr 1fr 1fr;
    }
}

@media (max-width: 780px) {
    /* .base,
    .partners,
    .work {
        display: none;
    } */
    /* .li-btn {
        margin-right: 12px;
    } */
    .maintitle {
        font-size: 26px;
    }
    .base__ladder {
        display: flex;
        flex-direction: column;
    }
    .about {
        display: flex;
        flex-direction: column;
    }
    .about__title {
        margin-bottom: 20px;
    }
    .tabs__item-column {
        font-size: 15px;
    }
    .tabs__nav {
        display: grid;
        grid-template-columns: 1fr 1fr;
    }
    .tabs__desc {
        font-size: 13px;
    }
    .head-img {
        height: 100px;
    }
    .partners {
        display: flex;
        flex-direction: column;
    }
    .work-titel-bottom {
        margin-left: 100px;
        /* width: 80%; */
    }
    .unique__column div {
        font-size: 12px;
    }
    .unique__column {
        gap: 100px;
    }
    .icon-text {
        font-size: 14px;
    }
    .work-titel {
        /* position: absolute; */
        font-size: 10px;
    }
    .work-titel-top {
        /* justify-content: space-evenly; */
        /* align-items: flex-start; */
        gap: 10px;
    }
    .unique__title {
        padding-bottom: 20px;
    }
    .navbar {
        flex-direction: column;
        gap: 20px;
    }
    .base__ladder {
        display: flex;
        flex-direction: column;
        width: 100%;
    }
}

@media (max-width: 900px) {
    .baner__title {
        font-size: 30px;
    }
    #main {
        background-size: cover;
    }
    .maintitle {
        width: 100%;
    }
    .demo__options {
        display: flex;
        flex-direction: column;
    }
    .demo-second {
        flex-direction: column;
    }
    .partners-card {
        width: 80%;
    }
    .icons {
        display: grid;
        /* justify-content: space-between;
        align-items: center; */
        grid-template-columns: 1fr 1fr;
        /* margin-top: 120px; */
    }
    .navbar__list {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        gap: 20px;
    }
    .work-titel-top {
        margin-left: 50px;
        /* width: 80%; */
    }
    #about {
        padding-top: 250px;
    }
    .demo {
        padding-top: 260px;
    }
    .tabs {
        padding-top: 260px;
    }
    .unique {
        padding-top: 250px;
    }
}
</style>
