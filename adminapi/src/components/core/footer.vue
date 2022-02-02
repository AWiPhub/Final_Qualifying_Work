<template>
  <a-layout-footer style="text-align: center">
    UGRASU ©2022-{{ year }} by Karbyshev O.S.
  </a-layout-footer>
</template>

<script lang="ts">
import { computed, defineComponent } from "vue";

import moment from "moment";

export default defineComponent({
  setup() {
    const year = computed(() => moment().format("YYYY"));

    return {
      year,
    };
  },
});
</script>

<style></style>
