<template>
    <!-- <router-view /> -->
    <Header @showConnection="showConnectionModal"></Header>
    <About @showDemo="showDemoModal"></About>
    <Demo
        @showDemo="showDemoModal"
        @showPossibilities="showPossibilitiesModal"
    ></Demo>
    <Tabs></Tabs>
    <Base></Base>
    <DemoSecond
        @showDemo="showDemoModal"
        @showModules="showModulesModal"
    ></DemoSecond>
    <Partners></Partners>
    <Work @showDemo="showDemoModal"></Work>
    <Unique>Уникальность</Unique>
    <Prices @showPrice="showPriceModal"></Prices>
    <Footer @showConnection="showConnectionModal"></Footer>
    <ModalDemo
        @sendDemo="sendDemoClose"
        v-if="showDemoVisible"
        @closeDemo="closeDemoModal"
    ></ModalDemo>
    <ModalPossibilities
        @sendPossibilities="sendPossibilitiesClose"
        v-if="showPossibilitiesVisible"
        @closePossibilities="closePossibilitiesModal"
    ></ModalPossibilities>
    <ModalModules
        @sendModules="sendModulesClose"
        v-if="showModulesVisible"
        @closeModules="closeModulesModal"
    ></ModalModules>
    <ModalConnection
        v-if="showConnectionVisible"
        @closeConnection="closeConnectionModal"
        @sendContacts="sendContactsClose"
    ></ModalConnection>
    <ModalPrice
        v-if="showPriceVisible"
        @closePrice="closePriceModal"
        @sendPrice="sendPriceClose"
    ></ModalPrice>
</template>
<script>
import Header from "./components/Header.vue";
import About from "./components/About.vue";
import Tabs from "./components/Tabs.vue";
import Base from "./components/Base.vue";
import DemoSecond from "./components/DemoSecond.vue";
import Partners from "./components/Partners.vue";
import Work from "./components/Work.vue";
import Unique from "./components/Unique.vue";
import Prices from "./components/Prices.vue";
import Demo from "./components/Demo.vue";
import Footer from "./components/Footer.vue";
import ModalDemo from "./components/ModalDemo.vue";
import ModalPossibilities from "./components/ModalPossibilities.vue";
import ModalModules from "./components/ModalModules.vue";
import ModalConnection from "./components/ModalConnection.vue";
import ModalPrice from "./components/ModalPrice.vue";

export default {
    name: "App",
    components: {
        Header,
        About,
        Tabs,
        Base,
        Demo,
        Footer,
        DemoSecond,
        Partners,
        Work,
        Unique,
        Prices,
        ModalDemo,
        ModalPossibilities,
        ModalModules,
        ModalConnection,
        ModalPrice,
    },

    emits: ["click1", "click2", "click3", "click4", "click5", "click6"],

    data() {
        return {
            showDemoVisible: false,
            showPossibilitiesVisible: false,
            showModulesVisible: false,
            showConnectionVisible: false,
            showPriceVisible: false,
        };
    },
    methods: {
        showDemo() {
            this.showDemoVisible = true;
            console.log("dghskl");
        },

        closeDemoModal() {
            this.showDemoVisible = false;
        },
        showDemoModal() {
            (this.showDemoVisible = true), console.log("djkhfk");
        },
        closePossibilitiesModal() {
            this.showPossibilitiesVisible = false;
        },
        showPossibilitiesModal() {
            this.showPossibilitiesVisible = true;
        },
        showModulesModal() {
            this.showModulesVisible = true;
        },
        closeModulesModal() {
            this.showModulesVisible = false;
        },
        showConnectionModal() {
            this.showConnectionVisible = true;
        },
        closeConnectionModal() {
            this.showConnectionVisible = false;
        },
        showPriceModal() {
            this.showPriceVisible = true;
        },
        closePriceModal() {
            this.showPriceVisible = false;
        },
        sendContactsClose() {
            this.showConnectionVisible = false;
            console.log("закрыть");
        },
        sendDemoClose() {
            this.showDemoVisible = false;
        },
        sendModulesClose() {
            this.showModulesVisible = false;
        },
        sendPossibilitiesClose() {
            this.showPossibilitiesVisible = false;
        },
        sendPriceClose() {
            this.showPriceVisible = false;
        },
    },
};
</script>
<style>
#app {
    background-image: url("../../public/img/background.png");
    background-repeat: no-repeat;
    background-position: top center;
    background-size: cover;
    background-color: #1b1a1a;
}
@media (max-width: 1000px) {
    #app {
        background-size: 130%;
    }
}
@media (max-width: 800px) {
    #app {
        background-size: 160%;
    }
}
@media (max-width: 600px) {
    #app {
        background-size: 200%;
    }
}
@media (max-width: 500px) {
    #app {
        background-size: 250%;
    }
}
@media (max-width: 480px) {
    #app {
        background-size: 300%;
    }
}
</style>
