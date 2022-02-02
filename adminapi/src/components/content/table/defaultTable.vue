<template>
  <a-table :columns="columns" :data-source="data" @change="onChange" />
</template>

<script lang="ts">
import { defineComponent } from "vue";

import useDatatable from "./use-datatable";

import { PaginationType } from "@/components/types/PaginationType";
import { FilterType } from "@/components/types/FilterType";
import { ColumnType } from "@/components/types/ColumnType";

export default defineComponent({
  setup() {
    const onChange = (
      pagination: PaginationType,
      filters: FilterType[],
      sorter: ColumnType
    ) => {
      console.log("params", pagination, filters, sorter);
    };
    return {
      onChange,
      ...useDatatable(),
    };
  },
});
</script>
