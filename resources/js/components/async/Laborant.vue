<template>
    <div class="tabs">
        <div class="tabs__item container">
            <div class="tabs__item-column">
                <div>
                    <img style="width: 450px; height: 600px;" src="../../../../public/img/laborant.png" alt="logo"/>
                </div>
            </div>
            <div class="tabs__description">
                <Desc v-for="labs in labs" :key="labs">
                    <div class="tabs__desc">
                        <li class="li_supervisor">— <span class="span_supervisor">{{ labs.span }}</span> {{ labs.li }}</li>
                        <br />
                    </div>
                </Desc>
            </div>
        </div>
    </div>
</template>

<!-- -  
-  
-   -->

<script>
export default {
    name: "Laborant",
    data() {
        return {
            labs: [
                { 
                    span: "Снижение",
                    li: " рабочей операционной нагрузки вдвое (формирование протокола испытаний за 90 секунд);" 
                },
                { 
                    span: "Контроль", 
                    li: " системой ключевых задач для избежания ошибок на 99%;" 
                },
                { 
                    span: "Уведомления",
                    li: " и подсказки в рабочем интерфейсе." },
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

.li_supervisor{
    font-size: 20px;
}

.span_supervisor{
    color: #f9b4ff;
}
</style>
