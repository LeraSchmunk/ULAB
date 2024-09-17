<template>
    <div class="tabs">
        <div class="tabs__item container">
            <div class="tabs__item-column">
                <div
                    @click="setActive('tab-1')"
                    :class="{ active: isActive('tab-1') }">
                    <img style="width: 450px; height: 600px;" src="../../../../public/img/supervisors.png" alt="logo"/>
                </div>
            </div>

            <div class="tabs__description">
                <Desc v-for="supervisor in supervisor" :key="supervisor">
                    <div class="tabs__desc" v-if="descVisible1">
                        <li class="li_supervisor">— <span class="span_supervisor">{{ supervisor.span}}</span>{{ supervisor.li }}</li>
                        <br />
                    </div>
                </Desc>
                <Desc v-for="lab in lab" :key="lab">
                    <div class="tabs__desc" v-if="descVisible2">
                        <li class="li_supervisor">— {{ lab.li }}</li>
                        <br />
                    </div>
                </Desc>
                <Desc v-for="datas in datas" :key="datas">
                    <div class="tabs__desc" v-if="descVisible3">
                        <li class="li_supervisor">— {{ datas.li }}</li>
                        <br/>
                    </div>
                </Desc>
            </div>
        </div>
    </div>
</template>

<!-- — Снижение влияния человеческого фактора: контроль параметров проведения испытания на 99%;
— Взаимодействие с государственными органами (Росаккредитация) быстрее в три раза;
— Планирование деятельности лаборатории: загруженность сотрудников и оборудования, финансовое планирование. -->

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
            supervisor: [
                { 
                    span:"Снижение",
                    li: " влияния человеческого фактора: контроль параметров проведения испытания на 99%;" },
                { 
                    span: "Взаимодействие",
                    li: " с государственными органами (Росаккредитация) быстрее в три раза;" },
                {
                    span: "Планирование",
                    li: " деятельности лаборатории: загруженность сотрудников и оборудования, финансовое планирование",
                }
            ],
            lab: [
                { li: "Финансовая и управленческая отчетность" },
                { li: "Отчеты о КПД сотрудников" },
                { li: "Отчеты о применяемых методиках" },
                {
                    li: "Отчеты по клиентам: финансы, виды материалов, методики, производители продукции",
                },
            ],
            datas: [
                { li: "Сведения о заявках на испытания (каналы продаж)" },
                { li: "Реестр документов (ТЗ, счета, договоры, оплаты)" },
                {
                    li: "Сведения об испытаниях (журналы, результаты, документы)",
                },
                { li: "Формирование закрывающих документов (интеграция с 1С)" },
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
    padding: 50px 0;
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

.li_supervisor{
    font-size: 20px;
}

.span_supervisor{
    color: #f9b4ff;
}
</style>
