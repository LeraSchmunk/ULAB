<template>
    <div id="demo">
        <div class="demo container" id="demo">
            <div class="demo-description">
                <div class="demo__title maintitle">
                    Больше 50 лабораторий внедряют ulab
                </div>
                <div class="demo__subtitle">
                    <button class="btns baner__btn" @click="showDemo">
                        Запросить демонстрацию
                    </button>
                    <div class="save-btn">
                        <img src="../../../public/img/save-pink.png" alt="" />
                        <button class="download" @click="showPossibilities">
                            Скачать полный список возможностей
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="demo__options container">
                <div class="demo-block">
                    <img class="demo-int" src="img/demo-int.png" alt="" />
                    <div class="demo-block__title">Интеграции</div>
                    <div class="demo-block__description mainsubtitle">
                        С более чем 1000 приложений, среди которых 1С и Битрикс
                        24
                    </div>
                </div>
                <div class="demo-block">
                    <div>
                        <img class="demo-int" src="img/demo-gos.png" alt="" />
                    </div>
                    
                    <div class="demo-block__title">Госорганы</div>
                    <div class="demo-block__description mainsubtitle">
                        Взаимодействие с государственными органами
                    </div>
                </div>
                <div class="demo-block">
                    <img class="demo-mob" src="img/demo-mobile.png" alt="" />
                    <div class="demo-block__title">Мобильное приложение</div>
                    <div class="demo-block__description mainsubtitle">
                        Комфортно используй продукт в любом месте и в любое
                        время
                    </div>
                </div>
                <div class="demo-block">
                    <img class="demo-mob" src="img/demo-other.png" alt="" />
                    <div class="demo-block__title">Дополнительно</div>
                    <div class="demo-block__description mainsubtitle">
                        +50 дополнительных модулей<br /><br />
                        Личный кабинет заказчика<br /><br />
                        Облачная версия системы<br /><br />
                        Встроенная CRM-Система
                    </div>
                </div>
            </div>
        </div>
        <div class="advantages_container">
            <div class="advantages container">
                <p>
                   <span style="color: #f9b4ff; font-size: 24px;">В результате внедрения лаборатория получает 4 ключевых преимущества:</span>
                </p>
                <p><span style="color: #ffeeb4;">Существенное снижение затрат</span> рабочего времени на выполнение операционных задач;</p>
                <p>
                    <span style="color: #ffeeb4;">Значительное сокращение ошибок</span> ввиду автоматизации и снижения влияния человеческого фактора;
                </p>
                <p>
                    <span style="color: #ffeeb4;">Автоматизация работы с ФСА</span>, загрузка и отправка протоколов в 2 клика;
                </p>
                <p>
                    <span style="color: #ffeeb4;">Инструменты контроля бизнеса для руководителя:</span> как загружены сотрудники и оборудование, каковы финансовые показатели.
                </p>
                <p class="big_adv_p" style="font-size: 24px;">В чём практическая польза для всех взаимодействующих с системой?</p>
            </div>
        </div>
</template>

<script>
export default {
    name: "Demo",
    methods: {
        showDemo() {
            this.$emit("showDemo");
        },

        showPossibilities() {
            this.$emit("showPossibilities");
            console.log("ok");
        },
    },
};
</script>
<style scoped>
#demo {
    /* padding-top: 60px; */
    /* background-color: rgba(0, 0, 0, 0.622); */
    background-image: url("../../../public/img/demo-bg.png");
    background-repeat: no-repeat;
    background-position: center;
    background-size: 200% 100%;
    padding-bottom: 50px;
}

.demo {
    display: flex;
    justify-content: space-between;

    /* gap: 136px; */
    /* margin-bottom: 384px; */
}

.maintitle {
    color: #f9b4ff;
    width: 100%;
    text-transform: uppercase;
    padding-bottom: 40px;
    line-height: 1.1;
    font-weight: 100;
}

.demo-block {
    width: 250px;
    border: 1px solid #ffeeb424;
    height: 326px;
    padding: 25px;
    /* position: relative; */
    /* width: 300px; */
}
.demo-block__title {
    font-weight: 600;
    font-size: 24px;
}
.demo-block img {
    padding: 0;
}

.demo-int {
    position: relative;
    left: -20px;
    top: 10px;
}

.advantages_container{
    height: 300px;
    background-image: url(/build/assets/demo-bg-bb32f35c.png);
    background-repeat: no-repeat;
    background-position: center;
    background-size: 200% 100%;
}

.advantages{
    height: inherit;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
}

.advantages p {
    font-size: 20px;
}

.demo-mob {
    margin-bottom: 20px;
}
.demo-block__description {
    /* position: absolute; */
    bottom: 0;
    padding-top: 25px;
    padding-bottom: 25px;
    padding-right: 24px;
    line-height: 1.1;
}
.btns {
    border: 1px solid #f9b4ff;
    color: #f9b4ff;
}
.save-btn {
    display: flex;
    align-items: center;
    margin-left: 44px;
}

.save-btn img {
    padding-right: 15px;
}

.big_adv_p{
    padding-top: 30px;
    font-size: 24px;
    color: #f9b4ff;
}

.download {
    color: #f9b4ff;
    background-color: rgba(255, 255, 255, 0);
    border: none;
    width: 163px;
    text-align: left;
    cursor: pointer;
}

.work__grid {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
}

.titleMonserrat {
    color: white;
    font-size: 40px;
    width: 430px;
    margin-right: 270px;
}

.titleMonserrat--small {
    width: 220px;
    text-align: center;
    margin-top: 24px;
}

.subtitleRoboto {
    color: white;
    font-size: 32px;
    width: 440px;
}
.titleMonserrat--small {
    color: white;
    padding-bottom: 16px;
}

.subtitleRoboto {
    color: white;
    font-size: 20px;
    line-height: 130%;
}@media (max-width: 900px) {
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
        display: flex;
        justify-content: space-between;
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
