<template>
    <div id="footer">
        <div class="navbar container">
            <div class="navbar__logo btnBlue">
                <router-link
                    :to="{ name: 'Home', hash: '#home' }"
                    class="li-btn"
                    ><img src="../../../public/img/logo.png" alt="logo"
                /></router-link>
            </div>
            <div class="navbar__middle">
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
                    <div class="btns wtsapp">
                        <a :href="whatsapp">
                            <button class="btns wtsapp-btn">
                                <img
                                    src="../../../public/img/whatsapp.png"
                                    alt="whatsapp"
                                />
                            </button>
                        </a>
                    </div>
                    <button class="btns contact-btn" @click="showConnection">
                        Связаться
                    </button>
                    <!-- <button class="btns contact-btn">&#64;  i.boldyreva@niistrom.pro</button> -->
                </div>
                <div class="grey">ООО НИИСТРОМ (с) LIMS ULAB 2019-2023</div>
            </div>

            <div class="navbar__end">
                <img src="../../../public/img/qr.png" alt="" />
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Footer",
    data: () => ({
        whatsapp: "https://wa.me/+79966908099",
    }),
    methods: {
        showConnection() {
            this.$emit("showConnection");
        },
    },
};
</script>

<style scoped>
#footer {
    background-color: #242323;
    padding-bottom: 32px;
}

.navbar {
    color: #00000040;
    display: flex;
    justify-content: space-between;
    align-items: start;
    padding-top: 40px;
    padding-bottom: 0;
}

.navbar__list {
    display: flex;
    justify-content: space-between;
    font-size: 14px;
}
.navbar__middle {
    display: flex;
    flex-direction: column;
    text-align: center;
    align-items: center;
}

.li-btn {
    margin-right: 32px;
    text-decoration: none;
    cursor: pointer;
}

.grey {
    color: #eeeeee6b;
    font-size: 14px;
    font-weight: 100;
}

.navbar__buttons {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 45px 0;
}
.navbar__end img {
    display: none;
}

.btns {
    border: 1px solid white;
}
@media (max-width: 1000px) {
    .navbar__end img {
        display: none;
    }
}
@media (max-width: 850px) {
    .navbar {
        flex-direction: column;
        padding-top: 10px;
        align-items: center;
    }
    .navbar__list {
        padding: 30px;
    }
    .li-btn {
        margin-right: 10px;
    }
    .navbar__list {
        padding: 10px;
    }
}
@media (max-width: 585px) {
    .navbar {
        flex-direction: column;
        padding-top: 10px;
    }
    .navbar__list .base,
    .partners,
    .work {
        display: none;
    }
    .navbar__list {
        padding: 30px;
    }
    .li-btn {
        margin-right: 20px;
    }
}
@media (max-width: 430px) {
    .navbar__list {
        padding: 30px 5px;
    }
    .li-btn {
        margin-right: 10px;
    }
}
</style>
