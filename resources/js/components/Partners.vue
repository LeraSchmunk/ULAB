<template>
 
    <div>
        <div id="partners" class="container">
            <div class="base__title maintitle">Наши проекты</div>
            <div class="partner_block">
                Внедрение ЛИМС ULAB — это сложный процесс цифровой трансформации компании с целью принятия лучших практик <br>
                и подходов для упрощения рабочих процессов, автоматизации, снижения влияния человеческого
                фактора<br> и общего повышения эффективности работы лаборатории. 
                <br>
                <br>
                <br>
                Уже более 15 лабораторий по всей России успешно внедрили ЛИМС ULAB.
            </div>
            <div id="partnersWrapper">
                <img src="../../../public/img/niistroms.png " alt=" " />
                <img src="../../../public/img/lador.png " alt=" " />
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: "Partners",
};
</script>
<style scoped>
#partners {
    padding-top: -5px;
    background-color: rgba(0, 0, 0, 0.622);
    background-image: url("../../../public/img/partners-bg.png");
    background-repeat: no-repeat;
    background-position: center;
    background-size: 100% 100%;
}

.base__title{
    width: 100%;
    text-align: center;
    padding-bottom: 40px;
}

#partnersWrapper {
    padding-top: 150px;
    padding-bottom: 200px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.partner_block{
    font-size: 20px;
}

.partners-card {
    /* width: 440px; */
    border: 1px solid #ffeeb42a;
    padding: 27px;
}

.maintitle{
    font-size: 54px;
    width: 380px;
    font-weight: 600;
    line-height: 1.1;
}

#partnersWrapper img {
    /* width: 400px; */
    /* text-align: center; */
    margin: 0 auto;
    margin-bottom: 32px;
    width: 70%;
}

.partners-title {
    /* font-size: 20px; */
    /* color:  #FFEEB4; */
    font-weight: 600;
    text-align: justify;
    padding-bottom: 24px;
    /* height: 70px; */
}

.card-list {
    list-style-type: disc;
    line-height: 1.7;
}
.titleMonserrat {
    width: 900px;
    padding-right: 50px;
}

.subtitleRoboto {
    width: 686px;
}
.slider {
    display: flex;
    justify-content: space-between;
    align-items: end;
}
.sliders {
    width: 330px;
    text-align: right;
}
.companies {
    display: flex;
    justify-content: space-between;
    gap: 8px;
    padding-top: 60px;
}
.company-block {
    background-color: #e9ecf0;
    border-radius: 24px;
    height: 221px;
    width: 274px;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    padding-left: 20px;
}

.company-block img {
    height: 64px;
    width: 64px;
}
.company-name {
    font-family: Montserrat, sans-serif;
    font-size: 16px;
    font-weight: 600;
}
.company-description {
    font-family: Roboto, sans-serif;
    font-size: 16px;
}
@media (max-width: 1100px) {
    .partners-title {
        height: px;
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
