<template>
  <div id="app">
    <Header></Header>
    <Baner></Baner>
    <Demo></Demo>
    <Tabs></Tabs>
    <Base></Base>
    <DemoSecond></DemoSecond>
    <Keys></Keys>
    <Work></Work>
    <Differences></Differences>
    <!-- <Projects></Projects> -->
    <Prices></Prices>

    <!-- <BanerLower></BanerLower> -->
    <Footer></Footer>
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
export default {
    name: "App",
    components: {
      Header, Baner, Tabs, Base, Slider, Projects, Demo, BanerLower, Footer, DemoSecond, Keys, Work, Differences, Prices
    }}
</script>
<style>
#app{
  background-image: url('../../public/img/background.png');
  background-repeat: no-repeat;
  background-position:top center;
  background-size: 100%;
}



</style>