<template>
    <div id="main">
        <!-- <img src="../../../public/img/about-background.png" alt=""> -->
        <div class="baner container">
            <div class="baner-text">
                <div class="baner__title">
                    Автоматизируйте лабораторию легко!
                </div>
                <div class="baner__subtitle">
                    Первая лабораторная система, полностью интегрированная с
                    ФГИС Росаккредитации
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
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "About",
    data() {
        return {};
    },
    methods: {
        showDemo() {
            this.$emit("showDemo");
        },
    },
};
</script>
<style scoped>
#about {
    margin-bottom: 250px;
    padding-top: 150px;
}

.baner {
    padding-top: 150px;
}

.baner-text {
    text-align: center;
}
.baner__title {
    font-weight: 800;
    font-size: 72px;
    text-transform: uppercase;
    margin: 100px 0;
}
.baner__subtitle {
    font-size: 24px;
    font-weight: 400;
    text-align: center;
    margin: 100px 0;
    width: 690px;
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

.about {
    color: white !important;
    display: grid;
    grid-template-columns: 1fr 1fr;
}

.about__subtitle {
    width: 651px;
    line-height: 1.3em;
}

.about__title {
    color: #ffeeb4;
}

.baner__btn {
    color: black;
}

@media (max-width: 1810px) {
    .baner__btn {
        margin-bottom: 400px;
    }
}
@media (max-width: 1600px) {
    .baner__btn {
        margin-bottom: 300px;
    }
}
@media (max-width: 1500px) {
    .baner__btn {
        margin-bottom: 200px;
    }
}
@media (max-width: 1100px) {
    .about__subtitle {
        width: 551px;
        line-height: 1.3em;
    }
}
@media (max-width: 1050px) {
    .baner__title {
        font-size: 50px;
        margin: 50px 0;
    }
    .baner__subtitle {
        font-size: 20px;
        margin: 50px 0;
        width: 490px;
        margin-left: auto;
        margin-right: auto;
        line-height: 1.5;
    }
    .baner__btn {
        margin-bottom: 450px;
    }
}
@media (max-width: 1000px) {
    .baner__btn {
        margin-bottom: 300px;
    }
}

@media (max-width: 985px) {
    .baner__btn {
        margin-bottom: 200px;
    }
    #about {
        padding-top: 180px;
        margin-bottom: 20px;
    }
    .about__subtitle {
        width: 350px;
    }
}
@media (max-width: 850px) {
    .baner__btn {
        margin-bottom: 100px;
    }
    #about {
        padding-top: 180px;
        margin-bottom: 20px;
    }
    .about__subtitle {
        width: 100%;
        padding-top: 20px;
    }
    .about {
        display: flex;
        flex-direction: column;
    }
}

@media (max-width: 800px) {
    .baner__title {
        font-size: 40px;
        margin: 50px 0;
    }
    #about {
        padding-top: 200px;
        margin-bottom: 20px;
    }
}
@media (max-width: 600px) {
    #about {
        padding-top: 230px;
    }
}
@media (max-width: 585px) {
    .baner__title {
        font-size: 30px;
        margin: 50px 0;
    }
    #about {
        padding-top: 300px;
        margin-bottom: 20px;
    }
    .baner__subtitle {
        font-size: 18px;
        width: 100%;
    }
}
@media (max-width: 480px) {
    .baner__title {
        font-size: 30px;
        margin: 50px 0;
    }
    #about {
        padding-top: 400px;
        margin-bottom: 20px;
    }
    .baner__subtitle {
        font-size: 18px;
        width: 100%;
    }
    .about__title {
        width: 200px;
    }
}
</style>
