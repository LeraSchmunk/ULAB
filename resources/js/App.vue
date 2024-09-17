<template>

    <!-- <router-view /> -->
    <Header @showConnection="showConnectionModal"></Header>


    <About @showDemo="showDemoModal"></About>
    <Demo @showDemo="showDemoModal" @showPossibilities="showPossibilitiesModal"></Demo>
    <Tabs></Tabs>
    <Base></Base>
    <DemoSecond @showDemo="showDemoModal" @showModules="showModulesModal"></DemoSecond>
    <Partners></Partners>
    <Work @showDemo="showDemoModal"></Work>
    <Unique>Уникальность</Unique>

    <!-- <Projects></Projects> -->
    <Prices @showPrice="showPriceModal"></Prices>

    <!-- <BanerLower></BanerLower> -->

    <Footer @showConnection="showConnectionModal"></Footer>


    <ModalDemo v-if="showDemoVisible" @closeDemo="closeDemoModal"></ModalDemo>
    <ModalPossibilities v-if="showPossibilitiesVisible"
                        @closePossibilities="closePossibilitiesModal"></ModalPossibilities>
    <ModalModules v-if="showModulesVisible" @closeModules="closeModulesModal"></ModalModules>
    <ModalConnection v-if="showConnectionVisible" @closeConnection="closeConnectionModal"></ModalConnection>
    <ModalPrice v-if="showPriceVisible" @closePrice="closePriceModal"></ModalPrice>


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
import ModalDemo from './components/ModalDemo.vue';
import ModalPossibilities from './components/ModalPossibilities.vue';
import ModalModules from './components/ModalModules.vue';
import ModalConnection from './components/ModalConnection.vue';
import ModalPrice from './components/ModalPrice.vue';
import axios from "axios";


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
        ModalPrice
    },

    emits: ['click1', 'click2'],

    data() {

        return {
            showDemoVisible: false,
            showPossibilitiesVisible: false,
            showModulesVisible: false,
            showConnectionVisible: false,
            showPriceVisible: false
        }
    },
    methods: {
        showDemo() {
            this.showDemoVisible = true
            console.log('dghskl')
        },

        closeDemoModal() {
            this.showDemoVisible = false
        },
        showDemoModal() {
            this.showDemoVisible = true,
                console.log('djkhfk')
        },
        closePossibilitiesModal() {
            this.showPossibilitiesVisible = false
        },
        showPossibilitiesModal() {
            this.showPossibilitiesVisible = true
        },
        showModulesModal() {
            this.showModulesVisible = true
        },
        closeModulesModal() {
            this.showModulesVisible = false
        },
        showConnectionModal() {
            this.showConnectionVisible = true
        },
        closeConnectionModal() {
            this.showConnectionVisible = false
        },
        showPriceModal() {
            this.showPriceVisible = true
        },
        closePriceModal() {
            this.showPriceVisible = false
        },
        setUserIp() {
            axios.get('/getLog')
        }
    },
    beforeMount() {
        this.setUserIp()
    }
}
</script>
<style>
#app {
    background-image: url('../../public/img/background.png');
    background-repeat: no-repeat;
    background-position: top center;
    background-size: 100%;
}


</style>
