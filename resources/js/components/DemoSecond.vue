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
    margin-bottom: 250px;
    padding-top: 300px;
}

.demo-second {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 101px;
    align-items: center;
}

.demo-second img {
    padding-left: 120px;
}
.mainsubtitle {
    width: 530px;
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

@media (max-width: 1850px) {
    #demo-second {
        margin-bottom: 250px;
        padding-top: 300px;
    }
}
@media (max-width: 1750px) {
    #demo-second {
        padding-top: 170px;
    }
}
@media (max-width: 1500px) {
    #demo-second {
        padding-top: 120px;
    }
}
@media (max-width: 1060px) {
    .demo-second img {
        padding-left: 40px;
    }
    #demo-second {
        margin-bottom: 100px;
    }
}
@media (max-width: 985px) {
    .mainsubtitle {
        width: 430px;
    }
    .demo-second {
        gap: 50px;
        align-items: center;
    }

    #demo-second {
        margin-bottom: 100px;
    }
}
@media (max-width: 850px) {
    .demo-second {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }
    .mainsubtitle {
        width: 100%;
    }
}

@media (max-width: 850px) {
    .head-img {
        width: 150px;
    }
    #demo-second {
        padding-top: 50px;
    }
}
@media (max-width: 500px) {
    .demo-second img {
        padding-left: 0px;
    }
    .btns {
        margin-right: 40px;
    }
}
</style>
