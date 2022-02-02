<template>
  <div>
    <div :style="{ padding: '24px', background: '#fff', minHeight: '60px' }">
      <DefaultActionToolbar />
    </div>
    <div
      :style="{
        margin: '12px 0',
        padding: '12px',
        background: '#fff',
      }"
    >
      <DefaultTable />
      <ModalAdd />
      <ModalEdit />
      <ModalDelete />
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

import DefaultActionToolbar from "./actionToolbar/defaultActionToolbar.vue";

import DefaultTable from "./table/defaultTable.vue";

import ModalAdd from "./modal/ModalAdd.vue";
import ModalEdit from "./modal/ModalEdit.vue";
import ModalDelete from "./modal/ModalDelete.vue";

export default defineComponent({
  props: ["pageId"],
  components: {
    DefaultActionToolbar,
    DefaultTable,
    ModalAdd,
    ModalEdit,
    ModalDelete,
  },
  setup(props) {},
});
</script>
