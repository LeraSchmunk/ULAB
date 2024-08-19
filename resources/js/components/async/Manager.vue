<template>
    <div class="tabs">
        <div class="tabs__item container">
            <div class="tabs__item-column">
                <div
                    @click="setActive('tab-1')"
                    :class="{ active: isActive('tab-1') }"
                >
                    <h4 @click="tabsItem1">
                        ДЛЯ ЧЕГО ULAB МЕНЕДЖЕРУ ПО РАБОТЕ С КЛИЕНТАМИ
                    </h4>
                </div>
                <div
                    @click="setActive('tab-2')"
                    :class="{ active: isActive('tab-2') }"
                >
                    <h4 @click="tabsItem2">
                        ОТЧЕТЫ О ДЕЯТЕЛЬНОСТИ ЛАБОРАТОРИИ
                    </h4>
                </div>
                <div
                    @click="setActive('tab-3')"
                    :class="{ active: isActive('tab-3') }"
                >
                    <h4 @click="tabsItem3">ВЗАИМОДЕЙСТВИЕ С ДАННЫМИ</h4>
                </div>
            </div>

            <div class="tabs__description">
                <Desc v-for="manager in manager" :key="manager">
                    <div class="tabs__desc" v-if="descVisible1">
                        <li>— {{ manager.li }}</li>
                        <br />
                    </div>
                </Desc>
                <Desc v-for="lab in lab" :key="lab">
                    <div class="tabs__desc" v-if="descVisible2">
                        <li>— {{ lab.li }}</li>
                        <br />
                    </div>
                </Desc>
                <Desc v-for="datas in datas" :key="datas">
                    <div class="tabs__desc" v-if="descVisible3">
                        <li>— {{ datas.li }}</li>
                        <br />
                    </div>
                </Desc>
            </div>
        </div>
    </div>
</template>

<script>
import Description from "../Description.vue";

export default {
    name: "Supervisor",
    data() {
        return {
            descVisible1: true,
            descVisible2: false,
            descVisible3: false,
            activeTab: "tab-1",
            manager: [
                {
                    li: "Повышения качества работы отдела продаж за счет CRM-системы",
                },
                { li: "Автоматизация и повышение производительности" },
                {
                    li: "Планирование деятельности лаборатории: загруженность сотрудников и оборудования, финансовое планирование",
                },
                {
                    li: "Повышение лояльности клиентов: личный кабинет, реестр выданных документов",
                },
            ],
            lab: [
                { li: "Полноценная CRM-система" },
                { li: "Финансовая отчетность" },
                {
                    li: "Отчеты по клиентам: финансы, виды материалов, методики, производители продукции",
                },
            ],
            datas: [
                { li: "Сведения о сотрудниках, оборудовании и методиках" },
                { li: "База знаний" },
            ],
        };
    },
    methods: {
        setActive(tab) {
            this.activeTab = tab;
        },
        isActive(tab) {
            return this.activeTab === tab;
        },
        tabsItem1() {
            (this.descVisible1 = true),
                (this.descVisible2 = false),
                (this.descVisible3 = false);
        },
        tabsItem2() {
            (this.descVisible1 = false),
                (this.descVisible2 = true),
                (this.descVisible3 = false);
        },

        tabsItem3() {
            (this.descVisible3 = true),
                (this.descVisible2 = false),
                (this.descVisible1 = false);
        },
    },

    components: { Description },
};
</script>

<style scoped>
.tabs {
    padding: 110px 0;
}
.tabs__item-column {
    text-transform: uppercase;
}
.tabs__item-column .active h4 {
    text-transform: uppercase;
    color: #fee176;
}
.tabs__item-column h4 {
    margin-bottom: 80px;
    color: #ffffff12;
    cursor: pointer;
    text-transform: uppercase;
}
.tabs__item {
    display: grid;
    grid-template-columns: 1fr 1fr;
}
</style>
