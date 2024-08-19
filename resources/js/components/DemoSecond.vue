<template>
    <div id="demo-second">
        <div class="container">
            <div class="demo-second">
                <div>
                    <img
                        class="head-img"
                        src="../../../public/img/demo-second.png"
                        alt=""
                    />
                </div>
                <div class="mainsubtitle">
                    <span>А также</span> интеграция с внешними системами,
                    Формирование отчетности, Личный кабинет заказчика и прочие.
                    <br />
                    <br />
                    Всего более <span>50 модулей</span>, отвечающих за хранение,
                    обработку и предоставление данных о деятельности
                    лаборатории.
                    <u
                        >Сведения, необходимые для эксплуатации ЛИМС ULAB
                        (инструкция пользователя)</u
                    >
                    <div class="demo__subtitle">
                        <button class="btns baner__btn" @click="showDemo">
                            Запросить демонстрацию
                        </button>
                        <div class="save-btn">
                            <img
                                src="../../../public/img/save-yellow.png"
                                alt=""
                            />
                            <button class="download" @click="showModules">
                                Скачать полный список модулей
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "DemoSecond",
    methods: {
        showDemo() {
            this.$emit("showDemo");
        },

        showModules() {
            this.$emit("showModules");
            console.log("ok");
        },
    },
};
</script>
<style scoped>
#demo-second {
    /* margin-bottom: 250px; */
    height: 900px;
    background-color: rgba(0, 0, 0, 0.622);
    background-image: url("../../../public/img/demo2-bg.png");
    background-repeat: no-repeat;
    background-position: center;
    background-size: 100% 100%;
}

.demo-second {
    display: flex;
    grid-template-columns: 1fr 1fr;
    gap: 101px;
    align-items: center;
    padding-top: 300px;
}

.demo-second img {
    /* padding-left: 120px; */
}
.mainsubtitle {
    width: 100%;
    font-weight: 500;
}
.mainsubtitle span {
    color: #75ff8b;
}
.mainsubtitle u {
    text-decoration: underline;
}

.demo__subtitle {
    padding-top: 40px;
}

.btns {
    border: 1px solid #ffe175;
    color: #ffe175;
}
.download {
    color: #ffe175;
    background-color: rgba(255, 255, 255, 0);
    border: none;
    width: 163px;
    text-align: left;
    cursor: pointer;
}

.save-btn {
    margin-left: 40px;
}

.base {
    color: white !important;
    display: grid;
    grid-template-columns: 1fr 1fr;
}

.base__ladder {
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
}

.step {
    background-color: #ffffff14;
    margin-bottom: 20px;
    padding: 20px;
    width: 285px;
}
.step-active {
    background: linear-gradient(
        45deg,
        rgb(127, 58, 232),
        rgb(232, 84, 217) 75%
    );
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
