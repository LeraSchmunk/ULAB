<template>
    <div class="tabs">
        <div class="tabs__item container">
            <div class="tabs__item-column">
                <div>
                    <img style="width: 450px; height: 600px;" src="../../../../public/img/clients.png" alt="logo"/>
                </div>
            </div>
            <div class="tabs__description">
                <Desc v-for="clients in clients" :key="clients">
                    <div class="tabs__desc">
                        <li class="li_supervisor">— <span class="span_supervisor">{{ clients.span }}</span>{{ clients.li }}</li>
                        <br />
                    </div>
                </Desc>
            </div>
        </div>
    </div>
</template>

<!-- — Личный кабинет на сайте с реестром документов и испытаний;
— Формирование новых заявок в личном кабинете;
— Электронный документооборот: счета, акты, договоры -->


<script>
export default {
    name: "Client",
    data() {
        return {
            clients: [
                { 
                    span: "Личный кабинет",
                    li: " на сайте с реестром документов и испытаний;"
                },
                { 
                    span: "Формирование",
                    li: " новых заявок в личном кабинете;" 
                },
                { 
                    span: "Электронный документооборот:", 
                    li: " счета, акты, договоры" },
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

.li_supervisor{
    font-size: 20px;
}

.span_supervisor{
    color: #f9b4ff;
}
</style>
