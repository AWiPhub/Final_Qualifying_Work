<template>
  <a-layout-sider v-model:collapsed="collapsed" collapsible>
    <a-menu theme="dark" v-model:selectedKeys="selectedKeys" mode="inline">
      <a-menu-item v-for="item of menu" :key="item.key">
        <component :is="item.icon"></component>
        <span>{{ item.title }}</span>
      </a-menu-item>
    </a-menu>
  </a-layout-sider>
</template>

<script lang="ts">
import { PieChartOutlined } from "@ant-design/icons-vue";
import { defineComponent, ref } from "vue";

export default defineComponent({
  components: {
    PieChartOutlined,
  },
  setup() {
    const menu = [
      {
        key: "1",
        title: "Поселения",
        icon: "PieChartOutlined",
      },
      {
        key: "2",
        title: "Нац. проекты",
        icon: "PieChartOutlined",
      },
      {
        key: "3",
        title: "Новости кадров",
        icon: "PieChartOutlined",
      },
      {
        key: "4",
        title: "Администрация",
        icon: "PieChartOutlined",
      },
      {
        key: "5",
        title: "Страница приветствия",
        icon: "PieChartOutlined",
      },
    ];
    return {
      menu,
      collapsed: ref(false),
      selectedKeys: ref(["1"]),
    };
  },
});
</script>

<style></style>
