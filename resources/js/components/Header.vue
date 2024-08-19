<template>
    <div id="app">
        <div class="navbar-background" id="home">
            <div class="navbar">
                <div class="navbar__logo">
                    <router-link
                        :to="{ name: 'Home', hash: '#home' }"
                        class="li-btn"
                        ><img src="../../../public/img/logo.png" alt="logo"
                    /></router-link>
                </div>
                <ul class="navbar__list">
                    <router-link
                        :to="{ name: 'About', hash: '#about' }"
                        class="li-btn"
                        >О нас</router-link
                    >
                    <router-link
                        :to="{ name: 'Demo', hash: '#demo' }"
                        class="li-btn"
                        >Внедрение</router-link
                    >
                    <router-link
                        :to="{ name: 'Tabs', hash: '#tabs' }"
                        class="li-btn"
                        >Для кого</router-link
                    >
                    <router-link
                        :to="{ name: 'Base', hash: '#base' }"
                        class="li-btn base"
                        >Функционал</router-link
                    >
                    <router-link
                        :to="{ name: 'Partners', hash: '#partners' }"
                        class="li-btn partners"
                        >Партнеры</router-link
                    >
                    <router-link
                        :to="{ name: 'Work', hash: '#work' }"
                        class="li-btn work"
                        >Этапы</router-link
                    >
                    <router-link
                        :to="{ name: 'Unique', hash: '#unique' }"
                        class="li-btn"
                        >Уникальность</router-link
                    >
                </ul>
                <div class="navbar__buttons">
                    <div class="group_phone">
                        <p>+7(996)-690-80-99</p>
                        <p>+7(800)-333-25-29</p>
                    </div>
                    <div class="btns wtsapp">
                        <a :href="whatsapp">
                            <button class="btns wtsapp-btn">
                                <img
                                    src="../../../public/img/whatsapp.png"
                                    alt="whatsapp"
                                /></button
                        ></a>
                    </div>
                    <div class="contact">
                        <button
                            class="btns contact-btn"
                            @click="showConnection"
                        >
                            Связаться
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script scoped>
export default {
    data: () => ({
        whatsapp: "https://wa.me/+79966908099",
    }),

    methods: {
        showConnection() {
            this.$emit("showConnection");
        },
    },
    name: "Header",
};
</script>

<style scoped>
.navbar-background {
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
}

.navbar {
    position: fixed;
    width: 100%;
    padding-bottom: 10px;
    padding-top: 150px;
    z-index: 99;
}
.navbar {
    color: white;
    display: flex;
    justify-content: space-around;
    align-items: center;
    padding-top: 40px;
    background-color: rgba(0, 0, 0, 0.622);
    /* background-image: url("../../../public/img/header-bg.png"); */
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
}

.navbar__list {
    /* display: flex;
    justify-content: space-between; */
    font-size: 14px;
    font-weight: 400;
    text-decoration: none;
}

.li-btn {
    /* margin-right: 40px; */
    cursor: pointer;
    text-decoration: none;
}

.group_phone{
    margin-right: 1.5rem;
    display: flex;
    flex-direction: column;
}

.navbar__logo {
    height: 24px;
    padding-top: 10px;
}

.navbar__buttons {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 8px;
}

.wtsapp-btn {
    padding: 6px 10px;
    border: 0.1px solid white;
}
.contact-btn {
    padding: 6px 14px;
    border: 0.1px solid white;
}

router-link {
    text-decoration: none;
}
@media (max-width: 1100px) {
    .li-btn {
        margin-right: 40px;
    }
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
