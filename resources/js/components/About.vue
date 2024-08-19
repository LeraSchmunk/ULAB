<template>
    <div id="main">
        <!-- <img src="../../../public/img/about-background.png" alt=""> -->
        <div class="baner container">
            <div class="baner-text">
                <div class="baner__title">
                    Автоматизируйте лабораторию легко!
                </div>
                <div class="baner__subtitle">
                    Первая лабораторная система, полностью интегрированная
                    <br />с ФГИС Росаккредитации
                </div>
                <button type="button" class="btns baner__btn" @click="showDemo">
                    Протестировать
                </button>
            </div>
            <div class="about" id="about">
                <div class="about__title maintitle">Что такое ULAB</div>
                <div class="about__subtitle mainsubtitle">
                    ULAB — система автоматизации деятельности испытательной
                    лаборатории, призванная минимизировать время выполнения всех
                    бизнес-процессов, при соблюдении высоких стандартов
                    качества.
                    <br />
                    <br />
                    ULAB соответствует требованиям ГОСТ 17025 и подходит для:
                    <br />
                    — Независимых испытательных лабораторий
                    <br />
                    — Лабораторий, работающих на внутреннего заказчика

                    <br /><br />
                    <button class="visibleBtn" @click="descriptionVisiblebtn">
                        Подробная информация о системе
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Description from "./Description.vue";
export default {
    name: "About",
    components: { Description },

    data() {
        return {};
    },
    methods: {
        showDemo() {
            this.$emit("showDemo");
        },
        descriptionVisiblebtn() {
            this.$emit("descriptionVisiblebtn");
        },
        // descriptionVisiblebtn() {
        //     this.descriptionVisible = !this.descriptionVisible;
        // },
    },
};
</script>
<style scoped>
#about {
    padding-bottom: 250px;
    /* padding-top: 150px; */
}
#main {
    background-color: rgba(0, 0, 0, 0.622);
    background-image: url("../../../public/img/about-bg.png");
    background-repeat: no-repeat;
    background-position: center;
    /* background-size: 100% 100%; */
}

.baner {
    padding-top: 150px;
}

.baner-text {
    text-align: center;
}
.baner__title {
    font-weight: 800;

    text-transform: uppercase;
    margin: 100px 0;
}
.visibleBtn {
    cursor: pointer;

    background-color: transparent;
    border: none;
    border-bottom: 1px solid white;
}

.description {
    line-height: 1.5em;
}
.description_about__title {
    font-weight: 600;
    font-size: 20px;
}
.description__center {
    align-items: center;
    text-align: center;
}
.baner__subtitle {
    font-weight: 400;
    text-align: center;
    margin: 100px 0;
    width: 100%;
    margin-left: auto;
    margin-right: auto;
    line-height: 1.5;
}
.baner__btn {
    border: 0.1px solid white;
    padding: 13px 15px;
    color: #1b1a1a;
    background-color: white;
    margin-bottom: 550px;
}

.about__subtitle {
    /* width: 651px; */
    line-height: 1.3em;
}

.about__title {
    color: #ffeeb4;
}

.baner__btn {
    color: black;
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
