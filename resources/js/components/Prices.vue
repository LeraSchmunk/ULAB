<template>
    <div id="prices">
        <div class="container">
            <div class="prices">
                <div class="maintitle">
                    Ценообразование ULAB формируется при учете следующих
                    факторов
                </div>
                <button class="btns baner__btn" @click="showPrice">
                    Узнать цену
                </button>
            </div>
            <div class="icons">
                <div class="icon">
                    <img src="../../../public/img/icon-arrow.png" alt="" />
                    <div class="icon-text">Базовый функционал <br />ULAB</div>
                </div>
                <div class="icon icon-bird">
                    <img src="../../../public/img/icon-bird.png" alt="" />
                    <div class="icon-text">Количество <br />сотрудников</div>
                </div>
                <div class="icon">
                    <img src="../../../public/img/icon-scheme.png" alt="" />
                    <div class="icon-text">Дополнительные <br />модули</div>
                </div>
                <div class="icon">
                    <img src="../../../public/img/icon-micro.png" alt="" />
                    <div class="icon-text">
                        Персональные <br />доработки системы
                    </div>
                </div>
            </div>
            <div class="price_text">
                <p>Готовы помочь в цифровизации Вашей лаборатории!</p>
                <br><br>
                <p style="padding-bottom: 50px;">Ждём Ваших обращений по телефону и на сайте.</p>
                
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Prices",
    methods: {
        showPrice() {
            this.$emit("showPrice");
        },
    },
};
</script>
<style scoped>
#prices {
    background-color: rgba(0, 0, 0, 0.622);
    background-image: url("../../../public/img/prices-bg.png");
    background-repeat: no-repeat;
    background-position: center;
    background-size: 100% 100%;
    /* height: 1200px; */
}

.icon {
    text-align: center;
    height: 180px;
    margin-bottom: 100px;
}
/*  */

.icon img {
    width: 84px;
    height: 84px;
    align-content: center;
}
.icon img {
    height: 100px;
    width: 100px;
}

.prices {
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    /* padding-bottom: 200px; */
    padding-top: 100px;
}
.maintitle {
    width: 100%;
    /* font-size: 48px; */
    text-align: center;
    padding: 40px 0;
    color: #ffeeb4;
}

.price_text{
    margin-top: 100px;
    text-align: center;
    font-size: 24px;
}

.price_text p {
    color: #f9b4ff;
}

.btns {
    border: 1px solid #ffeeb4;
    color: #ffeeb4;
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
