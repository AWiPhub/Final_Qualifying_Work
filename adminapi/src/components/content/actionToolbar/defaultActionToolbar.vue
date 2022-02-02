<template>
  <a-row type="flex" justify="space-between">
    <a-space :size="10">
      <a-button type="primary">
        <template #icon><PlusOutlined /></template>
        Добавить
      </a-button>

      <a-button type="primary" :disabled="true">
        <template #icon><EditOutlined /></template>
        Редактировать
      </a-button>

      <a-button type="primary" :disabled="true">
        <template #icon><CopyOutlined /></template>
        Копировать
      </a-button>

      <a-button type="primary" danger :disabled="true">
        <template #icon><DeleteOutlined /></template>
        Удалить
      </a-button>
    </a-space>

    <a-space :size="10">
      <a-dropdown placement="bottomRight">
        <template #overlay>
          <div
            :style="{
              margin: '6px',
              padding: '6px',
              background: '#fff',
            }"
          >
            <template v-for="column of columns" :key="column.dataIndex">
              <a-checkbox v-model:checked="checked">
                {{ column.title }}
              </a-checkbox>
            </template>
          </div>
        </template>
        <a-button>
          <template #icon><EyeOutlined /></template>
          Видимость столбцов
          <DownOutlined />
        </a-button>
      </a-dropdown>

      <a-dropdown placement="bottomRight">
        <template #overlay>
          <div
            :style="{
              margin: '6px',
              padding: '6px',
              background: '#fff',
              width: '300px',
            }"
          >
            <template v-for="column of columns" :key="column.dataIndex">
              <a-input :placeholder="column.title" v-model:value="test">
                <template #suffix>
                  <a-tooltip title="Extra information">
                    <info-circle-outlined style="color: rgba(0, 0, 0, 0.45)" />
                  </a-tooltip>
                </template>
              </a-input>
            </template>
            <a-space :size="10" :style="{ marginTop: '10px' }">
              <a-button type="primary">
                <template #icon><PlusOutlined /></template>
                OK
              </a-button>
              <a-button type="primary">
                <template #icon><ClearOutlined /></template>
                Очистить
              </a-button>
            </a-space>
          </div>
        </template>
        <a-button>
          <template #icon><FilterOutlined /></template>
          Фильтрация
          <DownOutlined />
        </a-button>
      </a-dropdown>
    </a-space>
  </a-row>
</template>

<script lang="ts">
import {
  PlusOutlined,
  EditOutlined,
  CopyOutlined,
  DeleteOutlined,
  FilterOutlined,
  DownOutlined,
  InfoCircleOutlined,
  ClearOutlined,
  EyeOutlined,
} from "@ant-design/icons-vue";

import { defineComponent, ref } from "vue";

import useDatatable from "../table/use-datatable";

export default defineComponent({
  components: {
    PlusOutlined,
    EditOutlined,
    CopyOutlined,
    DeleteOutlined,
    FilterOutlined,
    DownOutlined,
    InfoCircleOutlined,
    ClearOutlined,
    EyeOutlined,
  },
  setup() {
    const test = ref("");
    const checked = ref(false);

    return {
      test,
      checked,
      ...useDatatable(),
    };
  },
});
</script>
