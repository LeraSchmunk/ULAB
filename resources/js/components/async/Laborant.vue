<template>
    <div class="tabs">
        <div class="tabs__item container">
            <div class="tabs__item-column">
                <div>
                    <h4 class="tab">Для чего ULAB лаборанту и СМК</h4>
                </div>
            </div>
            <div class="tabs__description">
                <Desc v-for="labs in labs" :key="labs">
                    <div class="tabs__desc">
                        <li>— {{ labs.li }}</li>
                        <br />
                    </div>
                </Desc>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Laborant",
    data() {
        return {
            labs: [
                { li: "Внутрилабораторный контроль, график ВЛК" },
                { li: "Постановка задач персоналу на ВЛК" },
                { li: "Расчет неопределенностей" },
                {
                    li: "Межлабораторные сличительные испытания",
                },
                {
                    li: "Составление плана МСИ на расчетный период",
                },
                {
                    li: "Повышения качества работы отдела продаж за счет CRM-системы",
                },
                {
                    li: "Автоматизация и повышение производительности",
                },
                {
                    li: "Планирование деятельности лаборатории: загруженность сотрудникови оборудования, финансовое планирование",
                },
                {
                    li: "Повышение лояльности клиентов: личный кабинет, реестр выданных документовМежлабораторные сличительные испытания",
                },
                { li: "Личный кабинет на сайте" },
                {
                    li: "Реестр проведенных испытаний и их результатов",
                },
                {
                    li: "Реестр документов: счета, акты, договоры Формирование новых заявок в личном кабинете",
                },
            ],
            // isActive:false
        };
    },
    methods: {},
};
</script>

<style scoped>
.tabs {
    padding: 110px 0;
    /* background-color: rgba(0, 0, 0, 0.622);
    background-image: url("../../../../public/img/supervisor-bg.png");
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover; */
}
.tabs__item-column h4 {
    text-transform: uppercase;
}

.tabs__item-column h4 {
    margin-bottom: 80px;
    color: #fee176;
    cursor: pointer;
}
.tabs__item {
    display: grid;
    grid-template-columns: 1fr 1fr;
}
</style>
