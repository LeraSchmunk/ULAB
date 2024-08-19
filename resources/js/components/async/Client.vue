<template>
    <div class="tabs">
        <div class="tabs__item container">
            <div class="tabs__item-column">
                <div>
                    <h4 class="tab">Для чего ULAB клиенту</h4>
                </div>
            </div>
            <div class="tabs__description">
                <Desc v-for="clients in clients" :key="clients">
                    <div class="tabs__desc">
                        <li>— {{ clients.li }}</li>
                        <br />
                    </div>
                </Desc>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Client",
    data() {
        return {
            clients: [
                { li: "Личный кабинет на сайте" },
                { li: "Реестр проведенных испытаний и их результатов" },
                { li: "Реестр документов: счета, акты, договоры" },
                { li: "Формирование новых заявок в личном кабинете" },
            ],
        };
    },
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
.tabs__item-column {
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
