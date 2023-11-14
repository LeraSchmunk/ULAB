<template>
    <div>
        <div class="container" id="work">
            <div class="work">
                <img src="../../../public/img/logo.png" alt="" />
                <div class="maintitle">
                    Порядок проведения работ по внедрению ULAB
                </div>
                <button class="btns baner__btn" @click="showDemo">
                    Запросить демонстрацию
                </button>
            </div>
            <div class="work__scheme">
                <div class="work-titel-top">
                    <div class="work-titel work01">
                        <div class="number">01</div>
                        Демонстрация системы
                    </div>
                    <div class="work-titel work03">
                        <div class="number">03</div>
                        Формирование предложения по внедрению ULAB
                    </div>
                    <div class="work-titel work05">
                        <div class="number">05</div>
                        Внедрение с последующим обновлением системы, добавление
                        новых модулей, клиентская поддержка 24/7
                    </div>
                </div>
                <img src="../../../public/img/scheme.png" alt="" />
                <div class="work-titel-bottom">
                    <div class="work-titel work02">
                        Сбор данных о лаборатории
                        <div class="number">02</div>
                    </div>
                    <div class="work-titel work04">
                        Заключение договора и формирование технического задания
                        <div class="number">04</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Work",
    methods: {
        showDemo() {
            this.$emit("showDemo");
        },
    },
};
</script>
<style scoped>
#work {
    margin-bottom: 670px;
    padding-top: 100px;
}

.container {
    margin: 0 auto;
    max-width: 90%;
}

.work {
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding-bottom: 82px;
}
.maintitle {
    width: 780px;
    font-size: 48px;
    text-align: center;
    padding-bottom: 40px;
}
.btns {
    border: 1px solid #ffffff;
    color: #ffffff;
}

.work-titel-top {
    display: flex;
    /* justify-content: space-evenly; */
    /* align-items: flex-start; */
    gap: 117px;
    margin-left: 245px;
}
.work-titel-bottom {
    display: flex;
    align-items: flex-end;
    gap: 129px;
    margin-left: 480px;
}
.work__scheme {
    position: relative;
}

.work__scheme img {
    position: relative;
    margin: 50px auto 50px;
    display: block;
}

.number {
    font-size: 24px;
    color: #ffffff40;
    padding: 36px 0;
    font-weight: 600;
}
.work-titel {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 291px;
    text-align: center;
}
.work01 {
    /* position: absolute; */
    left: 171px;
}
.work03 {
    /* position: absolute; */
    left: 569px;
}
.work05 {
    /* position: absolute; */
    margin-left: 65px;
}
.work02 {
    /* position: absolute; */
    left: 394px;
}
.work04 {
    /* position: absolute; */
    left: 815px;
}

@media (max-width: 1750px) {
    .work-titel-top {
        gap: 120px;
        margin-left: 180px;
    }
    .work-titel-bottom {
        gap: 120px;
        margin-left: 400px;
    }
}

@media (max-width: 1650px) {
    .work-titel-top {
        gap: 110px;
        margin-left: 140px;
    }
    .work-titel-bottom {
        gap: 120px;
        margin-left: 350px;
    }
}
@media (max-width: 1550px) {
    .work-titel-top {
        gap: 110px;
        margin-left: 100px;
    }
    .work-titel-bottom {
        gap: 120px;
        margin-left: 300px;
    }
}

@media (max-width: 1486px) {
    .work__scheme img {
        width: 1300px;
    }
    .work-titel-top {
        gap: 70px;
        margin-left: 80px;
    }
    .work-titel-bottom {
        gap: 70px;
        margin-left: 300px;
    }
}
@media (max-width: 1450px) {
    .work {
        padding-bottom: 120px;
    }
}
@media (max-width: 1360px) {
    .work__scheme img {
        width: 1200px;
    }
    .work-titel-top {
        gap: 50px;
        margin-left: 50px;
    }
    .work-titel-bottom {
        gap: 70px;
        margin-left: 250px;
    }
}
@media (max-width: 1260px) {
    .work__scheme img {
        width: 1100px;
    }
    .work-titel-top {
        gap: 20px;
        margin-left: 50px;
    }
    .work-titel-bottom {
        gap: 30px;
        margin-left: 250px;
    }
}
#work {
    margin-bottom: 100px;
}
@media (max-width: 1150px) {
    .work__scheme img {
        width: 990px;
    }
    .work-titel-top {
        gap: 10px;
        margin-left: 20px;
    }
    .work-titel-bottom {
        gap: 30px;
        margin-left: 170px;
    }
}

@media (max-width: 1060px) {
    .work__scheme img {
        width: 800px;
        margin: 20px auto 20px;
    }

    .work-titel-top {
        gap: 30px;
        margin-left: 80px;
    }
    .work-titel-bottom {
        gap: 60px;
        margin-left: 200px;
    }
    .work__scheme {
        font-size: 12px;
    }
    .work-titel {
        width: 200px;
    }
}
#work {
    margin-bottom: 60px;
}
.number {
    padding: 20px 0;
}

@media (max-width: 1000px) {
    .work-titel-top {
        gap: 10px;
        margin-left: 50px;
    }
    .work-titel-bottom {
        gap: 40px;
        margin-left: 170px;
    }
}
@media (max-width: 850px) {
    .maintitle {
        font-size: 30px;
    }
    #work {
        padding-top: 180px;
    }
}
@media (max-width: 850px) {
    .work__scheme img {
        width: 700px;
    }
    .work-titel-top {
        gap: 30px;
        margin-left: 60px;
    }
    .work-titel-bottom {
        gap: 80px;
        margin-left: 140px;
    }
    .work-titel {
        width: 150px;
    }
}
@media (max-width: 800px) {
    .maintitle {
        width: 100%;
    }
    .work__scheme img {
        width: 500px;
    }
    .work05 {
        /* position: absolute; */
        margin-left: 0px;
    }
    .work-titel-top {
        gap: 10px;
        margin-left: 60px;
    }
    .work-titel-bottom {
        gap: 0px;
        margin-left: 150px;
    }
}
@media (max-width: 585px) {
    .work__scheme img {
        width: 400px;
    }
    .work05 {
        /* position: absolute; */
        margin-left: 0px;
    }
    .work-titel-top {
        gap: 10px;
        margin-left: 20px;
    }
    .work-titel-bottom {
        gap: 0px;
        margin-left: 80px;
    }
}

@media (max-width: 431px) {
    .work__scheme img {
        width: 300px;
    }
    .work-titel-bottom {
        gap: 0px;
        margin-left: 40px;
    }
}
</style>
