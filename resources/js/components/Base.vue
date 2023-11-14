<template>
    <div>
        <div class="container" id="base">
            <div class="base">
                <div class="base__title maintitle">Базовый функционал ULAB</div>
                <div class="base__ladder">
                    <div class="step step-active">
                        Управление <br />взаимоотношениями с <br />клиентами
                    </div>
                    <div class="base__ladder-second">
                        <div class="step">Нормативная <br />документация</div>
                        <div class="step">Учет оборудования</div>
                    </div>
                    <div class="base__ladder-third">
                        <div class="step">
                            Контроль условий проведения испытаний
                        </div>
                        <div class="step">
                            Формирование <br />
                            документации
                        </div>
                    </div>
                    <div class="base__ladder-forth">
                        <div class="step">
                            Интеграция с <br />внешними системами
                        </div>
                        <div class="step">
                            Формирование <br />
                            отчетности
                        </div>
                        <div class="step">
                            Личный кабинет <br />
                            заказчика
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Base",
};
</script>
<style scoped>
#base {
    margin-bottom: 250px;
    padding-top: 130px;
    margin-top: 300px;
}

.base {
    color: white !important;
    display: flex;
    flex-direction: column;
}
.base__title {
    color: #ffeeb4;
    width: 576px;
}
.base__ladder {
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    margin-top: 250px;
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
    #base {
        margin-top: 100px;
    }
}
@media (max-width: 1700px) {
    .base__ladder {
        margin-top: 150px;
    }
}
@media (max-width: 1650px) {
    #base {
        margin-top: 0px;
    }
}
@media (max-width: 1500px) {
    #base {
        padding-top: 100px;
    }
}

@media (max-width: 1450px) {
    .step {
        padding: 20px 10px;
    }
}
@media (max-width: 1360px) {
    .step {
        width: 260px;
    }
}
@media (max-width: 1250px) {
    .step {
        width: 200px;
    }
}
@media (max-width: 1150px) {
    .step {
        width: 150px;
    }
}
@media (max-width: 1200px) {
    .step {
        width: 200px;
    }
    .base__ladder {
        margin-top: 200px;
    }
}

@media (max-width: 1000px) {
    .base__ladder {
        margin-top: 100px;
    }

    #base {
        padding-top: 100px;
        margin-bottom: 150px;
    }
}

@media (max-width: 950px) {
    .step {
        width: 170px;
    }
    #base {
        padding-top: 180px;
        margin-bottom: 50px;
    }
}
@media (max-width: 850px) {
    .step {
        width: 150px;
    }
}
@media (max-width: 800px) {
    .base__ladder {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 90px 10px;
    }
    .base__title {
        width: 100%;
    }
    .step {
        width: 300px;
    }
}
@media (max-width: 650px) {
    .step {
        width: 200px;
    }
}
@media (max-width: 480px) {
    .step {
        width: 140px;
        font-size: 13px;
    }
}
</style>
