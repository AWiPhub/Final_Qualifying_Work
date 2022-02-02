<template>
  <a-layout style="min-height: 100vh">
    <Sider />
    <a-layout>
      <Header />
      <a-layout-content style="margin: 16px">
        <router-view />
      </a-layout-content>
      <Footer />
    </a-layout>
  </a-layout>
</template>

<script lang="ts">
import { defineComponent } from "vue";

import Header from "./components/core/header.vue";
import Footer from "./components/core/footer.vue";
import Sider from "./components/core/sider.vue";

export default defineComponent({
  components: {
    Sider,
    Header,
    Footer,
  },
  setup() {},
});
</script>

<style>
.site-layout .site-layout-background {
  background: #fff;
}
[data-theme="dark"] .site-layout .site-layout-background {
  background: #141414;
}
</style>
