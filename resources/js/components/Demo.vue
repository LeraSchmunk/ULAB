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
            <div class="demo__options">
                <div class="demo-block">
                    <img class="demo-int" src="img/demo-int.png" alt="" />
                    <div class="demo-block__title">Интеграции</div>
                    <div class="demo-block__description mainsubtitle">
                        С более чем 1000 приложений, среди которых 1с и Битрикс
                        24
                    </div>
                </div>
                <div class="demo-block">
                    <img class="demo-int" src="img/demo-gos.png" alt="" />
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
                        24 часа от обращения до начала пработы<br /><br />
                        Личный кабинет заказчика<br /><br />
                        Облачная версия системы<br /><br />
                        Встроенная CRM-Система
                    </div>
                </div>
            </div>
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
    padding-top: 60px;
}

.demo {
    display: flex;
    justify-content: space-between;
    /* gap: 136px; */
    margin-bottom: 384px;
}

.maintitle {
    color: #f9b4ff;
    width: 555px;
    text-transform: uppercase;
    padding-bottom: 40px;
    line-height: 1.1;
    font-weight: 100;
}

.demo__options {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
}
.demo-block {
    border: 1px solid #ffeeb424;
    height: 326px;
    padding: 25px;
    position: relative;
    width: 300px;
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
}

.demo-mob {
    margin-bottom: 20px;
}
.demo-block__description {
    position: absolute;
    bottom: 0;
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
}

@media (max-width: 1810px) {
    .demo {
        margin-bottom: 300px;
    }
}

@media (max-width: 1650px) {
    .demo {
        margin-bottom: 200px;
    }
}
@media (max-width: 1550px) {
    .demo {
        margin-bottom: 100px;
    }
}
@media (max-width: 1353px) {
    .demo-block {
        width: 250px;
    }
}
@media (max-width: 1245px) {
    .demo {
        display: flex;
        flex-direction: column;
    }
    .demo__options {
        display: flex;
    }
    .demo-block {
        height: 400px;
    }
    .demo__subtitle {
        padding-bottom: 20px;
    }
    .demo-mob {
        margin-top: 20px;
        margin-bottom: 40px;
    }
}
@media (max-width: 950px) {
    #demo {
        padding-top: 80px;
    }
    .demo__options {
        display: grid;
        grid-template-columns: 1fr 1fr;
        align-content: center;
    }
    .demo-block {
        width: 90%;
        text-align: center;
        height: 250px;
    }
    .demo-block__description {
        text-align: left;
    }
    .demo-block img {
        display: none;
    }
    .demo {
        margin-bottom: 50px;
    }
}
@media (max-width: 585px) {
    .maintitle {
        width: 100%;
    }
    .mainsubtitle {
        font-size: 14px;
    }
    .demo-block__title {
        font-size: 20px;
    }
    .demo-block {
        padding: 15px;
    }
}

@media (max-width: 430px) {
    .demo__options {
        display: flex;
        flex-direction: column;
    }
}
</style>
