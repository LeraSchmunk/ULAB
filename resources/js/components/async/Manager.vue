<template>
    <div class="tabs">
        <div class="tabs__item container">
            <div class="tabs__item-column">
                <div
                    @click="setActive('tab-1')"
                    :class="{ active: isActive('tab-1') }"
                >
                <img style="width: 450px; height: 600px;" src="../../../../public/img/client.png" alt="logo"/>
                </div>
            </div>

            <div class="tabs__description">
                <Desc v-for="manager in manager" :key="manager">
                    <div class="tabs__desc" v-if="descVisible1">
                        <li class="li_supervisor">—<span class="span_supervisor">{{ manager.span}}</span> {{ manager.li }}</li>
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
                    span: "Повышение",
                    li: " качества работы отдела продаж за счет CRM-системы",
                },
                { 
                    span: "Автоматизация",
                    li: " и повышение производительности" 
                },
                {
                    span: "Увеличение",
                    li: " лояльности клиентов: личный кабинет, реестр выданных документов.",
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

.li_supervisor{
    font-size: 20px;
}

.span_supervisor{
    color: #f9b4ff;
}
</style>
