<template>
  <div id="app">
    <Header></Header>
    <Baner @showDemo="showDemoModal"></Baner>
    <Demo @showDemo="showDemoModal" @showPossibilities="showPossibilitiesModal" ></Demo>
    <Tabs></Tabs>
    <Base></Base>
    <DemoSecond @showDemo="showDemoModal" @showModules="showModulesModal" ></DemoSecond>
    <Keys></Keys>
    <Work @showDemo="showDemoModal"></Work>
    <Differences></Differences>
    <!-- <Projects></Projects> -->
    <Prices @showDemo="showDemoModal"></Prices>

    <!-- <BanerLower></BanerLower> -->
    <Footer></Footer>
    <ModalDemo v-if="showDemoVisible" @closeDemo="closeDemoModal"></ModalDemo>
    <ModalPossibilities v-if="showPossibilitiesVisible" @closePossibilities="closePossibilitiesModal"></ModalPossibilities>
    <ModalModules v-if="showModulesVisible" @closeModules="closeModulesModal"></ModalModules>
  </div>
</template>
<script>
import Header from "./components/Header.vue";
import Baner from "./components/Baner.vue";
import Tabs from "./components/Tabs.vue";
import Base from "./components/Base.vue";
import DemoSecond from "./components/DemoSecond.vue";
import Keys from "./components/Keys.vue";
import Work from "./components/Work.vue";
import Differences from "./components/Differences.vue";
import Prices from "./components/Prices.vue";


import Slider from "./components/Keys.vue";
import Projects from "./components/Projects.vue";
import Demo from "./components/Demo.vue";
import BanerLower from "./components/BanerLower.vue";
import Footer from "./components/Footer.vue";
import ModalDemo from './components/ModalDemo.vue';
import ModalPossibilities from'./components/ModalPossibilities.vue';
import ModalModules from'./components/ModalModules.vue';

export default {
    name: "App",
    components: {
      Header, Baner, Tabs, Base, Slider, Projects, Demo, BanerLower, Footer, DemoSecond, Keys, Work, Differences, Prices,
        ModalDemo, ModalPossibilities, ModalModules
    },

    emits: ['click1', 'click2'],

    data () {
      return{
        showDemoVisible:false,
        showPossibilitiesVisible:false,
        showModulesVisible:false,

      }
    },
  methods: {
    showDemo(){
      this.showDemoVisible=true
      console.log('dghskl')
    },

    closeDemoModal(){
      this.showDemoVisible=false
    },
    showDemoModal(){
      this.showDemoVisible=true,
      console.log('djkhfk')
    },
    closePossibilitiesModal(){
      this.showPossibilitiesVisible=false
    },
    showPossibilitiesModal(){
      this.showPossibilitiesVisible=true
    },
    showModulesModal(){
      this.showModulesVisible=true
    },
    closeModulesModal(){
      this.showModulesVisible=false
    },

  }
  }
</script>
<style>
#app{
  background-image: url('../../public/img/background.png');
  background-repeat: no-repeat;
  background-position:top center;
  background-size: 100%;
}



</style>