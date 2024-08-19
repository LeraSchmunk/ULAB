<template>
    <div id="unique">
        <div class="unique container">
            <div class="unique__title">
                <div class="maintitle">Чем мы отличаемся от других LIMS</div>
                <img src="../../../public/img/differences-logo.png" alt="" />
            </div>
            <div class="unique__column">
                <div class="column1">
                    <li>Полная интеграция с ФГИС ФСА по API</li>
                    <br />
                    <li>Интеграция с 1С и 1С-Битрикс24</li>
                    <br />
                    <li>Мощный модуль CRM</li>
                    <br />
                    <li>Облачная версия</li>
                    <br />
                    <li>
                        Разработчики - крупный испытательный центр УралНИИстром
                    </li>
                    <br />
                    <li>Доказанная экономия времени - 30%</li>
                    <br />
                </div>
                <div class="column2">
                    <li>QR-кодирование и защита протоколов от подделки</li>
                    <br />
                    <li>Автоматизированное ведение журналов учета</li>
                    <br />
                    <li>Финансовая статистика</li>
                    <br />
                    <li>
                        Безопасность, гарантированная наличием лицензий ФСТЭК
                    </li>
                    <br />
                    <li>
                        Система на постоянной основе проходит аудит действующих
                        экспертов Росаккредитации
                    </li>
                    <br />
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Unique",
};
</script>
<style scoped>
#unique {
    background-color: rgba(0, 0, 0, 0.622);
    background-image: url("../../../public/img/unique-bg.png");
    background-repeat: no-repeat;
    background-position: center;
    background-size: 100% 100%;
    /* height: 1106px; */
}

.unique {
    padding-bottom: 200px;
    /* padding-top: 50px; */
}

.unique__title {
    display: flex;
    justify-content: space-between;
    align-items: center;
    /* padding-bottom: 100px; */
}
.unique__column {
    display: flex;
    justify-content: space-between;
}

.unique__column div {
    padding-left: 24px;
    border-left: 4px solid #f9b4ff;
    line-height: 1.1;
    /* font-size: 20px; */
    width: 470px;
}

.column2 {
    position: relative;
    top: 65px;
}
.maintitle {
    color: #f9b4ff;
    /* font-size: 48px; */
    width: 590px;
    text-transform: uppercase;
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
/* @media (max-width: 1500px) {
    #unique {
        padding-top: 300px;
    }
}
@media (max-width: 1000px) {
    .unique__column div {
        font-size: 15px;
    }
    #unique {
        padding-top: 100px;
    }
}
@media (max-width: 850px) {
    #unique {
        padding-top: 180px;
    }
    .maintitle {
        font-size: 30px;
    }
}
@media (max-width: 800px) {
    .unique__column {
        display: flex;
        justify-content: space-between;
        gap: 50px;
    }
    .unique__title img {
        width: 130px;
    }
    .unique__title {
        padding-bottom: 60px;
    }
}
@media (max-width: 500px) {
    .maintitle {
        font-size: 30px;
    }
}
@media (max-width: 431px) {
    .unique__column {
        font-size: 10px;
    }
    .unique__column div {
        font-size: 13px;
    }
} */
</style>
